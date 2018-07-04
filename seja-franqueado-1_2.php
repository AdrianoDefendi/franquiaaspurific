<?php
$title = "Seja franqueado Purific - Formulário de interesse";
include_once "header.php";
?>

<section class="cliente-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h1 class="text-center">Formulário de interesse</h1>
        
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
        <h2 class="text-center">Ótimo! agora cadastre seu endereço de entrega.</h2>
        <form action="seja-franqueado-2">
          <div class="form-row mt-4">
            <div class="form-group col-md-6">
              <label for="rua">Rua</label>
              <input type="text" class="form-control" id="ra" placeholder="Nome da rua">
            </div>

            <div class="form-group col-md-2">
              <label for="numero">Número</label>
              <input type="text" class="form-control" id="numero" placeholder="0000">
            </div>

            <div class="form-group col-md-4">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" placeholder="Nome do bairro" name="bairro">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" placeholder="Nome da cidade" name="cidade">
            </div>
            <div class="form-group col-md-3">
              <label for="uf">Estado</label>
              <select id="uf" class="form-control">
                <option value="">Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="cep">CEP</label>
              <input type="text" class="form-control" id="cep" placeholder="00000-000" name="cel" maxlength="9" OnKeyPress="formatar('#####-###', this)" >
            </div>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Conferi todas as informações e estão corretas.
              </label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-lg active float-right">Prosseguir</button>
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