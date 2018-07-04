<?php
$title = "Seja franqueado Purific - Formulário de interesse";
include_once "header.php";
?>

<section class="cliente-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h1 class="text-center">Entrega</h1>
        
        <div class="steps-container">
          <ul class="progressbar">
            <li class="active">Identificação</li>
            <li class="active">Documentação</li>
            <li class="active">Pagamento</li>
            <li class="visited">Entrega</li>
          </ul>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mt-4 mb-4 text-center">
        <h2>Pronto! Seu pedido foi recebido com sucesso!</h2>
        <p>Em breve, você receberá um e-mail de confirmação com todas as informações da sua compra.</p>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#statusCompra">
          Acompanhe o status de entrega do seu Box Corporativo
        </button>


      </div>

    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="statusCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Acompanhamento da encomenda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><span class="text-secondary mr-2"><i class="fas fa-exclamation-circle"></i></span>1 - Aguardando confirmação do pagamento </br><small>Estamos aguardando a confirmação do seu pagamento. Pagamentos via boleto levam até 02 dias úteis após o pagamento para recebermos a confirmação.</small></p>
        <p><span class="text-success mr-2"><i class="fas fa-check-circle"></i></span>1 - Pagamento confirmado </br><small>Seu Box Corporativo será enviado em breve. </br>Você já pode retirar seu bônus de compra na <a href="#">Nome da loja Purific de linkagem.</a> </small></p>
        <p><span class="text-danger mr-2"> <i class="fas fa-times-circle"></i></span>1 - Pagamento não confirmado </br><small>Algo deu errado com e seu pagamento não foi creditado. <a href="#">Tentar outra forma de pagamento?</a></small></p>
        <p><span class="text-success mr-2"><i class="fas fa-check-circle"></i></span>2 - Box Corporativo enviado </br><small>Seu Box Corporativo foi enviado no endereço cadastrado. </br>Código de Rastreamento: <a href="http://www2.correios.com.br/sistemas/rastreamento/default.cfm" target="blank">XX123456489BR</a> </small></p>
      </div>
      
    </div>
  </div>
</div>


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