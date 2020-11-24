<?php
$url = 'http://localhost/spk/alternatif.php'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPK - Rekomendasi Kolam Renang</title>
<!--===============================================================================================-->
	<link href="http://wp.mbxinteligencia.com.br/wp-content/uploads/2017/03/recruit-circle-3-icon-blue-150x150.png" rel="icon">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="css/style.css" rel="stylesheet">
	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<!--===============================================================================================-->  
</head>
<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo">
        <h1 align="center" class="text-light"><a href="#header"><span>Sistem Pendukung Keputusan</span></a></h1>
      </div>
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/swim.png" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2><br><u>Rekomendasi</u><br>Kolam Renang Malang</h2>
        <div>
          <a href="#mulai" class="btn-get-started scrollto">Mulai</a>
          <!-- <a href="#services" class="btn-services scrollto">Our Services</a>-->
        </div>
      </div>

    </div>
  </section><!-- #intro -->

<section id="mulai">


<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table100">
        <header class="section-header">
          <h3>Menentukan Prioritas Bobot</h3>
          <p>Pada tahap ini dilakukan penentuan prioritas bobot untuk setiap kriteria sesuai dengan keinginan pengguna</p>
        </header>
<table class="bobot">
<thead>
	<tr class="table100-head">
	<th><b>Kriteria</b></th>
    <th>Jarak</th>
    <th>Harga</th>
    <th>Rating</th>
	<th>Jumlah Fasilitas (Wahana)</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><b>Kepentingan</b></td>
    <td><input type="number" value="0" min="0" id="jarak"></td>
    <td><input type="number" value="0" min="0" id="harga"></td>
	<td><input type="number" value="0" min="0" id="rating"></td>
	<td><input type="number" value="0" min="0" id="fasilitas"></td>
  </tr>
<tbody>
</table>
<header class="section-header">
<p class="text-danger" id="warn"></p>
</header>
<br>

<div align="center">
<button type="button" style="border: 0; padding: 8px 30px; transition: 0.3s; border-radius: 20px;" class="btn btn-primary" id="hasil" onclick="bobot();">Hitung</button>
</div>


<br><br><header class="section-header" id="prioritasBobot"></header>
<table id="datatable" class="pBobot">
</table>

<br><br><br><header class="section-header" id="tabelAlt"></header>
<table id="tableAlternatif" class="tableV">
</table>

<br><br><br><header class="section-header" id="vektorSi"></header>
<table id="tableVektor" class="tableV">
</table>

<table id="tableVektorSi" class="tableVektorSi">
</table>

<br><br><br><header class="section-header" id="vektorVi"></header>
<table id="tableVektorVi" class="tableVektorVi">
</table>

<br><br><br><header class="section-header" id="final"></header>
<table id="tableFinal" class="Rank">
</table>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

<script>
function bobot(){
	var jarak = document.getElementById("jarak").value;
	var harga = document.getElementById("harga").value;
	var rating = document.getElementById("rating").value;
	var fasilitas = document.getElementById("fasilitas").value;
	var total = parseInt(jarak)+parseInt(harga)+parseInt(rating)+parseInt(fasilitas);
	if (jarak != 0 || harga!= 0 || rating!=0 || fasilitas!=0) {
	document.getElementById("warn").innerHTML = "";
	jarak=parseInt(jarak)/total;
	harga=parseInt(harga)/total;
	rating=parseInt(rating)/total;
	fasilitas=parseInt(fasilitas)/total;
	
	var data ="<thead class='table100-head'><tr>";
	data += "<th>Jarak</th>";
	data += "<th>Harga</th>";
	data += "<th>Rating</th>";
	data += "<th>Fasilitas</th>";
	data += "</tr></thead><tbody>";
	data += "<tr>";
	data += "<td>"+jarak+"</td>";
	data += "<td>"+harga+"</td>";
	data += "<td>"+rating+"</td>";
	data += "<td>"+fasilitas+"</td>";
	data += "</tr></tbody>";
	document.getElementById("datatable").innerHTML = data;
	document.getElementById("prioritasBobot").innerHTML = "<h3>Tingkat Prioritas Bobot</h3>";
	loadTabel(jarak,harga,rating,fasilitas);
	}
	else {
	document.getElementById("warn").innerHTML = "<br>*Nilai bobot tidak boleh bernilai 0 semua!";
	}
}

function loadTabel(jarak,harga,rating,fasilitas){
	var jarak=jarak;
	var harga=harga;
	var rating=rating;
	var fasilitas=fasilitas;
	
	var data="<thead class='table100-head'><tr><th>Nama Tempat </th><th>Jarak </th><th>Harga </th><th>Rating </th><th>Fasilitas (Wahana)</th></tr></thead><tbody>";
	data+="<?php foreach ($characters as $key=> $character) { echo '<tr><td>'; echo $character->tempat ;?>";
	data+="<?php echo '</td><td>'; echo $character->jarak ;?>";
	data+="<?php echo '</td><td>'; echo $character->harga ;?>";
	data+="<?php echo '</td><td>'; echo $character->rating ;?>";
	data+="<?php echo '</td><td>'; echo $character->fasilitas ;echo '</td></tr>';	}?></tbody>";
	document.getElementById("tableAlternatif").innerHTML = data;
	document.getElementById("tabelAlt").innerHTML = "<h3>Tabel Kriteria dan Alternatif</h3>";
	hitung(jarak,harga,rating,fasilitas);
}

function hitung(jarak,harga,rating,fasilitas){
	var jarak=jarak;
	var harga=harga;
	var rating=rating;
	var fasilitas=fasilitas;
	var alternatif=[];
	var sum=0;
	
	var data="<thead class='table100-head'><tr><th>Nama Tempat </th><th>Jarak </th><th>Harga </th><th>Rating </th><th>Fasilitas (Wahana)</th><th>Perkalian Nilai Si</th></tr></thead><tbody>";
	data += "<tr>";
	
	for(var i=1;i<document.getElementById("tableAlternatif").rows.length;i++){
	var dataTempat=document.getElementById("tableAlternatif").rows[i].cells.item(0).innerHTML;
	var dataJarak=Math.pow(parseFloat(document.getElementById("tableAlternatif").rows[i].cells.item(1).innerHTML),-jarak);
	var dataHarga=Math.pow(parseFloat(document.getElementById("tableAlternatif").rows[i].cells.item(2).innerHTML),-harga);
	var dataRating=Math.pow(parseFloat(document.getElementById("tableAlternatif").rows[i].cells.item(3).innerHTML),rating);
	var dataFasilitas=Math.pow(parseFloat(document.getElementById("tableAlternatif").rows[i].cells.item(4).innerHTML),fasilitas);
	var total=dataJarak*dataHarga*dataRating*dataFasilitas;
	alternatif.push([dataTempat,total]);
	sum +=total;
	
	data += "<td>"+dataTempat+"</td>";
	data += "<td>"+dataJarak.toFixed(5)+"</td>";
	data += "<td>"+dataHarga.toFixed(5)+"</td>";
	data += "<td>"+dataRating.toFixed(5)+"</td>";
	data += "<td>"+dataFasilitas.toFixed(5)+"</td>";
	data += "<td>"+total.toFixed(5)+"</td>";
	data += "</tr>";
	}
	data += "</tbody>";
	
	var data1="<tbody><tr><td colspan='5'>TOTAL S</td>";
	data1 +="<td>"+sum.toFixed(5)+"</td></tr></tbody>";
	document.getElementById("tableVektor").innerHTML = data;
	document.getElementById("tableVektorSi").innerHTML = data1;
	document.getElementById("vektorSi").innerHTML = "<h3>Tabel Vektor Si</h3>";
	
	nilaiVi(alternatif,sum);
}

function nilaiVi(alternatif,sum){
	var data="<thead class='table100-head'><tr><th>Nama Tempat </th><th>Nilai Vektor Vi </th></tr></thead><tbody>";
	data += "<tr>";
	for(var i=0;i<alternatif.length;i++){
		data += "<td>"+alternatif[i][0]+"</td>";
		data += "<td>"+parseFloat(alternatif[i][1])/sum+"</td>";
		data += "</tr>";
		alternatif[i][1]=alternatif[i][1]/sum;
	}
	data += "</tbody>";
	
	document.getElementById("tableVektorVi").innerHTML = data;
	document.getElementById("vektorVi").innerHTML = "<h3>Menghitung Nilai Vi</h3>";
	alternatif.sort(sortFunction);
	nilaiFinal(alternatif);
}

function nilaiFinal(alternatif){
	var data="<thead class='table100-head'><tr><th>Rank </th><th>Nama Tempat </th><th>Perankingan </th></tr></thead><tbody>";
	for(var i=0;i<alternatif.length;i++){
		data += "<tr>";
		data += "<td>"+(i+1)+"</td>";
		data += "<td>"+alternatif[i][0]+"</td>";
		data += "<td>"+alternatif[i][1]+"</td>";
		data += "</tr>";
	}
	data += "</tbody>";
	
	document.getElementById("tableFinal").innerHTML = data;
	document.getElementById("final").innerHTML = "<h3>Hasil Perankingan</h3>";
}


function sortFunction(a, b) {
    if (a[1] === b[1]) {
        return 0;
    }
    else {
        return (a[1] > b[1]) ? -1 : 1;
    }
}
</script>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>
</div>
</div>
</div>
</section><!-- #mulai -->
</body>
</html>