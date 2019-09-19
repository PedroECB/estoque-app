
(function(){

    $inputNfce = document.querySelector('#cNfce')
    $alertNfce = document.querySelector("#alert-nfce")

    $inputNfce.addEventListener('input', function(e){
        let digitos = this.value;
        let regex = /^[0-9]{6}-[0-9]{2}$/

        if(digitos.length == 6){
            $inputNfce.value = digitos+"-"
        }

        if(digitos.length == 9){
            if(!regex.test(digitos)){
                console.log('Código inválido')
                $alertNfce.classList = "alert-small text-danger d-inline font-weight-bold"
            }
        }

        if(digitos.length < 9){
            $alertNfce.classList = "alert-small text-danger d-none font-weight-bold"
        }

    })
})(document, window)