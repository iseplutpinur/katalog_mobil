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
  const jenis_foto = 'eksterior';
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
          data-foto="/${jenis_foto}/${full.foto}"
          data-title="${full.title}"
          onclick="view(this)">
              <i class="fa fa-eye"></i> View
          </button>
          <button  class="btn btn-primary btn-sm"
                      data-id="${data}"
                      data-title="${full.title}"
                      data-status="${full.status}"
                      data-url="${jenis_foto}"
                      data-title_nav="Edit Foto ${jenis_foto}"
                      onclick="edit(this)">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="remove('${data}', '${jenis_foto}')">
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
  const jenis_foto = 'interior';
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
          data-foto="/${jenis_foto}/${full.foto}"
          data-title="${full.title}"
          onclick="view(this)">
              <i class="fa fa-eye"></i> View
          </button>
          <button  class="btn btn-primary btn-sm"
                      data-id="${data}"
                      data-title="${full.title}"
                      data-status="${full.status}"
                      data-url="${jenis_foto}"
                      data-title_nav="Edit Foto ${jenis_foto}"
                      onclick="edit(this)">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="remove('${data}', '${jenis_foto}')">
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

const table_warna = () => {
  const jenis_foto = 'warna';
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
          data-foto="/${jenis_foto}/${full.foto}"
          data-title="${full.title}"
          onclick="view(this)">
              <i class="fa fa-eye"></i> View
          </button>
          <button  class="btn btn-primary btn-sm"
                      data-id="${data}"
                      data-title="${full.title}"
                      data-status="${full.status}"
                      data-url="${jenis_foto}"
                      data-title_nav="Edit Foto ${jenis_foto}"
                      onclick="edit(this)">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="remove('${data}', '${jenis_foto}')">
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

const table_galeri = () => {
  const jenis_foto = 'galeri';
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
          data-foto="/${jenis_foto}/${full.foto}"
          data-title="${full.title}"
          onclick="view(this)">
              <i class="fa fa-eye"></i> View
          </button>
          <button  class="btn btn-primary btn-sm"
                      data-id="${data}"
                      data-title="${full.title}"
                      data-status="${full.status}"
                      data-url="${jenis_foto}"
                      data-title_nav="Edit Foto ${jenis_foto}"
                      onclick="edit(this)">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="remove('${data}', '${jenis_foto}')">
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

let formnow = '';

$(document).ready(() => {
  // intial table
  table_daftar_harga();
  table_video();
  table_eksterior();
  table_interior();
  table_warna();
  table_galeri();

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
          Toast.fire({
            icon: 'success',
            title: 'Data berhasil disimpan'
          })

          setTimeout(() => {
            window.location.reload();
          }, 300)
        } else {
          Toast.fire({
            icon: 'error',
            title: 'Data gagal disimpan'
          })
        }
      } else {
        Toast.fire({
          icon: 'error',
          title: 'Data gagal disimpan: ' + data.message
        })
      }
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal disimpan'
      })
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
      table_daftar_harga();
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal dihapus'
      })
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
      table_video();
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal dihapus'
      })
    }).always(() => {
      $('#modalremove').modal('toggle');
    })
  });

  // foto tambah
  // eksterior
  $("#btn-table-eksterior").click(() => {
    $("#foto-title").val('');
    $("#foto-id").val('');
    $("#foto-status").val(1);
    $("#foto-file").val('');
    $("#formFotoLabel").text('Tambah Foto Eksterior');
    $("#formFoto").modal('toggle');
    formnow = 'eksterior';
  })

  // interior
  $("#btn-table-interior").click(() => {
    $("#foto-title").val('');
    $("#foto-id").val('');
    $("#foto-status").val(1);
    $("#foto-file").val('');
    $("#formFotoLabel").text('Tambah Foto Interior');
    $("#formFoto").modal('toggle');
    formnow = 'interior';
  })

  // interior
  $("#btn-table-warna").click(() => {
    $("#foto-title").val('');
    $("#foto-id").val('');
    $("#foto-status").val(1);
    $("#foto-file").val('');
    $("#formFotoLabel").text('Tambah Foto Warna');
    $("#formFoto").modal('toggle');
    formnow = 'warna';
  })

  // interior
  $("#btn-table-galeri").click(() => {
    $("#foto-title").val('');
    $("#foto-id").val('');
    $("#foto-status").val(1);
    $("#foto-file").val('');
    $("#formFotoLabel").text('Tambah Foto Galeri');
    $("#formFoto").modal('toggle');
    formnow = 'galeri';
  })

  $("#formFotoAction").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.ajax({
      method: 'post',
      url: `<?= base_url() ?>admin/${formnow}/` + ($("#foto-id").val() == "" ? 'insert' : 'update'),
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
      $("#formFoto").modal('toggle');
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal disimpan'
      })
    }).always(() => {
      if (formnow == 'eksterior') {
        table_eksterior();
      } else if (formnow == 'interior') {
        table_interior();
      } else if (formnow == 'warna') {
        table_warna();
      } else if (formnow == 'galeri') {
        table_galeri();
      }
    })
  })


  // delete
  $("#delete-foto").click(() => {
    $.ajax({
      method: 'get',
      url: `<?= base_url() ?>admin/${formnow}/delete/` + $("#foto-id-delete").val(),
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
      if (formnow == 'eksterior') {
        table_eksterior();
      } else if (formnow == 'interior') {
        table_interior();
      } else if (formnow == 'warna') {
        table_warna();
      } else if (formnow == 'galeri') {
        table_galeri();
      }
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal dihapus'
      })
    }).always(() => {
      $('#fotoModalRemove').modal('toggle');
    })
  });
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
  $("#foto-file").val('');
  $("#formFoto").modal('toggle');
  $("#formFotoLabel").text(data.title_nav);
  formnow = data.url;
}

function remove(id, url) {
  $("#foto-id-delete").val(id);
  $("#fotoModalRemove").modal('toggle');
  formnow = url;
}