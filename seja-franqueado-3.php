<?php
$title = "Seja franqueado Purific - Formulário de interesse";
include_once "header.php";
?>

<section class="cliente-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h1 class="text-center">Pagamento</h1>
        
        <div class="steps-container">
          <ul class="progressbar">
            <li class="active">Identificação</li>
            <li class="active">Documentação</li>
            <li class="visited">Pagamento</li>
            <li>Entrega</li>
          </ul>
        </div>

      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 mt-4 mb-4">
        <h2>Escolha a melhor forma de pagamento.</h2>
        <!--Contrato-->
      </div>
      <div class="col-md-3 eventos-box text-center">
        <h1><i class="fas fa-file-alt"></i></h1>
        <h4>Boleto bancário</h4>
      </div>

      <div class="col-md-3 eventos-box text-center">
        <h1><i class="far fa-credit-card"></i></h1>
        <h4>Cartão de crédito</h4>
      </div>

      <div class="col-md-3 eventos-box text-center">
        <h1><i class="fas fa-university"></i></h1>
        <h4>Depósito bancário</h4>
      </div>

      <div class="col-md-12">
        <form action="seja-franqueado-4">
          <button type="submit" class="btn btn-primary btn-lg active float-right  mt-4">Efetuar pagamento</button>
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