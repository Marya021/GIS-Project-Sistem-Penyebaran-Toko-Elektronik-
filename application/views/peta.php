<?php include "connect.php"; ?>

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
		
    var marker;
      function initialize() {
		  
		// Variabel untuk menyimpan informasi (desc)
		var infoWindow = new google.maps.InfoWindow;
		
		//  Variabel untuk menyimpan peta Roadmap
		var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
		
		// Pembuatan petanya
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              
        // Variabel untuk menyimpan batas kordinat
		var bounds = new google.maps.LatLngBounds();

		// Pengambilan data dari database
		<?php
			if(isset($_POST['asal'])){
				$query = mysqli_query($con, "select * from peta where kategori = '".$_POST['asal']."'");

			}else{
            $query = mysqli_query($con,"select * from peta");
        }
			while ($data = mysqli_fetch_array($query))
			{
				$nama = $data['nama'];
				$lat = $data['lat'];
                $lon = $data['lng'];
                $alamat = $data['alamat'];
                $file = $data['file'];

                $bs =base_url();
				
				echo ("addMarker($lat, $lon, '<center><img src=$bs/uploads/$file width=100 height=auto><br/><br/><b>$nama</b><br/><br/><p>$alamat</p></center>');\n");                        
			}
			
          ?>
		  
		// Proses membuat marker 
		function addMarker(lat, lng, info) {
			var lokasi = new google.maps.LatLng(lat, lng);
			bounds.extend(lokasi);
			var marker = new google.maps.Marker({
				map: map,
				position: lokasi
			});       
			map.fitBounds(bounds);
			bindInfoWindow(marker, map, infoWindow, info);
		 }
		
		// Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    
	</script>
	
</head>
<body onload="initialize()">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= base_url('home') ?>">
			Electronics Maps</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="clr1 active"><a href="<?= base_url('home/peta') ?>">Peta</a></li>
				<li class="clr2"><a href="<?= base_url('home/rute') ?>">Rute</a></li>
				<li class="clr3"><a href="<?= base_url('home/radius') ?>">Radius</a></li>
			</ul>
		</div>
	</div>
</nav>
</br></br></br></br>
<!--- Bagian Judul-->	

<section>
      <div>
        <div class="row justify-content-center mb-10">
          <div  class="col-md-11 text-center">
            <div>
              <div>
        <div class="panel-body" style="padding-left: 250px;">
            <form class="form" action="" method="post">
                <div class="form-group" >
                    <label for="asal"></label>
                    <select id="asal" name="asal" class="form-control" required>
                    <option value="">Pilih Toko</option>
                        <?php
                            $query = mysqli_query($con,"select distinct kategori from peta group by kategori");
                            while ($data = mysqli_fetch_array($query))
                            {
                            	
                            echo "<option value='$data[kategori]'>".$data['kategori']."</option>";
                            }
                
                ?>
				</select>  
			</div>
     	    <button type="submit" class="btn btn-primary mb-2">Submit</button>
		</form>
						                  

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Electronics Maps</div>
					<div class="panel-body">
						<div id="map-canvas" style="width: 100%; height: 500px;"></div>
					</div>
			</div>
		</div>	
	</div>

</body>
</html>
