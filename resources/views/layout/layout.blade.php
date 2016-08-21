<!DOCTYPE html>
<html>
<head>
  <title>Grow Shop</title>
  <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Principal</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Listar</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Cadastrar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>
  <footer>
    <script src="{{ elixir('js/all.js') }}"></script>
  </footer>
</body>
</html>
