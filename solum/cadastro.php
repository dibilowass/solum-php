<?php require_once("./utils/header.php") ?>
<?php require_once("./utils/navbar.php") ?>

<form class="row m-2">
    
    <h1 class="title"> Cadastro </h1>

    <div class="col-md-4">
        <label for="inputAddress" class="form-label">Nome</label>
        <input type="text" class="form-control" id="inputAddress">
    </div>

    <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
    </div>

    <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Senha</label>
        <input type="password" class="form-control" id="inputPassword4" aria-describedby="passwordHelpBlock">
        <small id="passwordHelpBlock" class="form-text text-muted">
            Sua senha deve ter entre 8 e 20 caracteres.
        </small>
    </div>

    <div class="col-md-5">
        <label for="inputCity" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="inputCity">
    </div>

    <div class="col-md-2">
        <label for="inputState" class="form-label">Estado</label>
        <select id="inputState" class="form-select">
            <option selected>Escolha...</option>
            <option>São Paulo</option>
            <option>Minas Gerais</option>
            <option>Espírito Santo</option>
            <option>Rio de Janeiro</option>
        </select>
    </div>

    <div class="col-md-2">
        <label for="inputZip" class="form-label">Cep</label>
        <input type="text" class="form-control" id="inputZip">
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Ao utilizar este site, você concorda com a nossa Política de Privacidade.
            </label>
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Criar conta</button>
    </div>

</form>



<?php require_once("./utils/footer.php") ?>