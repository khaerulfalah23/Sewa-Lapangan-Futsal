<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diis!!'
        ]);
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'required' => 'Password Belum diisi!!',
            'min_length' => 'Password Terlalu Pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('autentifikasi/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'date_created' => time()
            ];

            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun anda sudah dibuat. Silahkan login</div>');
            redirect('autentifikasi/registrasi');
        }
    }
}
