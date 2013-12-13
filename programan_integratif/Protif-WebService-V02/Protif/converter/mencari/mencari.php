<?php
/*
Nama Anggota Kelompok : 
Ahmad Faiz Nasshor / 18210023
Ikhawanul Hakim / 18210026
*/


class mencari {
	public function caribuku($keyword, $kategori){
	switch ($kategori){
	case 'buku':	
	$daftarbuku = simplexml_load_file('daftarbuku.xml');
	foreach ($daftarbuku as $atribut) {
			if ($atribut-> judul == $keyword) {
				$judulbuku = $atribut -> judul;
				$pengarangbuku = $atribut -> pengarang;
				$halaman = $atribut -> halaman; 
				$result = array();
				$result['status'] = 'OK';
				$result['judulbuku'] = (string) $judulbuku;
				$result['pengarang'] = (string) $pengarangbuku;
				$result['halaman'] = (string) $halaman;
				return $result;
			}
			else{
				$daftarbuku = simplexml_load_file('buku.xml');
				foreach ($daftarbuku as $atribut) {
					if ($atribut-> judul == $keyword) {
						$judulbuku = $atribut -> judul;
						$pengarangbuku = $atribut -> pengarang;
						$halaman = $atribut -> halaman;
						$result = array();
						$result['status'] = 'OK';
						$result['judulbuku'] = (string) $judulbuku;
						$result['pengarang'] = (string) $pengarangbuku;
						$result['halaman'] = (string) $halaman;
						return $result;
					}
			}
			}
		}
		break;
		case 'mahasiswa';
		$daftarmahasiswa = simplexml_load_file('../../access/BernadetteVina/myxmlfile.xml');
		foreach ($daftarmahasiswa as $atribut) {
			if ($atribut-> NIM == $keyword) {
				$nim = $atribut -> NIM;
				$nama = $atribut -> nama;
				$email = $atribut -> email; 
				$result = array();
				$result['status'] = 'OK';
				$result['judulbuku'] = (string) $nim;
				$result['pengarang'] = (string) $nama;
				$result['halaman'] = (string) $email;
				return $result;
			}
		}
		break;
		case 'makanan';
		$daftarmenu = simplexml_load_file('../../access/BintangAdinandra/menu.xml');
		foreach ($daftarmenu as $atribut) {
			if ($atribut-> menu == $keyword) {
				$menu = $atribut -> menu;
				$harga = $atribut -> harga; 
				$vitamin = $atribut -> vitamin; 
				$result = array();
				$result['status'] = 'OK';
				$result['judulbuku'] = (string) $menu;
				$result['pengarang'] = (string) $harga;
				$result['halaman'] = (string) $vitamin;
				return $result;
			}
		}
		break;


	}	
	
		$result = array();

		$result['status'] = 'error';
		$result['judulbuku'] = $keyword;
		return $result;

	}
	
}
?>