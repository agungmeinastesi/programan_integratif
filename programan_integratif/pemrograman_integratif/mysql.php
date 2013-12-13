<?php


//Meminta input dari user dengan parameter nim
$keyword_nim = $_GET['nim'];


//load file xml yang telah di convert
$TabelMahasiswa = new simpleXMLElement('file2_dump.xml',null,true);
echo "
		<table>
		<tr>
		<th>Nama</th>
		<th>Nim</th>
		<th>Asal</th>
		</tr>
 		";

//pengecekan parameter yang diterima 		
//Menampilkan semua data yang tersimpan 
	if ($keyword_nim == 'all') {
			foreach ($TabelMahasiswa as $mahasiswa) {
			echo "
				<tr>
					<td width='200'>{$mahasiswa->nim}</td>
					<td width='200'>{$mahasiswa->nama}</td>
					<td width='130'>{$mahasiswa->asal}</td>

				</tr>
	 
				";			
		}
	}

//Menampilkan data yang sesuai dengan keyword
	else{
			foreach ($TabelMahasiswa as $mahasiswa) {
			if ($keyword_nim == $mahasiswa->nim) {
				echo "
				<tr>
					<td width='200'>{$mahasiswa->nim}</td>
					<td width='200'>{$mahasiswa->nama}</td>
					<td width='130'>{$mahasiswa->asal}</td>

				</tr>
	 
				";			
		}	
	}

	}

?>