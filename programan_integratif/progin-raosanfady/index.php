<!-- 
Raosan Fikri Lillahi    / 18211027
Fady Noor            / 18211015 
-->

<!DOCTYPE html>
<html>
<head>
   <title>Data to Information XML</title>
</head>
<body>

<form>
   Lokasi File XML: <input type="text" name="name"><-- isi dengan URL tempat data xml disimpan <h4>Contoh Input= http://localhost/progin-itb/progin-raosanFady/data.xml</h4> .<br>
   Data yang dihitung: <input type="text" name="data"><-- isi dengan data yang ingin dihitung rata-ratanya. Misal jika di xml anda ada tag berat, maka isi dengan berat <h4>Contoh Input= berat</h4> 
   <br><input type="submit">
</form>

<table>
   <tr>
      
         <?php
            if (empty($_GET['name']) || empty($_GET['data'])) {
               echo "<hr>";
               echo "<br><b>Contoh input Lokasi File XML : </b>";
               echo "<br>http://localhost/progin-itb/progin/contoh.xml";
               echo "<br>http://localhost/progin-itb/progin-raosanFady/data.xml";
               echo "<br>http://localhost/progin-itb/Pemrograman-Intergratif/myData.xml";
               echo "<br>http://localhost/progin-itb/II3160-Tugas2-18211055-18211026/index.php/api/test/juses";
               echo "<br>";
               echo "<br>";
               echo "<b>Contoh input Data yang dihitung :</b>";
               echo "<br>gdppc";
               echo "<br>berat";
               echo "<br>value";
               echo "<br>Harga<br>";
               echo "<br><b>Perhatian : <br>1. Input bersifat case sensitive<br>2. Jika ingin mencoba contoh, urutan Lokasi file xml dan data yang ingin dihitung harus disesuaikan urutan</b>";   
            } 
            
            else{
               echo "<td width='300px;'>";
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
                  
            


    echo "         
      </td>
      <td>
          <h1>Rata-rata $hitung = ".$avg."</h1>"; } ?>   
      </td>
   </tr>
</table>



</body>
</html>