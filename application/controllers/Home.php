<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Indo Techno Medic';
        $this->load->view('templates/header', $data);
        $this->load->view('index');
        $this->load->view('konten');
        $this->load->view('simrs');
        $this->load->view('blog');
        $this->load->view('klien');
        $this->load->view('kontak');
        $this->load->view('footer');
        $this->load->view('templates/footer', $data);
    }
}