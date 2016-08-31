<?php
if (!$this->session->userdata("usuario_logado"))
    redirect('login');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Motoboy</title>
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.css')?>">
</head>
<body>
    <br>
    <div class="container">

        <?php if ($this->session->flashdata('success')) :?>
            <p class="alert alert-success"><?= $this->session->flashdata('success');?></p>
        <?php endif?>
        <?php if ($this->session->flashdata('danger')) :?>
            <p class="alert alert-danger"><?= $this->session->flashdata('danger');?></p>
        <?php endif?>

        <?php

        echo anchor('/', 'Principal', array('class' => 'btn btn-default'));
        echo anchor('', 'Usuário', array('class' => 'btn btn-default'));
        echo anchor('', 'Funcionário', array('class' => 'btn btn-default'));
        echo anchor('cliente', 'Cliente', array('class' => 'btn btn-default'));
        echo anchor('', 'Ordem de Serviço', array('class' => 'btn btn-default'));
        echo anchor('login/logout', 'Sair', array('class' => 'btn btn-default'));

        ?>