<?php
class Web extends CI_controller
{
    function _construct()
    {
        parent::_construct();
    }
    public function index()
    {
        $data['judul']="halaman depan";
        $this->load->view('v_index.php',$data);
    }
}