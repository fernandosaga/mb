<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    public function listarTodos()
    {
        return $this->db->get("cliente")->result_array();
    }

    public function salva($cliente) {
        $this->db->insert("cliente", $cliente);
    }

}

/* End of file cliente_model.php */
/* Location: ./application/models/cliente_model.php */