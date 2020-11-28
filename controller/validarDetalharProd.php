<?php
    session_start();

    if (!isset($_SESSION['isAuthentic']) || $_SESSION['isAuthentic'] != true){
        header('Location: ../view/Login/');
    }

    //$_POST['nHiddenCodProd'];

    include_once '../model/detalharProduto.php';
    
    detalharProduto($_POST['nHiddenCodProd']);

    //if (empty($_POST['nBtnDetalhar'])){
    //    header("Location: ../view/Home/produtos.php");
    //}

    //

?>