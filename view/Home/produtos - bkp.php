<?php
    include_once '../../includes/Home/header.php';
?>

<!-- Início do Modal de Detalhes/Alteração do Produto -->
<form id="tAtualizaProduto" action="../../controller/validarAtualizarProd.php" method="POST" onsubmit="return confirm('Sua ação é irreversível, tem certeza que quer continuar?')">

<div class="modal fade" id="detalheProdutoModal" tabindex="-1" aria-labelledby="detalheProdutoModalLabel" aria-hidden="true">
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
                                    <img class="w-100" src="../../arquivos/default_noimg.jpg" alt="Imagem do produto"/>
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
                                        <input id="tNomeProd" name="nNomeProd" class="px-1 m-0 w-100" id="tAltNomeProd" type="text" value="Produto" title="Produto" placeholder="Nome produto" required disabled/>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col d-flex px-1">
                                        <p class="m-0 p-0">R$:</p>
                                        <input id="tPrecoProd" name="nPrecoProd" class="ml-1 m-0 w-100" id="tAltPrecoProd" type="number" value="12.00" title="R$: 12.00" placeholder="00,00" required disabled/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex px-1">
                                        <p class="m-0 p-0 text-nowrap">Em estoque:</p>
                                        <input id="tEstoqueProd" name="nEstoqueProd" class="ml-1 m-0 w-100" id="tAltEstoqueProd" type="number" value="12" title="Em estoque: 12" placeholder="Qtd" required disabled/>
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
                                <textarea id="tDescProd" name="nDescProd" class="ml-1 m-0 no-resize" id="tAltDescProd" name="nAltDescProd" title="Descrição" placeholder="Descrição" rows="6" disabled></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row m-0 p-2 align-content-center align-items-center">
                <div class="col-lg-7 p-0 m-0"> <!-- % de vendas / Lucro das vendas com esse produto -->
                    <div class="row d-inline p-0 m-0">
                        <p class="d-inline font-weight-bold small p-0 m-0 pr-1">Porcentagem no total de vendas: </p><span class="small" id="tPorcentagemVendas">100 %</span>
                    </div>
                    <br>
                    <div class="row d-inline p-0 m-0">
                        <p class="d-inline font-weight-bold small p-0 m-0 pr-1 ">Lucro total: </p><span class="small" id="tLucroTotalVendas">R$: 123654.00</span>
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
</form>

<!-- Fim do Modal de Alteração do Produto -->

<main class="col-lg-9 m-0 p-0 min-vh-100 d-flex flex-column overflow-auto border border-dark"> <!-- Container do conteúdo principal -->
    
    <?php 
        include_once '../../includes/Home/produtosNavOpcoes.php';
    ?>

    <div class="row d-flex flex-column m-2 p-0 h-100 overflow-auto border-bottom border-white">
        <div class="col p-2 overflow-auto border border-dark bg-light text-center text-break" id="tContainerProdutos">

            <h1 class="pb-2 text-center">Lista de produtos</h1>

            <form id="tFormTableProdutos" action="../../controller/validarRmvProd.php" method="POST" onsubmit="return confirm('Sua ação é irreversível, tem certeza que quer continuar?')">
                <table class="col-12 w-auto mx-auto" style=" border-collapse: collapse;">
                    <thead>
                        <tr class="border border-dark">
                            <th class="border border-dark p-2"><p class="p-0 m-0 small font-weight-bold text-nowrap">Remover tudo?</p><input id="boxChecker" onclick="allChkBox()" type="checkbox"/></th>
                            <th class="border border-dark p-2 text-nowrap small font-weight-bold">ID</th>
                            <th class="border border-dark p-2 text-nowrap small font-weight-bold">Foto</th>
                            <th class="border border-dark p-2 text-nowrap small font-weight-bold">Produto</th>
                            <th class="border border-dark p-2 text-nowrap small font-weight-bold">Preço</th>
                            <th class="border border-dark p-2 text-nowrap small font-weight-bold">Descrição</th>
                            <th class="border border-dark p-2 text-nowrap small font-weight-bold">Qtd estoque</th>
                            <th class="border border-dark p-2 text-nowrap small font-weight-bold">Detalhes/Modificar</th>
                        </tr>
                    </thead>
                    <tbody id="tListaProdutos">
                    <!-- Criar/Dar um ID para um <tbody> e preenche-lo com dados no innerHTML, chamando o método listarProdutos() do PHP com JS. -->
                    <!-- Isso vai permitir que eu substitua esses valores de forma assíncrona e dinâmica. Assim poderei fazer o filtro funcionar. -->
                    <?php
                        include_once '../../model/listarProdutos.php';
                        listarProdutos();
                    ?>
                    </tbody>
                
                </table>
            </form>
            
        </div>
    </div>
        
    

    <?php
        include_once '../../includes/Home/mainFooter.php';
    ?>

</main>

<?php
    include_once '../../includes/Home/footer.php';
?>