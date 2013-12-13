<!-- 
Raosan Fikri Lillahi 	/ 18211027
Fady Noor				/ 18211015 
-->

<!DOCTYPE html>
<html>
<head>
   <title>Data to Information XML</title>
</head>
<body>

<form>
   Nama File XML: <input type="text" name="name"><-- isi dengan URL tempat data xml disimpan. <h5>contoh: http://localhost/progin-RaosanFady/data.xml</h5> <br>
   Data yang dihitung: <input type="text" name="data"><-- isi dengan data yang ingin dihitung rata-ratanya. <h5>contoh: jika di xml anda ada tag harga, maka isi dengan harga</h5>
   <br><input type="submit">
</form>

<?php
if (empty($_GET['name'])) {
   //do nothing   
}
else{
   $xml=simplexml_load_file($_GET["name"]);
   $hitung = $_GET["data"];

   echo "<h1>".$xml->getName()."</h1>";
   $n = 0;
   $umur = 0;
	foreach ($xml->children() as $anak) {
	   	foreach($anak->children() as $child)
	      {
	      echo $child->getName() . ": " . $child . "<br>";
	      //(memasukkan variable child)
	      if ($child->getName()==$hitung) {
	            $n++;
	            $umur = $umur+$child;
	      }
	   }
	 }   
	   

   //menghitung rata-rata umur
   $avg = $umur / $n;
   echo "<h1>Rata-rata $hitung = ".$avg."</h1>";
      
}


?> 

</body>
</html>