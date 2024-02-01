<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}
	public function listU()
	{
		$this->load->view('users/users_list');
	}
}
