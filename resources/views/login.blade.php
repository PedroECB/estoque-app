<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href="css/style.css"> {{ asset('') }}--}}
    <link rel="stylesheet" href="css/texts.css">
    <title>EstoqueApp | Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="offset-md-4"></div>
             
          
          
            <div class="col-md-4">
                <div class="card login-card pt-4 px-4 pb-4">
                  <div class="icon-login position-relative d-flex justify-content-center">
                      <img src="img/favicon_io/favicon-32x32.png" alt="Icone EstoqueApp" class="img-fluid icone-estoque">
                      <h3 class="teko-font mb-3 text-dark-blue text-center font-weight-bold">EstoqueApp</h3>
                  </div>
                    
                        @component('components.loginerror')
                        
                        @endcomponent
              
                  <div class="form-group mb-2">
                    <label class="label-text mb-0 teko-font gray-text" for="cLogin">Usuário</label>
                    <input type="text" name="login" maxlength="20" id="cLogin" class="form-control form-control-sm input-login" autofocus>     
                  </div>

                  <div class="form-group">
                    <label class="label-text mb-0 teko-font gray-text" for="cSenha">Senha:</label>
                    <input type="password" name="senha" id="cSenha" maxlength="15" class="form-control form-control-sm input-login">
                  </div>

                  <div class="form-group form-check-inline">
                    <input type="checkbox" name="remember" id="cRemember" class="form-check-input"> <small class="gray-text">Lembrar minha senha</small> 
                  </div>

                  <button class="btn dark-blue btn-block btn-sm font-weight-bold text-white">Entrar</button>

                  <div class="form-group">
                    <a href="#"><small class="text-info d-block mt-3">Criar uma conta</small></a>
                  </div>
                </div>
              </div>




          <div class="offset-md-4"></div>
      </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>