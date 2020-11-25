<?php 
    session_start();
    if (!isset($_SESSION['isAuthentic']) || $_SESSION['isAuthentic'] != true){
        header("Location: ../Login/");
    }

    include_once '../../includes/credentials.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <title>ATIVIDADE FINAL PW-2</title>
    <link rel="stylesheet" type="text/css" href="../../estilo/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../../estilo/custom.css"/>

    <script type="text/javascript">var nickname = "<?php echo $nickname?>";</script>   
        <!-- Inserção de Variável PHP no JavaScript Externo [< ? = $nickname ?> ] funciona economizando o comando "echo" -->
    <script type="text/javascript" src="../../javascript/customScripts.js"></script>
</head>
<body>

<div class="container-fluid d-flex h-100 p-0 m-0">   <!-- Inicializa o GRID Layout -->

    <div class="row d-flex w-100 m-0 p-0">  <!-- Container do conteúdo -->
        <aside class="col-lg-3 m-0 p-0 border border-dark overflow-auto min-vh-100" style="max-height: 100vh;">  <!-- Container do menu lateral -->

            <?php 
                include_once '../../includes/Home/asideHeader.php'; // Cabeçalho do menu (Depende de "credential.php").
            ?>

            <?php
                include_once '../../includes/Home/asideNavButtons.php'; // Botões de navegação.
            ?>

            <?php
                include_once '../../includes/Home/asideFooter.php'; // Botões de encerrar sessão e configuração.
            ?>
            
        </aside>

        <main class="col-lg-9 m-0 p-0 d-flex flex-column border border-dark overflow-auto" style="max-height:100vh;"> <!-- Container do conteúdo principal -->
        
            <h1>Olá mundo!</h1>

            <footer class="m-0 mt-auto bg-dark justify-content-end">    <!-- "Footer" -->
                <p class="px-2 p-0 m-0 text-white small text-right">Desenvolvido em 2020 por Leonardo T. Sanehira</p>
            </footer>

        </main>
    </div>
    

    <?php
        include_once '../../includes/scripts.html';
    ?>

</div> <!-- Conclui o GRID Layout -->

</body>
</html>