<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
	public function index() {
		$data['aktif'] = 'kosong';
		$this->load->view('utama_atas', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('utama_bawah', $data);
	}

	public function error404() {
		$this->load->view('utama_atas');
		$this->load->view('error404');
		$this->load->view('utama_bawah');
	}

	public function beranda() {
		$data['aktif'] = 'beranda';
		$this->load->view('utama_atas', $data);
		$this->load->view('beranda', $data);
		$this->load->view('utama_bawah', $data);
	}

	public function cara_pakai() {
		$data['aktif'] = 'cara_pakai';
		$this->load->view('utama_atas', $data);
		$this->load->view('cara_pakai', $data);
		$this->load->view('utama_bawah', $data);
	}

	public function ws_temen() {
		$dirProgin = substr(base_url(), 0, strlen(base_url()) - 1);

		$data['direktoriProgin'] = substr($dirProgin, 0, strlen($dirProgin) - strlen('habib-andy'));
		$data['aktif'] = 'ws_temen';
		$this->load->view('utama_atas', $data);
		$this->load->view('ws_temen', $data);
		$this->load->view('utama_bawah', $data);
	}
}

/* End of file web.php */