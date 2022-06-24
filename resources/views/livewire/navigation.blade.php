<nav class=" list-none p-5 bg-white shadow md:flex md:items-center md:justify-center ">
  <div class="flex justify-between items-center ">
    <span class="text-2xl font-[Poppins] cursor-pointer">
      <a href="/">
        <img class=" h-16 lg:h-20 inline"
       src="http://gesccol.gov.co/assets/images/g.png">
      </a>
     
    </span>

    <span class="text-3xl cursor-pointer mx-2 md:hidden block">
      <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
    </span>
  </div>

  
      
 
  <ul class=" md:flex md:items-center z-[1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px]">
    @foreach ($categories as $category)
    <li class="mx-4 my-6 md:my-0">
      <a href="{{route('posts.category', $category)}}" class=" hover:text-cyan-500 duration-500">{{$category->name}}</a>
    </li>
   
    @endforeach

    @auth
    <li class="mx-4 my-6 md:my-0">
      <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf
      <a href="{{ route('logout') }}" class="hover:text-cyan-500 duration-500"  @click.prevent="$root.submit();">cerrar sesion</a>
      </form>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="{{ route('profile.show') }}" class=" hover:text-cyan-500 duration-500">perfil</a>
    </li>

     <li class="mx-4 my-6 md:my-0">
      <a href="{{ route('admin.home') }}" class=" hover:text-cyan-500 duration-500">administracion</a>
    </li>
   
    @else 
    
    


    <li class="mx-4 my-6 md:my-0">
      <a href="{{route('login')}}" class=" hover:text-cyan-500 duration-500">iniciar sesion</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="{{route('register')}}" class=" hover:text-cyan-500 duration-500">registrarse</a>
    </li>
  </ul>
  
  @endauth

  
</nav>


<script>
  function Menu(e){
  let list = document.querySelector('ul');
  e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
}
</script>