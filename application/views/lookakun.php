<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>/assets/popper/umd/popper.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <title>Feedback</title>
  </head>
  
  <body>
    <div style='float: left; width: 70%; padding:5px;'>
        <center>
            <div style="">  
                <h1 class="display-4">Lihat Akun</h1>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                   
                        <?php foreach($hasil as $data){?>
                            <tr>
                            <td><?php echo $data->username?></td>
                            <td><?php echo $data->katasandi?></td>
                            <td>
                            <a id="edit" class="btn btn-outline-info" data-toggle="modal" data-target="#modal_edit"  href="<?php echo site_url('feedback/edit/'.$data->id)?>">Edit</a>
                            <a id="delete" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal_delete"  href="<?php echo site_url('feedback/delete/'.$data->id)?>" >Delete</a>
                            </td> 
                            </tr>
                        <?php }?>
                       
                         
                    
                </tbody>
            </table>
            </center>
            <a id="add" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal_add"  href="<?php echo site_url('feedback/add') ?>">Add User</a>
    </div>
       
    <div style='float: right; width: 29%; background: whitesmoke; margin:5px; padding:24px;'>
            <center>
              <div style="">  
                  <h1 class="display-4" style="margin-bottom:24px">Register</h1>
              </div>
              <img src="<?php echo base_url("Assets/images/user1.png")?>" class="rounded-circle" alt="" style= "margin-bottom:24px;">
            </center>
           <a class="btn btn-outline-info btn-block" href="<?php echo site_url('feedback/lookakun') ?>" style="margin-bottom:24px;">Lihat Account</a>
           <a class="btn btn-outline-primary btn-block" href="<?php echo site_url('feedback/lookhasil') ?>" style="margin-bottom:24px;">Lihat Hasil</a>
           <a class="btn btn-outline-danger btn-block" href="<?php echo site_url('feedback/index') ?>" style="margin-bottom:24px;">Log Out</a>
    </div>

	<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true"></div>
    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-hidden="true"></div>
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-hidden="true"></div>
	<script type="text/javascript">
	  $(document).ready(function(){
	   $('a#edit').click(function(){
		var url = $(this).attr('href');
		$.ajax({
		 url : url,
		 success:function(response){
		  $('#modal_edit').html(response);
		 }
		});
	   });
	   
	  });

      $(document).ready(function(){
	   $('a#delete').click(function(){
		var url = $(this).attr('href');
		$.ajax({
		 url : url,
		 success:function(response){
		  $('#modal_delete').html(response);
		 }
		});
	   });
	   
	  });

      $(document).ready(function(){
	   $('a#add').click(function(){
		var url = $(this).attr('href');
		$.ajax({
		 url : url,
		 success:function(response){
		  $('#modal_add').html(response);
		 }
		});
	   });
	   
	  });
      </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>

  </body>
</html>