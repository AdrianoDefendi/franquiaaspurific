<?php
$title = "Seja franqueado Purific - Etapa ";
include_once "header.php";
?>

<section class="cliente-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h1 class="text-center">Carrinho de compras </h1>
        
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
    <div class="row">
      <div class="col-md-12 mt-4 mb-4">
        <img class="img-fluid p-3 float-right" src="http://via.placeholder.com/350x250">
        <h2>Modalidade de investimento Franquia Corporativa</h2>
        <p>&lt;Nome&gt;, você escolheu a Franquia Corporativa como modalidade de investimento da Purific.</p>
        <p>A franquia Corporativa é uma modalidade de negócios da Purifichome-based, de baixo
        investimento e alta lucratividade, sem implantação de loja física, onde o franqueado vende
        produtos da marca Purific e parceiros homologados em residências e empresas.</p>
        <p>A franquia corporativa é linkada diretamente com a franqueadora ou à uma loja física da Purific,
        para receber suporte e adquirir produtos.</p>
        <p>Você foi indicador por &lt;nome da franquia indicadora&gt; e, portanto, terá sua franquia linkada a
        &lt;Razão Social&gt;</p>
        <p><strong>Investimento: R$ 1.590,00</strong></p>
        <p>Condições de pagamento. (boleto a vista / cartão de crédito em até 12x de R$ 150,00 / transferência bancária)</p>
        <small><p>Adquirindo sua franquia hoje, você recebe <b>04 Aparelhos Purific Natureza com Refis Vida <i></b>(Valor de venda: R$ 1.312,00)</i> para iniciar suas vendas – Podendo ser retirado diretamente na sua loja de linkagem.</p>
        <p>Além de receber no seu endereço um Box Corporativo com Materiais de Marketing, Kit Boas Vindas e Estojo de Ensaios.</p></small>
        <form action="seja-franqueado-1_1">
          <button type="submit" class="btn btn-primary btn-lg active float-right"> <i class="fas fa-shopping-cart"></i> Comprar</button>
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