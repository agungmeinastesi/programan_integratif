<?php

//Dibuat Oleh
//Muhammad Fajrin (18211010)
//R. Ryan Adi Wicaksana (18211035)

$xml = new SimpleXMLElement("progin.xml".$_GET["callsign"], 0, TRUE);
?>

<table border="1">
<caption>DAFTAR MAHASISWA ITB</caption>
	<tr>
		<?php foreach ($xml->children()->children() as $a) :?>
			<th><?php echo $a->getName(); ?></th>
		<?php endforeach;?> 
	</tr>
<?php 
$n = 0;
foreach ($xml->children() as $p) : ?>
	<tr>
		<?php foreach ($p->children() as $r[$n]) :?>
	    	<td><?php echo $r[$n] . "<br>"; ?></td>
		<?php endforeach;?> 
	</tr>
<?php $n++; endforeach;?>