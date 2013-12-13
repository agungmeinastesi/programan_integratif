<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ws extends CI_Controller {
	public function menu($param = null, $param2 = null) {
		header('Content-type: text/xml');
		$this->load->model('library');
		switch($param) {
			case null:
				// Berikan file xml kosong
				echo "kosong";
				break;
			case 'semua':
				// Berikan semua data menu
				$xml = $this->library->getDomDocument();
				// header('Content-type: text/xml');
				print $xml->saveXML();
				// return $xml;
				break;
			default:
				$xml = $this->library->getMakanan($param, $param2);
				// header('Content-type: text/xml');
				print $xml->saveXML();
				// return $xml;
				// Berarti di sini berdasarkan daerah
		}
	}
}

/* End of file ws.php */