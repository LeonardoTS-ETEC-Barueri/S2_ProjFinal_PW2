<?php

    //include ('conexao.php');

    
    if(isset($_POST['nCodProd'])){
        foreach($_POST['nCodProd'] as $item) {
            //$sql = $conn->prepare("DELETE FROM tbl_produto WHERE cod_produto = ?");
            //$sql -> bind_param('i', $item); //int, idDoItem.
            //$sql -> execute() or exit("ErroDB");
            //echo $item;
        }

        echo "RmvSucesso";
        
        //$sql -> close();
        //$conn -> close();

        exit();
    } else {
        exit('ProdutoNaoEncontrado');
    }
    

?>