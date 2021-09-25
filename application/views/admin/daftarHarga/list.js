let global_dynamic = () => {

}
$(function () {
  function dynamic(date_start = null, date_end = null, admin = null) {
    let filter = new Object();
    filter.not_status_produk = 2;
    if (date_start != null && date_end != null && admin != null) {
      filter.admin = admin;
      filter.date_start = date_start;
      filter.date_end = date_end;
    }
    const table_html = $('#dataTable');
    table_html.dataTable().fnDestroy()
    var tableUser = table_html.DataTable({
      "ajax": {
        "url": "<?= base_url()?>admin/daftarHarga/datatable",
        "data": filter,
        "type": 'POST'
      },
      "processing": true,
      "serverSide": true,
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      "columns": [
        { "data": null },
        { "data": "nama_produk" },
        { "data": "title" },
        { "data": "harga" },
        { "data": "status_str" },
        {
          "data": "id", render(data, type, full, meta) {
            return `<button  class="btn btn-primary btn-sm"
                        data-id="${data}"
                        data-title="${full.title}"
                        data-harga="${full.harga}"
                        data-status="${full.status}"
                        data-id_produk="${full.id_produk}"
                        onclick="edit(this)">
                        <i class="fa fa-edit"></i> Edit
                      </button>
                      <button class="btn btn-danger btn-sm" onclick="remove('${data}')">
                        <i class="fa fa-trash"></i> Delete
                      </button>
                  </div>`
          }
        }
      ],
      columnDefs: [{
        orderable: false,
        targets: [0, 5]
      }],
      order: [
        [1, 'asc']
      ]
    });

    tableUser.on('draw.dt', function () {
      var PageInfo = $(table_html).DataTable().page.info();
      tableUser.column(0, {
        page: 'current'
      }).nodes().each(function (cell, i) {
        cell.innerHTML = i + 1 + PageInfo.start;
      });
    });
  }
  dynamic();
  global_dynamic = dynamic;

  $("#formModalAction").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/daftarHarga/' + ($("#id").val() == "" ? 'insert' : 'update'),
      data: form,
      cache: false,
      contentType: false,
      processData: false,
    }).done((data) => {
      if (data.status) {
        Toast.fire({
          icon: 'success',
          title: 'Data berhasil disimpan'
        })
      } else {
        Toast.fire({
          icon: 'error',
          title: 'Data gagal disimpan'
        })
      }
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal disimpan'
      })
    }).always(() => {
      $('#formModal').modal('toggle');
      dynamic();
    })
  })

  $("#addNewharga").click(() => {
    $("#title").val('');
    $("#id").val('');
    $("#status").val(1);
    $("#file").val('');
    $("#formModalLabel").text('Add New harga');
  })

  $("#delete-harga").click(() => {
    $.ajax({
      method: 'get',
      url: '<?= base_url() ?>admin/daftarHarga/delete/' + $("#id-delete").val(),
      data: null,
    }).done((data) => {
      if (data.status) {
        Toast.fire({
          icon: 'success',
          title: 'Data berhasil dihapus'
        })
      } else {
        Toast.fire({
          icon: 'error',
          title: 'Data gagal dihapus'
        })
      }
      dynamic();
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal dihapus'
      })
    }).always(() => {
      $('#modalremove').modal('toggle');
    })
  });
})

function remove(id) {
  $("#id-delete").val(id);
  $("#modalremove").modal('toggle');
}

function edit(datas) {
  const data = datas.dataset;
  $("#id").val(data.id);
  $("#title").val(data.title);
  $("#status").val(data.status);
  $("#harga").val(data.harga);
  $("#id_produk").val(data.id_produk);
  $("#formModal").modal('toggle');
  $("#formModalLabel").text('Edit harga');
}