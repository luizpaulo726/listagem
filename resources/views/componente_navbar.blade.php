<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li @if(isset($current)) class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li @if($current=="users") class="nav-item active" @else class="nav-item" @endif class="nav-item">
        <a class="nav-link" href="/users">Usuarios</a>
      </li>
      <li @if($current=="users_acess") class="nav-item active" @else class="nav-item" @endif class="nav-item">
        <a class="nav-link" href="/users_acess">Acessos dos Usuarios</a>
      </li>

     
    </ul>
  </div>
</nav>