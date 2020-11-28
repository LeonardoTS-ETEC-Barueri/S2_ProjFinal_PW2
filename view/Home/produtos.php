<?php
    include_once '../../includes/Home/header.php';
?>

<!-- Início do Modal de Detalhes/Alteração do Produto -->
<form id="tProdutoEmFoco" action="../../controller/validarAtualizarProd.php" method="POST" onsubmit="return confirm('Sua ação é irreversível, tem certeza que quer continuar?')">
    
</form>

<!-- Fim do Modal de Alteração do Produto -->

<main class="col-lg-9 m-0 p-0 min-vh-100 d-flex flex-column overflow-auto border border-dark"> <!-- Container do conteúdo principal -->
    
    <?php 
        include_once '../../includes/Home/produtosNavOpcoes.php';
    ?>

    <div class="row d-flex flex-column m-2 p-0 h-100 overflow-auto border-bottom border-white">
        <div class="col p-2 overflow-auto border border-dark bg-light text-center text-break" id="tContainerProdutos">

            <h1 class="pb-2 text-center">Lista de produtos</h1>

            <form id="tFormTableProdutos" action="" method="POST">
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