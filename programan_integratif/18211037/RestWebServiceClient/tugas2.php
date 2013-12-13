<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FM SuperSoccer Helper</title>
        <link rel="stylesheet" href="style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
    	<div class="flat-table">
<?php 
$fileurls = array(
	'http://localhost:8888/other/testPHP2/test.xml',
	'http://localhost:8888/other/Pemrograman-Intergratif/myData.xml',
	'http://localhost:8888/other/Progint/data/csvtoxml.xml',
	'http://localhost:8888/other/pemrograman_integratif/output.xml',
	'http://localhost:8888/other/IPT-Assignments/text.xml',
	'http://localhost:8888/other/web-service/sqltoxml.xml',
	'http://localhost:8888/other/II3160-Pemograman-Integratif/makanan.xml',
	'http://localhost:8888/other/II3160-Pemograman-Integratif/minuman.xml',
	'http://localhost:8888/other/habib-andy/index.php/ws/menu/semua',
	/*
	'http://localhost:8888/other/',
	'http://localhost:8888/other/',
	'http://localhost:8888/other/',
	'http://localhost:8888/other/',
	'http://localhost:8888/other/',
	
	*/




	);


foreach ($fileurls as $url) {
	$lexml = file_get_contents($url);

/*
if (phpversion() >= 5) {
	echo '<div>', PHP_EOL;
	foreach (simplexml_load_string($lexml) as $more) {
		foreach ($more as $evenmore) {
			echo '<div class="box">';
			foreach ($evenmore as $key=>$value) {
		echo  '<p><em>' ,$key, '</em> : ', $value, '</p>', PHP_EOL;
		}
	echo '</div>';
		}
	}
	echo '</div>', PHP_EOL;
}*/
echo '<em>'.$url.'</em>';
if (phpversion() >= 5) {
	echo '<div class="container">', PHP_EOL;
	foreach (simplexml_load_string($lexml) as $evenmore) {

			echo '<div class="box">';
			foreach ($evenmore as $key=>$value) {
		echo  '<p><em>' ,$key, '</em> : ', $value, '</p>', PHP_EOL;
		}
	echo '</div>';
		
	}
	echo '</div>', PHP_EOL;
}
echo '<br style="clear:both;">';
}
?>
</div>
</body>
</html>