<?php
class Coba extends CI_Controller {
    public function index()
    {
        echo"Selamat Datang di Web programming II";
    }
    public function biodata($nama=null,$nim=null)
    {
        //echo "Nama : $nama <br>";
        //echo "Nim : $nim ";
        $data['nama']=$nama;
        $data['nim']=$nim;
        $this->load->view('v_Coba',$data);
    }
}