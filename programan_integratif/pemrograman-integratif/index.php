<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li><a href="#services" data-toggle="tab">Services</a></li>
  <li><a href="#lain" data-toggle="tab">Punya orang lain</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="services">
  		<h2>Service ENF</h2>

		<p>Hai-hai kami mempunyai dua service lho. Berikut ini service yang kami sediakan :</p>
		<ol>
			<li><b>Konverter dari CSV ke XML</b>
				<p>Berikut parameternya :</p>
				<ul>
					<li>source : isi dengan path file csv yang akan dikonverter</li>
					<li>out : isi dengan path samapai nama file xml untuk menampung hasil konverter.<br>misal : D:\new folder\contoh.xml</li>
					<li>tabel : nama tabel yang akan digunakan.<br>misal : mahasiswa, makanan, dsb.</li>
				</ul>
				<p>contoh cara akses : <i>http://localhost/pemrograman-integratif/csvtoxml.php?source=D:\web\file.csv&out=D:\web\file.xml&tabel=makanan</i></p>
				<p>Hasilnya adalah file xml yang tersimpan di path yang telah diberikan. :)</p>
			</li>
			<li><b>Retrieve data XML</b>
				<p>Berikut parameternya :</p>
				<ul>
					<li>source : isi dengan path file xml yang akan ditampilkan</li>
					<li>no (opsional) : isi dengan nomor data ke berapa yang akan dilihat</li>
				</ul>
				<p>contoh cara akses : <i>http://localhost/pemrograman-integratif/show.php?source=D:\web\file.xml&no=2</i><br><i>atau bisa juga http://localhost/pemrograman-integratif/show.php?source=D:\web\file.xml</i></p>
				<p>Hasilnya adalah tampilan file xml doang. Hehe :></p>
			</li>
			<li><b>Menampilkan data XML menjadi tabel</b>
				<p>Berikut parameternya :</p>
				<ul>
					<li>source : isi dengan path file xml yang akan ditampilkan</li>
				</ul>
				<p>contoh cara akses : <i>http://localhost/pemrograman-integratif/show-table.php?source=D:\web\file.xml</i></p>
				<p>Hasilnya adalah tampilan file xml dalam bentuk tabel. Wow :></p>
			</li>
		</ol>
  </div>
  <div class="tab-pane" id="lain">
  		<br>
  		<a class="btn btn-primary" href="http://localhost/pemrograman_integratif/informasi.php">Antra dan Gilang</a>
  		<a class="btn btn-primary" href="http://localhost/source-progin/BernadetteVina/csv.php">Vivi</a>
  </div>
</div>

</div>
</body>

</html>

