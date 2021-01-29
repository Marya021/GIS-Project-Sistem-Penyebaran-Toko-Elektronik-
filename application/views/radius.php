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
    var marker;
      function initialize() {
      var pekanbaru=[
      new google.maps.LatLng( 0.528345 , 101.442475 ),
new google.maps.LatLng( 0.529847 , 101.442604 ),
new google.maps.LatLng( 0.530791 , 101.442733 ),
new google.maps.LatLng( 0.532057 , 101.442840 ),
new google.maps.LatLng( 0.532228 , 101.442883 ),
new google.maps.LatLng( 0.532271 , 101.444278 ),
new google.maps.LatLng( 0.532228 , 101.445308 ),
new google.maps.LatLng( 0.532228 , 101.447539 ),
new google.maps.LatLng( 0.532228 , 101.453762 ),
new google.maps.LatLng( 0.525105 , 101.453505 ),
new google.maps.LatLng( 0.525019 , 101.452303 ),
new google.maps.LatLng( 0.517552 , 101.452045 ),
new google.maps.LatLng( 0.510428 , 101.451788 ),
new google.maps.LatLng( 0.508883 , 101.451788 ),
new google.maps.LatLng( 0.507939 , 101.452389 ),
new google.maps.LatLng( 0.507167 , 101.450930 ),
new google.maps.LatLng( 0.513690 , 101.447496 ),
new google.maps.LatLng( 0.518496 , 101.447239 ),
new google.maps.LatLng( 0.518754 , 101.444664 ),
new google.maps.LatLng( 0.522358 , 101.442347 ),
new google.maps.LatLng( 0.528280 , 101.442518 ),
new google.maps.LatLng( 0.528345 , 101.442475 )];
      var limapuluh = [
new google.maps.LatLng(0.525276,101.453590),
new google.maps.LatLng(0.532228,101.453762),
new google.maps.LatLng(0.532228,101.447411),
new google.maps.LatLng(0.537636,101.447582),
new google.maps.LatLng(0.538108,101.448226),
new google.maps.LatLng(0.538751,101.448483),
new google.maps.LatLng(0.540468,101.449900),
new google.maps.LatLng(0.541326,101.450758),
new google.maps.LatLng(0.541584,101.451702),
new google.maps.LatLng(0.541584,101.452389),
new google.maps.LatLng(0.541412,101.452990),
new google.maps.LatLng(0.541154,101.453934),
new google.maps.LatLng(0.541240,101.455479),
new google.maps.LatLng(0.541755,101.457024),
new google.maps.LatLng(0.542442,101.458054),
new google.maps.LatLng(0.543128,101.458740),
new google.maps.LatLng(0.545188,101.458483),
new google.maps.LatLng(0.547248,101.458139),
new google.maps.LatLng(0.548707,101.457710),
new google.maps.LatLng(0.549737,101.456680),
new google.maps.LatLng(0.550595,101.456079),
new google.maps.LatLng(0.551282,101.455135),
new google.maps.LatLng(0.551625,101.454363),
new google.maps.LatLng(0.551711,101.453247),
new google.maps.LatLng(0.551025,101.452131),
new google.maps.LatLng(0.550166,101.451101),
new google.maps.LatLng(0.549909,101.449986),
new google.maps.LatLng(0.550252,101.449728),
new google.maps.LatLng(0.550381,101.449299),
new google.maps.LatLng(0.550853,101.448483),
new google.maps.LatLng(0.551582,101.447840),
new google.maps.LatLng(0.552226,101.448011),
new google.maps.LatLng(0.553342,101.448398),
new google.maps.LatLng(0.554200,101.448741),
new google.maps.LatLng(0.554930,101.449385),
new google.maps.LatLng(0.555015,101.450157),
new google.maps.LatLng(0.555101,101.451101),
new google.maps.LatLng(0.555230,101.452003),
new google.maps.LatLng(0.555702,101.452947),
new google.maps.LatLng(0.555874,101.453805),
new google.maps.LatLng(0.556045,101.454706),
new google.maps.LatLng(0.555316,101.455822),
new google.maps.LatLng(0.554844,101.456552),
new google.maps.LatLng(0.554286,101.457238),
new google.maps.LatLng(0.553256,101.458397),
new google.maps.LatLng(0.552655,101.459341),
new google.maps.LatLng(0.552312,101.460457),
new google.maps.LatLng(0.551883,101.461401),
new google.maps.LatLng(0.551454,101.461916),
new google.maps.LatLng(0.550595,101.462603),
new google.maps.LatLng(0.549394,101.463375),
new google.maps.LatLng(0.548536,101.464319),
new google.maps.LatLng(0.547677,101.465092),
new google.maps.LatLng(0.546819,101.466036),
new google.maps.LatLng(0.546304,101.466894),
new google.maps.LatLng(0.545789,101.468096),
new google.maps.LatLng(0.544759,101.467924),
new google.maps.LatLng(0.543815,101.468096),
new google.maps.LatLng(0.543043,101.468267),
new google.maps.LatLng(0.542270,101.468353),
new google.maps.LatLng(0.541240,101.468267),
new google.maps.LatLng(0.539953,101.468267),
new google.maps.LatLng(0.537979,101.467409),
new google.maps.LatLng(0.537292,101.467581),
new google.maps.LatLng(0.536176,101.467924),
new google.maps.LatLng(0.534288,101.467667),
new google.maps.LatLng(0.533173,101.467667),
new google.maps.LatLng(0.532486,101.467752),
new google.maps.LatLng(0.531971,101.467924),
new google.maps.LatLng(0.531456,101.468267),
new google.maps.LatLng(0.530684,101.468697),
new google.maps.LatLng(0.530169,101.468697),
new google.maps.LatLng(0.529568,101.468439),
new google.maps.LatLng(0.528366,101.467924),
new google.maps.LatLng(0.527336,101.468267),
new google.maps.LatLng(0.526650,101.467323),
new google.maps.LatLng(0.526049,101.466980),
new google.maps.LatLng(0.524847,101.467237),
new google.maps.LatLng(0.524933,101.466122),
new google.maps.LatLng(0.525191,101.453590)
];
      var sail=[new google.maps.LatLng( 0.52534 , 101.452560 ),
new google.maps.LatLng( 0.52244 , 101.452582 ),
new google.maps.LatLng( 0.52077 , 101.452346 ),
new google.maps.LatLng( 0.51765 , 101.452260 ),
new google.maps.LatLng( 0.51553 , 101.452174 ),
new google.maps.LatLng( 0.51351 , 101.452174 ),
new google.maps.LatLng( 0.51225 , 101.452131 ),
new google.maps.LatLng( 0.51143 , 101.452088 ),
new google.maps.LatLng( 0.51047 , 101.452024 ),
new google.maps.LatLng( 0.50978 , 101.451981 ),
new google.maps.LatLng( 0.50886 , 101.452088 ),
new google.maps.LatLng( 0.50785 , 101.452432 ),
new google.maps.LatLng( 0.50718 , 101.450737 ),
new google.maps.LatLng( 0.50626 , 101.451123 ),
new google.maps.LatLng( 0.50538 , 101.451659 ),
new google.maps.LatLng( 0.50472 , 101.452303 ),
new google.maps.LatLng( 0.50420 , 101.452925 ),
new google.maps.LatLng( 0.50371 , 101.453547 ),
new google.maps.LatLng( 0.50319 , 101.454041 ),
new google.maps.LatLng( 0.50285 , 101.454084 ),
new google.maps.LatLng( 0.50242 , 101.453912 ),
new google.maps.LatLng( 0.50208 , 101.453784 ),
new google.maps.LatLng( 0.50199 , 101.453741 ),
new google.maps.LatLng( 0.50171 , 101.454492 ),
new google.maps.LatLng( 0.50215 , 101.454599 ),
new google.maps.LatLng( 0.50244 , 101.454642 ),
new google.maps.LatLng( 0.50265 , 101.454706 ),
new google.maps.LatLng( 0.50287 , 101.454771 ),
new google.maps.LatLng( 0.50302 , 101.454803 ),
new google.maps.LatLng( 0.50328 , 101.454846 ),
new google.maps.LatLng( 0.50340 , 101.454899 ),
new google.maps.LatLng( 0.50360 , 101.455082 ),
new google.maps.LatLng( 0.50378 , 101.455157 ),
new google.maps.LatLng( 0.50403 , 101.455221 ),
new google.maps.LatLng( 0.50422 , 101.455318 ),
new google.maps.LatLng( 0.50445 , 101.455457 ),
new google.maps.LatLng( 0.50445 , 101.455640 ),
new google.maps.LatLng( 0.50453 , 101.455876 ),
new google.maps.LatLng( 0.50477 , 101.456047 ),
new google.maps.LatLng( 0.50502 , 101.456165 ),
new google.maps.LatLng( 0.50517 , 101.456219 ),
new google.maps.LatLng( 0.50525 , 101.456165 ),
new google.maps.LatLng( 0.50536 , 101.456198 ),
new google.maps.LatLng( 0.50545 , 101.456337 ),
new google.maps.LatLng( 0.50561 , 101.456455 ),
new google.maps.LatLng( 0.50580 , 101.456498 ),
new google.maps.LatLng( 0.50603 , 101.456777 ),
new google.maps.LatLng( 0.50636 , 101.456873 ),
new google.maps.LatLng( 0.50656 , 101.457088 ),
new google.maps.LatLng( 0.50667 , 101.457324 ),
new google.maps.LatLng( 0.50686 , 101.457678 ),
new google.maps.LatLng( 0.50707 , 101.457925 ),
new google.maps.LatLng( 0.50723 , 101.458204 ),
new google.maps.LatLng( 0.50744 , 101.458408 ),
new google.maps.LatLng( 0.50772 , 101.458536 ),
new google.maps.LatLng( 0.50787 , 101.458912 ),
new google.maps.LatLng( 0.50780 , 101.459116 ),
new google.maps.LatLng( 0.50780 , 101.459395 ),
new google.maps.LatLng( 0.50792 , 101.459684 ),
new google.maps.LatLng( 0.50799 , 101.459899 ),
new google.maps.LatLng( 0.50800 , 101.460382 ),
new google.maps.LatLng( 0.50802 , 101.460972 ),
new google.maps.LatLng( 0.50849 , 101.461830 ),
new google.maps.LatLng( 0.50887 , 101.462409 ),
new google.maps.LatLng( 0.50915 , 101.462903 ),
new google.maps.LatLng( 0.50935 , 101.463161 ),
new google.maps.LatLng( 0.50940 , 101.463354 ),
new google.maps.LatLng( 0.50969 , 101.463708 ),
new google.maps.LatLng( 0.50979 , 101.464137 ),
new google.maps.LatLng( 0.51005 , 101.464319 ),
new google.maps.LatLng( 0.51018 , 101.464502 ),
new google.maps.LatLng( 0.51018 , 101.464909 ),
new google.maps.LatLng( 0.51037 , 101.465210 ),
new google.maps.LatLng( 0.51063 , 101.465575 ),
new google.maps.LatLng( 0.51075 , 101.465800 ),
new google.maps.LatLng( 0.51083 , 101.466132 ),
new google.maps.LatLng( 0.51091 , 101.466368 ),
new google.maps.LatLng( 0.51107 , 101.466637 ),
new google.maps.LatLng( 0.51134 , 101.466980 ),
new google.maps.LatLng( 0.51165 , 101.467345 ),
new google.maps.LatLng( 0.51196 , 101.467677 ),
new google.maps.LatLng( 0.51215 , 101.467860 ),
new google.maps.LatLng( 0.51266 , 101.468021 ),
new google.maps.LatLng( 0.51297 , 101.468139 ),
new google.maps.LatLng( 0.51325 , 101.468203 ),
new google.maps.LatLng( 0.51346 , 101.468321 ),
new google.maps.LatLng( 0.51371 , 101.468461 ),
new google.maps.LatLng( 0.51380 , 101.468643 ),
new google.maps.LatLng( 0.51382 , 101.469169 ),
new google.maps.LatLng( 0.51390 , 101.469362 ),
new google.maps.LatLng( 0.51396 , 101.469651 ),
new google.maps.LatLng( 0.51422 , 101.469619 ),
new google.maps.LatLng( 0.51464 , 101.469351 ),
new google.maps.LatLng( 0.51493 , 101.469126 ),
new google.maps.LatLng( 0.51526 , 101.468922 ),
new google.maps.LatLng( 0.51562 , 101.469008 ),
new google.maps.LatLng( 0.51601 , 101.469051 ),
new google.maps.LatLng( 0.51649 , 101.469018 ),
new google.maps.LatLng( 0.51685 , 101.468954 ),
new google.maps.LatLng( 0.51720 , 101.468890 ),
new google.maps.LatLng( 0.51768 , 101.468697 ),
new google.maps.LatLng( 0.51807 , 101.468450 ),
new google.maps.LatLng( 0.51835 , 101.468107 ),
new google.maps.LatLng( 0.51867 , 101.467774 ),
new google.maps.LatLng( 0.51922 , 101.467602 ),
new google.maps.LatLng( 0.51976 , 101.467570 ),
new google.maps.LatLng( 0.52005 , 101.467538 ),
new google.maps.LatLng( 0.52040 , 101.467559 ),
new google.maps.LatLng( 0.52071 , 101.467484 ),
new google.maps.LatLng( 0.52096 , 101.467366 ),
new google.maps.LatLng( 0.52135 , 101.467173 ),
new google.maps.LatLng( 0.52162 , 101.467237 ),
new google.maps.LatLng( 0.52207 , 101.467366 ),
new google.maps.LatLng( 0.52242 , 101.467420 ),
new google.maps.LatLng( 0.52284 , 101.467527 ),
new google.maps.LatLng( 0.52321 , 101.467602 ),
new google.maps.LatLng( 0.52360 , 101.467484 ),
new google.maps.LatLng( 0.52395 , 101.467484 ),
new google.maps.LatLng( 0.52424 , 101.467495 ),
new google.maps.LatLng( 0.52447 , 101.467420 ),
new google.maps.LatLng( 0.52476 , 101.467431 ),
new google.maps.LatLng( 0.52483 , 101.465145 ),
new google.maps.LatLng( 0.52491 , 101.463085 ),
new google.maps.LatLng( 0.52500 , 101.460822 ),
new google.maps.LatLng( 0.52507 , 101.458397 ),
new google.maps.LatLng( 0.52512 , 101.457345 ),
new google.maps.LatLng( 0.52511 , 101.456069 ),
new google.maps.LatLng( 0.52513 , 101.454781 ),
new google.maps.LatLng( 0.52520 , 101.453644 ),
new google.maps.LatLng( 0.52535 , 101.452539 ),
new google.maps.LatLng( 0.52534 , 101.452560 )];
      var bukitraya=[new google.maps.LatLng( 0.422541 , 101.436810 ),
new google.maps.LatLng( 0.431896 , 101.443291 ),
new google.maps.LatLng( 0.437732 , 101.447067 ),
new google.maps.LatLng( 0.444169 , 101.449728 ),
new google.maps.LatLng( 0.447946 , 101.451273 ),
new google.maps.LatLng( 0.451121 , 101.452560 ),
new google.maps.LatLng( 0.451894 , 101.452732 ),
new google.maps.LatLng( 0.454125 , 101.452990 ),
new google.maps.LatLng( 0.457301 , 101.452560 ),
new google.maps.LatLng( 0.461421 , 101.451702 ),
new google.maps.LatLng( 0.462880 , 101.452732 ),
new google.maps.LatLng( 0.464768 , 101.454105 ),
new google.maps.LatLng( 0.467000 , 101.454363 ),
new google.maps.LatLng( 0.471119 , 101.454105 ),
new google.maps.LatLng( 0.476441 , 101.453934 ),
new google.maps.LatLng( 0.482878 , 101.454277 ),
new google.maps.LatLng( 0.487427 , 101.454535 ),
new google.maps.LatLng( 0.492147 , 101.454792 ),
new google.maps.LatLng( 0.495151 , 101.455135 ),
new google.maps.LatLng( 0.497211 , 101.455479 ),
new google.maps.LatLng( 0.499099 , 101.454792 ),
new google.maps.LatLng( 0.500129 , 101.453590 ),
new google.maps.LatLng( 0.500730 , 101.453075 ),
new google.maps.LatLng( 0.501931 , 101.453590 ),
new google.maps.LatLng( 0.501803 , 101.454406 ),
new google.maps.LatLng( 0.503476 , 101.454921 ),
new google.maps.LatLng( 0.504292 , 101.455350 ),
new google.maps.LatLng( 0.504549 , 101.455951 ),
new google.maps.LatLng( 0.504978 , 101.456165 ),
new google.maps.LatLng( 0.505322 , 101.456165 ),
new google.maps.LatLng( 0.505751 , 101.456552 ),
new google.maps.LatLng( 0.506008 , 101.456723 ),
new google.maps.LatLng( 0.506352 , 101.456766 ),
new google.maps.LatLng( 0.506609 , 101.457109 ),
new google.maps.LatLng( 0.506909 , 101.457624 ),
new google.maps.LatLng( 0.507339 , 101.458311 ),
new google.maps.LatLng( 0.507682 , 101.458611 ),
new google.maps.LatLng( 0.507768 , 101.459212 ),
new google.maps.LatLng( 0.507982 , 101.459813 ),
new google.maps.LatLng( 0.508068 , 101.460714 ),
new google.maps.LatLng( 0.508454 , 101.461658 ),
new google.maps.LatLng( 0.509227 , 101.462989 ),
new google.maps.LatLng( 0.509742 , 101.463890 ),
new google.maps.LatLng( 0.509785 , 101.464233 ),
new google.maps.LatLng( 0.510128 , 101.464276 ),
new google.maps.LatLng( 0.510257 , 101.465006 ),
new google.maps.LatLng( 0.510643 , 101.465650 ),
new google.maps.LatLng( 0.510900 , 101.466336 ),
new google.maps.LatLng( 0.511287 , 101.466937 ),
new google.maps.LatLng( 0.512145 , 101.467795 ),
new google.maps.LatLng( 0.513861 , 101.468568 ),
new google.maps.LatLng( 0.513947 , 101.469169 ),
new google.maps.LatLng( 0.514119 , 101.469598 ),
new google.maps.LatLng( 0.513518 , 101.469898 ),
new google.maps.LatLng( 0.513346 , 101.470413 ),
new google.maps.LatLng( 0.512917 , 101.470757 ),
new google.maps.LatLng( 0.512445 , 101.470885 ),
new google.maps.LatLng( 0.512145 , 101.471357 ),
new google.maps.LatLng( 0.511802 , 101.472087 ),
new google.maps.LatLng( 0.511501 , 101.472430 ),
new google.maps.LatLng( 0.510986 , 101.472645 ),
new google.maps.LatLng( 0.510557 , 101.473031 ),
new google.maps.LatLng( 0.510343 , 101.473374 ),
new google.maps.LatLng( 0.509699 , 101.473589 ),
new google.maps.LatLng( 0.509270 , 101.474104 ),
new google.maps.LatLng( 0.509184 , 101.474533 ),
new google.maps.LatLng( 0.509141 , 101.474962 ),
new google.maps.LatLng( 0.508798 , 101.475391 ),
new google.maps.LatLng( 0.508540 , 101.475735 ),
new google.maps.LatLng( 0.508283 , 101.475906 ),
new google.maps.LatLng( 0.508025 , 101.476378 ),
new google.maps.LatLng( 0.507725 , 101.476893 ),
new google.maps.LatLng( 0.507854 , 101.477537 ),
new google.maps.LatLng( 0.507296 , 101.477923 ),
new google.maps.LatLng( 0.507210 , 101.478438 ),
new google.maps.LatLng( 0.506523 , 101.478782 ),
new google.maps.LatLng( 0.505794 , 101.479211 ),
new google.maps.LatLng( 0.505021 , 101.479597 ),
new google.maps.LatLng( 0.504807 , 101.480498 ),
new google.maps.LatLng( 0.504249 , 101.480756 ),
new google.maps.LatLng( 0.503863 , 101.481056 ),
new google.maps.LatLng( 0.503433 , 101.481528 ),
new google.maps.LatLng( 0.502704 , 101.481743 ),
new google.maps.LatLng( 0.502532 , 101.481400 ),
new google.maps.LatLng( 0.501202 , 101.481271 ),
new google.maps.LatLng( 0.500129 , 101.481271 ),
new google.maps.LatLng( 0.499657 , 101.481099 ),
new google.maps.LatLng( 0.499099 , 101.480670 ),
new google.maps.LatLng( 0.498026 , 101.480284 ),
new google.maps.LatLng( 0.495709 , 101.480498 ),
new google.maps.LatLng( 0.495022 , 101.480241 ),
new google.maps.LatLng( 0.494379 , 101.479554 ),
new google.maps.LatLng( 0.493864 , 101.478953 ),
new google.maps.LatLng( 0.493263 , 101.478524 ),
new google.maps.LatLng( 0.492576 , 101.478310 ),
new google.maps.LatLng( 0.492061 , 101.477880 ),
new google.maps.LatLng( 0.491246 , 101.477580 ),
new google.maps.LatLng( 0.490388 , 101.477323 ),
new google.maps.LatLng( 0.489744 , 101.477280 ),
new google.maps.LatLng( 0.489229 , 101.477494 ),
new google.maps.LatLng( 0.488757 , 101.477880 ),
new google.maps.LatLng( 0.488242 , 101.477966 ),
new google.maps.LatLng( 0.487727 , 101.478353 ),
new google.maps.LatLng( 0.487384 , 101.478825 ),
new google.maps.LatLng( 0.486955 , 101.479297 ),
new google.maps.LatLng( 0.485753 , 101.479683 ),
new google.maps.LatLng( 0.484766 , 101.479855 ),
new google.maps.LatLng( 0.484466 , 101.480155 ),
new google.maps.LatLng( 0.484294 , 101.480713 ),
new google.maps.LatLng( 0.483822 , 101.481228 ),
new google.maps.LatLng( 0.482449 , 101.481829 ),
new google.maps.LatLng( 0.481934 , 101.482344 ),
new google.maps.LatLng( 0.481419 , 101.482859 ),
new google.maps.LatLng( 0.480990 , 101.483674 ),
new google.maps.LatLng( 0.480603 , 101.484404 ),
new google.maps.LatLng( 0.480389 , 101.484747 ),
new google.maps.LatLng( 0.479960 , 101.485219 ),
new google.maps.LatLng( 0.478758 , 101.485519 ),
new google.maps.LatLng( 0.478200 , 101.485949 ),
new google.maps.LatLng( 0.477857 , 101.485820 ),
new google.maps.LatLng( 0.476526 , 101.485734 ),
new google.maps.LatLng( 0.475754 , 101.486120 ),
new google.maps.LatLng( 0.474467 , 101.486378 ),
new google.maps.LatLng( 0.473909 , 101.486034 ),
new google.maps.LatLng( 0.472793 , 101.486378 ),
new google.maps.LatLng( 0.472621 , 101.486764 ),
new google.maps.LatLng( 0.471892 , 101.486936 ),
new google.maps.LatLng( 0.471420 , 101.487622 ),
new google.maps.LatLng( 0.470776 , 101.488523 ),
new google.maps.LatLng( 0.470476 , 101.488824 ),
new google.maps.LatLng( 0.469875 , 101.488781 ),
new google.maps.LatLng( 0.469360 , 101.488566 ),
new google.maps.LatLng( 0.468759 , 101.488695 ),
new google.maps.LatLng( 0.468158 , 101.488824 ),
new google.maps.LatLng( 0.467300 , 101.488738 ),
new google.maps.LatLng( 0.466528 , 101.488523 ),
new google.maps.LatLng( 0.465068 , 101.488438 ),
new google.maps.LatLng( 0.464296 , 101.488008 ),
new google.maps.LatLng( 0.463180 , 101.488609 ),
new google.maps.LatLng( 0.462923 , 101.489124 ),
new google.maps.LatLng( 0.462708 , 101.489682 ),
new google.maps.LatLng( 0.462107 , 101.489940 ),
new google.maps.LatLng( 0.461378 , 101.489983 ),
new google.maps.LatLng( 0.460906 , 101.490369 ),
new google.maps.LatLng( 0.460434 , 101.490283 ),
new google.maps.LatLng( 0.460090 , 101.490026 ),
new google.maps.LatLng( 0.459575 , 101.489854 ),
new google.maps.LatLng( 0.459447 , 101.490240 ),
new google.maps.LatLng( 0.458760 , 101.490583 ),
new google.maps.LatLng( 0.458074 , 101.490927 ),
new google.maps.LatLng( 0.456786 , 101.492472 ),
new google.maps.LatLng( 0.455799 , 101.492772 ),
new google.maps.LatLng( 0.454640 , 101.494832 ),
new google.maps.LatLng( 0.454040 , 101.495562 ),
new google.maps.LatLng( 0.452924 , 101.496763 ),
new google.maps.LatLng( 0.446100 , 101.505561 ),
new google.maps.LatLng( 0.445371 , 101.501656 ),
new google.maps.LatLng( 0.446100 , 101.498308 ),
new google.maps.LatLng( 0.446658 , 101.495175 ),
new google.maps.LatLng( 0.450778 , 101.490369 ),
new google.maps.LatLng( 0.454898 , 101.476722 ),
new google.maps.LatLng( 0.448632 , 101.471529 ),
new google.maps.LatLng( 0.447989 , 101.471143 ),
new google.maps.LatLng( 0.447002 , 101.470284 ),
new google.maps.LatLng( 0.445671 , 101.468868 ),
new google.maps.LatLng( 0.444556 , 101.467924 ),
new google.maps.LatLng( 0.444255 , 101.467667 ),
new google.maps.LatLng( 0.443869 , 101.467624 ),
new google.maps.LatLng( 0.443397 , 101.466122 ),
new google.maps.LatLng( 0.442882 , 101.465220 ),
new google.maps.LatLng( 0.442582 , 101.465049 ),
new google.maps.LatLng( 0.441852 , 101.465263 ),
new google.maps.LatLng( 0.441809 , 101.463976 ),
new google.maps.LatLng( 0.441637 , 101.463976 ),
new google.maps.LatLng( 0.441680 , 101.463547 ),
new google.maps.LatLng( 0.440350 , 101.463246 ),
new google.maps.LatLng( 0.439749 , 101.462088 ),
new google.maps.LatLng( 0.440221 , 101.460843 ),
new google.maps.LatLng( 0.440350 , 101.460843 ),
new google.maps.LatLng( 0.440650 , 101.459470 ),
new google.maps.LatLng( 0.441037 , 101.459341 ),
new google.maps.LatLng( 0.441122 , 101.459126 ),
new google.maps.LatLng( 0.440522 , 101.458783 ),
new google.maps.LatLng( 0.440822 , 101.458225 ),
new google.maps.LatLng( 0.440650 , 101.457539 ),
new google.maps.LatLng( 0.440994 , 101.456294 ),
new google.maps.LatLng( 0.440822 , 101.456079 ),
new google.maps.LatLng( 0.441552 , 101.454792 ),
new google.maps.LatLng( 0.442195 , 101.455007 ),
new google.maps.LatLng( 0.442324 , 101.454535 ),
new google.maps.LatLng( 0.442796 , 101.454577 ),
new google.maps.LatLng( 0.442839 , 101.454277 ),
new google.maps.LatLng( 0.442582 , 101.453590 ),
new google.maps.LatLng( 0.442281 , 101.453419 ),
new google.maps.LatLng( 0.441938 , 101.453462 ),
new google.maps.LatLng( 0.441423 , 101.453075 ),
new google.maps.LatLng( 0.440822 , 101.452732 ),
new google.maps.LatLng( 0.439964 , 101.452303 ),
new google.maps.LatLng( 0.439663 , 101.451960 ),
new google.maps.LatLng( 0.439663 , 101.451445 ),
new google.maps.LatLng( 0.439191 , 101.451187 ),
new google.maps.LatLng( 0.438505 , 101.450930 ),
new google.maps.LatLng( 0.438033 , 101.450973 ),
new google.maps.LatLng( 0.437604 , 101.450887 ),
new google.maps.LatLng( 0.437046 , 101.451058 ),
new google.maps.LatLng( 0.436659 , 101.451144 ),
new google.maps.LatLng( 0.435930 , 101.451058 ),
new google.maps.LatLng( 0.435114 , 101.450844 ),
new google.maps.LatLng( 0.434256 , 101.450372 ),
new google.maps.LatLng( 0.433913 , 101.449728 ),
new google.maps.LatLng( 0.433784 , 101.449084 ),
new google.maps.LatLng( 0.433698 , 101.448655 ),
new google.maps.LatLng( 0.433655 , 101.448355 ),
new google.maps.LatLng( 0.433140 , 101.447926 ),
new google.maps.LatLng( 0.432797 , 101.447668 ),
new google.maps.LatLng( 0.432368 , 101.447411 ),
new google.maps.LatLng( 0.431810 , 101.447282 ),
new google.maps.LatLng( 0.431295 , 101.447453 ),
new google.maps.LatLng( 0.431038 , 101.448011 ),
new google.maps.LatLng( 0.430780 , 101.448398 ),
new google.maps.LatLng( 0.430523 , 101.448483 ),
new google.maps.LatLng( 0.430179 , 101.448398 ),
new google.maps.LatLng( 0.429664 , 101.448183 ),
new google.maps.LatLng( 0.429192 , 101.448183 ),
new google.maps.LatLng( 0.428592 , 101.448183 ),
new google.maps.LatLng( 0.427862 , 101.448140 ),
new google.maps.LatLng( 0.427605 , 101.447797 ),
new google.maps.LatLng( 0.427175 , 101.447411 ),
new google.maps.LatLng( 0.427132 , 101.447282 ),
new google.maps.LatLng( 0.426703 , 101.447153 ),
new google.maps.LatLng( 0.425630 , 101.447282 ),
new google.maps.LatLng( 0.425073 , 101.447067 ),
new google.maps.LatLng( 0.424429 , 101.446810 ),
new google.maps.LatLng( 0.424343 , 101.446552 ),
new google.maps.LatLng( 0.423742 , 101.446638 ),
new google.maps.LatLng( 0.423056 , 101.446810 ),
new google.maps.LatLng( 0.422798 , 101.446981 ),
new google.maps.LatLng( 0.422541 , 101.446724 ),
new google.maps.LatLng( 0.422197 , 101.446295 ),
new google.maps.LatLng( 0.421854 , 101.445780 ),
new google.maps.LatLng( 0.421468 , 101.445394 ),
new google.maps.LatLng( 0.420567 , 101.446853 ),
new google.maps.LatLng( 0.420180 , 101.447411 ),
new google.maps.LatLng( 0.419923 , 101.448054 ),
new google.maps.LatLng( 0.419708 , 101.448569 ),
new google.maps.LatLng( 0.419537 , 101.448741 ),
new google.maps.LatLng( 0.419022 , 101.448526 ),
new google.maps.LatLng( 0.418249 , 101.448097 ),
new google.maps.LatLng( 0.417305 , 101.447539 ),
new google.maps.LatLng( 0.416962 , 101.447453 ),
new google.maps.LatLng( 0.417176 , 101.446896 ),
new google.maps.LatLng( 0.417391 , 101.446209 ),
new google.maps.LatLng( 0.417606 , 101.445737 ),
new google.maps.LatLng( 0.417520 , 101.445050 ),
new google.maps.LatLng( 0.417434 , 101.444578 ),
new google.maps.LatLng( 0.417477 , 101.444364 ),
new google.maps.LatLng( 0.418078 , 101.443162 ),
new google.maps.LatLng( 0.418807 , 101.441917 ),
new google.maps.LatLng( 0.419236 , 101.441145 ),
new google.maps.LatLng( 0.419537 , 101.440201 ),
new google.maps.LatLng( 0.419923 , 101.439557 ),
new google.maps.LatLng( 0.420352 , 101.439385 ),
new google.maps.LatLng( 0.420953 , 101.439385 ),
new google.maps.LatLng( 0.421339 , 101.438999 ),
new google.maps.LatLng( 0.421554 , 101.438441 ),
new google.maps.LatLng( 0.422026 , 101.437712 ),
new google.maps.LatLng( 0.422519 , 101.436800 ),
new google.maps.LatLng( 0.422541 , 101.436810 )];
      var tampan=[
      new google.maps.LatLng( 0.500558 , 101.418915 ),
new google.maps.LatLng( 0.497640 , 101.394367 ),
new google.maps.LatLng( 0.502618 , 101.384754 ),
new google.maps.LatLng( 0.499357 , 101.363468 ),
new google.maps.LatLng( 0.498756 , 101.362224 ),
new google.maps.LatLng( 0.497769 , 101.359305 ),
new google.maps.LatLng( 0.499872 , 101.358318 ),
new google.maps.LatLng( 0.503133 , 101.357460 ),
new google.maps.LatLng( 0.500730 , 101.354370 ),
new google.maps.LatLng( 0.494894 , 101.351624 ),
new google.maps.LatLng( 0.494679 , 101.351323 ),
new google.maps.LatLng( 0.493606 , 101.350293 ),
new google.maps.LatLng( 0.490259 , 101.348877 ),
new google.maps.LatLng( 0.484766 , 101.348190 ),
new google.maps.LatLng( 0.478930 , 101.349220 ),
new google.maps.LatLng( 0.474467 , 101.351624 ),
new google.maps.LatLng( 0.472750 , 101.354713 ),
new google.maps.LatLng( 0.471720 , 101.357117 ),
new google.maps.LatLng( 0.466227 , 101.358147 ),
new google.maps.LatLng( 0.461421 , 101.359863 ),
new google.maps.LatLng( 0.441165 , 101.362610 ),
new google.maps.LatLng( 0.434299 , 101.365700 ),
new google.maps.LatLng( 0.431896 , 101.367416 ),
new google.maps.LatLng( 0.432926 , 101.372566 ),
new google.maps.LatLng( 0.434642 , 101.381836 ),
new google.maps.LatLng( 0.433956 , 101.385269 ),
new google.maps.LatLng( 0.432926 , 101.389046 ),
new google.maps.LatLng( 0.435672 , 101.390762 ),
new google.maps.LatLng( 0.434299 , 101.395912 ),
new google.maps.LatLng( 0.431896 , 101.401062 ),
new google.maps.LatLng( 0.431896 , 101.403122 ),
new google.maps.LatLng( 0.430866 , 101.406898 ),
new google.maps.LatLng( 0.428806 , 101.412392 ),
new google.maps.LatLng( 0.426060 , 101.415482 ),
new google.maps.LatLng( 0.425030 , 101.420975 ),
new google.maps.LatLng( 0.423656 , 101.427841 ),
new google.maps.LatLng( 0.423313 , 101.433678 ),
new google.maps.LatLng( 0.420910 , 101.436081 ),
new google.maps.LatLng( 0.423313 , 101.437454 ),
new google.maps.LatLng( 0.425716 , 101.433334 ),
new google.maps.LatLng( 0.429836 , 101.428528 ),
new google.maps.LatLng( 0.433956 , 101.425438 ),
new google.maps.LatLng( 0.437732 , 101.422348 ),
new google.maps.LatLng( 0.447345 , 101.418228 ),
new google.maps.LatLng( 0.464167 , 101.418228 ),
new google.maps.LatLng( 0.475153 , 101.418228 ),
new google.maps.LatLng( 0.487512 , 101.418571 ),
new google.maps.LatLng( 0.499872 , 101.418571 ),
new google.maps.LatLng( 0.500558 , 101.418915 )];
      var payungsekaki=[
      new google.maps.LatLng( 0.554028 , 101.374540 ),
new google.maps.LatLng( 0.553685 , 101.373982 ),
new google.maps.LatLng( 0.552827 , 101.373382 ),
new google.maps.LatLng( 0.552226 , 101.373382 ),
new google.maps.LatLng( 0.550853 , 101.373467 ),
new google.maps.LatLng( 0.550338 , 101.373553 ),
new google.maps.LatLng( 0.549651 , 101.373167 ),
new google.maps.LatLng( 0.549222 , 101.372910 ),
new google.maps.LatLng( 0.548707 , 101.372695 ),
new google.maps.LatLng( 0.548707 , 101.372051 ),
new google.maps.LatLng( 0.548707 , 101.371880 ),
new google.maps.LatLng( 0.548278 , 101.371922 ),
new google.maps.LatLng( 0.548149 , 101.371450 ),
new google.maps.LatLng( 0.547849 , 101.371150 ),
new google.maps.LatLng( 0.547549 , 101.370850 ),
new google.maps.LatLng( 0.547334 , 101.370721 ),
new google.maps.LatLng( 0.546991 , 101.370764 ),
new google.maps.LatLng( 0.546562 , 101.370506 ),
new google.maps.LatLng( 0.545832 , 101.370678 ),
new google.maps.LatLng( 0.545145 , 101.371150 ),
new google.maps.LatLng( 0.544716 , 101.371021 ),
new google.maps.LatLng( 0.543901 , 101.370506 ),
new google.maps.LatLng( 0.543429 , 101.369905 ),
new google.maps.LatLng( 0.543086 , 101.369004 ),
new google.maps.LatLng( 0.542528 , 101.368103 ),
new google.maps.LatLng( 0.541498 , 101.367245 ),
new google.maps.LatLng( 0.541026 , 101.367030 ),
new google.maps.LatLng( 0.540511 , 101.367116 ),
new google.maps.LatLng( 0.539910 , 101.366944 ),
new google.maps.LatLng( 0.539309 , 101.366515 ),
new google.maps.LatLng( 0.538665 , 101.366343 ),
new google.maps.LatLng( 0.538151 , 101.365871 ),
new google.maps.LatLng( 0.537464 , 101.365571 ),
new google.maps.LatLng( 0.499786 , 101.365442 ),
new google.maps.LatLng( 0.500816 , 101.372824 ),
new google.maps.LatLng( 0.502103 , 101.381750 ),
new google.maps.LatLng( 0.502704 , 101.384754 ),
new google.maps.LatLng( 0.497468 , 101.394196 ),
new google.maps.LatLng( 0.500730 , 101.419344 ),
new google.maps.LatLng( 0.504850 , 101.432819 ),
new google.maps.LatLng( 0.511930 , 101.430416 ),
new google.maps.LatLng( 0.513132 , 101.430244 ),
new google.maps.LatLng( 0.513733 , 101.430631 ),
new google.maps.LatLng( 0.514677 , 101.430845 ),
new google.maps.LatLng( 0.515192 , 101.431017 ),
new google.maps.LatLng( 0.516007 , 101.431274 ),
new google.maps.LatLng( 0.516822 , 101.431317 ),
new google.maps.LatLng( 0.517895 , 101.431403 ),
new google.maps.LatLng( 0.518711 , 101.431661 ),
new google.maps.LatLng( 0.519397 , 101.431725 ),
new google.maps.LatLng( 0.519998 , 101.431918 ),
new google.maps.LatLng( 0.520577 , 101.432240 ),
new google.maps.LatLng( 0.521114 , 101.432283 ),
new google.maps.LatLng( 0.521607 , 101.432047 ),
new google.maps.LatLng( 0.521951 , 101.431489 ),
new google.maps.LatLng( 0.522315 , 101.430717 ),
new google.maps.LatLng( 0.522444 , 101.430309 ),
new google.maps.LatLng( 0.523774 , 101.429687 ),
new google.maps.LatLng( 0.524654 , 101.429172 ),
new google.maps.LatLng( 0.525040 , 101.428978 ),
new google.maps.LatLng( 0.525512 , 101.428249 ),
new google.maps.LatLng( 0.526221 , 101.428099 ),
new google.maps.LatLng( 0.526607 , 101.428077 ),
new google.maps.LatLng( 0.527272 , 101.427691 ),
new google.maps.LatLng( 0.528237 , 101.427734 ),
new google.maps.LatLng( 0.531113 , 101.427755 ),
new google.maps.LatLng( 0.535147 , 101.427519 ),
new google.maps.LatLng( 0.537593 , 101.427755 ),
new google.maps.LatLng( 0.538558 , 101.427755 ),
new google.maps.LatLng( 0.539588 , 101.427884 ),
new google.maps.LatLng( 0.540554 , 101.428120 ),
new google.maps.LatLng( 0.540768 , 101.428185 ),
new google.maps.LatLng( 0.542077 , 101.428034 ),
new google.maps.LatLng( 0.542871 , 101.428249 ),
new google.maps.LatLng( 0.543343 , 101.428549 ),
new google.maps.LatLng( 0.543879 , 101.428850 ),
new google.maps.LatLng( 0.544394 , 101.429214 ),
new google.maps.LatLng( 0.544652 , 101.429322 ),
new google.maps.LatLng( 0.544738 , 101.428592 ),
new google.maps.LatLng( 0.544931 , 101.427755 ),
new google.maps.LatLng( 0.544995 , 101.427369 ),
new google.maps.LatLng( 0.544995 , 101.426876 ),
new google.maps.LatLng( 0.545274 , 101.426339 ),
new google.maps.LatLng( 0.545381 , 101.426103 ),
new google.maps.LatLng( 0.545339 , 101.425846 ),
new google.maps.LatLng( 0.545682 , 101.424665 ),
new google.maps.LatLng( 0.546068 , 101.424150 ),
new google.maps.LatLng( 0.546154 , 101.423850 ),
new google.maps.LatLng( 0.546368 , 101.423786 ),
new google.maps.LatLng( 0.546647 , 101.423163 ),
new google.maps.LatLng( 0.547012 , 101.422520 ),
new google.maps.LatLng( 0.547634 , 101.422112 ),
new google.maps.LatLng( 0.548321 , 101.421876 ),
new google.maps.LatLng( 0.549115 , 101.422005 ),
new google.maps.LatLng( 0.549844 , 101.422241 ),
new google.maps.LatLng( 0.550660 , 101.422412 ),
new google.maps.LatLng( 0.551303 , 101.422112 ),
new google.maps.LatLng( 0.551582 , 101.421618 ),
new google.maps.LatLng( 0.551668 , 101.420996 ),
new google.maps.LatLng( 0.551518 , 101.420095 ),
new google.maps.LatLng( 0.551218 , 101.419065 ),
new google.maps.LatLng( 0.550316 , 101.418228 ),
new google.maps.LatLng( 0.549115 , 101.416898 ),
new google.maps.LatLng( 0.548600 , 101.415482 ),
new google.maps.LatLng( 0.548407 , 101.415160 ),
new google.maps.LatLng( 0.548149 , 101.413250 ),
new google.maps.LatLng( 0.549308 , 101.410589 ),
new google.maps.LatLng( 0.550252 , 101.408958 ),
new google.maps.LatLng( 0.549823 , 101.405268 ),
new google.maps.LatLng( 0.550767 , 101.402607 ),
new google.maps.LatLng( 0.551539 , 101.402092 ),
new google.maps.LatLng( 0.551368 , 101.400719 ),
new google.maps.LatLng( 0.550338 , 101.399517 ),
new google.maps.LatLng( 0.548965 , 101.398659 ),
new google.maps.LatLng( 0.547849 , 101.397371 ),
new google.maps.LatLng( 0.548536 , 101.395397 ),
new google.maps.LatLng( 0.550166 , 101.394539 ),
new google.maps.LatLng( 0.551025 , 101.394024 ),
new google.maps.LatLng( 0.551539 , 101.393251 ),
new google.maps.LatLng( 0.552140 , 101.392822 ),
new google.maps.LatLng( 0.553943 , 101.393509 ),
new google.maps.LatLng( 0.555316 , 101.394367 ),
new google.maps.LatLng( 0.556088 , 101.395397 ),
new google.maps.LatLng( 0.557891 , 101.395397 ),
new google.maps.LatLng( 0.558749 , 101.394024 ),
new google.maps.LatLng( 0.558921 , 101.392908 ),
new google.maps.LatLng( 0.557719 , 101.392479 ),
new google.maps.LatLng( 0.556432 , 101.392822 ),
new google.maps.LatLng( 0.554973 , 101.392050 ),
new google.maps.LatLng( 0.552827 , 101.391621 ),
new google.maps.LatLng( 0.551368 , 101.390162 ),
new google.maps.LatLng( 0.550338 , 101.388273 ),
new google.maps.LatLng( 0.548621 , 101.386728 ),
new google.maps.LatLng( 0.547248 , 101.385441 ),
new google.maps.LatLng( 0.547248 , 101.384497 ),
new google.maps.LatLng( 0.549480 , 101.381578 ),
new google.maps.LatLng( 0.550166 , 101.381149 ),
new google.maps.LatLng( 0.551539 , 101.381321 ),
new google.maps.LatLng( 0.553514 , 101.381578 ),
new google.maps.LatLng( 0.554887 , 101.382866 ),
new google.maps.LatLng( 0.556174 , 101.383724 ),
new google.maps.LatLng( 0.558320 , 101.384840 ),
new google.maps.LatLng( 0.558921 , 101.385269 ),
new google.maps.LatLng( 0.559092 , 101.383896 ),
new google.maps.LatLng( 0.558406 , 101.382780 ),
new google.maps.LatLng( 0.558234 , 101.381664 ),
new google.maps.LatLng( 0.557891 , 101.380377 ),
new google.maps.LatLng( 0.558062 , 101.379089 ),
new google.maps.LatLng( 0.557118 , 101.377888 ),
new google.maps.LatLng( 0.555573 , 101.377544 ),
new google.maps.LatLng( 0.554200 , 101.377373 ),
new google.maps.LatLng( 0.552569 , 101.377201 ),
new google.maps.LatLng( 0.552226 , 101.376343 ),
new google.maps.LatLng( 0.552827 , 101.375313 ),
new google.maps.LatLng( 0.553857 , 101.374626 ),
new google.maps.LatLng( 0.554028 , 101.374540 )];
      var sukajadi=[
new google.maps.LatLng( 0.504828,101.432798 ),
new google.maps.LatLng( 0.506437,101.432240 ),
new google.maps.LatLng( 0.508025,101.431682 ),
new google.maps.LatLng( 0.510149,101.431017 ),
new google.maps.LatLng( 0.511866,101.430438 ),
new google.maps.LatLng( 0.512209,101.430395 ),
new google.maps.LatLng( 0.512660,101.430373 ),
new google.maps.LatLng( 0.513110,101.430287 ),
new google.maps.LatLng( 0.513346,101.430373 ),
new google.maps.LatLng( 0.513647,101.430588 ),
new google.maps.LatLng( 0.514291,101.430824 ),
new google.maps.LatLng( 0.514570,101.430888 ),
new google.maps.LatLng( 0.514870,101.430931 ),
new google.maps.LatLng( 0.515299,101.431103 ),
new google.maps.LatLng( 0.515771,101.431189 ),
new google.maps.LatLng( 0.516694,101.431296 ),
new google.maps.LatLng( 0.517638,101.431360 ),
new google.maps.LatLng( 0.518217,101.431446 ),
new google.maps.LatLng( 0.518754,101.431682 ),
new google.maps.LatLng( 0.519462,101.431746 ),
new google.maps.LatLng( 0.520256,101.432004 ),
new google.maps.LatLng( 0.520749,101.432283 ),
new google.maps.LatLng( 0.521500,101.432133 ),
new google.maps.LatLng( 0.521779,101.431854 ),
new google.maps.LatLng( 0.522015,101.431296 ),
new google.maps.LatLng( 0.522208,101.430781 ),
new google.maps.LatLng( 0.522358,101.430588 ),
new google.maps.LatLng( 0.522509,101.430244 ),
new google.maps.LatLng( 0.523710,101.429708 ),
new google.maps.LatLng( 0.524461,101.429257 ),
new google.maps.LatLng( 0.525191,101.428871 ),
new google.maps.LatLng( 0.525727,101.428592 ),
new google.maps.LatLng( 0.526392,101.428206 ),
new google.maps.LatLng( 0.526886,101.428034 ),
new google.maps.LatLng( 0.527508,101.427691 ),
new google.maps.LatLng( 0.528152,101.427691 ),
new google.maps.LatLng( 0.528280,101.427691 ),
new google.maps.LatLng( 0.528259,101.428828 ),
new google.maps.LatLng( 0.528495,101.428893 ),
new google.maps.LatLng( 0.528538,101.429408 ),
new google.maps.LatLng( 0.528538,101.431360 ),
new google.maps.LatLng( 0.528474,101.431317 ),
new google.maps.LatLng( 0.528559,101.432433 ),
new google.maps.LatLng( 0.528495,101.432412 ),
new google.maps.LatLng( 0.528581,101.434278 ),
new google.maps.LatLng( 0.528817,101.434321 ),
new google.maps.LatLng( 0.528838,101.434536 ),
new google.maps.LatLng( 0.528667,101.434579 ),
new google.maps.LatLng( 0.528538,101.434557 ),
new google.maps.LatLng( 0.528409,101.442497 ),
new google.maps.LatLng( 0.524139,101.442175 ),
new google.maps.LatLng( 0.523002,101.442132 ),
new google.maps.LatLng( 0.522294,101.442261 ),
new google.maps.LatLng( 0.519612,101.444063 ),
new google.maps.LatLng( 0.518732,101.444471 ),
new google.maps.LatLng( 0.518625,101.447132 ),
new google.maps.LatLng( 0.518646,101.447217 ),
new google.maps.LatLng( 0.517745,101.447303 ),
new google.maps.LatLng( 0.517273,101.447453 ),
new google.maps.LatLng( 0.514441,101.447453 ),
new google.maps.LatLng( 0.510471,101.449213 ),
new google.maps.LatLng( 0.504850,101.432862 ),
new google.maps.LatLng( 0.504828,101.432798 )
];

      var marpoyandamai=[
      new google.maps.LatLng( 0.500558,101.419258 ),
new google.maps.LatLng( 0.470089,101.418228 ),
new google.maps.LatLng( 0.447088,101.418314 ),
new google.maps.LatLng( 0.442796,101.420288 ),
new google.maps.LatLng( 0.439020,101.422434 ),
new google.maps.LatLng( 0.431209,101.427155 ),
new google.maps.LatLng( 0.430437,101.427584 ),
new google.maps.LatLng( 0.428720,101.430330 ),
new google.maps.LatLng( 0.427175,101.431360 ),
new google.maps.LatLng( 0.426403,101.432047 ),
new google.maps.LatLng( 0.425287,101.434793 ),
new google.maps.LatLng( 0.423914,101.437540 ),
new google.maps.LatLng( 0.425545,101.438656 ),
new google.maps.LatLng( 0.428205,101.440544 ),
new google.maps.LatLng( 0.432239,101.443377 ),
new google.maps.LatLng( 0.434042,101.445007 ),
new google.maps.LatLng( 0.437475,101.446981 ),
new google.maps.LatLng( 0.441509,101.448441 ),
new google.maps.LatLng( 0.444684,101.449814 ),
new google.maps.LatLng( 0.448804,101.451530 ),
new google.maps.LatLng( 0.451808,101.452904 ),
new google.maps.LatLng( 0.455842,101.452818 ),
new google.maps.LatLng( 0.459103,101.452389 ),
new google.maps.LatLng( 0.460906,101.452045 ),
new google.maps.LatLng( 0.461163,101.452045 ),
new google.maps.LatLng( 0.463652,101.453333 ),
new google.maps.LatLng( 0.465111,101.454363 ),
new google.maps.LatLng( 0.470690,101.454020 ),
new google.maps.LatLng( 0.475497,101.454105 ),
new google.maps.LatLng( 0.482706,101.454277 ),
new google.maps.LatLng( 0.494379,101.454878 ),
new google.maps.LatLng( 0.496953,101.455564 ),
new google.maps.LatLng( 0.498670,101.454964 ),
new google.maps.LatLng( 0.499700,101.454020 ),
new google.maps.LatLng( 0.500558,101.453161 ),
new google.maps.LatLng( 0.502532,101.454020 ),
new google.maps.LatLng( 0.503305,101.453934 ),
new google.maps.LatLng( 0.505021,101.452131 ),
new google.maps.LatLng( 0.506223,101.451530 ),
new google.maps.LatLng( 0.507596,101.450672 ),
new google.maps.LatLng( 0.510171,101.449213 ),
new google.maps.LatLng( 0.509313,101.446209 ),
new google.maps.LatLng( 0.506909,101.439085 ),
new google.maps.LatLng( 0.503476,101.428785 ),
new google.maps.LatLng( 0.500730,101.419344 ),
new google.maps.LatLng( 0.500558,101.419258 )

];

        var senapelan=[
      new google.maps.LatLng( 0.544673,101.429429 ),
new google.maps.LatLng( 0.543665,101.428721 ),
new google.maps.LatLng( 0.543086,101.428463 ),
new google.maps.LatLng( 0.542270,101.428077 ),
new google.maps.LatLng( 0.541498,101.428077 ),
new google.maps.LatLng( 0.540768,101.428206 ),
new google.maps.LatLng( 0.539245,101.427798 ),
new google.maps.LatLng( 0.537743,101.427691 ),
new google.maps.LatLng( 0.537400,101.427691 ),
new google.maps.LatLng( 0.535940,101.427541 ),
new google.maps.LatLng( 0.535254,101.427605 ),
new google.maps.LatLng( 0.534589,101.427562 ),
new google.maps.LatLng( 0.532937,101.427627 ),
new google.maps.LatLng( 0.531027,101.427734 ),
new google.maps.LatLng( 0.528280,101.427691 ),
new google.maps.LatLng( 0.528259,101.428485 ),
new google.maps.LatLng( 0.528452,101.428463 ),
new google.maps.LatLng( 0.528388,101.430759 ),
new google.maps.LatLng( 0.528237,101.430717 ),
new google.maps.LatLng( 0.528280,101.433098 ),
new google.maps.LatLng( 0.528495,101.433184 ),
new google.maps.LatLng( 0.528495,101.437347 ),
new google.maps.LatLng( 0.528409,101.442497 ),
new google.maps.LatLng( 0.532271,101.442862 ),
new google.maps.LatLng( 0.532207,101.447582 ),
new google.maps.LatLng( 0.537636,101.447582 ),
new google.maps.LatLng( 0.538279,101.447432 ),
new google.maps.LatLng( 0.538558,101.447561 ),
new google.maps.LatLng( 0.538730,101.447453 ),
new google.maps.LatLng( 0.538837,101.447217 ),
new google.maps.LatLng( 0.538816,101.446896 ),
new google.maps.LatLng( 0.538644,101.446509 ),
new google.maps.LatLng( 0.538644,101.446187 ),
new google.maps.LatLng( 0.538773,101.445737 ),
new google.maps.LatLng( 0.539030,101.445200 ),
new google.maps.LatLng( 0.539288,101.444814 ),
new google.maps.LatLng( 0.539438,101.444600 ),
new google.maps.LatLng( 0.539631,101.444299 ),
new google.maps.LatLng( 0.539824,101.443655 ),
new google.maps.LatLng( 0.540210,101.442540 ),
new google.maps.LatLng( 0.540446,101.441596 ),
new google.maps.LatLng( 0.540532,101.440287 ),
new google.maps.LatLng( 0.540661,101.439106 ),
new google.maps.LatLng( 0.540747,101.437733 ),
new google.maps.LatLng( 0.540833,101.436810 ),
new google.maps.LatLng( 0.541262,101.435437 ),
new google.maps.LatLng( 0.542056,101.433849 ),
new google.maps.LatLng( 0.542957,101.432626 ),
new google.maps.LatLng( 0.543772,101.431854 ),
new google.maps.LatLng( 0.544330,101.431167 ),
new google.maps.LatLng( 0.544716,101.429472 ),
new google.maps.LatLng( 0.544673,101.429429 )];

      var tenayanraya=[
     new google.maps.LatLng( 0.545274 , 101.468267 ),
new google.maps.LatLng( 0.544673 , 101.468096 ),
new google.maps.LatLng( 0.543300 , 101.468611 ),
new google.maps.LatLng( 0.542270 , 101.468439 ),
new google.maps.LatLng( 0.540382 , 101.468611 ),
new google.maps.LatLng( 0.539781 , 101.468353 ),
new google.maps.LatLng( 0.539095 , 101.468267 ),
new google.maps.LatLng( 0.538408 , 101.467838 ),
new google.maps.LatLng( 0.537121 , 101.468010 ),
new google.maps.LatLng( 0.535747 , 101.468010 ),
new google.maps.LatLng( 0.533430 , 101.467924 ),
new google.maps.LatLng( 0.532143 , 101.467667 ),
new google.maps.LatLng( 0.530169 , 101.468954 ),
new google.maps.LatLng( 0.528538 , 101.468182 ),
new google.maps.LatLng( 0.527250 , 101.468182 ),
new google.maps.LatLng( 0.526478 , 101.467152 ),
new google.maps.LatLng( 0.524761 , 101.467323 ),
new google.maps.LatLng( 0.523045 , 101.467495 ),
new google.maps.LatLng( 0.521758 , 101.467152 ),
new google.maps.LatLng( 0.520298 , 101.467409 ),
new google.maps.LatLng( 0.519011 , 101.467581 ),
new google.maps.LatLng( 0.517380 , 101.468868 ),
new google.maps.LatLng( 0.516350 , 101.469040 ),
new google.maps.LatLng( 0.515063 , 101.468868 ),
new google.maps.LatLng( 0.514763 , 101.469297 ),
new google.maps.LatLng( 0.513819 , 101.469684 ),
new google.maps.LatLng( 0.512574 , 101.470928 ),
new google.maps.LatLng( 0.511887 , 101.472301 ),
new google.maps.LatLng( 0.509999 , 101.473503 ),
new google.maps.LatLng( 0.508283 , 101.476936 ),
new google.maps.LatLng( 0.506738 , 101.478653 ),
new google.maps.LatLng( 0.505365 , 101.479340 ),
new google.maps.LatLng( 0.503133 , 101.481228 ),
new google.maps.LatLng( 0.499872 , 101.481056 ),
new google.maps.LatLng( 0.497640 , 101.480370 ),
new google.maps.LatLng( 0.495580 , 101.480370 ),
new google.maps.LatLng( 0.493177 , 101.478310 ),
new google.maps.LatLng( 0.490087 , 101.477451 ),
new google.maps.LatLng( 0.487512 , 101.478996 ),
new google.maps.LatLng( 0.485281 , 101.479855 ),
new google.maps.LatLng( 0.482534 , 101.481743 ),
new google.maps.LatLng( 0.480131 , 101.484833 ),
new google.maps.LatLng( 0.478586 , 101.485519 ),
new google.maps.LatLng( 0.476355 , 101.485863 ),
new google.maps.LatLng( 0.474810 , 101.486206 ),
new google.maps.LatLng( 0.472922 , 101.486206 ),
new google.maps.LatLng( 0.470690 , 101.488094 ),
new google.maps.LatLng( 0.469145 , 101.488609 ),
new google.maps.LatLng( 0.465884 , 101.488609 ),
new google.maps.LatLng( 0.463996 , 101.487923 ),
new google.maps.LatLng( 0.462622 , 101.489811 ),
new google.maps.LatLng( 0.460219 , 101.489983 ),
new google.maps.LatLng( 0.457473 , 101.491356 ),
new google.maps.LatLng( 0.455241 , 101.493416 ),
new google.maps.LatLng( 0.454383 , 101.495647 ),
new google.maps.LatLng( 0.451980 , 101.498051 ),
new google.maps.LatLng( 0.450263 , 101.499596 ),
new google.maps.LatLng( 0.447860 , 101.501656 ),
new google.maps.LatLng( 0.447345 , 101.503716 ),
new google.maps.LatLng( 0.446830 , 101.505775 ),
new google.maps.LatLng( 0.444084 , 101.506977 ),
new google.maps.LatLng( 0.443054 , 101.508694 ),
new google.maps.LatLng( 0.441509 , 101.511269 ),
new google.maps.LatLng( 0.440994 , 101.512299 ),
new google.maps.LatLng( 0.441680 , 101.514187 ),
new google.maps.LatLng( 0.440736 , 101.514916 ),
new google.maps.LatLng( 0.438891 , 101.517749 ),
new google.maps.LatLng( 0.437475 , 101.518993 ),
new google.maps.LatLng( 0.436445 , 101.520796 ),
new google.maps.LatLng( 0.434900 , 101.522727 ),
new google.maps.LatLng( 0.436316 , 101.523457 ),
new google.maps.LatLng( 0.436102 , 101.523929 ),
new google.maps.LatLng( 0.434642 , 101.524014 ),
new google.maps.LatLng( 0.434428 , 101.524529 ),
new google.maps.LatLng( 0.433655 , 101.525860 ),
new google.maps.LatLng( 0.433655 , 101.527963 ),
new google.maps.LatLng( 0.433956 , 101.530538 ),
new google.maps.LatLng( 0.434213 , 101.531482 ),
new google.maps.LatLng( 0.433870 , 101.534958 ),
new google.maps.LatLng( 0.433527 , 101.535430 ),
new google.maps.LatLng( 0.432840 , 101.539593 ),
new google.maps.LatLng( 0.432153 , 101.539936 ),
new google.maps.LatLng( 0.432068 , 101.547832 ),
new google.maps.LatLng( 0.431896 , 101.549549 ),
new google.maps.LatLng( 0.431982 , 101.550794 ),
new google.maps.LatLng( 0.427304 , 101.556587 ),
new google.maps.LatLng( 0.427562 , 101.558132 ),
new google.maps.LatLng( 0.426231 , 101.560879 ),
new google.maps.LatLng( 0.425888 , 101.562595 ),
new google.maps.LatLng( 0.426060 , 101.565514 ),
new google.maps.LatLng( 0.429493 , 101.567574 ),
new google.maps.LatLng( 0.431381 , 101.566200 ),
new google.maps.LatLng( 0.435672 , 101.568089 ),
new google.maps.LatLng( 0.436531 , 101.569805 ),
new google.maps.LatLng( 0.438247 , 101.570663 ),
new google.maps.LatLng( 0.440994 , 101.570320 ),
new google.maps.LatLng( 0.442024 , 101.569462 ),
new google.maps.LatLng( 0.447345 , 101.568260 ),
new google.maps.LatLng( 0.454040 , 101.573067 ),
new google.maps.LatLng( 0.455413 , 101.575813 ),
new google.maps.LatLng( 0.455584 , 101.575985 ),
new google.maps.LatLng( 0.466570 , 101.569805 ),
new google.maps.LatLng( 0.469317 , 101.570148 ),
new google.maps.LatLng( 0.471892 , 101.570663 ),
new google.maps.LatLng( 0.473093 , 101.572723 ),
new google.maps.LatLng( 0.474295 , 101.574783 ),
new google.maps.LatLng( 0.474810 , 101.576500 ),
new google.maps.LatLng( 0.474467 , 101.578732 ),
new google.maps.LatLng( 0.474123 , 101.581993 ),
new google.maps.LatLng( 0.473265 , 101.583023 ),
new google.maps.LatLng( 0.472407 , 101.584911 ),
new google.maps.LatLng( 0.473780 , 101.586971 ),
new google.maps.LatLng( 0.476183 , 101.587658 ),
new google.maps.LatLng( 0.486311 , 101.583366 ),
new google.maps.LatLng( 0.495752 , 101.577702 ),
new google.maps.LatLng( 0.497297 , 101.578388 ),
new google.maps.LatLng( 0.499700 , 101.580276 ),
new google.maps.LatLng( 0.501245 , 101.581478 ),
new google.maps.LatLng( 0.506738 , 101.579418 ),
new google.maps.LatLng( 0.510514 , 101.582680 ),
new google.maps.LatLng( 0.512574 , 101.583881 ),
new google.maps.LatLng( 0.514291 , 101.585598 ),
new google.maps.LatLng( 0.516694 , 101.586971 ),
new google.maps.LatLng( 0.520642 , 101.588173 ),
new google.maps.LatLng( 0.524075 , 101.588516 ),
new google.maps.LatLng( 0.528538 , 101.588516 ),
new google.maps.LatLng( 0.529568 , 101.589375 ),
new google.maps.LatLng( 0.530254 , 101.591434 ),
new google.maps.LatLng( 0.532829 , 101.590576 ),
new google.maps.LatLng( 0.537121 , 101.589375 ),
new google.maps.LatLng( 0.540210 , 101.587143 ),
new google.maps.LatLng( 0.542785 , 101.585426 ),
new google.maps.LatLng( 0.546218 , 101.584053 ),
new google.maps.LatLng( 0.548965 , 101.583366 ),
new google.maps.LatLng( 0.549480 , 101.584740 ),
new google.maps.LatLng( 0.551539 , 101.584225 ),
new google.maps.LatLng( 0.554114 , 101.581478 ),
new google.maps.LatLng( 0.554114 , 101.578903 ),
new google.maps.LatLng( 0.552741 , 101.578045 ),
new google.maps.LatLng( 0.551883 , 101.575985 ),
new google.maps.LatLng( 0.549995 , 101.573238 ),
new google.maps.LatLng( 0.550510 , 101.571522 ),
new google.maps.LatLng( 0.554114 , 101.570663 ),
new google.maps.LatLng( 0.557032 , 101.572208 ),
new google.maps.LatLng( 0.559950 , 101.577530 ),
new google.maps.LatLng( 0.561839 , 101.579418 ),
new google.maps.LatLng( 0.565443 , 101.582508 ),
new google.maps.LatLng( 0.571623 , 101.581306 ),
new google.maps.LatLng( 0.574713 , 101.584396 ),
new google.maps.LatLng( 0.581579 , 101.589203 ),
new google.maps.LatLng( 0.585355 , 101.588173 ),
new google.maps.LatLng( 0.592221 , 101.586800 ),
new google.maps.LatLng( 0.595654 , 101.584053 ),
new google.maps.LatLng( 0.596341 , 101.579933 ),
new google.maps.LatLng( 0.594968 , 101.574440 ),
new google.maps.LatLng( 0.592221 , 101.568260 ),
new google.maps.LatLng( 0.588788 , 101.564140 ),
new google.maps.LatLng( 0.586385 , 101.563454 ),
new google.maps.LatLng( 0.585355 , 101.565857 ),
new google.maps.LatLng( 0.582952 , 101.569290 ),
new google.maps.LatLng( 0.579862 , 101.571350 ),
new google.maps.LatLng( 0.576429 , 101.572037 ),
new google.maps.LatLng( 0.574369 , 101.570320 ),
new google.maps.LatLng( 0.571623 , 101.566887 ),
new google.maps.LatLng( 0.572310 , 101.562080 ),
new google.maps.LatLng( 0.574369 , 101.559334 ),
new google.maps.LatLng( 0.576086 , 101.553841 ),
new google.maps.LatLng( 0.575743 , 101.551094 ),
new google.maps.LatLng( 0.573339 , 101.550064 ),
new google.maps.LatLng( 0.570250 , 101.547661 ),
new google.maps.LatLng( 0.568876 , 101.544571 ),
new google.maps.LatLng( 0.569220 , 101.538391 ),
new google.maps.LatLng( 0.569563 , 101.534271 ),
new google.maps.LatLng( 0.572310 , 101.532211 ),
new google.maps.LatLng( 0.575056 , 101.531181 ),
new google.maps.LatLng( 0.576772 , 101.529121 ),
new google.maps.LatLng( 0.577459 , 101.526375 ),
new google.maps.LatLng( 0.575743 , 101.524315 ),
new google.maps.LatLng( 0.571966 , 101.524315 ),
new google.maps.LatLng( 0.568533 , 101.522255 ),
new google.maps.LatLng( 0.567503 , 101.518822 ),
new google.maps.LatLng( 0.567503 , 101.516075 ),
new google.maps.LatLng( 0.568876 , 101.513329 ),
new google.maps.LatLng( 0.567160 , 101.510239 ),
new google.maps.LatLng( 0.563384 , 101.509895 ),
new google.maps.LatLng( 0.560980 , 101.507492 ),
new google.maps.LatLng( 0.560637 , 101.503716 ),
new google.maps.LatLng( 0.560980 , 101.498909 ),
new google.maps.LatLng( 0.559950 , 101.494446 ),
new google.maps.LatLng( 0.557891 , 101.490669 ),
new google.maps.LatLng( 0.558234 , 101.487236 ),
new google.maps.LatLng( 0.556517 , 101.482430 ),
new google.maps.LatLng( 0.555144 , 101.480026 ),
new google.maps.LatLng( 0.555144 , 101.476936 ),
new google.maps.LatLng( 0.556517 , 101.473846 ),
new google.maps.LatLng( 0.553771 , 101.471786 ),
new google.maps.LatLng( 0.549651 , 101.471786 ),
new google.maps.LatLng( 0.546562 , 101.470070 ),
new google.maps.LatLng( 0.545875 , 101.468697 ),
new google.maps.LatLng( 0.545274 , 101.468267 )

];


      var rumbai = [
new google.maps.LatLng(0.541412,101.436424),
new google.maps.LatLng(0.543472,101.432648),
new google.maps.LatLng(0.545188,101.429214),
new google.maps.LatLng(0.546905,101.424751),
new google.maps.LatLng(0.548278,101.422691),
new google.maps.LatLng(0.552398,101.422691),
new google.maps.LatLng(0.552398,101.420631),
new google.maps.LatLng(0.549995,101.415825),
new google.maps.LatLng(0.548278,101.412735),
new google.maps.LatLng(0.549995,101.411362),
new google.maps.LatLng(0.550681,101.406555),
new google.maps.LatLng(0.549995,101.403465),
new google.maps.LatLng(0.552741,101.401749),
new google.maps.LatLng(0.548965,101.398315),
new google.maps.LatLng(0.549308,101.396255),
new google.maps.LatLng(0.552054,101.394539),
new google.maps.LatLng(0.555831,101.393852),
new google.maps.LatLng(0.557204,101.396599),
new google.maps.LatLng(0.559950,101.395226),
new google.maps.LatLng(0.559950,101.393509),
new google.maps.LatLng(0.557547,101.391792),
new google.maps.LatLng(0.553771,101.391106),
new google.maps.LatLng(0.548621,101.385612),
new google.maps.LatLng(0.549308,101.383209),
new google.maps.LatLng(0.552741,101.382523),
new google.maps.LatLng(0.555831,101.384926),
new google.maps.LatLng(0.559607,101.385956),
new google.maps.LatLng(0.559264,101.381836),
new google.maps.LatLng(0.557547,101.377716),
new google.maps.LatLng(0.553084,101.377373),
new google.maps.LatLng(0.555488,101.372566),
new google.maps.LatLng(0.559950,101.371880),
new google.maps.LatLng(0.563727,101.371536),
new google.maps.LatLng(0.565787,101.370506),
new google.maps.LatLng(0.565787,101.368790),
new google.maps.LatLng(0.561667,101.368790),
new google.maps.LatLng(0.559950,101.369820),
new google.maps.LatLng(0.560294,101.367073),
new google.maps.LatLng(0.561667,101.366386),
new google.maps.LatLng(0.560980,101.363297),
new google.maps.LatLng(0.559950,101.361923),
new google.maps.LatLng(0.559607,101.356773),
new google.maps.LatLng(0.565100,101.357460),
new google.maps.LatLng(0.565100,101.355743),
new google.maps.LatLng(0.563384,101.354027),
new google.maps.LatLng(0.562697,101.351280),
new google.maps.LatLng(0.565100,101.350250),
new google.maps.LatLng(0.566130,101.352997),
new google.maps.LatLng(0.570936,101.351624),
new google.maps.LatLng(0.569906,101.349220),
new google.maps.LatLng(0.569906,101.346817),
new google.maps.LatLng(0.569563,101.343727),
new google.maps.LatLng(0.572653,101.343384),
new google.maps.LatLng(0.576429,101.343384),
new google.maps.LatLng(0.579519,101.343040),
new google.maps.LatLng(0.583295,101.342010),
new google.maps.LatLng(0.583639,101.339951),
new google.maps.LatLng(0.578489,101.340294),
new google.maps.LatLng(0.576772,101.339607),
new google.maps.LatLng(0.577459,101.336174),
new google.maps.LatLng(0.580206,101.333084),
new google.maps.LatLng(0.583639,101.335831),
new google.maps.LatLng(0.587415,101.335144),
new google.maps.LatLng(0.587415,101.332054),
new google.maps.LatLng(0.591535,101.330681),
new google.maps.LatLng(0.593251,101.330338),
new google.maps.LatLng(0.595311,101.330338),
new google.maps.LatLng(0.599431,101.328964),
new google.maps.LatLng(0.603207,101.329651),
new google.maps.LatLng(0.605610,101.328278),
new google.maps.LatLng(0.609386,101.327591),
new google.maps.LatLng(0.613506,101.329651),
new google.maps.LatLng(0.614879,101.332397),
new google.maps.LatLng(0.617626,101.334457),
new google.maps.LatLng(0.619342,101.338234),
new google.maps.LatLng(0.623462,101.345444),
new google.maps.LatLng(0.624492,101.348534),
new google.maps.LatLng(0.628955,101.352654),
new google.maps.LatLng(0.631701,101.356087),
new google.maps.LatLng(0.635821,101.360550),
new google.maps.LatLng(0.638224,101.365700),
new google.maps.LatLng(0.643030,101.371880),
new google.maps.LatLng(0.647493,101.374626),
new google.maps.LatLng(0.654016,101.376343),
new google.maps.LatLng(0.664658,101.377373),
new google.maps.LatLng(0.673584,101.378403),
new google.maps.LatLng(0.680793,101.381493),
new google.maps.LatLng(0.687659,101.384239),
new google.maps.LatLng(0.689375,101.389046),
new google.maps.LatLng(0.693495,101.392136),
new google.maps.LatLng(0.697271,101.396255),
new google.maps.LatLng(0.695555,101.407242),
new google.maps.LatLng(0.692465,101.409988),
new google.maps.LatLng(0.686286,101.411705),
new google.maps.LatLng(0.683539,101.416512),
new google.maps.LatLng(0.687659,101.419945),
new google.maps.LatLng(0.687659,101.423035),
new google.maps.LatLng(0.682853,101.432304),
new google.maps.LatLng(0.680793,101.437454),
new google.maps.LatLng(0.679420,101.445351),
new google.maps.LatLng(0.677703,101.450500),
new google.maps.LatLng(0.676330,101.455650),
new google.maps.LatLng(0.674957,101.459084),
new google.maps.LatLng(0.614193,101.450157),
new google.maps.LatLng(0.613163,101.447754),
new google.maps.LatLng(0.611446,101.445351),
new google.maps.LatLng(0.610760,101.443291),
new google.maps.LatLng(0.609386,101.442261),
new google.maps.LatLng(0.607670,101.439857),
new google.maps.LatLng(0.607670,101.435738),
new google.maps.LatLng(0.605610,101.431274),
new google.maps.LatLng(0.603207,101.426811),
new google.maps.LatLng(0.602177,101.423721),
new google.maps.LatLng(0.598057,101.423378),
new google.maps.LatLng(0.592565,101.424065),
new google.maps.LatLng(0.586728,101.423378),
new google.maps.LatLng(0.582952,101.424408),
new google.maps.LatLng(0.581579,101.426125),
new google.maps.LatLng(0.582265,101.428185),
new google.maps.LatLng(0.581235,101.429558),
new google.maps.LatLng(0.577459,101.429214),
new google.maps.LatLng(0.574713,101.428528),
new google.maps.LatLng(0.570250,101.429214),
new google.maps.LatLng(0.566130,101.430931),
new google.maps.LatLng(0.562697,101.431961),
new google.maps.LatLng(0.559950,101.432991),
new google.maps.LatLng(0.546519,101.437926),
new google.maps.LatLng(0.544588,101.437712),
new google.maps.LatLng(0.542785,101.437283),
new google.maps.LatLng(0.541626,101.437111),
new google.maps.LatLng(0.541112,101.437197),
new google.maps.LatLng(0.541369,101.436467)
];    
      var rumbai_pesisir = [
new google.maps.LatLng(0.542008, 101.437282),
new google.maps.LatLng(0.546476,101.438055),
new google.maps.LatLng(0.554801,101.434879),
new google.maps.LatLng(0.563040,101.432047),
new google.maps.LatLng(0.569220,101.429987),
new google.maps.LatLng(0.573039,101.429086),
new google.maps.LatLng(0.577030,101.429043),
new google.maps.LatLng(0.578060,101.429429),
new google.maps.LatLng(0.578875,101.429687),
new google.maps.LatLng(0.579519,101.429901),
new google.maps.LatLng(0.580506,101.429944),
new google.maps.LatLng(0.581450,101.429772),
new google.maps.LatLng(0.581965,101.429429),
new google.maps.LatLng(0.582308,101.428828),
new google.maps.LatLng(0.582094,101.428142),
new google.maps.LatLng(0.581922,101.427369),
new google.maps.LatLng(0.581793,101.426811),
new google.maps.LatLng(0.581879,101.426082),
new google.maps.LatLng(0.582051,101.425438),
new google.maps.LatLng(0.582480,101.424751),
new google.maps.LatLng(0.582823,101.424236),
new google.maps.LatLng(0.583295,101.423893),
new google.maps.LatLng(0.583853,101.423635),
new google.maps.LatLng(0.584325,101.423485),
new google.maps.LatLng(0.585012,101.423464),
new google.maps.LatLng(0.585505,101.423442),
new google.maps.LatLng(0.586170,101.423442),
new google.maps.LatLng(0.586921,101.423442),
new google.maps.LatLng(0.587866,101.423421),
new google.maps.LatLng(0.588745,101.423421),
new google.maps.LatLng(0.589561,101.423399),
new google.maps.LatLng(0.590312,101.423421),
new google.maps.LatLng(0.591320,101.423399),
new google.maps.LatLng(0.601233,101.423335),
new google.maps.LatLng(0.601962,101.423507),
new google.maps.LatLng(0.602177,101.423936),
new google.maps.LatLng(0.602392,101.424322),
new google.maps.LatLng(0.602949,101.424623),
new google.maps.LatLng(0.603379,101.424794),
new google.maps.LatLng(0.603507,101.425695),
new google.maps.LatLng(0.603722,101.427069),
new google.maps.LatLng(0.604065,101.428185),
new google.maps.LatLng(0.604580,101.428957),
new google.maps.LatLng(0.605353,101.431618),
new google.maps.LatLng(0.606382,101.432047),
new google.maps.LatLng(0.608013,101.434536),
new google.maps.LatLng(0.608528,101.436510),
new google.maps.LatLng(0.609730,101.438913),
new google.maps.LatLng(0.611875,101.439857),
new google.maps.LatLng(0.613163,101.440802),
new google.maps.LatLng(0.614793,101.441145),
new google.maps.LatLng(0.615823,101.441832),
new google.maps.LatLng(0.617197,101.442347),
new google.maps.LatLng(0.617883,101.443806),
new google.maps.LatLng(0.619085,101.444664),
new google.maps.LatLng(0.620973,101.445608),
new google.maps.LatLng(0.621745,101.446552),
new google.maps.LatLng(0.621745,101.447840),
new google.maps.LatLng(0.622174,101.449299),
new google.maps.LatLng(0.622518,101.450586),
new google.maps.LatLng(0.664486,101.457539),
new google.maps.LatLng(0.660023,101.483974),
new google.maps.LatLng(0.658479,101.485004),
new google.maps.LatLng(0.657105,101.484489),
new google.maps.LatLng(0.655904,101.484661),
new google.maps.LatLng(0.653329,101.487064),
new google.maps.LatLng(0.652471,101.488609),
new google.maps.LatLng(0.652642,101.490154),
new google.maps.LatLng(0.654359,101.491699),
new google.maps.LatLng(0.655217,101.493244),
new google.maps.LatLng(0.655732,101.494961),
new google.maps.LatLng(0.656590,101.496162),
new google.maps.LatLng(0.658479,101.496849),
new google.maps.LatLng(0.659680,101.497707),
new google.maps.LatLng(0.658479,101.498394),
new google.maps.LatLng(0.657620,101.540794),
new google.maps.LatLng(0.652471,101.543198),
new google.maps.LatLng(0.648694,101.544743),
new google.maps.LatLng(0.646806,101.545601),
new google.maps.LatLng(0.642515,101.547146),
new google.maps.LatLng(0.639940,101.549721),
new google.maps.LatLng(0.639082,101.551952),
new google.maps.LatLng(0.638052,101.559849),
new google.maps.LatLng(0.639597,101.563797),
new google.maps.LatLng(0.640799,101.567574),
new google.maps.LatLng(0.639425,101.570148),
new google.maps.LatLng(0.637537,101.571693),
new google.maps.LatLng(0.635992,101.573410),
new google.maps.LatLng(0.633074,101.573925),
new google.maps.LatLng(0.630843,101.575470),
new google.maps.LatLng(0.627238,101.575470),
new google.maps.LatLng(0.625007,101.574612),
new google.maps.LatLng(0.619514,101.574268),
new google.maps.LatLng(0.612991,101.581306),
new google.maps.LatLng(0.610760,101.584740),
new google.maps.LatLng(0.610416,101.586628),
new google.maps.LatLng(0.608700,101.588173),
new google.maps.LatLng(0.608013,101.588001),
new google.maps.LatLng(0.608185,101.589718),
new google.maps.LatLng(0.607155,101.591091),
new google.maps.LatLng(0.606640,101.591778),
new google.maps.LatLng(0.605953,101.591778),
new google.maps.LatLng(0.602177,101.590919),
new google.maps.LatLng(0.598572,101.588860),
new google.maps.LatLng(0.596856,101.585426),
new google.maps.LatLng(0.598401,101.583366),
new google.maps.LatLng(0.598229,101.578388),
new google.maps.LatLng(0.595826,101.570492),
new google.maps.LatLng(0.594109,101.566887),
new google.maps.LatLng(0.592050,101.564312),
new google.maps.LatLng(0.589475,101.562080),
new google.maps.LatLng(0.587072,101.561737),
new google.maps.LatLng(0.583810,101.562767),
new google.maps.LatLng(0.582265,101.566200),
new google.maps.LatLng(0.580034,101.568775),
new google.maps.LatLng(0.577459,101.570663),
new google.maps.LatLng(0.573683,101.567574),
new google.maps.LatLng(0.573683,101.563797),
new google.maps.LatLng(0.575399,101.559334),
new google.maps.LatLng(0.576429,101.555901),
new google.maps.LatLng(0.577459,101.552811),
new google.maps.LatLng(0.575743,101.550751),
new google.maps.LatLng(0.572996,101.548691),
new google.maps.LatLng(0.570250,101.546288),
new google.maps.LatLng(0.570593,101.540794),
new google.maps.LatLng(0.571623,101.535988),
new google.maps.LatLng(0.577459,101.530838),
new google.maps.LatLng(0.577459,101.526718),
new google.maps.LatLng(0.572996,101.523285),
new google.maps.LatLng(0.570593,101.522598),
new google.maps.LatLng(0.567503,101.519165),
new google.maps.LatLng(0.567160,101.515388),
new google.maps.LatLng(0.569220,101.512985),
new google.maps.LatLng(0.569563,101.509895),
new google.maps.LatLng(0.565787,101.508522),
new google.maps.LatLng(0.563384,101.508179),
new google.maps.LatLng(0.560980,101.505775),
new google.maps.LatLng(0.561324,101.502686),
new google.maps.LatLng(0.561324,101.500626),
new google.maps.LatLng(0.560980,101.495819),
new google.maps.LatLng(0.559950,101.492729),
new google.maps.LatLng(0.559950,101.490326),
new google.maps.LatLng(0.558577,101.487236),
new google.maps.LatLng(0.556517,101.485519),
new google.maps.LatLng(0.555488,101.482773),
new google.maps.LatLng(0.556174,101.478653),
new google.maps.LatLng(0.557204,101.473503),
new google.maps.LatLng(0.554114,101.472130),
new google.maps.LatLng(0.548621,101.471100),
new google.maps.LatLng(0.546218,101.469727),
new google.maps.LatLng(0.546562,101.466637),
new google.maps.LatLng(0.549308,101.463547),
new google.maps.LatLng(0.554458,101.459084),
new google.maps.LatLng(0.555488,101.457367),
new google.maps.LatLng(0.556861,101.453590),
new google.maps.LatLng(0.555831,101.452217),
new google.maps.LatLng(0.555144,101.449814),
new google.maps.LatLng(0.555144,101.447411),
new google.maps.LatLng(0.551025,101.447067),
new google.maps.LatLng(0.550338,101.447411),
new google.maps.LatLng(0.548965,101.450157),
new google.maps.LatLng(0.550681,101.452560),
new google.maps.LatLng(0.550338,101.455650),
new google.maps.LatLng(0.547248,101.457367),
new google.maps.LatLng(0.543128,101.457367),
new google.maps.LatLng(0.542099,101.455307),
new google.maps.LatLng(0.543128,101.451874),
new google.maps.LatLng(0.541755,101.449471),
new google.maps.LatLng(0.540039,101.448441),
new google.maps.LatLng(0.541069,101.443977),
new google.maps.LatLng(0.540725,101.441574),
new google.maps.LatLng(0.540725,101.438484)

];
var polyrumbai_pesisir = {
path: rumbai_pesisir,
strokeColor: "#66d9ff",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#OF3447",
fillOpacity: 0.6
}
var polysukajadi = {
path: sukajadi,
strokeColor: "#ff80aa",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#0161771",
fillOpacity: 0.6
}
var polyrumbai = {
path: rumbai,
strokeColor: "#d279d2",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#936f9B",
fillOpacity: 0.6
}
var polytenayanraya = {
path: tenayanraya,
strokeColor: "#00cccc",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#38293E",
fillOpacity: 0.6
}
var polymarpoyandamai = {
path: marpoyandamai,
strokeColor: "#d2a679",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#E4AD39",
fillOpacity: 0.6
}
var polysenapelan = {
path: senapelan,
strokeColor: "#8585ad",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#408358",
fillOpacity: 0.6
}
var polypayungsekaki = {
path: payungsekaki,
strokeColor: "#bf4080",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#319CBE",
fillOpacity: 0.6
}
var polytampan = {
path: tampan,
strokeColor: "#79d279",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#79d279",
fillOpacity: 0.6
}
var polybukitraya = {
path: bukitraya,
strokeColor: "#94b8b8",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#94b8b8",
fillOpacity: 0.6
}
var polysail = {
path: sail,
strokeColor: "#66d9ff",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#66d9ff",
fillOpacity: 0.6
}
var polylimapuluh = {
path: limapuluh,
strokeColor: "#ffff99",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#ffff99",
fillOpacity: 0.6
}
var polypekanbaru = {
path: pekanbaru,
strokeColor: "#99003d",
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: "#99003d",
fillOpacity: 0.6
}



        
        
        
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
      
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
           zoom: 4,
       scaleControl: true,
           mapTypeId: google.maps.MapTypeId.ROADMAP
        }
      
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    
    var it = new google.maps.Polygon(polyrumbai_pesisir);
    it.setMap(map);
    var it1 = new google.maps.Polygon(polyrumbai);
    it1.setMap(map);
    var it2 = new google.maps.Polygon(polytenayanraya);
    it2.setMap(map);
    var it3 = new google.maps.Polygon(polysenapelan);
    it3.setMap(map);
    var it4 = new google.maps.Polygon(polymarpoyandamai);
    it4.setMap(map);
    var it5 = new google.maps.Polygon(polysukajadi);
    it5.setMap(map);
    var it6 = new google.maps.Polygon(polypayungsekaki);
    it6.setMap(map);
    var it7 = new google.maps.Polygon(polytampan);
    it7.setMap(map);
    var it8 = new google.maps.Polygon(polybukitraya);
    it8.setMap(map);
    var it9 = new google.maps.Polygon(polysail);
    it9.setMap(map);
    var it10 = new google.maps.Polygon(polylimapuluh);
    it10.setMap(map);
    var it11 = new google.maps.Polygon(polypekanbaru);
    it11.setMap(map);
            
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
    
        <?php
            $query = mysqli_query($conn,"select * from peta");
            if(mysqli_num_rows($query) < 1){?>
               //peta tanpa marker-2.5446949,118.3207873,5.29z
        var properti_peta = {
                    center: new google.maps.LatLng(0.507067, 101.447778),
                    zoom: 12,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                 var peta = new google.maps.Map(document.getElementById("map"), properti_peta);
             //end

          

<?php
            }else{
            while ($data = mysqli_fetch_array($query))
            {
                $nama = mystripslashesjs($data['nama']);
        $alamat = mystripslashesjs($data['alamat']);
                $x = $data['lat'];
                $y = $data['lng'];
                
                echo ("addMarker($x, $y, '<b>$nama</b>');");              
              
            }
            }
    
          ?>
        
        // Proses membuat marker
        function addMarker(x, y, info) {
            var lokasi = new google.maps.LatLng(x, y);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                 position: lokasi,
              
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
  
  
  
     $(document).ready(function(){
        $('#modal-edit').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('no');
             $.ajax({
                type : 'post',
                url : 'detaildata.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });


      </script>
<script>
  
  var map = null;
  var radius_circle;
  var markers_on_map = [];
  var geocoder;
  var infowindow;
  
  //data is just a sample, you will probably load those from database
  
  
  
  

  //initialize map on document ready
  $(document).ready(function(){
      var latlng = new google.maps.LatLng(0.507067, 101.447778); //you can use any location as center on map startup
      var myOptions = {
        zoom: 12,
        center: latlng,
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        navigationControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    geocoder = new google.maps.Geocoder();
      google.maps.event.addListener(map, 'click', function(){
           if(infowindow){
             infowindow.setMap(null);
             infowindow = null;
           }
      });
  });
  
  function showCloseLocations() {
    var i;
    var radius_km = $('#radius_km').val();
    var address = $('#address').val();

    //remove all radii and markers from map before displaying new ones
    if (radius_circle) {
      radius_circle.setMap(null);
      radius_circle = null;
    }
    for (i = 0; i < markers_on_map.length; i++) {
      if (markers_on_map[i]) {
        markers_on_map[i].setMap(null);
        markers_on_map[i] = null;
      }
    }

    if (geocoder) {
      geocoder.geocode({'address': address}, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
            var address_lat_lng = results[0].geometry.location;
            radius_circle = new google.maps.Circle({
              center: address_lat_lng,
              radius: radius_km * 1000,
              clickable: false,
            map: map
            });
                    if (radius_circle) map.fitBounds(radius_circle.getBounds());
           var ajax= new XMLHttpRequest();
  var method ="GET"
  var url="data.php";
  var asynchronous=true;
  
  ajax.open(method,url,asynchronous);
  ajax.send();
  ajax.onreadystatechange = function(){
    var data=JSON.parse(this.responseText);
    console.log(data);
            for (var j = 0; j < data.length; j++) {
              (function (location) {
              var x =data[j].lat;
              var y =data[j].lng;
              var nama =data[j].nama;
              var alamat = data[j].alamat;
              var foto = data[j].foto;
                var marker_lat_lng = new google.maps.LatLng(x,y);
                var distance_from_location = google.maps.geometry.spherical.computeDistanceBetween(address_lat_lng, marker_lat_lng); //distance in meters between your location and the marker
                if (distance_from_location <= radius_km * 1000) {
                  var new_marker = new google.maps.Marker({
                    position: marker_lat_lng,
                    map: map,
                    title:nama
                  });                     google.maps.event.addListener(new_marker, 'click', function () {
                                    if(infowindow){
             infowindow.setMap(null);
             infowindow = null;
           }
                    infowindow = new google.maps.InfoWindow(
            { content: '<div style="color:red">'+nama +'</div>' + " Berada di " + alamat+"<br><img src=images/"+foto+" width=200 hight=auto>",
              size: new google.maps.Size(150,50),
              pixelOffset: new google.maps.Size(0, -30)
            , position: marker_lat_lng, map: map});
                  });
                  markers_on_map.push(new_marker);
                }
              })(data[j]);
            }
          }
        
        }
      else {
          alert("Geocode was not successful: " + status);
        }
      }
    
    });
  }
  }
  
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
				<li class="clr1"><a href="<?= base_url('home/peta') ?>">Peta</a></li>
				<li class="clr2"><a href="<?= base_url('home/rute') ?>">Rute</a></li>
				<li class="clr3 active"><a href="<?= base_url('home/radius') ?>">Radius</a></li>
			</ul>
		</div>
	</div>
</nav>
</br></br></br></br>
<!--- Bagian Judul-->	
<div class="container" style="margin-top:10px">	

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

      <main>
    <div class="row" style="margin-top:10px;margin-left:300px; margin-right:300px">
 <div class="form-group col-3">
      <label for="inputdefault">Nama Toko Electronics</label>
      <select id="address" name="asal" class="form-control" required>
                    <option value="">Pilih Toko</option>
                        <?php
                            $query = mysqli_query($conn,"select nama from peta");
                            while ($data = mysqli_fetch_array($query))
                            {
                            echo "<option value='$data[nama]'>".mystripslashes($data['nama'])."</option>";
                            }
                
                ?>
                </select>
    </div>

 <div class="form-group"  >
  <label for="radius_km">Zoom KM</label>
  <select class="form-control" id="radius_km">
   <option value=1>1 km</option>
   <option value=2>2 km</option>
   <option value=5>5 km</option>
   <option value=30>30 km</option>
  </select>
</div>
 <button type="button" class="btn btn-primary" onClick="showCloseLocations()" style="height:37px;margin-top:38px">Carikan</button>
  </div><br/><br/>
 <div id="map_canvas" style="width:1100px; height:600px;margin-left:50px;margin-bottom:50px">
 </div>
    </main>
        
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/main.js"></script>
        <script src="inc/js/jquery.min.js"></script>
        <script src="inc/js/bootstrap.min.js"></script>
        <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
  <script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
  </script>
 

  </body>
</html>
