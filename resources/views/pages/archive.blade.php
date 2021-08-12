@extends('layoutct')
@include('partials.header')
@section('content')
<div class="section text-center">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <h2 class="title">Hablemos de Stocks Illustrated</h2>
        <h5 class="description">Esta pagina y sus comunidades surgen como una necesidad de apoyar a la gente que como sus fundadores, iniciaron sus vidas adultas sin una educación financiera y cometiendo errores que en su momento nos hicieron sudar la gota gorda y tener una economia precaria.</h5>
      </div>
    </div>
    <div class="features">
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
  </div>
  <div class="section text-center">
    <h2 class="title">Nuestro Equipo</h2>
    <div class="team">
      <div class="row">
        <div class="col-md-6">
          <div class="team-player">
            <div class="card card-plain">
              <div class="col-md-6 ml-auto mr-auto">
                <img src="../assets/img/faces/juan_carlos.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
              </div>
              <h4 class="card-title">Juan Gutierrez
                <br>
                <small class="card-description text-muted">Fundador | Web Developer | Analista Financiero</small>
              </h4>
              <div class="card-body">
                <p class="card-description">Estudié la carrera de ingenieria en sistemas computacionales, en el Instituto Tecnologico de Chihuahua II, donde con grandes espectativas de la vida, sali a buscar mi primer empleo, tuve mucha suerte porque antes de graduarme ya tenia mi primer trabajo y tenia la mentalidad de que si trabajaba muy duro pronto mi situación economica mejoraria y no me equivoque, pero fue una mejora muy por debajo de mis espectativas, debido a que no tenia idea de como controlar mis gastos, entre mas ganaba, mas gastaba y eso me orilló a pasar situaciones personales y economicas muy desagradables, que de haber tenido una solida educación en finanzas, hubiera sido muy distinto, pero eso también me llevo a buscar información, a emprender y sobre todo a ayudar a otras personas a que no pasaran las mismas malas experiencias que yo pasé.

                  <a href="facebook.com/stocksillustrated">links</a> for people to be able to follow them outside the site.</p>
              </div>
              <div class="card-footer justify-content-center">
                <a href="facebook.com/stocksillustrated" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                <a href="instagram.com/stocksillustrated_ef" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                <a href="www.linkedin.com/in/juan-carlos-gutierrez-paniagua-300" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
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
                <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>  
</div>
@endsection