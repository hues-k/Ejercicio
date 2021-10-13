@extends('plantilla')

@section('conten')

<div class="container-fluid fondo">
  <div class="row">
    <div class="col-md-6 col-sm-12 col-12  caja a">
      <h1 class=" t1 ">Invertir en la identidad de tu marca no es caro, no hacerlo sí lo es.</h1>
      <p>En <span>mybrand</span>  planeamos, diseñamos y ejecutamos estrategias bajo una metodología comprobada para encontrar la personalidad apropiada de tu marca.</p>
    </div>
    <div class="col-md-6 col-sm-12 col-12 caja b pl-5  text-center ">
      <img class=" " src="img/B.jpg" alt="">
    </div>

  </div>
</div>

<!--quien somos -->
<div id="queHacemos" class="container-fluid c2">
<h1>QUIÉNES SOMOS</h1>

    <p>Un grupo de profesionales apasionados por la creatividad que dedican su vida a encontrar qué es lo que hace única a tu marca.</p>


</div>
<!--/.quien somos -->

<div class="container-fluid">
 <div class="row">
   <div class="su col-md-6 col-sm-12 col-12  fonNegro">
     <h3 class="animated bounce "> <span> Destruimos la invisibilidad</span> de las marcas para <span>potenciar</span>  su esencia y personalidad visual.</h3>
   </div>
   <div class="su col-md-6 col-sm-12 col-12  text-center blanco">
     <h2>CÓMO LO HACEMOS</h2>
     <p>Con nuestra planeación 360º podrás tener identidad visual, tono de comunicación y lenguaje sin importar el tipo de negocio que tengas. Te asesoramos en:</p>
     <div class="text-center" >
      <img src="img/blanco.jpg" alt="">
    </div>
    </div>
 </div>

</div>

<div id="porque"  class="container-fluid fondo c3">
  <h2>Sabemos justo lo que tu MARCA necesita para atraer clientes potenciales</h2>
</div>

<div class="container-fluid fondo sombra">
  <div class="text-center">
    <img style="width: 1200px;" src="img/loteria.jpg" alt="">
    <a href="{{route('card1')}}" type="button" class="btn btn-outline-dark waves-effect" >COMPRUEBALO</a>
  
   
  </div>

</div>

<div class="container-fluid fondo c4 text-center">
  <p>En <span>mybrand</span> nos apasiona analizar, imaginar, crear y definir estilos de comunicación que posicionarán tu marca.</p>

</div>

 <!-- nosotros -->
<div id="nosotros" class="container-fluid black nosotros">
  <div class="row black">
    <div class="col-md-6 col-sm-12 col-12 ">
      <h1 class=" wow animated swing">NOSOTROS</h1>
      <p>Nos apasiona encontrar la esencia de las marcas y transmitirla de manera contundente hacia su público.<br><br>
         Sabemos que todo lo que comunica una marca, como puede ser un logo o un slogan, deja una huella en la mente y en el corazón del espectador. Esto provoca que  se identifique y nos haga parte de su mundo.<br><br>
          En la medida en que nuestros clientes descubran su verdadera esencia, podrán llegar a su máximo potencial.</p>
    </div>
    <div class="col-md-6 col-sm-12 col-12 ">
      <div class="na wow animated swing"><img src="img/focos.jpg" alt=""></div>
      
    </div>
  </div>

  <div class="row black">
    <div class="col-md-6 col-sm-12 col-12 ">
      <div class="na2  wow animated bounceIn"><img src="img/señora.jpg" alt=""></div> 
     </div>
    <div class="wow animated bounce  col-md-6 col-sm-12 col-12  señ">
      <p>mybrand nace de la asociación de la Directora Creativa Ana Laura Naim, experta en el mundo de los medios, con una trayectoria profesional de dos décadas realizando diseños para Elle Magazine, PepsiCo (Sabritas) y TMM, y del principal inversionista de Odara y BlueBee, Gerardo David.<br>
        <br> Actualmente en mybrand nuestra principal ocupación es ayudar a las marcas a encontrar su esencia visual y eliminar su invisibilidad.</p>
      
    </div>
  </div>

</div>
 <!-- /nosotros -->

 <!-- Caso de exito -->
<div class="container-fluid CasoExito fondo">
  <h1 class=" wow animated heartBeat text-center">Caso de éxito</h1>
  
 <!-- carrusel -->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Adamant</h4>
                <p class="card-text">Real Estate</p>
                <a class="btn btn-primary">ver</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Odara</h4>
                <p class="card-text">Beauty</p>
                <a class="btn btn-primary">Ver</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Casa de pastor</h4>
                <p class="card-text">Restaurante</p>
                <a class="btn btn-primary">Veer</a>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Adamant</h4>
              <p class="card-text">Real Estate</p>
              <a class="btn btn-primary">ver</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Odara</h4>
              <p class="card-text">Beauty</p>
              <a class="btn btn-primary">Ver</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Casa de pastor</h4>
              <p class="card-text">Restaurante</p>
              <a class="btn btn-primary">Veer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Adamant</h4>
              <p class="card-text">Real Estate</p>
              <a class="btn btn-primary">ver</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Odara</h4>
              <p class="card-text">Beauty</p>
              <a class="btn btn-primary">Ver</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top"
              src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Casa de pastor</h4>
              <p class="card-text">Restaurante</p>
              <a class="btn btn-primary">Veer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
 <!-- fin carrusel -->

</div>
 <!-- /Caso de exito -->

<!-- contactanos -->
<div id="contactame" class="container-fluid fondo contactanos">
  <div class="container">
    <div class="row">
      <div class="conta col-md-6 col-sm-12 col-12 "> <h2>Contactanos</h2></div>
      <div class="formulario col-md-6 col-sm-12 col-12 "> 
        <!-- Default form contact -->
<form class="text-center border border-light p-5" action="#!">

  <p class="h4 mb-4">Contactanos</p>

  <!-- Name -->
  <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

  <!-- Email -->
  <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">



  <!-- Message -->
  <div class="form-group">
      <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
  </div>

  <!-- Copy -->
 

  <!-- Send button -->
  <button class="btn btn-info btn-block" type="submit">Enviar</button>

</form>
<!-- Default form contact -->
      </div>
    </div>
    

  </div>
</div>
<!-- /contactanos -->



    
@endsection