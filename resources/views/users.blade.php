@extends('layout.app',["current" => "users"])
@section('body')

<style>

.btn {
    margin-top:18%;
}
</style>

<div class="card border">
    <div class="card-body">
      <h5 class="card-title">Filtro de pesquisas</h5>
      <form action ="/users" method="POST" name="form_filtro">
      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
 
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nome</label>
                <input type="text" name="name" class="form-control"  placeholder="Pesquisar por nome">
            </div>
            <div class="form-group col-md-4">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email"  placeholder="Pesquisar por e-mail">
            </div>

            <div class="form-group col-md-2">
                <label>Situação</label>
                <select class="form-control" name="active">
                    <option value="1">Ativo</option>
                    <option value="2">Inativo</option>
                </select>
            </div>

            <div class="form-group col-md-2">
            <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
   
        </div>
      </form>
  
    </div>
    
</div>

<div class="card border" style="margin-top:7px">
    <div class="card-body">
        <h5 class="card-title">Listagem de usuarios</h5>
        @if(count($users) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                <th>*</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ativo</th>
                </thead>
                <tbody>
                
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><?php echo $user->active == '1' ? 'Ativo' : 'Inativo';   ?> </td>
                       
                    </tr>
                @endforeach 
                </tbody>
            </table>
            @else
            <div class="alert alert-danger" role="alert">
               Nenhum usuario encontrado!
            </div>
        @endif
    </div>
    <div class="card-footer">
        {{ $users->links() }}
    </div>
</div>
@endsection
