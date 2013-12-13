
<?php
echo ("XML dijadiin tabel biar enak");
echo '<p></p>';
$xmlNode = simplexml_load_file('example.xml');
function display ($uri,$tag)
{
	echo "XML $uri";
    $xml = file_get_contents($uri);

	$element = new SimpleXMLElement($xml);
	$dom = new DomDocument();
$dom -> load($uri);
$data = $dom->getElementsByTagName($tag);
    echo( "<table border=\"1\" cellpading=\"3\"><tr>");
	$n = 0;
foreach($data as $node)
{ 
    if($n % 3 == 0) { echo '<tr>'; }
    echo( "<td>". $node -> textContent . "<td>");
    if(++$n % 3 == 0) { echo '</tr>'; }
}
echo( "</tr></table>");
echo '<p></p>';
echo '<p></p>';
	}

display ("example.xml","kontakinfo");
display ("programan_integratif/18211010-18211035/progin.xml","mahasiswa");	
display("programan_integratif/18211014-dan-18211029/datasiswa.xml","siswa");
	
display("programan_integratif/BintangAdinandra/menu.xml","mymenu");
display("programan_integratif/II3160-18211003-18211050/Menu.xml","Nasi");
display("programan_integratif/II3160-Pemograman-Integratif/menu.xml","makanan");
display("programan_integratif/II3160--Pemrograman-Integratif-/DaftarIdol.xml","Idol");
display("programan_integratif/II3160-Progin-18211002-18211033/dbxml.xml","genre");
display("programan_integratif/II3160-Tugas1-Tugas2/csvoutput.xml","kantor");

display("programan_integratif/pemrograman_integratif/file1.xml","mahasiswa");
display("programan_integratif/progin/contoh.xml","country");
display("programan_integratif/progin-raosanfady/data.xml","mahasiswa");
display("programan_integratif/testPHP2/test.xml","tabel_1");
display("programan_integratif/tugas-2-pemrograman-integratif/data3.xml","mahasiswa");
display("programan_integratif/Web-Service/MyData.xml","book");
?>
  
