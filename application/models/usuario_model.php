<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function validaLogin($usuario, $senha)
    {
        $this->db->where("USULOGIN", $usuario);
        $this->db->where("USUSENHA", $senha);

        $usuario = $this->db->get("usuario")->row_array();
        return $usuario;
    }

}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */