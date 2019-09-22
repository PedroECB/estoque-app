<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon_io/favicon-32x32.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <!-- Project CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/texts.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <title>EstoqueApp | @yield('title') </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
                <a class="navbar-brand" href="{{route('produtos.index')}}">
                    <img src="{{asset('img/favicon_io/favicon-32x32.png')}}" alt=""> <span class="teko-font font-weight-bold text-dark-blue">EstoqueApp</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                  {{-- <i class="fa fa-th-large"></i> --}}
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item {{request()->routeIs('produtos.index')?'active':''}} mr-3">
                      <a class="nav-link font-weight-bold" href="{{route('produtos.index')}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Produtos <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                      <a class="nav-link font-weight-bold" href="#"><i class="fa fa-truck" aria-hidden="true"></i> Fornecedores</a>
                    </li>
                    <li class="nav-item dropdown mr-3">
                      <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i> Minha conta
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item font-weight-bold disabled" href="#">João Ferreira</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-gear"></i> Alterar senha</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-user-plus"></i> Novo colaborador</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Sair</a>
                      </div>
                    </li>
                  </ul>
                </div>
        </div>  
      </nav>
                {{--  Seção de conteúdo  --}}

      @yield('content')



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    {{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>