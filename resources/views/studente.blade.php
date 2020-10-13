@extends('layouts.app')
@section('titolo','Studenti')
@section('content')
<div class="row">
 <div class="col-12">
    <div class="studenti col-lg-12 text-center">
      <h2 class="studenti__heading">I nostri ex-studenti</h2>
      <strong>Tu ci metti l’impegno, noi tutta la trasparenza. Siamo pronti a scommettere su di te.</strong>
    </div>
  <div class="cards__container cards__container-single">
    
    <div class="card">
        <div class="card__top">
            <div class="card__top-right">
               <img src="{{$student['img']}}" alt="" class="card__top-img">
            </div>
         <div class="card__top-left">
           <a href="">{{$student['name'], $student['anni']}}</h3></a>
           <strong class="card__bottom-palcement text__blue">{{$student['azienda']}}</strong>
           <strong class="card__bottom-palcement text__blue">{{$student['ruolo']}}</strong>
          </div>
        </div>
        <div class="card__bottom">
            <p>{{$student['descrizione']}}</p>
        </div>
    </div>
    
    </div>
  </div>
</div>
@endsection