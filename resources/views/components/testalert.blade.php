<div class="alert alert-warning bg-warning alert-dismissible fade show text-white" role="alert">
        <strong>Atenção!</strong> Passando Parâmentros para o componente.
            {{$slot}} {{-- Incluindo o html que foi passado na chamada do componente--}}
            <br>Autor: {{$autor}} {{-- Passagem de parâmetros por variáveis--}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>