@extends('adminlte::page')

{{-- title  --}}
@section('title', 'Dashboard')

{{-- header --}}
@section('content_header')

    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary float-right">Nueva Entrada</a>


    <h1>Listado de Post</h1>
@stop


{{-- contenido --}}
@section('content')

@if (session('info'))
    <x-adminlte-alert theme="success" title="Listo!!" dismissable>
        <strong>{{session('info')}}</strong>
    </x-adminlte-alert>
@endif

@livewire('admin.posts-index')

@stop



{{-- agregar algunos estilos adicionales  --}}
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


{{-- agregar script adicionales  --}}
@section('js')
    <script> console.log('Hi!'); </script>
@stop