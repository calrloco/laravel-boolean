@extends('layouts.app')
@section('titolo','Studenti')
@section('content')
<div class="row">
 <div class="col-12">
    <div class="studenti col-lg-12 text-center">
      <h2 class="studenti__heading">I nostri ex-studenti</h2>
      <strong>Tu ci metti l’impegno, noi tutta la trasparenza. Siamo pronti a scommettere su di te.</strong>
    </div>
  <div class="cards__container">
    @foreach ($data as $key => $student)
    <div class="card">
          <div class="card__top card__top-slider">
              <div class="card__top-right">
               <img src="{{$student['img']}}" alt="" class="card__top-img card__top-img-slider">
              </div>
              <div class="card__top-right card__top-right-slider">
              <a href="{{route('Student.studente',['id'=> $key])}}"><h3 class="card__top-heading {{$key}}">{{$student['name'], $student['anni']}}</h3></a>
             <strong>Assunt{{($student['sex']== 'f') ? 'a':'o'}} da</strong>
             <strong class="card__bottom-palcement text__blue">{{$student['azienda']}}</strong>
             <strong class="card__bottom-palcement text__blue">{{$student['ruolo']}}</strong>
              </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</div>
@endsection