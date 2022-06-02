<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese el nombre de un post">
    </div>

    @if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th colspan="1"></th>
              </tr>
          </thead>
  
          <tbody>
              @foreach ($posts as $post)
                  <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->name}}</td>
                      <td>
                          <a class="btn btn-primary " href="{{route('admin.posts.edit', $post)}}">editar</a>
                      </td>
                      <td width="10px">
                          <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger ">eliminar</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>
        </table>
    </div>
  
    <div class="card-footer">
        {{$posts->links()}}
    </div>

    @else
    <div class="card-body">
        <strong class=" p-3">No hay registros para esta busqueda</strong>
    </div>
    @endif
 
</div>
