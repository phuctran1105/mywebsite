<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['x'] = 'Hello';
		$this->load->view('index', $data, FALSE);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */