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
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control" required="" placeholder="email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" class="form-control" required="" placeholder="password">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="ulangi_password">ulangi_password</label>
                    <input type="ulangi_password" name="ulangi_password" id="ulangi_password" class="form-control" required="" placeholder="ulangi_password">
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
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nav_icon">Icon Navigasi</label>
                    <input type="text" name="nav_icon" id="nav_icon" class="form-control" required="" placeholder="icon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nav_icon_status">Status Icon Navigasi</label>
                    <select name="status" id="nav_icon_status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Nonactive</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="logo_title">Nama Aplikasi</label>
                    <input type="text" name="logo_title" id="logo_title" class="form-control" required="" placeholder="Nama Aplikasi">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <input type="text" name="copyright" id="copyright" class="form-control" required="" placeholder="Copyright">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="time_visible">Navigasi Tanggal</label>
                    <select name="status" id="time_visible" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Nonactive</option>
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