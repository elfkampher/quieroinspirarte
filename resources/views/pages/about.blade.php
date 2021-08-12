@extends('layoutct')
@include('partials.header')
@section('content')
<div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="../assets/img/faces/alejandra_vasquez.jpeg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Quiero Inspirarte</h3>
                <h6>Alejandra Solvg | Fundador</h6>
                <a href="#" class="btn btn-just-icon btn-link btn-bank"><i class="fa fa-bank"></i></a>
                <a href="#" class="btn btn-just-icon btn-link btn-area-chart"><i class="fa fa-area-chart"></i></a>
                <a href="#" class="btn btn-just-icon btn-link btn-money"><i class="fa fa-money"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p>Quienes somos: Un sitio que proporciona diversas herramientas de auto-reflexión, motivación y autoanálisis, con la finalidad de a portar medios y estrategias para el desarrollo personal. Quiero Inspirarte busca ayudar al individuo con la búsqueda de sí mismo; desde que somos niños hasta nuestra vida adulta nos formamos a base de todas las influencias que nos rodean, nos creamos un sistema de creencias acerca de nuestra vida y de nosotros mismos, si bien siempre seremos en parte la influencia de nuestro contexto socio-cultural y de quienes nos han impactado mental y emocionalmente, es posible definir nuestra identidad y establecer nuestro crecimiento de manera individual. Quiero a través del material en este sito ayudarte a identificar los sesgos que quizá no te permiten ver con claridad quien eres, que deseas, que necesitas y a donde diriges tu vida, en un mundo tan diverso en el que todos podemos aportar a la vida de todos no necesitamos aspirar a ser igual a alguien más, mejor…Convierte en ti. </p>

        </div>
        

        {{--<div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#estrategia_financiera" role="tab" data-toggle="tab">
                    <i class="material-icons">savings</i> Estrategia Financiera
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#gestion_patrimonial" role="tab" data-toggle="tab">
                    <i class="material-icons">account_balance</i> Gestión Patrimonial
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#inversion_value" role="tab" data-toggle="tab">
                    <i class="material-icons">rule</i> Inversión Value
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="estrategia_financiera">
            <div class="row">
              <div class="col-md-3 ml-auto">
              	<h2>Estrategia Financiera</h2>
		          <p>Para apoyarte a mejorar tu economia, vamos a orientarte en como atacar tus problemas financieros desde varios frentes, empezando por vigilar los gastos personales, creando una estrategia de ahorro e inversión y muy importante haciendo una planeación para el retiro. </p>		          
                <img src="../assets/img/examples/1.png" class="rounded">
                <img src="../assets/img/examples/2.png" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/3.png" class="rounded">
                <img src="../assets/img/examples/4.png" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="gestion_patrimonial">
            <div class="row">            	
              <div class="col-md-3 ml-auto">
              	<h2>Gestión Patrimonial</h2>
  	          	<p>ahorrar y planear el futuro es muy importante, pues no siempre seremos jovenes y no siempre estaremos llenos de energia ni tendremos la misma capacidad para trabajar, por ello aprenderemos a gestionar nuestro patrimonio y desarrollar estrategias de inversión para asegurar una excelente calidad de vida</p>
                <img src="../assets/img/examples/5.png" class="rounded">
                <img src="../assets/img/examples/6.png" class="rounded">
                <img src="../assets/img/examples/2.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/7.png" class="rounded">
                <img src="../assets/img/examples/8.png" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="inversion_value">
            <div class="row">
              <div class="col-md-3 ml-auto">
              	 <h2>Inversión Value</h2>
          		<p>La inversión en bolsa tiene muchos taboos, algunas de las cosas que se dicen de la inversión en bolsa son ciertas, muchas otras no, aprenderas a diferenciar entre mitos y verdades, acerca de la inversión en la bolsa de valores usando la estrategia que han usado grandes inversores como: Warren Buffet, Peter Lynch, Charlie Munguer, entre otros.</p>
                <img src="../assets/img/examples/9.png" class="rounded">
                <img src="../assets/img/examples/10.png" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/11.png" class="rounded">
                <img src="../assets/img/examples/12.png" class="rounded">
                <img src="../assets/img/examples/13.png" class="rounded">
              </div>
            </div>
          </div>
        </div>--}}
      </div>
    </div>
  </div>
@endsection