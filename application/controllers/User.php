<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/Header', $data);
        $this->load->view('templates/Sidebar', $data);
        $this->load->view('templates/Topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/Footer');
    }

    public function view_product()
    {
        $this->load->model('Toko_model');
        $data['title'] = 'Product';
        $data['produk'] = $this->Toko_model->lihat_data()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/Header', $data);
        $this->load->view('templates/Sidebar', $data);
        $this->load->view('templates/Topbar', $data);
        $this->load->view('user/product/view_product', $data);
        $this->load->view('templates/Footer');
    }
}
