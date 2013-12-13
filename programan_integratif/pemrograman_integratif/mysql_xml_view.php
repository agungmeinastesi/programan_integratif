<?php
//Konfigurasi database
$config['mysql_host'] = "localhost";
$config['mysql_user'] = "root";
$config['mysql_pass'] = "";
$config['db_name']    = "tabelmahasiswa";
$config['table_name'] = "mahasiswa";
 
//melakukan koneksi ke host
mysql_connect($config['mysql_host'],$config['mysql_user'],$config['mysql_pass']);
//select database
@mysql_select_db($config['db_name']) or die( "Unable to select database");
$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
$root_element = $config['db_name']; //fruits
$xml         .= "<$root_element>";

//memilih semua item didalam tabel
$sql = "SELECT * FROM ".$config['table_name'];
 
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
 
if(mysql_num_rows($result)>0)
{
   while($result_array = mysql_fetch_assoc($result))
   {
      $xml .= "<".$config['table_name'].">";
 
      //melakukan looping dalam setiap key
      foreach($result_array as $key => $value)
      {
         //$key memegang key colom tabel 
         $xml .= "<$key>";
 
         //menanamkan data SQL dalam elemen CDATA untuk menghindari masalah entitas XML
         $xml .= "<![CDATA[$value]]>"; 
 
         //menutup elemen
         $xml .= "</$key>";
      }
 
      $xml.="</".$config['table_name'].">";
   }
}
//menutup header XML
$xml .= "</$root_element>";
 
//mengirim header XML kedalam browser
header ("Content-Type:text/xml"); 
 
//open update data 
$fp = fopen('file2_dump.xml','w');
$write = fwrite($fp,$xml);

//print ke layar browser
echo $xml;
?>