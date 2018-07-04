    <!--footer-->
    <section class="footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <img class="img-fluid logo-footer" src="assets/img/logo-footer.svg" alt="Logo Purific - Viva Bem, viva saudável.">
          </div>
          <div class="col-md-12">
            <a href="apurific">A Purific</a>
            <a href="apurific">Produtos</a>
            <a href="contato">Seja franqueado</a>
            <a href="modalidades">Perfil do franqueado</a>
            <a href="modalidades#franquia-loja">Franquia Loja</a>
            <a href="modalidades#franquia-corporativa">Franquia Corporativa</a>
            <a href="eventos">Eventos</a>
            <a href="eventos">Notícias</a>
            <a href="login">Login</a>
            
            <p>2018 - Todos os direitos reservados. Purific Do Brasil - Central de atendimento (44) 3333.3333</p>
          </div>

        </div>
      </div>
    </section>
    <!--/footer-->

    <!-- Optional JavaScript -->

    <!-- jQuery local --> 
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>

    <!-- Popper local -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Boostrap local -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!--ScrollReveal-->
    <script src="js/scrollreveal.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      window.sr = ScrollReveal();
      sr.reveal('.foo');
      sr.reveal('.bar');
    </script>

    <!--Slick JS-->
    <script type="text/javascript">
      $(document).ready(function(){
        $('.oslider').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 720,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 2
              }
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
      });
      
    </script>

    <!--Slick JS-->
    <script type="text/javascript">
      $(document).ready(function(){
        $('.prods').slick({
          dots: true,
          infinite: true,
          autoplay: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 720,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
      });
      
    </script>

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

  </body>
</html>