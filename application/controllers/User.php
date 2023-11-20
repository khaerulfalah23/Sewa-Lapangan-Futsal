<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/footer');
	}

	public function cara_penyewaan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('user/cara_penyewaan');
		$this->load->view('templates/footer');
	}
}
