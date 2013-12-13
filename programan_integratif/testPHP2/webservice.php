<?php
        error_reporting(0);
        $i = 0;
        $context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
        $url = 'http://localhost/testPHP2/sqltoxml.php';
        $xml2 = file_get_contents($url, false, $context);
        $xml3 = file_get_contents('http://localhost/testPHP2/csvtoxml.php', false, $context);
 
        $xml3 = simplexml_load_string($xml3);
        $xml2 = simplexml_load_string($xml2);
        $xml = simplexml_load_file('test.xml');

        $cari = $_GET['search'];
          
        $makanan3 = $xml3->tabel_1;
        $makanan2 = $xml2->tabel_1;
        $makanan = $xml->tabel_1;
        $end = FALSE;
        
        while ($end != TRUE && $i < 100){
            if($cari == $makanan2[$i]->nama){    
            echo "<p>Nama  :       ".$makanan2[$i]->nama."</p><br/>";
            echo "<p>Harga :       ".$makanan2[$i]->harga."</p><br/>";
            echo "<p>Asal Makanan: ".$makanan2[$i]->jenis."</p><br/>";
            $end = TRUE;    
            }

            else if($cari == $makanan[$i]->nama){
            echo "<p>Nama  :       ".$makanan[$i]->nama."</p><br/>";
            echo "<p>Harga :       ".$makanan[$i]->harga."</p><br/>";
            echo "<p>Asal Makanan: ".$makanan[$i]->jenis."</p><br/>";
            $end = TRUE;
            }
            
            else if($cari == $makanan3[$i]->nama){
            echo "<p>Nama  :       ".$makanan3[$i]->nama."</p><br/>";
            echo "<p>Harga :       ".$makanan3[$i]->harga."</p><br/>";
            echo "<p>Asal Makanan: ".$makanan3[$i]->jenis."</p><br/>";
            $end = TRUE;
            }
            
            else {
                $i = $i +1;
            }
        }
    
    if ($end == FALSE){
        echo "makanan tidak ditemukan";
    }
?>
