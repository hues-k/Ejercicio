@extends('plantilla')
<link rel="stylesheet" href="cards.css">
@section('conten')
<div class="container-fluid fondo">
    <div class="row">
        <div class="col-5 caja">
            <h1>Interesante Seguramente está dentro de estas, ¿verdad?</h1>

            <div class="botones">
                <a href="{{route('card2')}}" type="button" class="btn btn-outline-dark waves-effect" >Si</a>
                <a href="{{route('card5')}}" type="button" class="btn btn-outline-dark waves-effect" >No</a>

            </div>
            
        </div>
        <div class="col-7 text-center pt-5 img "><img src="img/card3.jpg" alt=""></div>

     
    </div>
</div>
@endsection