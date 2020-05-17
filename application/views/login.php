<!-- Modal -->

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo site_url('feedback/login') ?>">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
            </div>
            <input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
            </div>
            <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Log-In</button>
        </form>
      </div>
      <div class="modal-footer">
      <a class="btn btn-danger" href="<?php echo site_url('feedback/index') ?>">
                Kembali
            </a>
      </div>
    </div>



