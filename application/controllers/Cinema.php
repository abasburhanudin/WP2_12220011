<?php
class Cinema extends CI_Controller {
    public function index()
    {
        echo"Pemesanan Tiket Cinema 99";
    }
    public function biodata($nama=null,$nim=null)
    {
        //echo "Nama : $nama <br>";
        //echo "Nim : $nim ";
        $data['nama']=$nama;
        $data['nim']=$nim;
        $this->load->view('view-input-cinema',$data);
    }
}