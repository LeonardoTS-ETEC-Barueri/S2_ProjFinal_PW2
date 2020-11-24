<?php
    include_once '../../includes/Login/header.php';
    include_once '../../includes/credentials.php';
    
?>

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
                                    echo '<input class="form-control form-control-lg" name="nAnswerRecovery" id="tAnswerRecovery" type="text" placeholder="Resposta"/>';
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
                                   echo '<input class="btn form-control form-control-lg btn-primary" name="nBtnRecovery" data-toggle="modal" data-target="#exampleModal" id="tBtnRecovery" type="submit" value="Recuperar"/>';
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