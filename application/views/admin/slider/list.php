<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?= $title_page; ?></h6>
    <button class="btn-sm btn-primary" data-toggle="modal" data-target="#formModal" data-url="<?= base_url(); ?>" id="addNewMenu">Add New Slider</button>
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
            <input type="number" name="id" hidden="hidden">
            <input type="text" name="name" class="form-control" required="" id="formModalInput" placeholder="Menu Name">
          </div>
          <div class="form-group">
            <input type="file" name="name" class="form-control" required="" id="formModalInput" placeholder="Menu Name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" required="">Close</button>
        <button hidden="hidden" type="submit" class="btn btn-primary" id="formModalBtn"></button>
        </form>
      </div>
    </div>
  </div>
</div>