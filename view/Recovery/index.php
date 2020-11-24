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
        recIcon.src = "./images/revealed_keys.svg";
        recBtn.onclick = esconderUsuario;       

    }

    function esconderUsuario(){

        var recElement = window.document.querySelector('span#myRecUsername');
        var recIcon = window.document.querySelector('img#usernameRecIcon');
        var recBtn = window.document.querySelector('button#userRecBtn');

        recElement.innerHTML = "**********";
        recIcon.src = "./images/hidden_keys.svg";
        recBtn.onclick = verUsuario;

    }

    function verSenha(){

        var recElement = window.document.querySelector('span#myRecPassword');
        var recIcon = window.document.querySelector('img#passwordRecIcon');
        var recBtn = window.document.querySelector('button#passRecBtn');

        recElement.innerHTML = "<?php echo "$keyPassword" ?>";
        recIcon.src = "./images/revealed_keys.svg";
        recBtn.onclick = esconderSenha;  

    }

    function esconderSenha(){

        var recElement = window.document.querySelector('span#myRecPassword');
        var recIcon = window.document.querySelector('img#passwordRecIcon');
        var recBtn = window.document.querySelector('button#passRecBtn');

        recElement.innerHTML = "**********";
        recIcon.src = "./images/hidden_keys.svg";
        recBtn.onclick = verSenha;

    }
</script>

<!-- Configuração do Modal de recuperação de conta -->
<div class="modal fade" id="recoveryModal" tabindex="-1" aria-labelledby="recoveryModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recoveryModalLabel">Suas credenciais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container modal-body">
            <div class="row justify-content-center align-items-center m-1">
                <p class="col-8 m-0 border mr-2"><span class="font-weight-bold">Usuário:</span> <span id="myRecUsername">**********</span></p>
                <button id="userRecBtn" type="image" class="border" onclick="verUsuario()"><img id="usernameRecIcon" class="recovery-btn-img" src="./images/hidden_keys.svg"/></button>
            </div>
            <div class="row justify-content-center align-items-center m-1">
                <p class="col-8 m-0 border mr-2"><span class="font-weight-bold">Senha:</span> <span id="myRecPassword">**********</span></p>
                <button id="passRecBtn" type="image" class="border" onclick="verSenha()"><img id="passwordRecIcon" class="recovery-btn-img" src="./images/hidden_keys.svg"/></button>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
      </div>
    </div>
  </div>
</div>
<!-- Fim do Modal -->

    <!-- Início do conteúdo principal -->
    <main class="row h-100 overflow-auto m-0 p-0 flex-grow-1 bg-img" style="background-image: url('../Login/images/main-bg.jpg');"> <!-- Background do conteúdo principal -->
        
        <!-- Início da seção do formulário -->
        <section class="col my-5 d-flex justify-content-center align-items-center">
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