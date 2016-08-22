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
          <li class="active">
            <a href="/"><i class="fa fa-home fa-1x" aria-hidden="true"></i> Inicial</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-gift fa-1x" aria-hidden="true"></i> Produtos <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="products"><i class="fa fa-list fa-1x" aria-hidden="true"></i> Listar</a></li>
              @if(Auth::check())
              <li role="separator" class="divider"></li>
              <li><a href="create"><i class="fa fa-save fa-1x" aria-hidden="true"></i> Cadastrar</a></li>
              <li><a href="report"><i class="fa fa-bar-chart fa-1x" aria-hidden="true"></i> Relatório</a></li>
              @endif
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
          <li><a href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
          <li><a href="logout">Sair</a></li>
          @else
          <li><a href="register"><i class="fa fa-user"></i> Cadastro</a></li>
          @endif
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
