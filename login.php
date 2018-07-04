<?php
$title = "Login";
include_once "header.php";
?>

<!--login-->
<section class="login-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 box align-middle">
        <h4 class="text-center">Entre com seu login e senha </h4>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
            </div>
            <button type="submit" class="btn btn-info btn-block">Entrar</button>
          </form>
          <small class="form-text text-muted">Esqueceu a senha? <a href="#"> Gerar novo login e senha </a></small>
      </div>
    </div>
  </div>
</section>
<!--/login-->

<?php
include_once "footer.php";
?>