<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function index()
    {
        $this->load->model('cliente_model');

        $clientes = $this->cliente_model->listarTodos();

        $dados = ['clientes' => $clientes];

        $this->load->template('cliente/index.php', $dados);
    }

    public function form($acao)
    {
        $dados = ['acao' => $acao];
        $this->load->template('cliente/form.php', $dados);
    }

    public function novo()
    {
        // $this->output->enable_profiler(TRUE);

        $usuario_logado = $this->session->userdata("usuario_logado");

        $cliente = array(
            "CLIDATA" => date('Y-m-d'),
            "CLIHORA" => date('H:i:s'),
            "USUCODIGO" => $usuario_logado['USUCODIGO'],
            "CLINOME" => $this->input->post('nome'),
            "CLIPESSOA" => $this->input->post('tipo_pessoa'),
            "CLICPCN" => $this->input->post('registro'),
            "CLIDOCUMENTO" => $this->input->post('documento'),
            "CLIEMAIL" => $this->input->post('email'),
            "CLICEP" => $this->input->post('cep'),
            "CLINUMERO" => $this->input->post('numero'),
            "CLICOMPLEMENTO" => $this->input->post('complemento'),
            "CLIREFERENCIA" => $this->input->post('referencia'),
            "CLIATIVO" => 1,
            "CLIOBS" => $this->input->post('observacao')
            // "CLIVENDEDOR" => $this->input->post(''),
            // "CLIVLCOBRADO" => $this->input->post(''),
            // "CLIVLPAGO" => $this->input->post(''),
            // "CLIPORCENTO" => $this->input->post('')
        );

        $this->load->model('cliente_model');
        $this->cliente_model->salva($cliente);
        $this->session->set_flashdata('success', 'Produto gravado com sucesso!');
        redirect('cliente');
    }
}

/* End of file cliente.php */
/* Location: .//C/wamp/laravel-express/app/Http/Controllers/cliente.php */