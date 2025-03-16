<?php require_once("./utils/header.php") ?>
<?php require_once("./utils/navbar.php") ?>

<section style=" background-image: url(assets/banners/banner-cadastro.png);  background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    ">

<div class="container-cadastro"> 

<div class="container-cadastro-esquerdo">
    
</div>
<div class="container-cadastro-form">
<h1>CRIAR CONTA</h1>

<h3>

<form action="index.php" method="post">

<label>E-mail</label><br>
<input class="cadastro-caixa" placeholder="Insira seu e-mail" type="email" name="email" required><br><br>

<label>Telefone</label><br>
<input class="cadastro-caixa" placeholder="Insira seu número de telefone" type="number" name="telefone" required><br><br>

<label>Senha</label><br>
<input class="cadastro-caixa" placeholder="Crie uma senha forte" type="password" name="senha" required><br><br>




<input type="submit" value="Prosseguir" class="cadastro-btn">

</form>
</h3>

</div>


</div>

</section>




<?php require_once("./utils/footer.php") ?>