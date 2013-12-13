<?php



$keyword = $_GET['nim'];


//header('Content-type: text/xml');

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);
ini_set('auto_detect_line_endings', true);

$input    = 'input.csv';
$output   = 'output.xml';

// Buka file csv, menggunakan fungsi fopen
$fileInput  = fopen($input, 'rt');

// Dapatkan header dari file csv menggunakan method fgetcsv
$headers = fgetcsv($fileInput);

// Buat Objek DOM untuk mempermudah penggunaan
$doc  = new DomDocument();
$doc->formatOutput = true;

// Tambahkan root pada file xml
$root = $doc->createElement('TabelMahasiswa');
$root = $doc->appendChild($root);

// Lakukan pengulangan untuk membentuk child dan subchild pada file xml
while (($row = fgetcsv($fileInput)) !== FALSE)
{
 //membuat elemen child 'mahasiswa'
 $container = $doc->createElement('mahasiswa');
 foreach ($headers as $i => $header)
 {
  //membuat elemen subchild yang terdiri dari 'nim', 'nama', 'asal'.
  //elemen subchild dilihat berdasarkan array yang terdapat variabel row
  $child = $doc->createElement($header);
  $child = $container->appendChild($child);
     $value = $doc->createTextNode($row[$i]);
     $value = $child->appendChild($value);

 }

 $root->appendChild($container);
}

// echo $doc->saveXML();

//menuliskan pada file xml
//simpan xml hasil konversi ke file output
$strxml = $doc->saveXML();
$handle = fopen($output, "w");
fwrite($handle, $strxml);
fclose($handle);


// $xml = simplexml_load_file($output);
// $xml_array = unserialize(serialize(json_decode(json_encode((array) $xml), 1)));
// $i= $xml_array->nim;
// print_r($i);


//Untuk menampilkan data ke halaman Web, menggunakan SimpleXMLElement
// data ditampilkan dalam bentuk tabel
$Mhs = new SimpleXMLElement('output.xml', null, true);
	echo "
		<table>
		<tr>
		<th>Nama</th>
		<th>Nim</th>
		<th>Asal</th>
		</tr>
 		";
 
// melakukan looping penampilan data buku
if($keyword == "all"){
	foreach($Mhs as $Mhs1){
	echo "
			<tr>
				<td width='200'>{$Mhs1->nim}</td>
				<td width='200'>{$Mhs1->nama}</td>
				<td width='130'>{$Mhs1->asal}</td>

			</tr>
 
			";
	}

}else{
 	foreach($Mhs as $Mhs1)
 	{

		
	
		if ($keyword ==  $Mhs1->nim){
        echo "
			<tr>
				<td width='200'>{$Mhs1->nim}</td>
				<td width='200'>{$Mhs1->nama}</td>
				<td width='130'>{$Mhs1->asal}</td>

			</tr>
 
			";
		
		}

	}

	
}

 

