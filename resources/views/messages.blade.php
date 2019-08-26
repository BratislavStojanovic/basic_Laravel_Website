@extends('layouts.app')
@section('content')
  <h1>Poruke</h1>
@if(count($messages) > 0)
@foreach($messages as $message)
<ul class="list-group">
  <li class="list-group-item"> Ime: {{$message->ime}}</li>
  <li class="list-group-item"> E-mail: {{$message->email}}</li>
  <li class="list-group-item"> Poruka: {{$message->poruka}}</li>
</ul>
@endforeach
@endif
@endsection

@section('sidebar')
@parent
<p>Ovo je ubaceno u sidebar</p>
@endsection
