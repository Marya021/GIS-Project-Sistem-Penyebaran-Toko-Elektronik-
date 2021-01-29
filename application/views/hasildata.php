<?php
if(!empty($_POST['asal']) AND !empty($_POST['tujuan'])){

function curl_get_contents($url)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}

$asal=urlencode($_POST['asal']);
$tujuan=urlencode($_POST['tujuan']);
$result= curl_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=$asal&destinations=$tujuan");
$obj = json_decode($result, true);
?>

<?php
}else{
    echo "<p class='alert alert-danger'><i class='fa fa-info-circle'></i> <b>Maaf Bos</b>, Silahkan Pilih Lokasi</p>";
}

?>