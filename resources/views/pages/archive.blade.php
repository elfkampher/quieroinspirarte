@extends('layoutct')
@include('partials.header')
@section('content')
<div class="section text-center">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <h2 class="title">Hablemos de Quiero Inspirarte</h2>
        <h5 class="description">Quienes somos: Un sitio que proporciona diversas herramientas de auto-reflexión, motivación y autoanálisis, con la finalidad de a portar medios y estrategias para el desarrollo personal. Quiero Inspirarte busca ayudar al individuo con la búsqueda de sí mismo; desde que somos niños hasta nuestra vida adulta nos formamos a base de todas las influencias que nos rodean, nos creamos un sistema de creencias acerca de nuestra vida y de nosotros mismos, si bien siempre seremos en parte la influencia de nuestro contexto socio-cultural y de quienes nos han impactado mental y emocionalmente, es posible definir nuestra identidad y establecer nuestro crecimiento de manera individual. Quiero a través del material en este sito ayudarte a identificar los sesgos que quizá no te permiten ver con claridad quien eres, que deseas, que necesitas y a donde diriges tu vida, en un mundo tan diverso en el que todos podemos aportar a la vida de todos no necesitamos aspirar a ser igual a alguien más, mejor…Convierte en ti.</h5>
      </div>
    </div>
    {{--<div class="features">
      <div class="row">
        <div class="col-md-4">
          <div class="info">
            <div class="icon icon-info">
              <i class="material-icons">chat</i>
            </div>
            <h4 class="info-title">Chat</h4>
            <p>Pronto tendremos un chat gratuito donde intentaremos apoyarte en el desarrollo de tus propias estrategias.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info">
            <div class="icon icon-success">
              <i class="material-icons">article</i>
            </div>
            <h4 class="info-title">Blog</h4>
            <p>Hemos desarrollado un centenar de articulos, en donde tocamos temas de todo tipo, desde cuidados de la economia en casa, tu relación con el diner, consejos para el ahorro, generación de ingresos extra y guias para el analisis de empresas que cotizan en bolsa.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info">
            <div class="icon icon-info">
              <i class="material-icons">facebook</i>
            </div>
            <h4 class="info-title">Comunidad</h4>
            <p>Unete a nuestra comunidad de facebook asi como a nuestro perfil de tik tok e instagram, donde subiremos videos y material exclusivo, para que continues con tu aprendizaje.</p>
          </div>
        </div>
      </div>
    </div>
  </div>--}}
  <div class="section text-center">
    <h2 class="title">Nuestro Equipo</h2>
    <div class="team">
      <div class="row">

        <div class="col-md-6">
          <div class="team-player">
            <div class="card card-plain">
              <div class="col-md-6 ml-auto mr-auto">
                <img src="../assets/img/faces/alejandra_vasquez.jpeg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
              </div>
              <h4 class="card-title">Alejandra Solvg
                <br>
                <small class="card-description text-muted">Editora | Creadora de Contenido | Analista psicologia Empresarial</small>
              </h4>
              <div class="card-body">
                <p class="card-description">Pendiente
                  <a href="facebook.com/quiero_inspirarte_alesolv">links</a> for people to be able to follow them outside the site.</p>
              </div>
              
              <div class="card-footer justify-content-center">
                <a href="facebook.com/HealthymindHealthierheart/" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                <a href="instagram.com/quiero_inspirarte_alesolv" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                
              </div>            

            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="team-player">
            <div class="card card-plain">
              <div class="col-md-6 ml-auto mr-auto">
                <img src="../assets/img/faces/juan_carlos.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
              </div>
              <h4 class="card-title">Juan Gutierrez
                <br>
                <small class="card-description text-muted"> Web Developer </small>
              </h4>
              <div class="card-body">
                <p class="card-description">Estudié la carrera de ingenieria en sistemas computacionales, en el Instituto Tecnologico de Chihuahua II, he trabajado 10 años como progrmador profesional 8 de ellos como web developer, soy fundador de encodyne y stocks illustrated.

                  <a href="facebook.com/stocksillustrated/">links</a> for people to be able to follow them outside the site.</p>
              </div>
              <div class="card-footer justify-content-center">
                <a href="facebook.com/stocksillustrated/" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                <a href="instagram.com/stocksillustrated_ef" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                <a href="www.linkedin.com/in/juan-carlos-gutierrez-paniagua-300" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>                
              </div>
            </div>
          </div>
        </div>
                
      </div>
    </div>
  </div>  
</div>
@endsection