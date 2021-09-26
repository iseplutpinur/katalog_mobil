let global_dynamic = () => {

}
$(function () {
  $('#id_produk').select2();
  function dynamic(date_start = null, date_end = null, admin = null) {
    let filter = new Object();
    var groupColumn = 1;
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
        "url": "<?= base_url()?>admin/interior/datatable",
        "data": filter,
        "type": 'POST'
      },
      "processing": true,
      "serverSide": true,
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      "columns": [
        { "data": "foto_produk" },
        { "data": "nama_produk" },
        { "data": "title" },
        { "data": "status_str" },
        {
          "data": "id", render(data, type, full, meta) {
            return `<div class="pull-right">
                        <button class="btn btn-success btn-sm"
                        data-id="${data}"
                        data-foto="${full.foto}"
                        data-title="${full.title}"
                        onclick="view(this)">
                            <i class="fa fa-eye"></i> View
                        </button>
                      <button  class="btn btn-primary btn-sm"
                        data-id="${data}"
                        data-title="${full.title}"
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
      "drawCallback": function (settings) {
        var api = this.api();
        var rows = api.rows({ page: 'current' }).nodes();
        var last = null;

        api.column(groupColumn, { page: 'current' }).data().each(function (group, i) {
          if (last !== group) {
            const foto = api.column(0).data()[i];
            $(rows).eq(i).before(
              `<tr class="group"><td colspan="3">${group}</td><td>
              <button class="btn btn-success btn-sm"
              data-foto="../produk/${foto}"
              data-title="${group}"
              onclick="view(this)">
                  <i class="fa fa-eye"></i> View
              </button>
              </td></tr>`
            );

            last = group;
          }
        });
      },
      columnDefs: [{
        orderable: false,
        targets: [0, 4]
      },
      { "visible": false, "targets": groupColumn }],
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

    $('#dataTable tbody').on('click', 'tr.group', function (ev) {
      var currentOrder = tableUser.order()[0];
      if (ev.target.localName == 'button') {
        return;
      }

      if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
        tableUser.order([groupColumn, 'desc']).draw();
      }
      else {
        tableUser.order([groupColumn, 'asc']).draw();
      }
    });
  }


  dynamic();
  global_dynamic = dynamic;

  $("#formModalAction").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/interior/' + ($("#id").val() == "" ? 'insert' : 'update'),
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

  $("#addNew").click(() => {
    $("#title").val('');
    $("#id").val('');
    $("#status").val(1);
    $("#file").val('');
    $("#file").attr('required', '');
    $("#id_produk").val('').trigger('change');
    $("#formModalLabel").text('Add New');
  })

  $("#delete").click(() => {
    $.ajax({
      method: 'get',
      url: '<?= base_url() ?>admin/interior/delete/' + $("#id-delete").val(),
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
  $("#file").val('');
  $("#id_produk").val(data.id_produk).trigger('change');
  $("#formModal").modal('toggle');
  $("#formModalLabel").text('Edit Foto');
  $("#file").removeAttr('required');
}

function view(datas) {
  const data = datas.dataset;
  $("#modalViewImage").attr('src', `<?= base_url() ?>files/interior/${data.foto}`);
  $("#modalViewImage").attr('alt', data.title);
  $("#modalViewLabel").text(data.title);
  $("#modalView").modal("toggle");
}