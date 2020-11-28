<?php
    session_start();

    if (!isset($_SESSION['isAuthentic']) || $_SESSION['isAuthentic'] != true){
        header('Location: ../view/Login/');
    }

    echo var_export($_POST);

    //if (empty($_POST['nBtnDetalhar'])){
    //    header("Location: ../view/Home/produtos.php");
    //}

    //include_once '../model/detalharProduto.php';

?>