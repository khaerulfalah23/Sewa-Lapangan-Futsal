<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        $data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('user/hero');
		$this->load->view('user/tentangkami');
		$this->load->view('user/lapangan_futsal');
		$this->load->view('templates/footer');
	}

	public function cara_penyewaan()
	{
		$data['usersesion'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('user/cara_penyewaan');
		$this->load->view('templates/footer');
	}
}
