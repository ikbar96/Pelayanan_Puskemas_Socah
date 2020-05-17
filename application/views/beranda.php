<!DOCTYPE html>
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
	
  <div style="background:#007bff;padding-bottom:30px;">
        <center>
            <div style="color:white">  
                <h1 >Sistem Informasi Kepuasan Pelanggan</h1>
                <h3>Terhadap Kinerja Pelayanan Puskesmas Kamal</h3>
            </div>
        </center>
        <div style="background:#fbfbfb;width:50%;padding:15px;margin:auto;margin-top:50px;border-radius:10px;"">
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="customRange3">Rating Pelayanan</label>
                    <input type="range" class="custom-range" min="0" max="10" step="1" id="customRange3">
                </div>
                <div class="form-group">
                    <p class="h5">Kritik dan Saran</p>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <a id="operator" class="btn btn-primary" data-toggle="modal" data-target="#modal_operator" href="<?php echo site_url('feedback/Tooperator') ?>">
                            Operator
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div style="width:80%;padding:15px;margin:auto;margin-top:100px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <img src="<?php echo base_url("Assets/images/puskesmas.jpg")?>" class="rounded" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img src="<?php echo base_url("Assets/images/puskesmas.jpg")?>" class="rounded" alt="">
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col" style="margin-top:10px"><p class="text-justify">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                </div>
                <div class="col" style="margin-top:10px"><p class="text-justify">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="modal_operator" tabindex="-1" role="dialog" aria-hidden="true"></div>
	<script type="text/javascript">
	  $(document).ready(function(){
	   $('a#operator').click(function(){
		var url = $(this).attr('href');
		$.ajax({
		 url : url,
		 success:function(response){
		  $('#modal_operator').html(response);
		 }
		});
	   });
	   
	  });
	</script>


	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   	<script src="<?php echo base_url()?>/assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url()?>/assets/popper/popper.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>

  </body>
</html>