<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?= $title_page; ?></h6>
  </div>
  <div class="card-body">

    <div class="grid">
      <div class="grid-sizer col-lg-6"></div>

      <!-- logo -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Logo</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="light">Light</label>
                    <input type="file" name="light" id="light" class="form-control" required="" placeholder="light">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dark">Dark</label>
                    <input type="file" name="dark" id="dark" class="form-control" required="" placeholder="dark">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- email -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Email</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email-icon">Icon</label>
                    <input type="text" name="icon" id="email-icon" value="<?= $depan['email_icon'] ?>" class="form-control" required="" placeholder="Icon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email-title">Title</label>
                    <input type="text" name="title" id="email-title" class="form-control" value="<?= $depan['email_title'] ?>" required="" placeholder="Title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email-value">Email</label>
                    <input type="email" name="value" id="email-value" class="form-control" value="<?= $depan['email_value'] ?>" required="" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email-status">Status</label>
                    <select name="status" id="email-status" class="form-control">
                      <option value="1" <?= $depan['email_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $depan['email_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- service -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Service</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="service-icon">Icon</label>
                    <input type="text" name="icon" id="service-icon" value="<?= $depan['service_icon'] ?>" class="form-control" required="" placeholder="Icon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="service-title">Title</label>
                    <input type="text" name="title" id="service-title" class="form-control" value="<?= $depan['service_title'] ?>" required="" placeholder="Title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="service-value">Service</label>
                    <input type="service" name="value" id="service-value" class="form-control" value="<?= $depan['service_value'] ?>" required="" placeholder="service">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="service-status">Status</label>
                    <select name="status" id="service-status" class="form-control">
                      <option value="1" <?= $depan['service_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $depan['service_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- call -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Call</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="call-icon">Icon</label>
                    <input type="text" name="icon" id="call-icon" value="<?= $depan['call_icon'] ?>" class="form-control" required="" placeholder="Icon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="call-title">Title</label>
                    <input type="text" name="title" id="call-title" class="form-control" value="<?= $depan['call_title'] ?>" required="" placeholder="Title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="call-value">Call</label>
                    <input type="call" name="value" id="call-value" class="form-control" value="<?= $depan['call_value'] ?>" required="" placeholder="call">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="call-status">Status</label>
                    <select name="status" id="call-status" class="form-control">
                      <option value="1" <?= $depan['call_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $depan['call_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- copyright -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Copyright</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="copyright-value">copyright</label>
                    <input type="copyright" name="value" id="copyright-value" class="form-control" required="" value="<?= $depan['copyright_value'] ?>" placeholder="copyright">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="copyright-status">Status</label>
                    <select name="status" id="copyright-status" class="form-control">
                      <option value="1" <?= $depan['copyright_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $depan['copyright_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- no_telp -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">No Telepon</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="no_telp-value">No Telepon</label>
                    <input type="text" name="value" id="no_telp-value" class="form-control" required="" value="<?= $depan['no_telp_value'] ?>" placeholder="No Telepon">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="no_telp-status">Status</label>
                    <select name="status" id="no_telp-status" class="form-control">
                      <option value="1" <?= $depan['no_telp_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $depan['no_telp_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- foot_email -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Footer Email</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="foot_email-value">Email</label>
                    <input type="email" name="value" id="foot_email-value" class="form-control" required="" value="<?= $depan['foot_email_value'] ?>" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="foot_email-status">Status</label>
                    <select name="status" id="foot_email-status" class="form-control">
                      <option value="1" <?= $depan['foot_email_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $depan['foot_email_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- alamat -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Footer Alamat</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="alamat-value">Alamat</label>
                    <input type="text" name="value" id="alamat-value" class="form-control" required="" value="<?= $depan['alamat_value'] ?>" placeholder="Alamat">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="alamat-status">Status</label>
                    <select name="status" id="alamat-status" class="form-control">
                      <option value="1" <?= $depan['alamat_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $depan['alamat_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- katalog -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Katalog</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="katalog-value">Title</label>
                    <input type="text" name="value" id="katalog-value" class="form-control" value="<?= $depan['katalog_title'] ?>" required="" placeholder="Title">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="detail-value">Detail</label>
                    <input type="text" name="value" id="detail-value" class="form-control" value="<?= $depan['katalog_value'] ?>" required="" placeholder="Detail">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- testimoni -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Testimoni</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="testimoni-value">Title</label>
                    <input type="text" name="value" id="testimoni-value" class="form-control" value="<?= $depan['testimoni_title'] ?>" required="" placeholder="Testimoni">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="detail-value">Detail</label>
                    <input type="text" name="value" id="detail-value" class="form-control" value="<?= $depan['testimoni_value'] ?>" required="" placeholder="Detail">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- kontak -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Kontak</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="kontak-value">Title</label>
                    <input type="text" name="value" id="kontak-value" class="form-control" value="<?= $depan['kontak_title'] ?>" required="" placeholder="Kontak">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="detail-value">Detail</label>
                    <input type="text" name="value" id="detail-value" class="form-control" value="<?= $depan['kontak_value'] ?>" required="" placeholder="Detail">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>


    </div>

  </div>
</div>