<!-- Modal -->

<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Hapus Akun</h4>
  </div>
  <div class="modal-body">
  <form method="post" action="<?php echo site_url('feedback/deleteuser') ?>">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
        </div>
        <input type="text" name="id" hidden value="<?php echo $id?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <input type="text" name="id_user" hidden value="<?php echo $this->session->id?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <input type="password" name="pass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Delete</button>
    </form>
  </div>
  <div class="modal-footer">
  <a class="btn btn-danger" href="<?php echo site_url('feedback/lookakun') ?>">
            Kembali
        </a>
  </div>
</div>



