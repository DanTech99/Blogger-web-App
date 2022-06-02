<x-app-layout>
    <div class=" container m-auto py-8">
        <h1 class=" text-3xl font-bold text-gray-600">{{$post->name}}</h1>


      
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    {{-- <img src="{{Storage::url('$post->image->url')}}" alt="" class="w-full h-80 object-cover object-center"> --}}
                    @if ($post->image)
                    <img src="{{Storage::url($post->image->url)}}" alt="" class="w-full h-80 object-cover object-center">
                    @else
                    <img src="https://th.bing.com/th/id/OIP.1RERMPCW2-x0N1a2nLsi-QHaC_?w=343&h=141&c=7&r=0&o=5&pid=1.7" alt="" class="w-full h-80 object-cover object-center">
                    @endif
                   
                </figure>

                <div class="text-lg text-gray-500 mb-2  mt-4">
                    {!!$post->extract!!} 
                    {{-- permitir html en laravel  --}}
                </div>

                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>

            {{-- contenido relacionado --}}
            <aside class="">
                <h1 class="text-2xl font-bold text-gray-600 mb-4">mas en {{$post->category->name}}</h1>

                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex"  href="{{route('posts.show', $similar)}}">
                                @if ($similar->image)
                                <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                @else
                                <img class="w-36 h-20 object-cover object-center" src="https://th.bing.com/th/id/OIP.1RERMPCW2-x0N1a2nLsi-QHaC_?w=343&h=141&c=7&r=0&o=5&pid=1.7" alt="">
                                @endif
                                
                               
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>