@extends('plantilla')
<link rel="stylesheet" href="cards.css">

@section('conten')
<div class="container-fluid fondo">
    <div class="row">
        <div class="col-5 caja">
            <h1>¿La imagen que memorizaste está dentro de estas mostradas?</h1>

            <div class="botones">
                <a href="{{route('card4')}}" type="button" class="btn btn-outline-dark waves-effect" >Si</a>
                <a href="{{route('card2')}}" type="button" class="btn btn-outline-dark waves-effect" >No</a>

               

            </div>
            
        </div>
        <div class="col-7 text-center pt-5 img "><img src="img/card1.jpg" alt=""></div>

     
    </div>
</div>
@endsection