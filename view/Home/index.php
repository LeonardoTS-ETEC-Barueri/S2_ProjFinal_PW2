<?php 
    session_start();
    if (!isset($_SESSION['isAuthentic']) || $_SESSION['isAuthentic'] != true){
        header("Location: ../Login/");
    }
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
</head>
<body>

<div class="container-fluid d-flex h-100 p-0 m-0">   <!-- Inicializa o GRID Layout -->

    <div class="row d-flex w-100 m-0 p-0">
        <aside class="col-lg-3 m-0 p-0 border border-dark overflow-auto min-vh-100" style="max-height: 100vh;">  <!-- Container do menu lateral -->
            <div class="row h-25 m-0 p-0 border-bottom border-dark" style="min-height:3fr;">    <!-- Cabeçalho menu -->
            </div>

            <div class="row h-50 m-0 p-0" style="min-height:6fr;"> <!-- Botões do menu -->
            </div>

            <div class="row h-25 m-0 p-0 border-top border-dark" style="min-height:3fr;"> <!-- Botões encerrar sessão/configurar -->
            </div>
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