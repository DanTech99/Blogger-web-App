@extends('adminlte::page')

{{-- title  --}}
@section('title', 'Dashboard')

{{-- header --}}
@section('content_header')
    <h1>Dashboard</h1>
@stop


{{-- contenido --}}
{{-- contenido --}}
@section('content')
    <x-head.tinymce-config/>

    @if (session('info'))
        {{-- <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div> --}}
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
        </x-adminlte-alert>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($post,['route' => ['admin.posts.update', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}


            @include('admin.posts.partials.form')

            {!! Form::submit('Actualizar entrada', ['class' => 'btn btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop



{{-- agregar algunos estilos adicionales  --}}
@section('css')
   <style>
       .image-wrapper{
           position: relative;
           padding-bottom: 56.25%;
       }
       .image-wrapper img{
           position: absolute;
           object-fit: cover;
           width: 100%;
           height: 100%;
       }
   </style>
@stop


{{-- agregar script adicionales  --}}
@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    
    <script>
        $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
        });

     

        //CAMBIAR IMAGEN Y MOSTRAR VISTA PREVIA
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            let file = event.target.files[0];

            let reader = new FileReader();
            reader.onload = (event) =>{
                document.getElementById("picture").setAttribute('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    </script>
@endsection