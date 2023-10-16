<?php
class Web extends CI_controller
{
    function _construct()
    {
        //code...
        parent::_construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul']="halaman depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about()
    {
        $data['judul']="Halaman About";
        $this->load->view('v_header',$data); 
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);  
    }
}