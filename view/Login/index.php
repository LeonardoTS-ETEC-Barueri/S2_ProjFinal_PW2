<?php
    session_start();
    session_unset();
    session_destroy();
    include_once '../../includes/Login/header.php';   // Contém a <div> de início do GRID Layout.
?>

    <!-- Início do conteúdo principal -->
    <main class="row h-100 overflow-auto m-0 p-0 flex-grow-1 bg-img" style="background-image: url('../../media/images/Login/main-bg.jpg');"> <!-- Background do conteúdo principal -->
        
        <!-- Início da seção do formulário -->
        <section class="col my-5 d-flex justify-content-center align-items-center">
            <div class="col-sm-6 jumbotron m-2 p-2 ghost-bg overflow-auto"> <!-- Container do formulário de login -->

                <div class="form-row justify-content-center">
                    <h1 class="text-center" style="font-size: 200%;">Loja do Buji (Gerenciamento)</h1>
                </div>

                <div class="form-row justify-content-center">
                    <p class="medium">Autentique-se para acessar</p>
                </div>

                <!-- Início do formulário de login -->
                <form action="../../controller/validarLogin.php" method="POST" id="tLogin">
                    <div class="form-row">
                        <div class="col-lg-8 my-3 mx-auto">
                            <input class="form-control form-control-lg" name="nUsername" id="tUsername" type="text" placeholder="Nome de usuário"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-8 my-3 mx-auto">
                            <input class="form-control form-control-lg" name="nPass" id="tPass" type="password" placeholder="Senha"/>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 col-sm-6 my-3 mx-auto">
                            <input class="form-control form-control-lg btn-success" name="nBtnAcessar" id="tBtnAcessar" type="submit" value="Acessar"/>
                            <a class="nav-link medium p-0 m-0" id="tRecSenha" href="../Recovery/">Esqueci minha senha</a>
                        </div>
                    </div>

                </form>
                <!-- Fim do formulário de Login -->
            
            </div> <!-- Fim do container do formulário de login -->

        </section> 
        <!-- Fim da seção do formulário -->
    
    </main>
    <!-- Fim do conteúdo principal -->

<?php
    include_once '../../includes/Login/footer.php';   // Contém a <div> que fecha o GRID Layout e a chamada de Scripts.
?>