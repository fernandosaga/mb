<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    public function index()
    {
        // $this->load->view('principal/index.php');

        $dados = ['menu_ativo'=>'principal'];

        $this->load->template('principal/index.php', $dados);
    }

}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */