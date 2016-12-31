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
        Listagem dos usuários
    </h1>

    <table class="table table-hover">
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th width="150px">Ações</th>
      </tr>
    
      @foreach($users as $user)
        <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="{{url("/painel/users/$user->id/roles")}}" class="permission">
                <i class="fa fa-unlock"></i>
            </a>
            <a href="{{url("/painel/user/$user->id/edit")}}" class="edit">
                <i class="fa fa-pencil-square-o"></i>
            </a>
            <a href="{{url("/painel/user/$user->id/delete")}}" class="delete">
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