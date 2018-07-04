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
            <li class="">Identificação</li>
            <li>Documentação</li>
            <li>Pagamento</li>
            <li>Entrega</li>
          </ul>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mt-4 mb-4">
        <h2 class="text-center">Obrigado pelo interesse em nossas franquias, cadastre-se para continuar.</h2>
        <form action="seja-franqueado-1">
          <h4 class="mt-4">Dados pessoais</h4>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="cpf">Seu CPF</label>
              <input type="text" class="form-control" id="cpf" placeholder="CPF">
            </div>

            <div class="form-group col-md-8">
              <label for="nome">Qual seu nome?</label>
              <input type="text" class="form-control" id="nome" placeholder="Nome completo">
            </div>

          </div>

          <div class="form-row">
            
            <div class="form-group col-md-3">
              <label for="telefone">Telefone para contato com DDD</label>
              <input type="text" class="form-control" id="telefone" placeholder="XX-9999-9999" name="tel" maxlength="12" OnKeyPress="formatar('##-####-####', this)" >
            </div>

            <div class="form-group col-md-3">
              <label for="telefone">Celular / WhatsApp</label>
              <input type="text" class="form-control" id="celular" placeholder="XX-9999-9999" name="cel" maxlength="12" OnKeyPress="formatar('##-####-####', this)" >
            </div>

            <div class="form-group col-md-6">
              <label for="email">E-mail para contato</label>
              <input type="text" class="form-control" id="email" placeholder="Seu e-mail">
            </div>

          </div>

          <h4 class="mt-4">Modalidade de negócio</h4>
          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="indicado">Você foi indicado por algum franqueado Purific?</label>
              <select id="indicado" class="form-control">
                <option value="">Não</option>
                <option value="">Sim</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="codigofranquia">(Se sim)Identificação da franquia indicadora: </label>
              <input type="text" class="form-control" id="codigofranquia" placeholder="xxxxxxxx" disabled>
            </div>

            <div class="form-group col-md-6">
              <label for="modalidade">Modalidade de franquia</label>
              <select id="modalidade" class="form-control">
                <option value="">Escolha uma opção</option>
                <option value="">Franquia Corporativa</option>
                <option value="">Franquia Loja</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="investimento">Quanto você pretende investir?</label>
              <select id="investimento" class="form-control">
                <option value="">Escolha uma opção</option>
                <option value="">Até R$ 5.000,00</option>
                <option value="">R$ 5.000,00 a R$ 25.000</option>
                <option value="">R$ 25.000,00 a R$ 50.000</option>
                <option value="">R$ 50.000,00 a R$ 80.000</option>
                <option value="">Acima de R$ 80.000</option>
              </select>
            </div>
            
          </div>

          <h4 class="mt-4">Área de atuação</h4>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="estado">Estado</label>
              <select id="estado" class="form-control">
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
            <div class="form-group col-md-8">
              <label for="cidade">Estado</label>
              <select id="cidade" class="form-control">
                <option>Escolha uma cidade</option>
                <option>Lista de nome de cidades para cada UF</option>

                <!--API do IBGE para buscar listas de cidade por UF-->
                https://servicodados.ibge.gov.br/api/docs/localidades?versao=1#api-Municipios-estadosUFMunicipiosGet
                <!--/API do IBGE para buscar listas de cidade por UF-->

                <option>http://servicodados.ibge.gov.br/api/v1/localidades/estados/41/municipios</option>
              </select>
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