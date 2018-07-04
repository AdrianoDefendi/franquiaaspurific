<?php
$title = "Modalidades de franquia Purific";
include_once "header.php";
?>
<!--Perfil do franqueado-->
<section class="perfilfranqueado" style="background-image: url(<?php
  $var = rand(1,3);
  if ($var == 1) {
    print 'assets/img/bg-01.jpg';
  }
  if ($var == 2) {
    print 'assets/img/bg-02.jpg';
  }
  if ($var == 3) {
    print 'assets/img/bg-04.jpg';
  }
  ?>);">
  <div class="container">
    <div class="row"> 
      <div class="col-md-6">
        <h1>Perfil do franqueado Purific</h2>
        <h4><i class="fas fa-check goldtext"> </i>Talento comercial</h4>
        <h4><i class="fas fa-check goldtext"> </i>Espírito empreendedor</h4>
        <h4><i class="fas fa-check goldtext"> </i>Dedicação e disciplina</h4>
        <h4><i class="fas fa-check goldtext"> </i>Visão estratégica</h4>
        <h4><i class="fas fa-check goldtext"> </i>Capacidade financeira</h4>
        <a href="seja-franqueado" class="btn btn-success btn-lg" id="franquia-loja">Seja franqueado</a>
      </div>
    </div>
  </div>
</section>
<!--/Perfil do franqueado-->

<!--modalidade loja-->
<section class="modalidade-loja offset">
  <div class="container">
    <div class="row bar justify-content-center">
      <div class="col-md-7">
        <h2>Franquia Loja</h2>
        <p>A experiência completa de produtos e serviços oferecidos pela Purific, no mais moderno modelo de negócios do varejo. A modalidade de franquia Loja da Purific divide-se em três categorias, dependendo do número de habitantes (segundo censo IBGE).</p>
        <p>Na franquia loja o candidato deverá constituir Pessoa Jurídica, abrir loja física de acordo com o padrão da franqueadora e terá disponível seu site oficial Purific.</p>

        <div class="col-md-12 text-center mb-4">
          <a class="btn btn-outline-light btn-lg btn-block" href="seja-franqueado">Quero ser franqueado</a>
        </div>

      </div>


      <div class="col-md-5">
        <a data-toggle="modal" data-target="#video-01"><img class="img-fluid videothumb" src="assets/img/video-01.png"></a>
      </div>

      <div class="col-md-2 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0009_01.png">
        <h4>Produtos exclusivos</h4>
        <p class="icon">produtos únicos e inovadores</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0008_02.png">
        <h4>Mercado em crescimento</h4>
        <p class="icon">preocupação com vida sáudável é tendencia mundial</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0007_03.png">
        <h4>Apoio permanente</h4>
        <p class="icon">treinamentos online e presencial</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0006_04.png">
        <h4>Retorno imediato</h4>
        <p class="icon">Bônus em predutos na compra da franquia</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0005_05.png">
        <h4>Royalties isentos</h4>
        <p class="icon">nos primeiros 6 meses</p>
      </div>

      <div class="col-md-2 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0004_06.png">
        <h4>Maior markup do mercado</h4>
        <p class="icon"> </p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0003_07.png">
        <h4>Rendimentos fixo com troca de refil</h4>
        <p class="icon"> </p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0002_08.png">
        <h4>Loja virtual pronta para você vender</h4>
        <p class="icon"> </p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0001_09.png">
        <h4>tenha sua rede própria de franqueados</h4>
        <p class="icon"> </p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0000_10.png">
        <h4>6 formas diferentes de rendimento</h4>
        <p class="icon"> </p>
      </div>

    </div>
  </div>
</section>
<!--/Modalidade loja-->

<!--Modalidade corporativo-->
<section class="modalidade-corporativa offset">
  <div class="container">
    <div class="row bar justify-content-center">
      <div class="col-md-7">
        <h2>Franquia Corporativa</h2>
        <p>A franquia Corporativa é uma modalidade de negócios da Purific home-based, de baixo investimento e alta lucratividade, sem implantação de loja física, onde o franqueado vende produtos da marca Purific e parceiros homologados em residências e empresas.</p>
        
        <div class="col-md-12 text-center mb-4">
          <a class="btn btn-outline-light btn-lg btn-block" href="seja-franqueado">Comprar minha franquia agora</a>
        </div>

      </div>

      <div class="col-md-5">
        <a data-toggle="modal" data-target="#video-02"><img class="img-fluid videothumb" src="http://via.placeholder.com/600x400"></a>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0009_01.png">
        <h4>Produtos exclusivos</h4>
        <p class="icon">produtos únicos e inovadores</p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0008_02.png">
        <h4>Mercado em crescimento</h4>
        <p class="icon">preocupação com vida sáudável é tendencia mundial</p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0007_03.png">
        <h4>Apoio permanente</h4>
        <p class="icon">treinamentos online e presencial</p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0006_04.png">
        <h4>Retorno imediato</h4>
        <p class="icon">Bônus em predutos na compra da franquia</p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0005_05.png">
        <h4>Royalties isentos</h4>
        <p class="icon">nos primeiros 6 meses</p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0004_06.png">
        <h4>Maior markup do mercado</h4>
        <p class="icon"> </p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0003_07.png">
        <h4>rendimentos fixo com troca de refil</h4>
        <p class="icon"> </p>
      </div>

      <div class="col-md-3 col-sm-4 text-center animated pulse">
        <img class="icons img-fluid" src="assets/img/icon_0002_08.png">
        <h4>Loja virtual pronta para você vender</h4>
        <p class="icon"> </p>
      </div>

    </div>

  </div>
</section>
<!--/Modalidade corporativo-->

<!-- Modal video1 -->
<div class="modal fade" id="video-01" tabindex="-1" role="dialog" aria-labelledby="video" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VPPLy5iVNJQ" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal video2 -->
<div class="modal fade" id="video-02" tabindex="-1" role="dialog" aria-labelledby="video" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oHg5SJYRHA0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include_once "footer.php";
?>