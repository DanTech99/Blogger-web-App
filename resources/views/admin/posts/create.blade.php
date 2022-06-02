@extends('adminlte::page')

{{-- title  --}}
@section('title', 'Dashboard')

{{-- header --}}
@section('content_header')
    <h1>Dashboard</h1>
@stop


{{-- contenido --}}
@section('content')
    <x-head.tinymce-config/>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.posts.partials.form')

            {!! Form::submit('crear entrada', ['class' => 'btn btn-primary']) !!}


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
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script> --}}
    
   

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