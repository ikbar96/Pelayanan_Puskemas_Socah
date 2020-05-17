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
        <center>
        <div style="">
            <h1 class="display-3">Hasil Feedback</h1>
            <p class="display-4">Puskesmas Socah</p>
        </div>
        </center>
        <div style="background:#fbfbfb;width:80%;padding:15px;margin:auto;margin-top:30px;border-radius:10px;">
        <table class="table">
        <thead class="thead-dark">
            <tr>

              <th colspan="18"><center>Pelayanan</center></th>
            </tr>
            <tr>
              <th scope="col">FRONT OFFICE</th>
              <th scope="col">REKAM MEDIS</th>
              <th scope="col">POLI GIGI</th>
              <th scope="col">POLI LANSIA</th>
              <th scope="col">POLI VK</th>
              <th scope="col">POLI TB</th>
              <th scope="col">POLI MTBS</th>
              <th scope="col">POLI IFA</th>
              <th scope="col">POLI BP</th>
              <th scope="col">UGD</th>
              <th scope="col">PARAMEDIK</th>
              <th scope="col">KONSUL</th>
              <th scope="col">INDIKASI LAB</th>
              <th scope="col">OBAT</th>
              <th scope="col">kasir</th>
              <th scope="col">Kritik dan Saran</th>
              <th scope="col">Waktu</th>
            </tr>
        </thead>
        <tbody>
        <?php

        if( ! empty($hasil)){ // Jika data tidak sama dengan kosong, artinya jika data ada
          foreach($hasil as $data){

            echo '<tr>

            <td>'.$data->front_office.'</td>
            <td>'.$data->rekam_medik.'</td>
            <td>'.$data->poli_gigi.'</td>
            <td>'.$data->poli_lansia.'</td>
            <td>'.$data->poli_vk.'</td>
            <td>'.$data->poli_tb.'</td>
            <td>'.$data->poli_mtbs.'</td>
            <td>'.$data->poli_ifa.'</td>
            <td>'.$data->poli_bp.'</td>
            <td>'.$data->ugd.'</td>
            <td>'.$data->paramedik.'</td>
            <td>'.$data->konsol.'</td>
            <td>'.$data->indikasi_lab.'</td>
            <td>'.$data->obat.'</td>
            <td>'.$data->kasir.'</td>
            <td>'.$data->kritiksaran.'</td>
            <td>'.$data->waktu.'</td>
            </tr>';
          }
        }else{ // Jika data kosong
          echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
        }
        ?>

        </tbody>
        </table>

      </div>

    </div>
    <script>
        window.print();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>

  </body>
</html>
