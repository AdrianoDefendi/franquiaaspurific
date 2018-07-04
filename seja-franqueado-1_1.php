<?php
$title = "Seja franqueado Purific - Etapa ";
include_once "header.php";
?>

<section class="cliente-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h1 class="text-center">Falta pouco para você adquirir sua franquia.</h1>
        
        <div class="steps-container">
          <ul class="progressbar">
            <li class="visited">Identificação</li>
            <li>Documentação</li>
            <li>Pagamento</li>
            <li>Entrega</li>
          </ul>
        </div>

      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 mt-4 mb-4">
        <h2 class="text-center">Cadastre seu login e senha</h2>
      </div>
      
      <div class="col-md-6 box">
        <form action="seja-franqueado-1_2">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Seu e-mail</label>
              <input type="email" class="form-control" id="email" placeholder="E-mail">
            </div>

            <div class="form-group col-md-6">
              <label for="senha">Defina uma senha</label>
              <input type="password" class="form-control" id="senha" placeholder="E-mail">
            </div>

          </div>
          <small><a href="login"> **já tenho acesso</a></small>
          <button type="submit" class="btn btn-primary btn-lg active float-right">Confirmar</button>

        </form>
        
      </div>

    </div>


  </div>
</section>


<!-- Script mascara formulário -->
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
</script>

<?php
include_once "footer.php";
?>