@extends('layouts.template')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <body>
    

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target=".carousel" data-slide-to="0" class="active"></li>
    <li data-target=".carousel" data-slide-to="1" ></li>
    <li data-target=".carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('/css/hotel1.jpg') }}" alt="exterieur hotel">
      <div class="carousel-caption">
        <h1>Calme et volupté</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/css/hotel2.jpg') }}" alt="exterieur hotel">
      <div class="carousel-caption">
        <h1>Plaisir et détente</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/css/hotel3.jpg') }}" alt="exterieur hotel">
      <div class="carousel-caption">
        <h1>Charme et douceur </h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> 
</div>

  <!--<figure>
    <img src="{{ asset('/css/hotel1.jpg') }}" alt>
    <img src="{{ asset('/css/hotel2.jpg') }}" alt>
    <img src="{{ asset('/css/hotel3.jpg') }}" alt>
    <img src="{{ asset('/css/hotel4.jpg') }}" alt>
  </figure> -->
</div>

    </div>
</div>
@endsection
