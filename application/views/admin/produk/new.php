<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?= $title_page; ?></h6>
    <button class="btn-sm btn-primary" data-toggle="modal" data-target="#formModal" data-url="<?= base_url(); ?>" id="addNewSlider">Add New Slider</button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th style="max-width: 50px;">No</th>
            <th>Title</th>
            <th style="max-width: 100px;">Status</th>
            <th style="max-width: 230px;">Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Title</th>
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

<!-- form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Add New Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formModalAction" action="" method="post">
          <input type="text" name="id" id="id" class="form-control" value="" hidden="hidden">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required="" placeholder="Slider Title">
          </div>
          <div class="form-group">
            <label for="file">Foto</label>
            <input type="file" name="file" id="file" class="form-control" placeholder="">
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
        <h5 class="modal-title" id="modalremoveLabel">Delete Slider</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus slider ini .?</p>
        <input type="hidden" id="id-delete">
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type="button" id="delete-slider" data-dismiss="modal">Delete</button>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>