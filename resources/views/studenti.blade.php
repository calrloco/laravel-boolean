@extends('layouts.app')
@section('titolo','Studenti')
@section('content')
<div class="row">
    <div class="col-12">
  <div class="cards__container">
    @foreach ($data as $student)
    <div class="card">
        <div class="card__top">
            <div class="card__top-right">
        <img src="{{$student['img']}}" alt="" class="card__top-img">
            </div>
           <div class="card__top-left">
          <h3 class="card__top-heading">{{$student['name'], $student['anni']}}</h3>
          <strong class="card__bottom-palcement">{{$student['azienda']}}</strong>
          <strong class="card__bottom-palcement">{{$student['ruolo']}}</strong>
        </div>
        </div>
        <div class="card__bottom">
            <p>{{$student['descrizione']}}</p>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>
@endsection