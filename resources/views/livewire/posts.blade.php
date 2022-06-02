<div class="container bg-gray-100 m-auto mt-5">
    <div class="grid grid-cols-2 gap-6 ">
        @foreach ($posts as $post)
            <article class=" w-full  h-60 bg-gray-600 border-2  @if($loop->first) col-span-2  @endif">
                {{-- para mostrar las imagenes --}}
                <div class="container w-full h-32 bg-gray-700">
                    imagenes
                     {{-- <img src="{{Storage::url($post->image->url)}}" alt=""> --}}
                </div>
              

                <div class="w-full h-auto px-8 flex flex-col justify-center">
                    <h1 class=" leading-5 font-ligth">
                        <a href="">
                            {{$post->name}}
                        </a>
                    </h1>
                </div>
            </article>
        @endforeach
    </div>  
 </div>

 <div class=" bg-blue-200 mt-4">
 {{$posts->links()}}
 hola
 </div>
