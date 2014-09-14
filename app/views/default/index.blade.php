@extends ('helpers.base')

@section ('title') Saludos a jonathan @stop

@section ('content')

<h1>Probando sonido</h1>


{{ HTML::image('images/yo.jpg', $alt="DRCSports", $attributes = array('style'=>'width:100px')) }}

@include('helpers.footer', array('nombre'=>'Jesus'))

@stop


