<?php

function listarProdutos(){

    include ('conexao.php');

    $sql = $conn->prepare(" SELECT tp.*, qtd_produto
                            FROM tbl_produto tp
                                INNER JOIN tbl_estoque te
                                    ON tp.cod_produto = te.cod_produto");
         // A flecha estar junto da variável influencia, é uma forma de acessar métodos e propriedades de um objeto.
         // Significa que: "Aquilo que está à direita do operador é um membro do objeto instânciado dentro da variável do lado esquerdo do operador".

    $sql->execute();  // É uma função do PHP: um mysqli_statement para executar o query que foi preparado acima.

    $resultado = $sql->get_result();  // Captura o resultado em um array.

    if ($resultado->num_rows > 0){
        while ($linha = $resultado->fetch_assoc()) {
            echo "
                    <tr class=\"border border-dark text-center\">
                        <td class=\"border border-dark p-2\"><input class=\"prodChkBoxId\" name=\"nCodProd[]\" type=\"checkbox\" value=\"".$linha['cod_produto']."\"/></td>
                        <td class=\"border border-dark p-2\">".$linha['cod_produto']."</td>
                        <td class=\"border border-dark p-2\"><img class=\"product-img mw-100\" src=\"../../arquivos/".$linha['foto_produto']."\" alt=\"Foto do Produto\"/></td>
                        <td class=\"border border-dark p-2\">".$linha['nome_produto']."</td>
                        <td class=\"border border-dark p-2\">".$linha['preco']."</td>
                        <td class=\"border border-dark p-2\">".$linha['descricao']."</td>
                        <td class=\"border border-dark p-2\">".$linha['qtd_produto']."</td>
                        <td class=\"border border-dark p-2\">BotãoDeAlteraçãoViaModal</td>
                    </tr>
                ";
        }
    } else {
        echo "
                <tr class=\"border border-dark text-center\">
                    <td class=\"border border-dark p-2 text-center overflow-auto\" colspan=\"8\"> Nenhum produto cadastrado </td>
                </tr>
            ";

    }

    $sql -> close();
    $conn -> close();

    
}

?>