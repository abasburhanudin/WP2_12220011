<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "selamat datang.. selamat belajar web programming";
    }
    public function penjumlahan($n1, $n2)
    {
         $this->load->model('Model_Latihan1');
          //$hasil = $this->Model_latihan1->jumlah($n1, $n2);
           //echo "Hasil Penjumlahan dari :<br>". $n1 ." + ". $n2 ." = "
            //.$hasil;
            $data['nilai1'] = $n1;
            $data['nilai2'] = $n2;
            $data['hasil'] = $this->Model_Latihan1->jumlah($n1, $n2);

            $this->load->view('view-latihan', $data);
         } 
        }
