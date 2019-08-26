@extends('layouts.app')
@section('content')
  <h1>Kontakt</h1>
  {{ Form::open(['url' => 'contact/submit']) }}
  <div class="form-group">
     {{Form::label('ime', 'Ime')}}
     {{Form::text('ime', '',['class'=>'form-control','placeholder'=>'Unesite ime'])}}
  </div>
	<div class="form-group">
     {{Form::label('email', 'E-Mail Adresa')}}
     {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Unesite e-mail'])}}
  </div>
  <div class="form-group">
     {{Form::label('poruka', 'Poruka')}}
     {{Form::textarea('poruka', '',['class'=>'form-control','placeholder'=>'Unesite poruku'])}}
  </div>
  <div>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
  </div>
{{ Form::close() }}
@endsection
