let global_dynamic = () => {

}

let alamat;
ClassicEditor
  .create(document.querySelector('#alamat'))
  .then(editor => {
    alamat = editor;
  })
  .catch(error => {
    console.error(error);
  });

let lainnya;
ClassicEditor
  .create(document.querySelector('#lainnya'))
  .then(editor => {
    lainnya = editor;
  })
  .catch(error => {
    console.error(error);
  });
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
        "url": "<?= base_url()?>admin/sales/datatable",
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
        { "data": "no_wa" },
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
                      <button  class="btn btn-primary btn-sm" onclick="edit('${data}')">
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
        targets: [0, 4]
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
    form.append('alamat', alamat.getData());
    form.append('lainnya', lainnya.getData());
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/sales/' + ($("#id").val() == "" ? 'insert' : 'update'),
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
    $("#no_wa").val('');
    $("#email").val('');
    alamat.setData('');
    lainnya.setData('');
    $("#formModalLabel").text('Add New');
  })

  $("#delete").click(() => {
    $.ajax({
      method: 'get',
      url: '<?= base_url() ?>admin/sales/delete/' + $("#id-delete").val(),
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

function edit(id) {
  $.ajax({
    method: 'post',
    url: '<?= base_url() ?>admin/sales/get/',
    data: {
      id: id
    },
  }).done((datas) => {
    if (datas.status) {
      const data = datas.data;
      $("#id").val(data.id);
      $("#title").val(data.title);
      $("#status").val(data.status);
      $("#file").val('');
      $("#no_wa").val(data.no_wa);
      $("#email").val(data.email);
      alamat.setData((data.alamat == null) ? '' : data.alamat);
      lainnya.setData((data.lainnya == null) ? '' : data.lainnya);
      $("#formModal").modal('toggle');
      $("#formModalLabel").text('Edit data');
    } else {
      Toast.fire({
        icon: 'error',
        title: 'Gagal Mendapatkan data'
      })
    }
  }).fail(($xhr) => {
    Toast.fire({
      icon: 'error',
      title: 'Gagal Mendapatkan data'
    })
  })
}

function view(datas) {
  const data = datas.dataset;
  $("#modalViewImage").attr('src', `<?= base_url() ?>files/sales/${data.foto}`);
  $("#modalViewImage").attr('alt', data.title);
  $("#modalViewLabel").text(data.title);
  $("#modalView").modal("toggle");
}