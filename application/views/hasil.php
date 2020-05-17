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
    <div style='float: left; width: 70%'>
      <center>
        <div style="">
            <h1 class="display-4">Hasil Feedback Puskesmas Socah</h1>
        </div>
        </center>
        <div style="height:350px;overflow-y:scroll;background:#fbfbfb;width:100%;padding:15px;margin:auto;margin-top:30px;border-radius:10px;">
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
      <div id="report" style="margin:10px;"></div>
      <a style="margin-left:15px;margin-bottom:15px" class="btn btn-outline-info" target="_blank" href="<?php echo site_url('feedback/cetak') ?>">
            Cetak
      </a>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/highcharts.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#report').highcharts({
          chart: {
              type: 'column',
              margin: 75,
              options3d: {
                  enabled: false,
                  alpha: 10,
                  beta: 25,
                  depth: 70
              }
          },
          title: {
              text: 'Report Keluhan',
              style: {
                      fontSize: '18px',
                      fontFamily: 'Verdana, sans-serif'
              }
          },
          subtitle: {
          text: 'Rata-Rata Rating',
          style: {
                      fontSize: '15px',
                      fontFamily: 'Verdana, sans-serif'
              }
          },
          plotOptions: {
              column: {
                  depth: 25
              }
          },
          credits: {
              enabled: false
          },
          xAxis: {
              categories:  <?php echo json_encode($label);?>
          },
          exporting: {
              enabled: false
          },
          yAxis: {
              title: {
                  text: 'Rating'
              },
          },
          tooltip: {
              formatter: function() {
                  return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
              }
          },
          series: [{
              name: 'Kategori',
              data: <?php echo json_encode($nilai);?>,
              shadow : true,
              dataLabels: {
                  enabled: true,
                  color: '#045396',
                  align: 'center',
                  formatter: function() {
                      return Highcharts.numberFormat(this.y, 0);
                  }, // one decimal
                  y: 0, // 10 pixels down from the top
                  style: {
                      fontSize: '13px',
                      fontFamily: 'Verdana, sans-serif'
                  }
              }
          }]
      });
    });
    </script>

  </body>
</html>
