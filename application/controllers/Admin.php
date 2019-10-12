<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('ModelAkun');
        $this->load->model('ModelAgenda');
        if ($this->session->userdata('status')!='admin') {
            redirect('welcome');
        }       
    }
    
    public function index(){
        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/index');
        $this->load->view('template/foot');
    }

    public function akun(){
        $data['data'] = $this->ModelAkun->get()->result();

        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/akun',$data);
        $this->load->view('template/foot');
    }

    public function agenda(){
        $data['data'] = $this->ModelAgenda->get()->result();

        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/agenda',$data);
        $this->load->view('template/foot');
    }

    function hapus($id_user){
        $hapus = $this->ModelAkun->hapus($id_user);
        if ($hapus) {
            redirect('admin/akun');   
        } else {
        }
    }
}