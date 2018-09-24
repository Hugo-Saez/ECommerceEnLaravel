
@extends('layout')
@section('content')

<div class="container-fluid home">
  <div class="wrapper-home1">
    <div class="row">
      <div class="central-image">
        <img src="images/adult-face-fun.jpg" width="900px" height="350px">
      </div>
    </div>
  </div>

  <div class="wrapper-home2">
    <div class="row">
      <div class="col-md-4">
        <div class="card-deck">
          <button type="button" class="btn btn-home"><b>OFERTAS</b>
            <i class="fas fa-angle-right"></i>
          </button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-deck">
          <button type="button" class="btn btn-home"><b>NOVEDADES</b>
            <i class="fas fa-angle-right"></i>
          </button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-deck">
          <button type="button" class="btn btn-home"><b>PROMOCIONES</b>
            <i class="fas fa-angle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="wrapper-home3">
    <div class="row">
      @foreach ($glasses as $glass)
        <div class="col-md-4">
          <div class="card-deck">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top frame" src="{{ $glass->url_imagen }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ $glass->marca }}</h5>
                <h4 class="card-text" align="center">{{ $glass->precio }}$</h4>
                <a href="#" class="btn btn-buy font-italic"><b>Recibelo ya</b></a><br>
                <img class="stars" src="images/stars.png">
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@stop
