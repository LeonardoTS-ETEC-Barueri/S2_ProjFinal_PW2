<?php

    session_start();

    if (!isset($_SESSION['isAuthentic']) || $_SESSION['isAuthentic'] != true){
        header("Location: ../view/Login/");
    }

    // Se o botão apertado foi o de [Remover Produto].
    if (isset($_POST['nBtnRmvProduto']) && $_POST['nBtnRmvProduto'] == "RemoverProduto"){

        //if(empty($_POST['nCodProd'])){
        //    header("Location: ../view/Home/produtos.php");
        //}

        //include_once '../model/removerProdutos.php';
            
            echo "Produto Removido!";
    }

    // Se o botão apertado foi o de Exibir o Modal do Produto;


    

?>