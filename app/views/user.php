<?php
$this->layout(
    'master',
    [
        'title' => "$title"
    ]
);
?>

<style>
    span {
        color: red;
        font-weight: bolder;
    }
</style>

<main class="container content">
    <h1 style="text-align: center;">Cadastrar novos usuários</h1>
    <br>
    <form method="POST" action="/user">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail<span>*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-group col-md-6">
                <label for="senha">Senha<span>*</span></label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
            </div>
        </div>
        <div class="form-group">
            <label for="nome">Nome<span>*</span></label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF<span>*</span></label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
        </div>
        <div class="form-group">
            <label for="telefone_1">Telefone</label>
            <input type="text" class="form-control" id="telefone_1" name="telefone_1" placeholder="Telefone">
        </div>
        <div class="form-group">
            <label for="telefone_2">Telefone 2</label>
            <input type="text" class="form-control" id="telefone_2" name="telefone_2" placeholder="Telefone 2">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email_2">E-mail 2</label>
                <input type="email" class="form-control" id="email_2" name="email_2" placeholder="E-mail 2">
            </div>
            <div class="form-group col-md-6">
                <label for="apartamento">Apartamento<span>*</span></label>
                <select id="apartamento" name="apartamento_id_apartamento" class="form-control" required>
                    <option value="" selected disabled>Selecione</option>
                    <?php foreach ($data['apartamentos'] as $key => $value) {?>
                        <option value="<?=$value['id_apartamento']?>" ><?=$value['descricao']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</main>

