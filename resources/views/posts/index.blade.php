<x-app-layout>
    <div class="container bg-gray-200 m-auto mt-5">
    
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center  @if($loop->first) md:col-span-2  @endif"  style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://th.bing.com/th/id/OIP.1RERMPCW2-x0N1a2nLsi-QHaC_?w=343&h=141&c=7&r=0&o=5&pid=1.7 @endif );">
                  
                    <div class="w-full h-auto px-8 flex flex-col justify-center">
                        <h1 class="text-2xl text-white leading-5 font-ligth mt-2">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->name}}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
    
        </div>  
        <div class=" bg-white mt-4  px-3 py-3">
         {{$posts->links()}}
         </div>
     </div>
    </x-app-layout>