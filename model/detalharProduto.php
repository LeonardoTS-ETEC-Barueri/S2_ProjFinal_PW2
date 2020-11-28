<?php

function detalharProduto($codProdutoPHP){
    include ('conexao.php');

    $sql = $conn->prepare(" SELECT tp.*, te.qtd_produto, sum(itv.preco_total) AS 'lucro_total', count(itv.cod_venda) as 'total_vendido'
                            FROM tbl_produto tp
                                INNER JOIN tbl_estoque te
                                    ON tp.cod_produto = te.cod_produto
                                INNER JOIN tbl_item_venda itv
                                    ON tp.cod_produto = itv.cod_produto
                            WHERE tp.cod_produto = ?");

    $sql -> bind_param('i', $codProdutoPHP);
    $sql -> execute() or exit("ErroDB");

    $resultado01 = $sql->get_result();

    $sql = $conn->prepare(" SELECT count(*) AS 'total_vendas'
                            FROM tbl_item_venda");

    $sql -> execute() or exit("ErroDB");

    $resultado02 = $sql->get_result();

    $linha02 = $resultado02->fetch_assoc();

    $retornoProduto = "";

    if ($resultado01->num_rows > 0){
        while ($linha01 = $resultado01->fetch_assoc()) {

            if ($linha02['total_vendas'] == 0){
                $porcentagem_vendas = 0;
            } else {
                $porcentagem_vendas = round(100 - (($linha01['total_vendido'] / $linha02['total_vendas']) * 100), 2);
            }

            $retornoProduto .= 
            '<div class="modal fade" id="detalheProdutoModal" tabindex="-1" aria-labelledby="detalheProdutoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content container-fluid overflow-auto">
                        <div class="row d-flex m-0 justify-content-center">
                            <div class="row">
                                <div class="col-lg-12 text-center"> <!-- Título -->
                                    <h1>Detalhes do Produto</h1>
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="col-lg-4 border border-dark"> <!-- Container Foto/Nome/Preço/Estoque/AlterarFoto -->
                                    <div class="row p-0 m-0">
                                        <div class="col-lg-12 p-0 m-0">  <!-- Foto -->
                                            <div class="border border-dark">
                                                <img class="w-100" src="../../arquivos/'.$linha01['foto_produto'].'" alt="Imagem do produto"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex p-2 m-0"> <!-- Btn de alterar foto -->
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <button id="tBtnAlteraFoto" name="nBtnAlteraFoto" type="button" class="btn btn-sm btn-dark text-nowrap" disabled>Alterar foto</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 border border-dark">
                                        <div class="col-lg-12 p-1 w-100">  <!-- Nome/Preço/Estoque -->
            
                                            <div class="row py-2">
                                                <div class="col d-flex px-1">
                                                    <input id="tNomeProd" name="nNomeProd" class="px-1 m-0 w-100" type="text" value="'.$linha01['nome_produto'].'" title="'.$linha01['nome_produto'].'" placeholder="Nome produto" required disabled/>
                                                </div>
                                            </div>
            
                                            <div class="row py-2">
                                                <div class="col d-flex px-1">
                                                    <p class="m-0 p-0">R$:</p>
                                                    <input id="tPrecoProd" name="nPrecoProd" class="ml-1 m-0 w-100" type="number" value="'.$linha01['preco'].'" title="'.$linha01['preco'].'" placeholder="00,00" required disabled/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex px-1">
                                                    <p class="m-0 p-0 text-nowrap">Em estoque:</p>
                                                    <input id="tEstoqueProd" name="nEstoqueProd" class="ml-1 m-0 w-100" type="number" value="'.$linha01['qtd_produto'].'" title="Em estoque: '.$linha01['qtd_produto'].'" placeholder="Qtd" required disabled/>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                
                                <div class="col-lg-4">  <!-- Descrição -->
                                    <div class="row">
                                        <div class="col d-flex px-1">
                                            <label for="tAltDescProd"><p class="ml-1 m-0 p-0 font-weight-bold">Descrição</p></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex flex-column px-1">
                                            <textarea id="tDescProd" name="nDescProd" class="ml-1 m-0 no-resize" id="tAltDescProd" name="nAltDescProd" title="'.$linha01['descricao'].'" placeholder="Descrição" rows="6" disabled>'.$linha01['descricao'].'</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row m-0 p-2 align-content-center align-items-center">
                            <div class="col-lg-7 p-0 m-0"> <!-- % de vendas / Lucro das vendas com esse produto -->
                                <div class="row d-inline p-0 m-0">
                                    <p class="d-inline font-weight-bold small p-0 m-0 pr-1">Participação nas vendas: </p><span class="small" id="tPorcentagemVendas">'.$porcentagem_vendas.' %</span>
                                </div>
                                <br>
                                <div class="row d-inline p-0 m-0">
                                    <p class="d-inline font-weight-bold small p-0 m-0 pr-1 ">Lucro total: </p><span class="small" id="tLucroTotalVendas">'.$linha01['lucro_total'].'</span>
                                </div>
                            </div>
                            
                            <div class="text-break ml-auto"> <!-- Editar/Salvar/Voltar -->
                            <button id="tBtnEditarProd" form="" type="button" class="btn btn-sm btn-dark m-1" onclick="liberarEdicaoProd()">&#x270F; Editar</button>
                            <button id="tBtnFecharModalProd" type="button" class="btn btn-sm btn-dark m-1" data-dismiss="modal" aria-label="Close" onclick="limparDetalheProd()">Fechar</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
    } else {
        $retornoProduto .= "ProdutoNaoEncontrado";
    }

    echo $retornoProduto;

    $sql -> close();
    $conn -> close();

}

?>