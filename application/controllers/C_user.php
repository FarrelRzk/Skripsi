<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('m_data');
    }

    function beranda()
    {
        $data['judul_halaman'] = 'Login';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['kamar'] = $this->m_data->detail_kamar(['1' => '1'])->result();

        $this->load->view('_partials/v_head_form', $data);
        $this->load->view('v_beranda', $data);


    }
}