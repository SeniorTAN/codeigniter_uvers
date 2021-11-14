<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {
    public function index(){
        $data = array(
            'kampus' => "Universitas Universal",
            'email' => "info@uvers.ac.id",
            'telp' => "007"
        );
        $this->load->view('hello_uvers', $data);
    }

    public function test(){
        echo"<h1>Menampilkan langsung dari Controller</h1>";
}
    public function halo(){
        $data['nama_web'] = "UVERS";
        $this->load->view('view_belajar',$data);
    }
}