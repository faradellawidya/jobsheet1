<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        //$data['nama'] = "Faradella Widya Putri";
        $data = array(
                'nama' => "Faradella Widya Putri",
                'alamat' => "Jl Perak Selatan 16 Malang",
                'email' => "faradellawidya@gmail.com", 
                );
        $data['tugas'] = array("Ngoding", "Nyuci", "bobo ciang");
        $this->load->view('home', $data);
        
    }

}

/* End of file Home.php */

?>