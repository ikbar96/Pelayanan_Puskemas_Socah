<!-- Modal -->

<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Edit Akun</h4>
  </div>
  <div class="modal-body">
  <form method="post" action="<?php echo site_url('feedback/edituser') ?>">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
        </div>
        <input type="text" hidden name="id" value="<?php echo $id?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <input type="text" required name="un" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Password Lama</span>
        </div>
        <input type="password" name="pl" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Password Baru</span>
        </div>
        <input required type="password" name="pb" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
    </form>
  </div>
  <div class="modal-footer">
  <a class="btn btn-danger" href="<?php echo site_url('feedback/lookakun') ?>">
            Kembali
        </a>
  </div>
</div>



