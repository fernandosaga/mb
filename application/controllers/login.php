<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login/index.php');
    }

    public function autenticar()
    {
        $this->load->model('usuario_model');

        $usuario = $this->input->post('usuario');
        $senha = md5($this->input->post('senha'));

        $usuario = $this->usuario_model->validaLogin($usuario, $senha);

        if ( $usuario )
        {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata('success', 'Logado com sucesso!');

            redirect('/');
        }
        else
        {
            $this->session->set_flashdata('danger', 'Usuário ou senha inválida.');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('usuario_logado');
        $this->session->set_flashdata('success', 'Usuário deslogado!');
        redirect('login');
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */