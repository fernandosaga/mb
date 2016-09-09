
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
    <?= form_label('Valor Cobrado:', 'vl_cobrado') ?>
    <?= form_input(['name'=>'vl_cobrado', 'id'=>'vl_cobrado', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Valor Pago:', 'vl_pago') ?>
    <?= form_input(['name'=>'vl_pago', 'id'=>'vl_pago', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Referência:', 'referencia') ?>
    <?= form_input(['name'=>'referencia', 'id'=>'referencia', 'class'=>'form-control', 'maxlength'=>255]) ?>
</div>

<div class="form-group">
    <?= form_label('Observação:', 'observacao') ?>
    <?= form_textarea(['name'=>'observacao', 'id'=>'observacao', 'class'=>'form-control']) ?>
</div>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Telefones</strong></div>

    <div class="panel-body">
        <div class="form-group">
            <?= form_label('Tipo:', 'tel_tipo') ?>
            <?= form_dropdown(['name'=>'tel_tipo', 'id'=>'tel_tipo', 'class'=>'form-control'], [''=>'Selecione']); ?>
        </div>

        <div class="form-group">
            <?= form_label('Número:', 'tel_numero') ?>
            <?= form_input(['name'=>'telefone_numero', 'id'=>'telefone_numero', 'class'=>'form-control', 'maxlength'=>255]) ?>
        </div>

        <div class="form-group">
            <?= form_label('Ramal:', 'tel_ramal') ?>
            <?= form_input(['name'=>'tel_ramal', 'id'=>'tel_ramal', 'class'=>'form-control', 'maxlength'=>255]) ?>
        </div>

        <div class="form-group">
            <?= form_label('Contato:', 'tel_contato') ?>
            <?= form_input(['name'=>'tel_contato', 'id'=>'tel_contato', 'class'=>'form-control', 'maxlength'=>255]) ?>
        </div>

        <div class="form-group">
            <?= form_label('departamento:', 'tel_departamento') ?>
            <?= form_input(['name'=>'tel_departamento', 'id'=>'tel_departamento', 'class'=>'form-control', 'maxlength'=>255]) ?>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Setores</strong></div>

    <div class="panel-body">

        <div class="form-group">
            <?= form_label('Nome do Setor:', 'set_descricao') ?>
            <?= form_input(['name'=>'set_descricao', 'id'=>'set_descricao', 'class'=>'form-control', 'maxlength'=>255]) ?>
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox"> Principal
            </label>
        </div>

    </div>
</div>

<div class="form-group">
    <?= form_submit('gravar', 'Gravar', ['class'=>'btn btn-primary']) ?>
    <?= form_submit('cancelar', 'Cancelar', ['class'=>'btn btn-default']) ?>
</div>

<?= form_close() ?>