<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?= $title_page; ?></h6>
  </div>
  <div class="card-body">

    <div class="grid">
      <div class="grid-sizer col-lg-6"></div>

      <!-- user -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Pengguna</h6>
          </div>
          <div class="card-body">
            <form action="" id="form-user">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?= $user['email'] ?>" class="form-control" required="" placeholder="email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required="" placeholder="password">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="ulangi_password">Ulangi Password</label>
                    <input type="password" name="ulangi_password" id="ulangi_password" class="form-control" required="" placeholder="Ulangi Pasword">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- tampilan -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tampilan</h6>
          </div>
          <div class="card-body">
            <form action="" id="form-tampilan">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nav_icon">Icon Navigasi</label>
                    <input type="text" name="nav_icon" id="nav_icon" class="form-control" value="<?= $aplikasi['nav_logo_value'] ?>" required="" placeholder="icon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nav_icon_status">Status Icon Navigasi</label>
                    <select name="status" id="nav_icon_status" class="form-control">
                      <option value="1" <?= $aplikasi['nav_logo_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $aplikasi['nav_logo_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="logo_title">Nama Aplikasi</label>
                    <input type="text" name="logo_title" id="logo_title" class="form-control" required="" value="<?= $aplikasi['nav_logo_title'] ?>" placeholder="Nama Aplikasi">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <input type="text" name="copyright" id="copyright" class="form-control" required="" value="<?= $aplikasi['copyright'] ?>" placeholder="Copyright">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="time_visible">Tanggal Navigasi</label>
                    <select name="status" id="time_visible" class="form-control">
                      <option value="1" <?= $aplikasi['nav_time_status'] == 1 ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= $aplikasi['nav_time_status'] == 0 ? 'selected' : '' ?>>Nonactive</option>
                    </select>
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