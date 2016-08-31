<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Motoboy</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css')?>">
</head>
<body>
    <div class="container">

        <?php if ($this->session->flashdata('success')) :?>
            <p class="alert alert-success"><?= $this->session->flashdata('success');?></p>
        <?php endif?>

        <?php if ($this->session->flashdata('danger')) :?>
            <p class="alert alert-danger"><?= $this->session->flashdata('danger');?></p>
        <?php endif?>

        <?php echo form_open('login/autenticar'); ?>
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" id="usuario" class="form-control">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Entrar" class="btn btn-primary">
            </div>
        <?php echo form_close(); ?>
    </div>
</body>
</html>