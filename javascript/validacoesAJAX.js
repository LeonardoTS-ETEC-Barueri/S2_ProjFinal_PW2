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


$(function(){   // Validações de RECUPERAÇÃO

    

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
                    $('#recoveryModal').modal('show');
                }

            } // Fim da função do "success" no AJAX.

        }); // Fim da chamada do AJAX.

        return false;

    }); // Fim da Function()


});


$(function(){   // Validações de Gerenciamento da Lista de Produtos.

    $('#tFormTableProdutos').on('submit', function(){ 
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

                if(data == 'ErroDB'){

                        Swal.fire({
                            title: 'Ops! Ocorreu uma falha no Banco de Dados.',
                            icon: 'warning',
                            heightAuto: false
                        });

                }

                if(data == 'RmvSucesso'){

                    Swal.fire({
                        title: 'Produtos removidos com sucesso!',
                        icon: 'success',
                        didClose: () => {
                            window.location.replace("produtos.php");
                        },
                        heightAuto: false
                    });

                }

                if(data != 'ErroDB' && data != 'ProdutoNaoEncontrado' && data != 'RmvSucesso'){
                    var myProduto = window.document.querySelector("#tProdutoEmFoco");
                    //console.log('aaaaaaa')
                    myProduto.innerHTML = data;
                    //console.log(myProduto);
                    //console.log(data);

                    // Desabilita a CheckBox oculta que auxilia na entrega do ID para validação PHP/Ajax.
                    var hiddenSelectedBox = document.querySelectorAll('.myHiddenIDSelector');

                    hiddenSelectedBox.forEach(item => {

                        if (item.checked){
                            item.checked = false;
                        }
                        
                    });

                    $('#detalheProdutoModal').modal('show');
                }

                if(data == 'ProdutoNaoEncontrado'){
                    
                    Swal.fire({
                        title: 'Produto não selecionado!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou selecionar algo',
                        heightAuto: false
                    });
                    
                    

                    //$('#detalheProdutoModal').modal('show');
                }
                

            } // Fim da função do "success" no AJAX.

        }); // Fim da chamada do AJAX.

        return false;

    }); // Fim da Function()


});

/*
$(function(){   // Validações de exibição do modal de detalhes do produto.

    

    $('#formDetalharProd').on('submit', function(){ 
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

                if(data == 'ErroDB'){

                        Swal.fire({
                            title: 'Ops! Ocorreu uma falha no Banco de Dados.',
                            icon: 'warning',
                            heightAuto: false
                        });

                }

                if(data == 'ProdutoNaoEncontrado'){

                    Swal.fire({
                        title: 'Ops! O produto não foi encontrado.',
                        icon: 'warning',
                        heightAuto: false
                    });

            }

                if(data == 'ExibirProduto'){
                    
                    modalDetalhesProduto = document.querySelector('#tAtualizaProduto');    // Pegue o local onde o modal será despachado.
                    modalDetalhesProduto.innerHTML = `<? php
                        include_once '../../model/detalharProduto.php';
                        detalharProduto(); ?>`;
                    console.log("Lets Goooo!");
                    
                    $('#detalheProdutoModal').modal('show');

                }

            } // Fim da função do "success" no AJAX.

        }); // Fim da chamada do AJAX.

        return false;

    }); // Fim da Function()


});
*/
