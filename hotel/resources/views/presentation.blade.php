@extends('layouts.template')

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
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

/* Add a grey background color on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background color to the active button */
.btn.active {
  background-color: #666;
   color: white;
}

.txt h2 {
    color: #796604;
    display: flex;
    justify-content: center;
}

.txt p {
    margin-left: 6%;
    margin-right: 6%;
    padding: 2%;
}

</style>

<div class="row">
  <div class="column nature">
    <div class="content">
    <img src="{{ asset('/css/hotel2.jpg') }}" alt="nature" style="width:100%">
      <h4>Plage de Lalaria</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
        <img src="{{ asset('/css/hotel3.jpg') }}" alt="cars" style="width:100%">
      <h4>Cour extérieure de l'auberge</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
        <img src="{{ asset('/css/hotel4.jpg') }}" alt="nature" style="width:100%">
      <h4>Plage de Kos</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

<!-- END GRID -->
</div>

<div class="txt">
    <h2>Bienvenue au Spirit Hostel</h2>
    <p>Situé au bord de l’eau, le Spirit hôtel, auberge de luxe depuis 1912, vous propose tout ce qu’il faut pour un séjour de qualité supérieure, depuis l’hospitalité authentique et chaleureuse de son personnel dévoué à son style architectural traditionnel et ses espaces intérieurs minimalistes à l’élégance bohémienne. Les merveilleux jardins de l’hôtel, tout en parfums, composent une galerie éclectique en plein air qui présente d’exceptionnelles œuvres d’art contemporain créées par des artistes grecs et internationaux, issues de la collection de la Fondation G. & A. Mamidakis.  Avec son restaurant primé, la pittoresque ‘Petite Venise’, la plage privée et une foule d’installations et de conforts de luxe, Minos Beach art hotel est un hôtel convivial pour les familles qui condense l’essence des vacances de luxe en Crète.</p>

</div>

<script>
    filterSelection("all") // 
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";

  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Eléménts filtrés
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Cache
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>


@endsection