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
        "url": "<?= base_url()?>admin/slider/datatable",
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
        {
          "data": "id", render(data, type, full, meta) {
            return `<div class="pull-right">
                                <button class="btn btn-success btn-sm" onclick="Detail('${data}')">
                                    <i class="fa fa-list"></i> Detail
                                </button>
              <a href="<?= base_url('stok/masuk/tambah') ?>?edit=${full.id}" class="btn btn-primary btn-sm">
                <i class="fa fa-edit"></i> Ubah
              </a>
              <button class="btn btn-danger btn-sm" onclick="Hapus('${data}')">
                <i class="fa fa-trash"></i> Hapus
              </button>
            </div>`
          }
        }
      ],
      columnDefs: [{
        orderable: false,
        targets: [0]
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
  console.log("tes");
})