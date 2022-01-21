<!-- implementan a plantilla -->
@extends("layouts.plantilla")

<!-- le damos valor al title -->
@section("title", "Curso ".$curso)

<!-- le damos valor a content el cual sera muchas lineas -->
@section("content")
    <h1>Bienvenido al curso {{$curso}}</h1>
@endsection


