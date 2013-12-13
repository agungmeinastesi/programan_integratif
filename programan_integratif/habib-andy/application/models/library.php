<?php 
class Library extends CI_Model
{
    private $xmlPath;
    private $domDocument;
 
    public function __construct() {
        // TODO: instantiate the private variable representing
        // the DOMDocument
        //loads the document 
        $xmlPath = base_Url()."/data/makanan.xml";
        $doc = new DOMDocument(); 
        $doc->load($xmlPath); 
     
        // //is this a library xml file? 
        // If ($doc->doctype->name != "library" ||
        //     $doc->doctype->systemId != "library.dtd") { 
        //     throw new Exception("Incorrect document type"); 
        // } 
     
        //is the document valid and well-formed? 
        // if($doc->validate()) {
        //     $this->domDocument = $doc; 
        //     $this->xmlPath = $xmlPath;
        // } 
        // else {
        //     throw new Exception("Document did not validate"); 
        // } 
        $this->domDocument = $doc; 
        $this->xmlPath = $xmlPath;
    }
 
    public function __destruct() {
        // TODO: free memory associated with the DOMDocument
        unset($this->domDocument); 
    }

    public function getMakanan($tag, $value){

        $doc = new DOMDocument('1.0','UTF-8');
        // we want a nice output
        $doc->formatOutput = true;

        $root = $doc->createElement('daftar');
        $root = $doc->appendChild($root);
        for ($i=0; $i<$this->domDocument->getElementsByTagName($tag)->length; $i++)
        {
            $current_kat = $this->domDocument->getElementsByTagName($tag)->item($i);  
            if ($current_kat->nodeValue == $value)
            {
                $menu = $doc->createElement('menu');
                $menu = $root->appendChild($menu);
                $nama = $doc->createElement('nama');
                $nama = $menu->appendChild($nama);
                $text = $doc->createTextNode($this->domDocument->getElementsByTagName('nama')->item($i)->nodeValue);
                $text = $nama->appendChild($text);
                $daerah = $doc->createElement('daerah');
                $daerah = $menu->appendChild($daerah);
                $text = $doc->createTextNode($this->domDocument->getElementsByTagName('daerah')->item($i)->nodeValue);
                $text = $daerah->appendChild($text);
                $foto = $doc->createElement('foto');
                $foto = $menu->appendChild($foto);
                $text = $doc->createTextNode($this->domDocument->getElementsByTagName('foto')->item($i)->nodeValue);
                $text = $foto->appendChild($text);
                $harga = $doc->createElement('harga');
                $harga = $menu->appendChild($harga);
                $text = $doc->createTextNode($this->domDocument->getElementsByTagName('harga')->item($i)->nodeValue);
                $text = $harga->appendChild($text);
                $kat = $doc->createElement('kategori');
                $kat = $menu->appendChild($kat);
                $text = $doc->createTextNode($this->domDocument->getElementsByTagName('kategori')->item($i)->nodeValue);
                $text = $kat->appendChild($text);
            }
        }

        return $doc;
    }
 
    public function getMakananByDaerah($daerah) {
        // TODO: return an array with properties of a book 

        // get elemen makanan dari ID daerah
        $makanan = $this->domDocument->getElementByTagName($daerah); 
     
        // Jika makanan yang dimaksud tidak ditemukan
        if (!$makanan) {
            throw new Exception("Tidak ada makanan dari daerah ". $daerah); 
        }
     
        $arrBook = array();
        $arrBook["daerah"] = $daerah; 
     
        // get the data from the elements based on their tag names 
        //
        // we know these DOMNodeLists will only return one 
        // item since the DTD states this
        $arrBook["nama"] = $makanan->getElementsByTagName("nama")
            ->item(0)->nodeValue;
        // $arrBook["title"]  = $book->getElementsByTagName("title")
        //     ->item(0)->nodeValue; 
        // $arrBook["genre"]  = $book->getElementsByTagName("genre")
        //     ->item(0)->nodeValue; 
     
        // $chapters = $book->getElementsByTagName("chapter"); 
     
        // $arrChapters = array(); 
     
        // // iterate over the chapter elements 
        // foreach($chapters as $chapter) { 
        //     $chapterId = $chapter->attributes
        //         ->getNamedItem("position")->nodeValue; 
        //     $chapterTitle = $chapter
        //         ->getElementsByTagName("chaptitle")->item(0)
        //         ->nodeValue; 
        //     $chapterText = $chapter
        //         ->getElementsByTagName("text")->item(0)
        //         ->nodeValue; 
     
        //     $arrChapter["title"] = $chapterTitle; 
        //     $arrChapter["text"] = $chapterText; 
     
        //     $arrChapters[$chapterId] = $arrChapter; 
        // } 
     
        // $arrBook["chapters"] = $arrChapters; 
     
        return $arrBook;
    }
 
    public function addBook($daerah, $title, $author, $genre, $chapters) {
        // TODO: add a book to the library 
    }
 
    public function deleteBook($daerah) {
        // TODO: Delete a book from the library
    }
 
    public function findBooksByGenre($genre) {
        // TODO: Return an array of books
    }

    public function getDomDocument(){
        return $this->domDocument;
    }
}
?>