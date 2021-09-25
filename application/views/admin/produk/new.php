<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?= $title_page; ?></h6>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <form id="form-produk" method="post">
          <div class="form-group">
            <input type="hidden" class="form-control" id="id" name="id" required value="<?= $produk['id'] ?>">
            <label for="title">Nama Produk</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nama Produk" required value="<?= $produk['title'] ?>">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="file">Jumbotron Foto
                  <?php if ($is_edit) : ?>
                    <a href="#" data-title="<?= $produk['jumbotron_title'] ?>" data-foto="produk/<?= $produk['jumbotron_foto'] ?>" onclick="view(this)">Lihat</a>
                  <?php endif; ?>
                </label>
                <input type="file" class="form-control" name="file" <?= ($is_edit) ? '' : 'required'; ?>>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="jumbotron_title">Jumbotron Title</label>
                <input type="text" class="form-control" id="jumbotron_title" name="jumbotron_title" value="<?= $produk['jumbotron_title'] ?>" placeholder="Jumbotron Title" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="jumbotron_detail">Jumbotron detail</label>
            <textarea type="text" class="form-control" id="jumbotron_detail" name="jumbotron_detail" placeholder="Jumbotron detail"><?= $produk['jumbotron_detail'] ?></textarea>
          </div>

          <hr>
          <div class="form-group">
            <label for="promo_title">Nama Promo</label>
            <input type="text" class="form-control" id="promo_title" name="promo_title" value="<?= $produk['promo_title'] ?>" placeholder="Nama Promo">
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="promo_harga_mulai">Harga Mulai</label>
                <input type="text" class="form-control" id="promo_harga_mulai" name="promo_harga_mulai" value="<?= $produk['promo_harga_mulai'] ?>" placeholder="Harga Mulai">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="promo_paket_kredit">Paket Kredit</label>
                <input type="text" class="form-control" id="promo_paket_kredit" name="promo_paket_kredit" value="<?= $produk['promo_paket_kredit'] ?>" placeholder="Paket Kredit">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="promo_tenor_kerdit">Tenor Kredit</label>
                <input type="text" class="form-control" id="promo_tenor_kerdit" name="promo_tenor_kerdit" value="<?= $produk['promo_tenor_kerdit'] ?>" placeholder="Tenor Kredit">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="promo_detail">Promo Detail</label>
            <textarea type="text" class="form-control" id="promo_detail" name="promo_detail" placeholder="Promo Detail"><?= $produk['promo_detail'] ?></textarea>
          </div>

          <hr>

          <div class="form-group">
            <label for="informasi_spesifikasi">Informasi Spesifikasi</label>
            <textarea type="text" class="form-control" id="informasi_spesifikasi" name="informasi_spesifikasi" placeholder="Informasi Spesifikasi"><?= $produk['informasi_spesifikasi'] ?></textarea>
          </div>
          <div class="form-group">
            <label for="informasi_spesifikasi_status">Tampilkan Informasi Spesifikasi</label>
            <select class="form-control" id="informasi_spesifikasi_status" name="informasi_spesifikasi_status">
              <option value="1" <?= $produk['informasi_spesifikasi_status'] == 1 ? 'selected' : ''; ?>>Tampilkan</option>
              <option value="0" <?= $produk['informasi_spesifikasi_status'] == 0 ? 'selected' : ''; ?>>Sembunyikan</option>
            </select>
          </div>

          <hr>
          <div class="form-group">
            <label for="keterangan_pembelian">Keterangan Pembelian</label>
            <textarea type="text" class="form-control" id="keterangan_pembelian" name="keterangan_pembelian" placeholder="Keterangan Pembelian"><?= $produk['keterangan_pembelian'] ?></textarea>
          </div>
          <div class="form-group">
            <label for="keterangan_pembelian_status">Tampilkan Keterangan Pembelian</label>
            <select class="form-control" id="keterangan_pembelian_status" name="keterangan_pembelian_status">
              <option value="1" <?= $produk['keterangan_pembelian_status'] == 1 ? 'selected' : ''; ?>>Tampilkan</option>
              <option value="0" <?= $produk['keterangan_pembelian_status'] == 0 ? 'selected' : ''; ?>>Sembunyikan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
              <option value="1" <?= $produk['status'] == 1 ? 'selected' : ''; ?>>Aktif</option>
              <option value="0" <?= $produk['status'] == 0 ? 'selected' : ''; ?>>Tidak Aktif</option>
            </select>
          </div>
        </form>
      </div>
      <div class="col-lg-6">
        <!-- daftar-harga -->
        <div class="d-flex justify-content-between my-2">
          <label for="btn-table-daftar-harga">Daftar Harga</label>
          <button class="btn btn-sm btn-primary" id="btn-table-daftar-harga">Add New</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="table-daftar-harga" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="max-width: 30px;">No</th>
                <th>Title</th>
                <th>Harga</th>
                <th style="max-width: 100px;">Status</th>
                <th style="max-width: 230px;">Action</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
        <hr>

        <!-- eksterior -->
        <div class="d-flex justify-content-between my-2">
          <label for="btn-table-eksterior">Foto Eksterior</label>
          <button class="btn btn-sm btn-primary" id="btn-table-eksterior">Add New</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="table-eksterior" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="max-width: 30px;">No</th>
                <th>Title</th>
                <th style="max-width: 100px;">Status</th>
                <th style="max-width: 230px;">Action</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
        <hr>

        <!-- interior -->
        <div class="d-flex justify-content-between my-2">
          <label for="btn-table-interior">Foto interior</label>
          <button class="btn btn-sm btn-primary" id="btn-table-interior">Add New</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="table-interior" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="max-width: 30px;">No</th>
                <th>Title</th>
                <th style="max-width: 100px;">Status</th>
                <th style="max-width: 230px;">Action</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
        <hr>

        <!-- warna -->
        <div class="d-flex justify-content-between my-2">
          <label for="btn-table-warna">Foto warna</label>
          <button class="btn btn-sm btn-primary" id="btn-table-warna">Add New</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="table-warna" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="max-width: 30px;">No</th>
                <th>Title</th>
                <th style="max-width: 100px;">Status</th>
                <th style="max-width: 230px;">Action</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
        <hr>

        <!-- galeri -->
        <div class="d-flex justify-content-between my-2">
          <label for="btn-table-galeri">Foto galeri</label>
          <button class="btn btn-sm btn-primary" id="btn-table-galeri">Add New</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="table-galeri" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="max-width: 30px;">No</th>
                <th>Title</th>
                <th style="max-width: 100px;">Status</th>
                <th style="max-width: 230px;">Action</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
        <hr>

        <!-- video -->
        <div class="d-flex justify-content-between my-2">
          <label for="btn-table-video">Video</label>
          <button class="btn btn-sm btn-primary" id="btn-table-video">Add New</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="table-video" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="max-width: 30px;">No</th>
                <th>Title</th>
                <th style="max-width: 100px;">Status</th>
                <th style="max-width: 230px;">Action</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-between my-2">
      <a href="<?= base_url() ?>admin/produk" class="btn btn-secondary" id="table-daftar-harga">Kembali</a>
      <button type="submit" class="btn btn-info" form="form-produk">Simpan</button>
    </div>
  </div>
</div>

<!-- Modal foto -->
<div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="modalViewLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalViewLabel"></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalViewImage" src="" class="img-fluid" alt="">
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="formFoto" tabindex="-1" role="dialog" aria-labelledby="formFotoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formFotoLabel">Add New Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formFotoAction" action="" method="post">
          <input type="text" name="id_produk" class="form-control" value="<?= $produk['id'] ?>" hidden="hidden">
          <input type="text" name="id" id="foto-id" class="form-control" value="" hidden="hidden">
          <div class="form-group">
            <label for="foto-title">Title</label>
            <input type="text" name="title" id="foto-title" class="form-control" required="" placeholder="Title">
          </div>
          <div class="form-group">
            <label for="file">Foto</label>
            <input type="file" name="file" id="foto-file" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="foto-status">Status</label>
            <select name="status" id="foto-status" class="form-control">
              <option value="1">Active</option>
              <option value="0">Nonactive</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="formFotoAction">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" required="">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="fotoModalRemove" tabindex="-1" role="dialog" aria-labelledby="fotoModalRemoveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fotoModalRemoveLabel">Delete Foto</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus foto ini .?</p>
        <input type="hidden" id="foto-id-delete">
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type="button" id="delete-foto" data-dismiss="modal">Delete</button>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>

<!-- modal daftar Harga -->
<div class="modal fade" id="formDaftarHarga" tabindex="-1" role="dialog" aria-labelledby="formDaftarHargaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formDaftarHargaLabel">Tambah Harga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formDaftarHargaAction" action="" method="post">
          <input type="text" name="id_produk" class="form-control" value="<?= $produk['id'] ?>" hidden="hidden">
          <input type="text" name="id" id="daftar_harga-id" class="form-control" value="" hidden="hidden">
          <div class="form-group">
            <label for="title">Nama</label>
            <input type="text" name="title" id="daftar_harga-title" class="form-control" required="" placeholder="Nama Harga">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="harga" name="harga" id="daftar_harga-harga" class="form-control" placeholder="Harga" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="daftar_harga-status" class="form-control">
              <option value="1">Active</option>
              <option value="0">Nonactive</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="formDaftarHargaAction">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" required="">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="daftarHargamodalremove" tabindex="-1" role="dialog" aria-labelledby="daftarHargamodalremoveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="daftarHargamodalremoveLabel">Delete Harga</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus data ini .?</p>
        <input type="hidden" id="id-delete-daftar-harga">
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type="button" id="delete-daftar-harga" data-dismiss="modal">Delete</button>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>

<!-- modal video -->
<div class="modal fade" id="formVideo" tabindex="-1" role="dialog" aria-labelledby="formVideoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formVideoLabel">Tambah Harga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formVideoAction" action="" method="post">
          <input type="text" name="url" id="url" class="form-control" value="" hidden="hidden">
          <input type="text" name="id_produk" class="form-control" value="<?= $produk['id'] ?>" hidden="hidden">
          <input type="text" name="id" id="video-id" class="form-control" value="" hidden="hidden">
          <div class="form-group">
            <label for="title">Nama</label>
            <input type="text" name="title" id="video-title" class="form-control" required="" placeholder="Nama Url">
          </div>
          <div class="form-group">
            <label for="url">Url</label>
            <input type="url" name="url" id="video-url" class="form-control" placeholder="Url">
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="video-status" class="form-control">
              <option value="1">Active</option>
              <option value="0">Nonactive</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="formVideoAction">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" required="">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Videomodalremove" tabindex="-1" role="dialog" aria-labelledby="VideomodalremoveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="VideomodalremoveLabel">Delete Harga</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus data ini .?</p>
        <input type="hidden" id="id-delete-video">
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type="button" id="delete-video" data-dismiss="modal">Delete</button>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>