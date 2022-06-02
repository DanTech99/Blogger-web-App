@extends('adminlte::page')

{{-- title  --}}
@section('title', 'Dashboard')

{{-- header --}}
@section('content_header')
    <h1>crear categorias</h1>
@stop


{{-- contenido --}}
@section('content')
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
            {!! Form::open(['route' => 'admin.categories.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'nombre', []) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la categoria']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'slug', []) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre del slug', 'readonly']) !!}

                    @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                {!! Form::submit('crear categoria', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

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
    </script>
@endsection

