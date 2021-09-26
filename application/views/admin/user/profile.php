<!-- DataTales Example -->
<div class="container mt-3">
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?= $title_page; ?></h6>
      <a href="<?= base_url('user'); ?>" class="btn-sm btn-secondary">Back</a>
    </div>
    <div class="card-body">
      <?php echo form_open_multipart('user/edit'); ?>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label" id="email">Email</label>
        <div class="col-sm-10">
          <input type="text" value="<?= $user['id']; ?>" name="id" hidden="hidden">
          <input type="text" class="form-control" value="<?= $user['email']; ?>" readonly="" name="email">
        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label" id="name">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="<?= $user['name']; ?>" required="">
          <!-- error -->
          <small class="text-danger pl-3" hidden="" id="p1">The Name field must be at least 4 characters in length.</small>
          <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary " disabled>Edit</button>
      </div>
      </form>
      <form action="<?= base_url('user/changepassword'); ?>" method="post">
        <!-- form group -->
        <div class="form-group row">
          <!-- label -->
          <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
          <!-- input -->
          <div class="col-sm-10">
            <div class="input-group mb-3">
              <input minlength="4" type="password" class="form-control" name="current_password" required="" id="current_password">
              <!-- icon toggle visibility password -->
              <div class="input-group-append">
                <div class="input-group-text">
                  <a href="#" id="showPassword1"><i class="far fa-eye-slash"></i></a>
                </div>
              </div>
            </div>
            <!-- error -->
            <small class="text-danger pl-3" hidden="" id="p1">The Current Password field must be at least 4 characters in length.</small>
          </div>
        </div>

        <!-- form group -->
        <div class="form-group row">
          <!-- label -->
          <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
          <!-- input -->
          <div class="col-sm-10">
            <input minlength="4" type="password" class="form-control" name="new_password" required="" id="new_password">
            <!-- error -->
            <small class="text-danger pl-3" hidden="" id="p2">The New Password field must be at least 4 characters in length.</small>
          </div>
        </div>

        <!-- form group -->
        <div class="form-group row">
          <!-- label -->
          <label for="new_password2" class="col-sm-2 col-form-label">Repeat Password</label>
          <!-- input -->
          <div class="col-sm-10">
            <input minlength="4" type="password" class="form-control" name="new_password2" required="" id="new_password2">
            <!-- error -->
            <small class="text-danger pl-3" hidden="" id="p3">The Repeat Password field must be at least 4 characters in length.</small>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary" disabled>Change Password</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#fileInput').on('change', function() {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
      $('.form-group button[type=submit]').removeAttr('disabled', '');
      valName();
    });

    $('input[name=name]').on('keyup', function() {
      valName();
    });

    function valName() {
      if ($('input[name=name]').val().length < 4) {
        $('.form-group button[type=submit]').attr('disabled', '');
        $('#p1').removeAttr('hidden', '');
        $('input[name=name]').attr('class', 'form-control border border-danger');
      } else {
        $('.form-group button[type=submit]').removeAttr('disabled', '');
        $('#p1').attr('hidden', '');
        $('input[name=name]').attr('class', 'form-control border border-success');
      }
    }
  });

  // The Confirm New Password field does not match the New Password field
  $(document).ready(function() {

    $('form input').on('keyup', function() {
      buttonDisabled();
    });

    $('#current_password').on('keyup', function() {
      currentPassword();
      newPassword();
      newPassword2();
    });

    $('#new_password').on('keyup', function() {
      newPassword();
      newPassword2();
    });

    $('#new_password2').on('keyup', function() {
      newPassword();
      newPassword2();
    });

    // visibility input password
    no1 = 1;
    $('#showPassword1').on('click', function() {
      if (no1 % 2 == 0) {
        // console.log('off');
        $('#current_password').attr('type', 'password');
        $('#new_password').attr('type', 'password');
        $('#new_password2').attr('type', 'password');
        $(this).html('<i class="far fa-eye-slash">');
      } else {
        // console.log('on');
        $('#current_password').attr('type', 'text');
        $('#new_password').attr('type', 'text');
        $('#new_password2').attr('type', 'text');
        $(this).html('<i class="far fa-eye">');
      }
      no1++;
    });




    // button visibility function
    function buttonDisabled() {
      if ($('#current_password').val().length < 4 || $('#new_password').val().length < 4 || $('#new_password2').val().length < 4 || $('#new_password').val() != $('#new_password2').val() || $('#current_password').val() == $('#new_password').val()) {
        $('.form-group button[type=submit]').attr('disabled', '');
      } else {
        $('.form-group button[type=submit]').removeAttr('disabled', '');
      }
    }

    // current password
    function currentPassword() {
      if ($('#current_password').val().length < 4) {
        $('#p1').removeAttr('hidden', '');
        $('#current_password').attr('class', 'form-control border border-danger');
      } else {
        $('#p1').attr('hidden', '');
        $('#current_password').attr('class', 'form-control border border-success');
      }
    }

    // New password
    function newPassword() {
      if ($('#new_password').val().length < 4) {
        $('#p2').removeAttr('hidden', '');
        $('#new_password').attr('class', 'form-control border border-danger');
      } else if ($('#current_password').val() == $('#new_password').val()) {
        $('#p2').removeAttr('hidden', '');
        $('#new_password').attr('class', 'form-control border border-danger');
        $('#p2').html('New password cannot be the same as current password');
      } else {
        $('#p2').attr('hidden', '');
        $('#new_password').attr('class', 'form-control border border-success');
      }
      if ($('#current_password').val() == $('#new_password').val()) {
        $('#p2').removeAttr('hidden', '');
        $('#new_password').attr('class', 'form-control border border-danger');
        $('#p2').html('New password cannot be the same as current password');
      }
    }

    // New password
    function newPassword2() {
      if ($('#new_password2').val().length < 4) {
        $('#new_password2').attr('class', 'form-control border border-danger');
        $('#p3').removeAttr('hidden', '');
        $('#p3').html('The Repeat Password field must be at least 4 characters in length.');
      } else if ($('#new_password').val() != $('#new_password2').val()) {
        $('#p3').removeAttr('hidden', '');
        $('#new_password2').attr('class', 'form-control border border-danger');
        $('#p3').html('The Confirm New Password field does not match the New Password field.');
      } else {
        $('#p3').attr('hidden', '');
        $('#new_password2').attr('class', 'form-control border border-success');
      }
    }

  });
</script>