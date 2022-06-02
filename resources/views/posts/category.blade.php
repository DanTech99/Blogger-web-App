<x-app-layout>
    <div class="container m-auto py-8">
        <h1 class=" uppercase text-center text-3xl font-bold">categoria: {{$category->name}}</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                @if ($post->image)
                <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt=""> 
                @else
                <img class="w-full h-72 object-cover object-center" src=" https://th.bing.com/th/id/OIP.1RERMPCW2-x0N1a2nLsi-QHaC_?w=343&h=141&c=7&r=0&o=5&pid=1.7" alt="">
                @endif
                
                <div class="px-6 py-8">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                    </h1>

                    <div class=" text-gray-700 text-base">
                        {!!$post->extract!!}
                    </div>
                </div>

                <div class="px-6 pt-4 pb-2">
                    @foreach ($post->tags as $tag)
                        <a href="">{{$tag->name}}</a>
                    @endforeach
                </div>
            </article>
        @endforeach

        <div class="container m-auto w-full mt-4">
            {{$posts->links()}}
        </div>
        </div>
    </div>
    
</x-app-layout>