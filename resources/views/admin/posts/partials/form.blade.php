<div class="form-group">
    {!! Form::label('name', 'nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese nombre del post']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug del post', 'readonly']) !!}

    @error('slug')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<div class="form-grop">
    {!! Form::label('category_id', 'categorias', ) !!}
    {!! Form::select('category_id', $categories, null,  ['class' => 'form-control']) !!}
    @error('category_id')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
    {!! Form::radio('status', 1, true) !!}
        borrador
    </label>
    
    <label>
        {!! Form::radio('status', 2) !!}
            publicado
    </label>


        {{-- MENSAJE DE ERROR --}}
    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row">
    <div class="col mb-3">
        <div class="image-wrapper">
            @isset ($post->image)
            <img src="{{Storage::url($post->image->url)}}" alt="imagen">
            @else
            <img id="picture" src="https://th.bing.com/th/id/OIP.1RERMPCW2-x0N1a2nLsi-QHaC_?w=343&h=141&c=7&r=0&o=5&pid=1.7" alt="">
            @endisset
         
        </div>
        
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'imagen del post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>
        @error('file')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
    


<div class="form-group">
    {!! Form::label('extract', 'extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'body') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>