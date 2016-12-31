@extends('painel.templates.template')

@section('content')

<!--Filters and actions-->
  <div class="actions">
    <div class="container">
      <a class="add" href="forms">
        <i class="fa fa-plus-circle"></i>
      </a>

      <form class="form-search form form-inline">
        <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
        <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
      </form>
    </div>


  </div><!--Actions-->
  <div class="container">
    <h1 class="title">
        Listagem dos Posts
    </h1>

    <table class="table table-hover">
      <tr>
        <th>Título</th>
        <th>Descrição</th>
        <th width="100px">Ações</th>
      </tr>
    
      @foreach($posts as $post)
        <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>
            <a href="{{url("/painel/post/$post->id/edit")}}" class="edit">
                <i class="fa fa-pencil-square-o"></i>
            </a>
            <a href="{{url("/painel/post/$post->id/delete")}}" class="delete">
                <i class="fa fa-trash"></i>
            </a>
        </td>
        @endforeach
    </table>


    <nav>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
</div>
@endsection