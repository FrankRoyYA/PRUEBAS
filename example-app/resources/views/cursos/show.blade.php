<!-- Heredar el código de la plantilla -->  
@extends('layouts.plantilla')

<!-- Modificar la sección del título -->
@section('title', 'Cursos' . $curso)

<!-- Personalizar el contenido de la página (content) -->
@section('content')
<h1>Bienvenido al curso:  {{$curso}}</h1>
@endsection