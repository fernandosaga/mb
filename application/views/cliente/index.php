<br>
<br>
<div class="row">
    <?= anchor('cliente/form/novo', 'Novo Cliente', array('class' => 'btn btn-primary'));?>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente) :?>
        <tr>
            <td><?=$cliente['CLICODIGO']?></td>
            <td><?=$cliente['CLINOME']?></td>
            <td>
                <?= anchor('cliente', 'Editar', array('class' => 'btn btn-default'));?>
                <?= anchor('cliente', 'Excluir', array('class' => 'btn btn-danger'));?>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>