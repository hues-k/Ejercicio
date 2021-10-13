<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>

    <title>Document</title>
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link href = "https: //fonts.googleapis.com/css2? family = Open + Sans & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" href="MyStyle.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
  <!--Navbar -->
  <nav class="mb-1 navbar  navbar-expand-lg navbar-light   ">
    <div class="">
      <a id="logo" class="pl-5" href="#"><img class="" src="img/logo.jpg" alt=""></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-5  ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#queHacemos">QUE HACEMOS
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#porque">POR QUE MY BRAND</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nosotros">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactame">CONTACTANOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
        </li>
       
      </ul>
     
    </div>
  </nav>
  <!--/.Navbar -->
<body>
@yield('conten')
 



<script>
    //  gsap.to(".caja", {rotation: 27, x: 100, duration: 1});
    gsap.from(".su", {
  opacity: 0, 
  y: 100, 
  duration: 5
});
      let tween = gsap.from('.caja', {
            duration: 2,
             y: -200, //'random(-500,500)',
             scale: 0,
             stagger: 0.5,
             delay: 2 // it's better to use timeline
         });

         $( document ).ready(function() {
  new WOW().init();
});

</script>
<script src="">
  
});
</script>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script></body>
</body>
<!-- footer -->
<footer>
  <div class="row">
    <div class="col-6 text-center">
      <img src="img/footer.jpg" alt="">
      <p>Derechos Reservados 2021</p>
    </div>
    <div class="col-4">
      <p>Tel.: 55 83 35 13 25 </p>
      <p>Mail: administracion@mybrand.mx</p>
    </div>
    <div class="col-2 pt-5 text-dark">
      
        <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
     
     
        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
      
    </div>
  </div>
</footer>
<!-- /foter -->

</html>