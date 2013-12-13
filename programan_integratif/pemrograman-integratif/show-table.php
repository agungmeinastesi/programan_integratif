<?php

include 'header.php';
include 'fungsi.php';

if(!isset($_GET['source'])){
	echo "<h3>parameter kurang</h3><br>";
	echo "<p>Tambahkan source=[path file xml yang akan ditampilkan]</p>";
}else{
	$xml = simplexml_load_file($_GET['source']);
	echo "<div class='container'>";
	echo "<div class='span3'>";
		getXmlOrder2($xml->asXML());
	echo "</div>";
	echo "</div>";
}

echo "</body>";
