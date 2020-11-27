<?php
    include_once '../../includes/Login/header.php';
    include_once '../../includes/credentials.php';
    
?>

<script>
    function verUsuario(){

        var recElement = window.document.querySelector('span#myRecUsername');
        var recIcon = window.document.querySelector('img#usernameRecIcon');
        var recBtn = window.document.querySelector('button#userRecBtn');

        recElement.innerHTML = "<?php echo "$keyUsername" ?>";
        recIcon.src = "../../media/images/Recovery/revealed_keys.svg";
        recBtn.onclick = esconderUsuario;       

    }

    function esconderUsuario(){

        var recElement = window.document.querySelector('span#myRecUsername');
        var recIcon = window.document.querySelector('img#usernameRecIcon');
        var recBtn = window.document.querySelector('button#userRecBtn');

        recElement.innerHTML = "**********";
        recIcon.src = "../../media/images/Recovery/hidden_keys.svg";
        recBtn.onclick = verUsuario;

    }

    function verSenha(){

        var recElement = window.document.querySelector('span#myRecPassword');
        var recIcon = window.document.querySelector('img#passwordRecIcon');
        var recBtn = window.document.querySelector('button#passRecBtn');

        recElement.innerHTML = "<?php echo "$keyPassword" ?>";
        recIcon.src = "../../media/images/Recovery/revealed_keys.svg";
        recBtn.onclick = esconderSenha;  

    }

    function esconderSenha(){

        var recElement = window.document.querySelector('span#myRecPassword');
        var recIcon = window.document.querySelector('img#passwordRecIcon');
        var recBtn = window.document.querySelector('button#passRecBtn');

        recElement.innerHTML = "**********";
        recIcon.src = "../../media/images/Recovery/hidden_keys.svg";
        recBtn.onclick = verSenha;

    }
</script>

<?php
    include_once '../../includes/Recovery/recoveryModal.php';   // Inclusão do Modal que exibirá as credenciais.
?>

    <!-- Início do conteúdo principal -->
    <main class="row h-100 overflow-auto m-0 p-0 flex-grow-1 bg-img" style="background-image: url('../../media/images/Login/main-bg.jpg');"> <!-- Background do conteúdo principal -->
        
        <!-- Início da seção do formulário -->
        <section class="col my-auto d-flex justify-content-center align-items-center">
            <div class="col-sm-6 jumbotron m-2 p-2 ghost-bg overflow-auto"> <!-- Container do formulário de login -->

                <div class="form-row justify-content-center">
                    <h1 class="text-center" style="font-size: 200%;">Loja do Buji (Recuperar acesso)</h1>
                </div>

                <div class="form-row justify-content-center">
                    <p class="medium font-weight-bold">Responda corretamente ...</p>
                </div>

                <!-- Início do formulário de login -->
                <form action="../../controller/validarRecuperacao.php" method="POST" id="tRecovery">
                    <div class="form-row">
                        <div class="col-lg-10 my-3 mx-auto">
                            <?php
                                if (isset($question) && isset($secretAnswer)){
                                    echo '<p class="py-0 px-2 m-0 text-break"><span class="font-weight-bold">Pergunta:</span> '.$question.'?</p>';
                                    echo '<input class="form-control form-control-lg" name="nAnswerRecovery" id="tAnswerRecovery" type="password" placeholder="Resposta"/>';
                                } else {
                                    echo '<p class="text-center font-weight-bold p-0 m-0 text-break">A pergunta ainda não foi configurada.</p>';
                                }
                            ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 col-sm-6 my-3 mx-auto">
                            <?php
                                if (isset($question) && isset($secretAnswer)){
                                   echo '<input class="btn form-control form-control-lg btn-primary" name="nBtnRecovery" id="tBtnRecovery" type="submit" value="Recuperar"/>';
                                } else {
                                    echo '<button type="button" class="btn form-control form-control-lg btn-primary" disabled>Recuperar</button>';
                                }
                            ?>
                        </div>
                    </div>

                    <div class="form-row p-0 justify-content-end">
                        <a class="nav-link lead font-weight-bold" href="../Login/">Voltar</a>
                    </div>

                </form>
                <!-- Fim do formulário de Login -->
            
            </div> <!-- Fim do container do formulário de login -->

        </section> 
        <!-- Fim da seção do formulário -->
    
    </main>
    <!-- Fim do conteúdo principal -->

<?php
    include_once '../../includes/Login/footer.php';
?>