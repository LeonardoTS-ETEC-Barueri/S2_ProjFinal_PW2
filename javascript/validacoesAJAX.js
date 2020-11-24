$(function(){   // Validações de LOGIN.

    $('#tLogin').submit(function(){ // $('#tLogin') é como o getElementById.
        var obj = this;     // JS atribuindo o elemento do id "tLogin" em "obj".
        var form = $(obj);  // Atribui a 'form' um conjunto JQUERY [?] - Contendo o obj que é o elemento <form> de id "tLogin" [?]
        var dados = new FormData(obj);  // Pega os dados que foram submetidos ao formulário.

        $.ajax({    // Início da validação AJAX.
            url: form.attr('action'),               // Endereço da página que receberá os dados do formulário.
            type: form.attr('method'),              // Método de navegação dos dados para página do Action.
            data: dados,                            // Dados retornados pelo tratamento na página que recebeu os dados do formulário.
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){    // Função que será chamada caso a requisição na página do "action" do Form tiver sucesso (retorno).

                //if(data == "ErroUserLogin"){ // Se os dados retornarem a String "ErroUserLogin" exiba isso...
                //} 

                if(data == 'noUsername'){       // Se o Controller "validarLogin.php" retornar 'ErroUserLogin', dispare o método abaixo ↓.

                        Swal.fire({ // Utilização da extensão Swal para exibir modais bonitos na tela do usuário.
                            title: 'Nome de usuário vazio!',
                            //text: 'Nome de usuário vazio!',
                            icon: 'error',
                            confirmButtonText: 'Okay, vou corrigir',
                            heightAuto: false
                        }); // Fechamento da chamada do método fire() do Sweet Alert.

                }

                if(data == 'incorrectUsername'){

                    Swal.fire({
                        title: 'Nome de usuário incorreto!',
                        icon: 'error',
                        heightAuto: false
                    });

                }

                if(data == 'noPassword'){

                        Swal.fire({
                            title: 'Senha vazia!',
                            //text: 'Senha vazia!',
                            icon: 'error',
                            confirmButtonText: 'Okay, vou corrigir',
                            heightAuto: false
                        });

                }

                if(data == 'incorrectPassword'){

                    Swal.fire({
                        title: 'Senha incorreta!',
                        icon: 'error',
                        heightAuto: false
                    });

                }

                if(data == 'usuarioConectado'){
                    window.location.replace("../Home/");
                }

            } // Fim da função do "success" no AJAX.

        }); // Fim da chamada do AJAX.

        return false;

    }); // Fim da Function() que será executada sobre o elemento de id "tLogin" - Nosso formulário.


}); // Fim JQuery Function() que é executada quando o HTML é carregado completamente.


$(function(){   // Validações de LOGIN.

    

    $('#tRecovery').submit(function(){ 
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);

        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){

                if(data == 'noAnswer'){

                        Swal.fire({
                            title: 'Resposta vazia!',
                            icon: 'error',
                            confirmButtonText: 'Okay, vou corrigir',
                            heightAuto: false
                        });

                }

                if(data == 'incorrectAnswer'){

                    Swal.fire({
                        title: 'Resposta incorreta!',
                        icon: 'error',
                        heightAuto: false
                    });

                }

                if(data == 'correctAnswer'){
                    window.location.replace("./recovered.php");
                }

            } // Fim da função do "success" no AJAX.

        }); // Fim da chamada do AJAX.

        return false;

    }); // Fim da Function() que será executada sobre o elemento de id "tLogin" - Nosso formulário.


});
