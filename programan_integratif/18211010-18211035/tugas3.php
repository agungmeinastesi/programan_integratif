<!DOCTYPE HTML>
<html>
<head>
	<title>Pemrograman Integratif</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<b><p style="color:white" class="title">Tugas 3 Pemrograman Integratif</p></b>
<?php

//Dibuat Oleh
//Muhammad Fajrin (18211010)
//R. Ryan Adi Wicaksana (18211035)

function parseXML($xml) { ?>
	<table border="1" bordercolor="white" style="margin:auto;">
	<caption><b><p style="color:white" class="header"><?php echo $xml->getName() . "<br>"; ?></b></caption>
	<tr>
		<?php foreach ($xml->children()->children() as $a) :?>
			<th><b><p style="color:white" class="text"><?php echo $a->getName(); ?></b></th>
		<?php endforeach;?> 
	</tr>
	<?php 
	$n = 0;
	foreach ($xml->children() as $p) : ?>
		<tr>
		<?php foreach ($p->children() as $r[$n]) :?>
	    	<td><p style="color:white" class="text"><?php echo $r[$n] . "<br>"; ?></td>
		<?php endforeach;?> 
		</tr>
	<?php $n++; endforeach; ?>
	<br>
	<?php
}

$arrxml = glob("../*/*.xml");
    foreach($arrxml as $filexml)
    {
        $xmlfile=simplexml_load_file($filexml);
        parseXML($xmlfile);
    }
?>

?>