let global_dynamic = () => {

}
$(function () {
  function dynamic(date_start = null, date_end = null, admin = null) {
    let filter = null;
    if (date_start != null && date_end != null && admin != null) {
      filter = {
        admin: admin,
        date_start: date_start,
        date_end: date_end,
      }
    }
    const table_html = $('#dataTable');
    table_html.dataTable().fnDestroy()
    var tableUser = table_html.DataTable({
      "ajax": {
        "url": "<?= base_url()?>admin/produk/datatable",
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
                      <a href="<?= base_url() ?>admin/produk/new/${data}" class="btn btn-primary btn-sm" >
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      <button class="btn btn-danger btn-sm" onclick="remove('${data}')">
                        <i class="fa fa-trash"></i> Delete
                      </button>
                  </div>`
          }
        }
      ],
      columnDefs: [{
        orderable: false,
        targets: [0, 3]
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
      url: '<?= base_url() ?>admin/slider/' + ($("#id").val() == "" ? 'insert' : 'update'),
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

  $("#addNewSlider").click(() => {
    $("#title").val('');
    $("#id").val('');
    $("#status").val(1);
    $("#file").val('');
    $("#formModalLabel").text('Add New Slider');
  })

  $("#delete-slider").click(() => {
    $.ajax({
      method: 'get',
      url: '<?= base_url() ?>admin/produk/delete/' + $("#id-delete").val(),
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

function view(datas) {
  alert('Maaf, Fitur dalam masa pengembangan');
  return;
  const data = datas.dataset;
  $("#modalViewImage").attr('src', `<?= base_url() ?>files/home/${data.foto}`);
  $("#modalViewImage").attr('alt', data.title);
  $("#modalViewLabel").text(data.title);
  $("#modalView").modal("toggle");

}