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
                    <input type="text" name="icon" id="email-icon" class="form-control" required="" placeholder="icon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email-title">Title</label>
                    <input type="text" name="title" id="email-title" class="form-control" required="" placeholder="Title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email-value">Email</label>
                    <input type="email" name="value" id="email-value" class="form-control" required="" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email-status">Status</label>
                    <select name="status" id="email-status" class="form-control">
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
                    <input type="text" name="icon" id="service-icon" class="form-control" required="" placeholder="icon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="service-title">Title</label>
                    <input type="text" name="title" id="service-title" class="form-control" required="" placeholder="title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="service-value">Service</label>
                    <input type="text" name="value" id="service-value" class="form-control" required="" placeholder="Service">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="service-status">Status</label>
                    <select name="status" id="service-status" class="form-control">
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

      <!-- service -->
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
                    <input type="text" name="icon" id="call-icon" class="form-control" required="" placeholder="icon">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="call-title">Title</label>
                    <input type="text" name="title" id="call-title" class="form-control" required="" placeholder="title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="call-value">Call</label>
                    <input type="text" name="value" id="call-value" class="form-control" required="" placeholder="Call">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="call-status">Status</label>
                    <select name="status" id="call-status" class="form-control">
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


      <!-- copyright -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">copyright</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="copyright-value">copyright</label>
                    <input type="copyright" name="value" id="copyright-value" class="form-control" required="" placeholder="copyright">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="copyright-status">Status</label>
                    <select name="status" id="copyright-status" class="form-control">
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

      <!-- no_telepon -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">no_telepon</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="no_telepon-value">no_telepon</label>
                    <input type="no_telepon" name="value" id="no_telepon-value" class="form-control" required="" placeholder="no_telepon">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="no_telepon-status">Status</label>
                    <select name="status" id="no_telepon-status" class="form-control">
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

      <!-- email -->
      <div class="grid-item col-lg-6">
        <div class="card shadow-sm mb-4">
          <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">email</h6>
          </div>
          <div class="card-body">
            <form action="" id="header-logo">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email-value">email</label>
                    <input type="email" name="value" id="email-value" class="form-control" required="" placeholder="email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email-status">Status</label>
                    <select name="status" id="email-status" class="form-control">
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