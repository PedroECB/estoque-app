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
    <title>Cadastrar Produto</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/favicon_io/favicon-32x32.png" alt=""> <span class="teko-font font-weight-bold text-dark-blue">EstoqueApp</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item  mr-3">
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

                                                    

      <div class="container">
        <div class="row">
            <div class="offset-2"></div>
                <div class="col-md-8">






                                        <!-- Card de cadastro de produtos -->



    <div class="card mt-5">
        <div class="card-header mb-0">
            <span class="gray-text teko-font font-weight-bold nav-link-text d-block text-center">Cadastrar Produto</span>    
        </div>
        <div class="card-body pt-2">
                <form action="{{route('produtos.store')}}" method="POST">
                    @csrf
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cproduto" class="form-label"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Nome do produto:</label>
                                    <input type="text" name="produto" id="cproduto" maxlength="20" class="form-control form-control-sm" autofocus required>
                                </div>         
                        </div> 
                                <div class="col-md-6 d-flex justify-content-between">

                                        <div class="form-group mr-1">
                                                <label for="cquantidade" class="form-label">Qnt de entrada: </label>
                                                <input type="number" id="cquantidade" class="form-control form-control-sm" placeholder="Total em unidades" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="cpreco" class="form-label">Valor unidade: </label>
                                            <input type="text" placeholder="R$" id="cpreco" class="form-control form-control-sm w-100" required>
                                        </div>
                                </div>        
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="cdescricao" class="form-label"><i class="fa fa-barcode" aria-hidden="true"></i> Cod. Barras:</label>
                                        <input type="text" name="descricao" id="cdescricao" maxlength="1000" class="form-control form-control-sm" required>
                                        <small class="gray-text">Digite apenas números</small>    
                                </div>
                        </div>

                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cfornecedor" class="form-label"><i class="fa fa-truck" aria-hidden="true"></i> Fornecedor:</label>
                                    <select name="fornecedor" id="cfornecedor" class="form-control form-control-sm">
                                        <option value="Kernel Imports">Kernel Imports</option>
                                        <option value="Apple Nation Brasil">Apple Nation Brasil</option>
                                    </select>
                                </div>
                        </div>     
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cdataentrada" class="form-label"><i class="fa fa-calendar" aria-hidden="true"></i> Data entrada:</label>
                                <input class="form-control form-control-sm" type="date" name="dataEntrada" id="cdataentrada">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cNfce" class="form-label"><i class="fa fa-qrcode" aria-hidden="true"></i> Cód. NFC-e</label>
                                <input type="text" name="nfce" id="cNfce" class="form-control form-control-sm" placeholder="XXXXXX-XX" maxlength="9">
                                <small class="alert-small text-danger d-none font-weight-bold" id="alert-nfce">Código inválido</small>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="cdescricao" class="form-label">Descrição:</label>
                            <textarea class="form-control form-control-sm" name="descricao" id="cdescricao" cols="5" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3 d-flex justify-content-end">
                                <button class="btn btn-sm btn-success font-weight-bold"><i class="fa fa-check" aria-hidden="true"></i> Cadastrar</button>
                        </div>
  
                    </div>
                    </div>
                </form>
        </div>
    </div>









            <div class="offset-2"></div>
        </div>
      </div>
    <!-- JavaScript (Opcional) -->
    <script src="{{asset('js/validation.js')}}"></script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>