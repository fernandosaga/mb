
<h1>Cadastro Cliente</h1>

<?= form_open('cliente/novo') ?>

<div class="form-group">
    <?= form_label('Nome:', 'nome') ?>
    <?= form_input(['name'=>'nome', 'id'=>'nome', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Tipo:', 'tipo_pessoa') ?>
    <?= form_dropdown(['name'=>'tipo_pessoa', 'id'=>'tipo_pessoa', 'class'=>'form-control'], [''=>'Selecione', 'f'=>'Pessoa Física', 'j'=>'Pessoa Jurídica']); ?>
</div>

<div class="form-group">
    <?= form_label('CNPJ / CPF:', 'registro') ?>
    <?= form_input(['name'=>'registro', 'id'=>'registro', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Inscrição Estadual / RG:', 'documento') ?>
    <?= form_input(['name'=>'documento', 'id'=>'documento', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('E-mail:', 'email') ?>
    <?= form_input(['name'=>'email', 'id'=>'email', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('CEP:', 'cep') ?>
    <?= form_input(['name'=>'cep', 'id'=>'cep', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Número:', 'numero') ?>
    <?= form_input(['name'=>'numero', 'id'=>'numero', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Complemento:', 'complemento') ?>
    <?= form_input(['name'=>'complemento', 'id'=>'complemento', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Referência:', 'referencia') ?>
    <?= form_input(['name'=>'referencia', 'id'=>'referencia', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Observação:', 'observacao') ?>
    <?= form_textarea(['name'=>'observacao', 'id'=>'observacao', 'class'=>'form-control']) ?>
</div>

<div class="form-group">
    <?= form_submit('gravar', 'Gravar', ['class'=>'btn btn-primary']) ?>
    <?= form_submit('cancelar', 'Cancelar', ['class'=>'btn btn-default']) ?>
</div>

<?= form_close() ?>