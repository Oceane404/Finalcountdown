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
    justify-content: center!important;
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

</style>
<body>
    
    <div class="container2" id="container">
        <div class="item">
            <h4>Nom</h4>
            <h4>Prénom</h4>
            <h4>Téléphone</h4>
            <h4>Email</h4>
            <h4>Adresse</h4>
            <h4>Code postal</h4>
        </div>
        <div class="item">
            
        </div>
    
</body>


@endsection