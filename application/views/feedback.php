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
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/examples.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/dist/themes/bars-square.css">


    <title>Feedback</title>
  </head>

  <body>

  <div style="background-image:url(<?php echo base_url("Assets/images/bgmedic3.jpg")?>);background-size:cover;padding-bottom:30px;">
        <center>
        <div style="background:rgba(13, 66, 97, 0.85);">
            <h2 style="color:white">Sistem Informasi Kepuasan Pelanggan</h2>
            <h3 style="color:white">Terhadap Kinerja Pelayanan Puskesmas Socah</h3>
        </div>
        </center>
        <div style="background:#fbfbfb;width:50%;padding:15px;margin:auto;margin-top:20px;border-radius:10px; box-shadow: 10px 10px 10px rgba(0,0,0,0.8);">
        <form method="post" action="<?php echo site_url('feedback/tambahdatahasil')?>">

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label" >Front Office</label>
            <div class="col-sm-3" >
            <select id="example-square" name="rating_fo" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Rekam Medik</label>
            <div class="col-sm-3">
            <select id="example-squarea" name="rating_rekmed" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-5">
                <select name="poli" id="" class="btn btn-outline-primary">
                    <option value="kia">KIA</option>
                    <option value="lansia">Lansia</option>
                    <option value="gigi">Gigi</option>
                    <option value="ifa">IFA</option>
                    <option value="mtbs">MTBS</option>
                    <option value="vk">VK</option>
                    <option value="bp">BP</option>
                    <option value="tb">TB</option>
                </select>
            </div>
            <div class="col-sm-5">
            <select id="example-squareb" name="rating_poli" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">UGD</label>
            <div class="col-sm-5">
            <select id="example-squarec" name="rating_ugd" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Paramedic</label>
            <div class="col-sm-5">
            <select id="example-squared" name="rating_param" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Konsul</label>
            <div class="col-sm-5">
            <select id="example-squaree" name="rating_konsul" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Indikasi Lab</label>
            <div class="col-sm-5">
            <select id="example-squaref" name="rating_indikasi" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Obat</label>
            <div class="col-sm-5">
            <select id="example-squareg" name="rating_obat" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Kasir</label>
            <div class="col-sm-5">
            <select id="example-squareh" name="rating_kasir" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>
        </div>


        <div class="form-group">
            <p class="h5">Kritik dan Saran</p>
            <textarea class="form-control" name="komen" rows="5"></textarea>
        </div>

            <div class="">
            <button type="submit" class="btn btn-outline-primary btn-block">Kirim</button>
            <a id="operator" class="btn btn-info" data-toggle="modal" data-target="#modal_operator" href="<?php echo site_url('feedback/Tooperator') ?>">
                Operator
            </a>
            </div>

        </form>
        </div>
    </div>
    <div style="width:100%;padding:15px;margin:auto;margin-top:50px;height:500px;background-image:url(<?php echo base_url("Assets/images/oke.png")?>);background-repeat: no-repeat, repeat; background-position:center"></div>

    <div style="background:rgba(13, 66, 97, 1);padding-top:50px;padding-bottom:30px">
        <center><p class="text-monospace" style="color:white"><font style="font-family:arial;color:white">&copy </font>PUSKESMAS SOCAH</p></center>
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
	<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/assets/dist/jquery.barrating.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#example-squarea').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
            $('#example-square').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
            $('#example-squareb').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
            $('#example-squarec').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
            $('#example-squared').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
            $('#example-squaree').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
            $('#example-squaref').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
            $('#example-squareg').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
            $('#example-squareh').barrating({
                theme: 'bars-square',
                showValues: true,
            showSelectedRating: false
            });
        });
    </script>

  </body>
</html>
