<?php 
    session_start();
    if (!isset($_SESSION['isAuthentic']) || $_SESSION['isAuthentic'] != true){
        header("Location: ../Login/");
    }

    include_once '../../includes/credentials.php';
    include_once '../../includes/arrays.php';
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

    <script type="text/javascript">
        var nickname = "<?php echo $nickname?>";
        var navDataObj = <?php echo json_encode($navItems); ?>; // Transfere um Array PHP para uma estrutura JSON.

        window.onload = function(){
            $(sessionStorage.getItem("selectedBtnId")).addClass("active");

            /* As linhas abaixo serão mantidas como lembrança para atividades futuras
            
            //console.log(localStorage.getItem("selectedBtnId"));
            //var selectedBtnId = localStorage.getItem("selectedBtnId");
            //window.document.querySelector(`${selectedBtnId}`).classList.add("active");

            */
        }
    </script>   
        <!-- Inserção de Variável PHP no JavaScript Externo [< ? = $nickname ?> ] funciona economizando o comando "echo" -->
    <script type="text/javascript" src="../../javascript/customScripts.js"></script>    <!-- Chamada do Script -->
</head>
<body>

<div class="container-fluid d-flex min-vh-100 p-0 m-0">   <!-- Inicializa o GRID Layout -->

    <div class="row d-flex w-100 m-0 p-0">  <!-- Container do conteúdo -->
        
        <?php
            include_once '../../includes/Home/aside.php';
        ?>
