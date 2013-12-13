<?php
/*
Nama Anggota Kelompok : 
Ahmad Faiz Nasshor / 18210023
Ikhawanul Hakim / 18210026
*/
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Well, here it is</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/pure-min.css">
</head>
<body style="background-color:#49739d">
	<?php 
		$json = file_get_contents("http://localhost/protif/converter/mencari/index.php/mencari/caribuku/" . $_GET['keyword']. "/".$_GET['kategori']);
		$arr = json_decode($json, true);
	?>
	<?php if($arr['status']=='error') : ?>
		<div id="content">
			<div id="textbuku">
				<h1>Sorry, seems like we can't find "<?php echo $arr['judulbuku'] ?>"</h1>
			</div>

			<button style="margin-left:35%" type="submit" class="pure-button" value="Page" onclick="location.href='http://localhost/protif/';">Next</button>
		</div>
	<?php else : ?>
		<div id="content">
			<div id="textbuku">
				<h1>Are you looking for "<?php echo $arr['judulbuku'] ?>" ? Here it is </h1>
			</div>
			<div id="tablenya">
				<table class="pure-table">
					<thead>
						<tr>
							<th>Kolom 1</th>
							<th>Kolom 2</th>
							<th>Kolom 3</th>
						</tr>
					</thead>
					<tbody>
						<tr class="pure-table-odd">
							<th><?php echo $arr['judulbuku'] ?></th>
							<th><?php echo $arr['pengarang'] ?></th>
							<th><?php echo $arr['halaman'] ?></th>
						</tr>
					</tbody>
				</table>
			<br>
			<button style="margin-left:35%" type="submit" class="pure-button" value="Page" onclick="location.href='http://localhost/protif/';">Next</button>
			</div>
		</div>
	<?php endif; ?>
	<?php include 'footer.php' ?>
		
</body>
</html>