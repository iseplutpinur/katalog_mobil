<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?= $title_page; ?></h6>
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#formModal" data-url="<?= base_url(); ?>" id="addNew">Add New User</button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th style="max-width: 50px;">No</th>
            <th>Nama</th>
            <th>Email</th>
            <th style="max-width: 100px;">Status</th>
            <th style="max-width: 230px;">Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Add New Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formModalAction" action="" method="post">
          <input type="text" name="id" id="id" class="form-control" value="" hidden="hidden">
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required="" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
              <option value="1">Active</option>
              <option value="0">Nonactive</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="formModalAction">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" required="">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalremove" tabindex="-1" role="dialog" aria-labelledby="modalremoveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalremoveLabel">Delete user</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus user ini .?</p>
        <input type="hidden" id="id-delete">
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type="button" id="delete" data-dismiss="modal">Delete</button>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>