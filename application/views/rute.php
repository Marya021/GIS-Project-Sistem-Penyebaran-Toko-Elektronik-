<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>Sistem Informasi Geografis</title>
	<!-- Bagian css -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ilmudetil.css">
	
	<!-- Bagian js -->
	<script src='<?= base_url(); ?>assets/js/jquery-1.10.1.min.js'></script>       
    
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!-- akhir dari Bagian js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd3dSy2ivrW8j-Pmz12_bs2rwSaCapCx8&callback=initMap"></script>
	<script>
        
    var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();
  var map;
   
  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var latlng = new google.maps.LatLng(0.507067, 101.447778);
    var mapOptions = {
    zoom: 12,
    center: latlng
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    directionsDisplay.setMap(map);
  }

  function calcRoute() {
    var start = document.getElementById('asal').value;
    var end = document.getElementById('tujuan').value;
    var request = {
     origin:start,
     destination:end,
     travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
   if (status == google.maps.DirectionsStatus.OK) {
     directionsDisplay.setDirections(response);
   }
    });
  }
     google.maps.event.addDomListener(window, 'load', initialize);
   
     $(document).ready(function(){
        $('.btn-hitung').click(function () {
           var data = $('.form').serialize();
           $.ajax({
                type : 'post',
                url : 'hasildata.php',
                data : data,
                success : function(data){
                $('#hasildata').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  
   
      </script>
	
</head>
<body style="padding-left: 250px;" onload="initialize()">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= base_url('home') ?>">
			Electronic Maps</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="clr1"><a href="<?= base_url('home/peta') ?>">Peta</a></li>
				<li class="clr2 active"><a href="<?= base_url('home/rute') ?>">Rute</a></li>
				<li class="clr3"><a href="<?= base_url('home/radius') ?>">Radius</a></li>
			</ul>
		</div>
	</div>
</nav>
</br></br></br></br>
<!--- Bagian Judul-->
</section>
    <!-- END section -->

    <section>
      <div>
        <div class="row justify-content-center mb-4">
          <div  class="col-md-7 text-center">
            <div>
              <div>
        <div class="panel-body" style="padding-left: 200px;">
            <form class="form" action="" method="post">
                <div class="form-group" >
                    <label for="asal"></label>
                    <select id="asal" name="asal" class="form-control" required>
                    <option value="">Pilih Lokasi Asal</option>
                        <?php
                            $query = mysqli_query($conn,"select nama from peta");
                            while ($data = mysqli_fetch_array($query))
                            {
                            echo "<option value='$data[nama]'>".mystripslashes($data['nama'])."</option>";
                            }
                
                ?>
                </select>
                </div>
                
                <div class="form-group">
                    
                    <select id="tujuan" name="tujuan" class="form-control" required>
                    <option value="">Pilih Lokasi Tujuan</option>
                        <?php
                            $query = mysqli_query($conn,"select nama from peta");
                            while ($data = mysqli_fetch_array($query))
                            {
                            echo "<option value='$data[nama]'>".mystripslashes($data['nama'])."</option>";
                            }
                
                ?>
                </select>
                </div>
                </form>
                <button class="btn btn-primary btn-hitung" onclick="calcRoute()">Lihat</button>
        </div> 
    </div>
    <br/>
    <div id="hasildata"></div>
      <div class="col-md-7 text-center">
        <div id="map" style="height:700px;margin-left:-86px;width:1000px"></div>
        </div>
      </div>
    </section>
    <!-- END section -->	
</body>
</html>
