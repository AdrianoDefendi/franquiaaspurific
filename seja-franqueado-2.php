<?php
$title = "Seja franqueado Purific - Formulário de interesse";
include_once "header.php";
?>

<section class="cliente-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h1 class="text-center">Aceite do contrato</h1>
        
        <div class="steps-container">
          <ul class="progressbar">
            <li class="active">Identificação</li>
            <li class="visited">Documentação</li>
            <li>Pagamento</li>
            <li>Entrega</li>
          </ul>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mt-4 mb-4">
        <h2>Para comprar a sua Franquia Corporativa é necessário que você aceite o contrato de franquias Purific.</h2>
        <!--Contrato-->
        <div class="contrato">
          <p><b>Contrato.</b></br> Aliquam consequat tempus dictum. Nunc et ultricies erat, a auctor neque. Etiam mattis laoreet egestas. Suspendisse urna quam, lacinia vitae maximus a, tincidunt a nulla. Praesent accumsan ligula eu ex consectetur, vitae sagittis nisl auctor. In auctor vehicula imperdiet. Maecenas libero mauris, fringilla ac sapien et, tincidunt congue tellus. Nulla ullamcorper enim mauris. Donec ante magna, egestas tempus risus vel, feugiat lacinia enim. Sed justo quam, pellentesque nec mattis et, interdum vitae magna. Pellentesque pulvinar, metus eu porttitor faucibus, quam lectus lacinia erat, nec maximus dui justo et purus. Aenean vel consectetur sapien. Morbi sed ultrices urna, et faucibus enim. In aliquam tristique ligula, eget tempus lorem. Phasellus in suscipit justo, ac rhoncus augue.</p>

          <p>Duis nec justo tortor. Fusce id ligula urna. Proin sem odio, porttitor nec orci a, rutrum maximus nunc. Aliquam tristique suscipit dolor at pulvinar. Donec gravida tincidunt dui consectetur facilisis. Nunc vitae ex sollicitudin, pellentesque arcu venenatis, convallis ipsum. Aenean tincidunt nisl quis purus tristique, in aliquet lectus finibus. Integer in magna ac ligula vulputate accumsan vel vel est. Nullam in lorem ac ipsum pretium accumsan ut nec felis.</p>

          <p>Nulla vehicula suscipit dolor in efficitur. Fusce id vulputate lectus, tempus mattis augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas scelerisque accumsan libero in facilisis. Pellentesque nunc ex, viverra sed tortor sit amet, convallis mattis nisi. Fusce lacinia iaculis rutrum. Vestibulum sed semper nulla. Sed imperdiet nunc et vulputate vestibulum. Sed vitae augue et ipsum maximus gravida. Duis venenatis, dolor eu congue vulputate, lorem massa posuere leo, et efficitur justo sem et lacus. Donec ullamcorper scelerisque orci eu feugiat. In sodales lacinia nibh eu feugiat.</p>

          <p>Aliquam non velit a metus dapibus gravida nec sit amet lacus. Ut vel dui augue. Donec vel est tellus. Curabitur a vestibulum velit, sit amet bibendum urna. Integer id bibendum ante. Mauris blandit justo non leo venenatis, non placerat sapien efficitur. Donec pulvinar, nunc vel sagittis lobortis, nunc elit venenatis magna, at cursus lacus magna eget risus. In congue est eros, et hendrerit nibh porttitor id. Nam placerat congue est non gravida. Mauris varius, massa eu faucibus sollicitudin, nunc purus laoreet quam, eget efficitur ex lectus et nisl. Cras tempus orci ante, quis tristique risus bibendum rutrum.</p>

          <p>Phasellus sed tortor sit amet est cursus placerat in a lectus. In a volutpat arcu. Nullam vulputate dapibus lectus vel aliquet. Nullam varius, mauris id condimentum ullamcorper, diam tellus maximus dolor, eget malesuada est ante id arcu. Quisque nulla lacus, consectetur in leo eu, finibus cursus elit. Ut eu odio leo. Duis eu hendrerit risus. Proin vehicula, enim non feugiat ultrices, ligula purus mattis magna, id ultricies lacus nunc eget leo. Cras congue dapibus urna, vitae convallis tortor tempor fermentum. Aenean volutpat molestie malesuada. Sed ultricies risus non arcu consectetur, eget ullamcorper nunc suscipit. Integer sollicitudin, velit id efficitur pretium, lorem ante pellentesque massa, et ornare turpis metus a odio. Proin in vulputate libero, sed semper ligula.</p>

          <form>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                Li e concordo com os termos do contrato.
                </label>
              </div>
            </div>
          </form>

        </div>
        <!--/Contrato-->


        <form action="seja-franqueado-3">
          <button type="submit" class="btn btn-primary btn-lg active float-right  mt-4">Prosseguir</button>
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