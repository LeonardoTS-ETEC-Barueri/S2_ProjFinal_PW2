<?php
    session_start();
    if(!isset($_SESSION['answerIsCorrect']) || $_SESSION['answerIsCorrect'] != true ){
        header("Location: ../Login/");
    }

    include_once '../../includes/Login/header.php';
    include_once '../../includes/credentials.php';
?>

<!-- Início do conteúdo principal -->
<main class="row h-100 overflow-auto m-0 p-0 flex-grow-1 bg-img" style="background-image: url('../Login/images/main-bg.jpg');"> <!-- Background do conteúdo principal -->
        
        <!-- Início da seção do formulário -->
        <section class="col my-5 d-flex justify-content-center align-items-center">
            
            <div class="col-sm-6 jumbotron m-2 p-2 ghost-bg overflow-auto"> <!-- Container da mensagem de recuperação -->

                <div class="py-2 justify-content-center">
                    <h1 class="text-center" style="font-size: 200%;">Credenciais</h1>
                </div>

                <div>
                    <p class="px-2 m-0 text-wrap"><span class="font-weight-bold">Usuário:</span> <?php echo "$keyUsername" ?></p>
                    <p class="px-2 m-0 text-wrap"><span class="font-weight-bold">Senha:</span> <?php echo "$keyPassword" ?></p>
                </div>

                <div class="form-row p-0 justify-content-end">
                    <a class="nav-link lead font-weight-bold" href="../Login/">Voltar</a>
                </div>
            
            </div> <!-- Fim do container da mensagem de recuperação -->

        </section> 
        <!-- Fim da seção do formulário -->
    
    </main>
    <!-- Fim do conteúdo principal -->

<?php
    include_once '../../includes/Login/footer.php';
?>