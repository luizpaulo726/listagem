@extends('layout.app',["current" => "users_acess"])
@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Listagem de acessos dos usuarios</h5>
        @if(count($users_acess) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                <th>*</th>
                <th>Last login</th>
                <th>User id</th>
                </thead>
                <tbody>
                
                @foreach($users_acess as $key => $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{date("d/m/Y", strtotime($user->last_login))}}</td>
                        <td>{{$user->name}}</td>
                    </tr>
                @endforeach 
                </tbody>
            </table>
            @else
            <div class="alert alert-danger" role="alert">
               Nenhum acesso encontrado!
            </div>
        @endif
    </div>
    <div class="card-footer">
        {{ $users_acess->links() }}
    </div>
</div>
@endsection
