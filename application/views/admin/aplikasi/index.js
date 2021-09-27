$(document).ready(() => {
  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  $("#form-user").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    if (form.get('password') != form.get('ulangi_password')) {
      Toast.fire({
        icon: 'error',
        title: 'Password tidak sama'
      })
      return;
    }
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/aplikasi/update_user',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
    }).done((data) => {
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil disimpan'
      })
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal disimpan'
      })
    })
  });

  $("#form-tampilan").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/aplikasi/update_tampilan',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
    }).done((data) => {
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil disimpan'
      })
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal disimpan'
      })
    })
  });
})