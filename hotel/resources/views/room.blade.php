@extends('layouts.template')

@section('content')

<style>
.table-list {
  display: flex;
}

.table-list-item {
  /* ① */
  width: 33.33%;
  /* ② */
  padding-left: 12px;
  padding-bottom: 12px;
}

.table-card {
  padding: 24px;
  background-color: white;
}

.table-card h3 {
  margin-top: 1;

}

h3{
    color: #796604;
}

.table-card p {
    margin-top: 1;
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
<div class="table-list">
  <div class="table-list-item">
    <div class="table-card">
      <h3>Chambres</h3>
      <img src="{{ asset('/css/room.png') }}" alt="chambre standard">
      <br>
      <p>
      Si Dalí chérissait le surréalisme et son attrait pour le crépuscule, nous sommes convaincus qu’une bonne nuit de sommeil annonce une belle journée. C’est pourquoi votre chambre offre un confort optimal, sous le signe de la détente et du bien-être,de l’aube au crépuscule.Le décor idyllique pour une expérience véritablement régénérante. Offre une vue magnifique sur le bleu de la mer Égée
      </p>
      <div class="text-center">
        <button class="btn">Réserver</button>
      </div>
    </div>
  </div>
  <div class="table-list-item">
    <div class="table-card">
      <h3>Suites Deluxe</h3>
      <img src="{{ asset('/css/room2.png') }}" alt="suite deluxe">
      <br>
      <p>
      Emblème de l’élégance et de l’opulence, la Suite Deluxe vous invite à passer des instants inoubliables. Son salon vous assurera confort et intimité dans un écrin de luxe.
      Une oasis de détente et de repos équipé d’une grande terrasse donnant sur le jardin luxuriant.
      Surplombant les jardins paysagers et la grande terrasse, un havre onirique pour un séjour régénérant.
      </p>
      <div class="text-center">
        <button class="btn">Réserver</button>
      </div>
    </div>
  </div>
  <div class="table-list-item">
    <div class="table-card">
      <h3>Suites signatures</h3>
      <img src="{{ asset('/css/room3.png') }}" alt="suite signature">
      <br>
      <p>
      Chambre intelligente de 22 à 24 m², luxe abordable, technologie de pointe et design moderne. Vous avez le choix entre un lit double ou king-size et le type d’oreillers qui convient à vos besoins à partir du menu d’oreillers. Des anti-allergies à partir de draps, serviettes, peignoirs et peignoirs en coton 100% naturel complètent ainsi votre expérience.
      </p>
      <div class="text-center">
        <button class="btn">Réserver</button>
      </div>
    </div>
  </div>
</div>
@endsection