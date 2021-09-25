// Text Editor
let jumbotron_detail;
ClassicEditor
  .create(document.querySelector('#jumbotron_detail'))
  .then(editor => {
    jumbotron_detail = editor;
  })
  .catch(error => {
    console.error(error);
  });

let promo_detail;
ClassicEditor
  .create(document.querySelector('#promo_detail'))
  .then(editor => {
    promo_detail = editor;
  })
  .catch(error => {
    console.error(error);
  });

let informasi_spesifikasi;
ClassicEditor
  .create(document.querySelector('#informasi_spesifikasi'))
  .then(editor => {
    informasi_spesifikasi = editor;
  })
  .catch(error => {
    console.error(error);
  });

let keterangan_pembelian;
ClassicEditor
  .create(document.querySelector('#keterangan_pembelian'))
  .then(editor => {
    keterangan_pembelian = editor;
  })
  .catch(error => {
    console.error(error);
  });


// table
const table_daftar_harga = () => {
  const table_html = $('#table-daftar-harga');
  table_html.dataTable().fnDestroy()
  var tableUser = table_html.DataTable({
    "ajax": {
      "url": "<?= base_url()?>admin/DaftarHarga/datatable",
      "data": {
        id_produk: $("#id").val()
      },
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
      { "data": "harga" },
      { "data": "status_str" },
      {
        "data": "id", render(data, type, full, meta) {
          return `<button  class="btn btn-primary btn-sm"
                      data-id="${data}"
                      data-title="${full.title}"
                      data-status="${full.status}"
                      data-harga="${full.harga}"
                      onclick="edit_daftar_harga(this)">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="remove_daftar_harga('${data}')">
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

const table_eksterior = () => {
  const table_html = $('#table-eksterior');
  table_html.dataTable().fnDestroy()
  var tableUser = table_html.DataTable({
    "ajax": {
      "url": "<?= base_url()?>admin/eksterior/datatable",
      "data": {
        id_produk: $("#id").val()
      },
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
          return `<button class="btn btn-success btn-sm"
          data-id="${data}"
          data-foto="/eksterior/${full.foto}"
          data-title="${full.title}"
          onclick="view(this)">
              <i class="fa fa-eye"></i> View
          </button>
          <button  class="btn btn-primary btn-sm"
                      data-id="${data}"
                      data-title="${full.title}"
                      data-status="${full.status}"
                      data-title_nav="Edit Eksterior"
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

const table_interior = () => {
  const table_html = $('#table-interior');
  table_html.dataTable().fnDestroy()
  var tableUser = table_html.DataTable({
    "ajax": {
      "url": "<?= base_url()?>admin/interior/datatable",
      "data": {
        id_produk: $("#id").val()
      },
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
          return `<button class="btn btn-success btn-sm"
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

const table_warna = () => {
  const table_html = $('#table-warna');
  table_html.dataTable().fnDestroy()
  var tableUser = table_html.DataTable({
    "ajax": {
      "url": "<?= base_url()?>admin/warna/datatable",
      "data": {
        id_produk: $("#id").val()
      },
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
          return `<button class="btn btn-success btn-sm"
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

const table_galeri = () => {
  const table_html = $('#table-galeri');
  table_html.dataTable().fnDestroy()
  var tableUser = table_html.DataTable({
    "ajax": {
      "url": "<?= base_url()?>admin/galeri/datatable",
      "data": {
        id_produk: $("#id").val()
      },
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
          return `<button class="btn btn-success btn-sm"
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

const table_video = () => {
  const table_html = $('#table-video');
  table_html.dataTable().fnDestroy()

  var tableUser = table_html.DataTable({
    "ajax": {
      "url": "<?= base_url() ?>admin/video/datatable",
      "data": {
        id_produk: $("#id").val()
      },
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
          return `<a class="btn btn-success btn-sm" target="_blank" href="${full.url}">
              <i class="fa fa-eye"></i> View
          </a>
          <button  class="btn btn-primary btn-sm"
                      data-id="${data}"
                      data-title="${full.title}"
                      data-url="${full.url}"
                      data-status="${full.status}"
                      onclick="edit_video(this)">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="remove_video('${data}')">
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



$(document).ready(() => {
  // intial table
  table_daftar_harga();
  table_video();
  table_eksterior();

  $("#form-produk").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    form.set('jumbotron_detail', jumbotron_detail.getData());
    form.set('promo_detail', promo_detail.getData());
    form.set('informasi_spesifikasi', informasi_spesifikasi.getData());
    form.set('keterangan_pembelian', keterangan_pembelian.getData());
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/produk/update',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
    }).done((data) => {
      if (data.status) {
        if (data.status) {
          alert("Data berhasil disimpan");
          window.location.reload();
        } else {
          alert("Data gagal disimpan");
        }
      } else {
        alert('Data gagal disimpan: ' + data.message);
      }
    }).fail(($xhr) => {
      alert('Data gagal disimpan');
    })
  })

  // daftar harga
  $("#btn-table-daftar-harga").click(() => {
    $("#formDaftarHarga").modal("toggle");
    $("#formDaftarHargaLabel").text("Tambah Harga");
    $("#daftar_harga-id").val('');
    $("#daftar_harga-title").val('');
    $("#daftar_harga-harga").val('');
    $("#daftar_harga-status").val('1');
  })

  $("#formDaftarHargaAction").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/daftarHarga/' + ($("#daftar_harga-id").val() == "" ? 'insert' : 'update'),
      data: form,
      cache: false,
      contentType: false,
      processData: false,
    }).done((data) => {
      if (data.status) {
        alert("Data berhasil disimpan");
      } else {
        alert("Data gagal disimpan");
      }
    }).fail(($xhr) => {
      alert('Data gagal disimpan');
    }).always(() => {
      $('#formDaftarHarga').modal('toggle');
      table_daftar_harga();
    })
  })

  $("#delete-daftar-harga").click(() => {
    $.ajax({
      method: 'get',
      url: '<?= base_url() ?>admin/daftarHarga/delete/' + $("#id-delete-daftar-harga").val(),
      data: null,
    }).done((data) => {
      if (data.status) {
        alert("Data berhasil dihapus");
      } else {
        alert("Data gagal dihapus");
      }
      table_daftar_harga();
    }).fail(($xhr) => {
      alert('Data gagal dihapus');
    }).always(() => {
      $('#modalremove').modal('toggle');
    })
  });

  // video
  $("#btn-table-video").click(() => {
    $("#formVideo").modal("toggle");
    $("#formVideoLabel").text("Tambah Video");
    $("#video-id").val('');
    $("#video-title").val('');
    $("#video-url").val('');
    $("#video-status").val('1');
  })

  $("#formVideoAction").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/Video/' + ($("#video-id").val() == "" ? 'insert' : 'update'),
      data: form,
      cache: false,
      contentType: false,
      processData: false,
    }).done((data) => {
      if (data.status) {
        alert("Data berhasil disimpan");
      } else {
        alert("Data gagal disimpan");
      }
    }).fail(($xhr) => {
      alert('Data gagal disimpan');
    }).always(() => {
      $('#formVideo').modal('toggle');
      table_video();
    })
  })

  $("#delete-video").click(() => {
    $.ajax({
      method: 'get',
      url: '<?= base_url() ?>admin/Video/delete/' + $("#id-delete-video").val(),
      data: null,
    }).done((data) => {
      if (data.status) {
        alert("Data berhasil dihapus");
      } else {
        alert("Data gagal dihapus");
      }
      table_video();
    }).fail(($xhr) => {
      alert('Data gagal dihapus');
    }).always(() => {
      $('#modalremove').modal('toggle');
    })
  });

  // foto tambah

});

// daftar harga
const remove_daftar_harga = (id) => {
  $("#id-delete-daftar-harga").val(id);
  $("#daftarHargamodalremove").modal('toggle');
};

function edit_daftar_harga(datas) {
  const data = datas.dataset;
  $("#daftar_harga-id").val(data.id);
  $("#daftar_harga-title").val(data.title);
  $("#daftar_harga-status").val(data.status);
  $("#daftar_harga-harga").val(data.harga);
  $("#formDaftarHarga").modal("toggle");
  $("#formDaftarHargaLabel").text("Edit Harga");
}

// video
const remove_video = (id) => {
  $("#id-delete-video").val(id);
  $("#Videomodalremove").modal('toggle');
};

function edit_video(datas) {
  const data = datas.dataset;
  $("#video-id").val(data.id);
  $("#video-title").val(data.title);
  $("#video-status").val(data.status);
  $("#video-url").val(data.url);
  $("#formVideo").modal("toggle");
  $("#formVideoLabel").text("Edit Url");
}

function view(datas) {
  const data = datas.dataset;
  $("#modalViewImage").attr('src', `<?= base_url() ?>files/${data.foto}`);
  $("#modalViewImage").attr('alt', data.title);
  $("#modalViewLabel").text(data.title);
  $("#modalView").modal("toggle");
}

function edit(datas) {
  const data = datas.dataset;
  $("#foto-id").val(data.id);
  $("#foto-title").val(data.title);
  $("#foto-status").val(data.status);
  $("#file").val('');
  $("#formFoto").modal('toggle');
  $("#formFotoLabel").text(data.title_nav);
}