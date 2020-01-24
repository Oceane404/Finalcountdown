@extends('layouts.templateAccount')

@section('content')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spirit Hostel</title>
       <!-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}">-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<style>
   
body {
    
  font: 1em Helvetica Neue, Helvetica, Arial, sans-serif;
}


p {
  margin: 0 0 1em 0;
}

h3{
    display: flex;
    justify-content: start;
}

h4{
    display: flex;
    justify-content: center!important;
    color:#796604;
}

.container2 {
  display: flex;
  justify-content: center!important;
  align-content: center;  
  border: 1px solid #636b6f;
  border-radius: .5em;
  margin-left: 25%;
  padding: 10px;
  width: 1000px;
   
}

.item {
  padding: 10px;
  background-color: white;
  border: 2px solid #05284b;
  flex: 1 1 auto;
}

.btn {
    box-shadow:inset 0px 1px 0px 0px #796504;
    background:linear-gradient(to bottom, #796504 5%, #796504 100%);
    background-color:#796504;
    border-radius:17px;            
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:20px;
    padding:5px 62px;
    text-decoration:none;
    text-shadow:0px 1px 0px #796504;
}

</style>
<body>
    
    <div class="container2" id="container">
        <div class="item">
            <h4>Réservation en cours</h4>
                <h4></h4>
                <h3>Date :</h3>
                <h3>Type d'hébergement :</h3>
                <h3>Tarif :</h3>
        </div>
        <div class="text-center">
            <button class="btn">Annulation</button>             
        </div>
        
    </div>
    
</body>


@endsection