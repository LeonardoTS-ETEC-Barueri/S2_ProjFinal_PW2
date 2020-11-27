<?php
    include_once '../../includes/Home/header.php';
?>

<main class="col-lg-9 m-0 p-0 min-vh-100 d-flex flex-column overflow-auto border border-dark"> <!-- Container do conteúdo principal -->
    
    <?php 
        include_once '../../includes/Home/produtosNavOpcoes.php';
    ?>

    <div class="row d-flex flex-column m-2 p-0 h-100 overflow-auto border-bottom border-white">
        <div class="col p-2 overflow-auto border border-dark bg-light text-center text-break" id="tContainerProdutos">

            <h1 class="pb-2 text-center">Lista de produtos</h1>

            <form id="tFormTableProdutos" action="../../controller/validarRmvProd.php" method="POST" onsubmit="return confirm('Suas ação é irreversível, tem certeza que quer continuar?')">
                <table class="col-12 w-auto mx-auto" style=" border-collapse: collapse;">
                
                    <tr class="border border-dark">
                        <th class="border border-dark p-2"><p class="p-0 m-0 small font-weight-bold text-nowrap">Remover tudo?</p><input id="boxChecker" onclick="allChkBox()" type="checkbox"/></th>
                        <th class="border border-dark p-2 text-nowrap">ID</th>
                        <th class="border border-dark p-2 text-nowrap">Foto</th>
                        <th class="border border-dark p-2 text-nowrap">Produto</th>
                        <th class="border border-dark p-2 text-nowrap">Preco</th>
                        <th class="border border-dark p-2 text-nowrap">Descricao</th>
                        <th class="border border-dark p-2 text-nowrap">Qtd estoque</th>
                        <th class="border border-dark p-2 text-nowrap">Detalhes/Modificar</th>
                    </tr>

                    <!-- Criar/Dar um ID para um <tbody> e preenche-lo com dados no innerHTML, chamando o método listarProdutos() do PHP com JS. -->
                    <!-- Isso vai permitir que eu substitua esses valores de forma assíncrona e dinâmica. Assim poderei fazer o filtro funcionar. -->
                    <?php
                        include_once '../../model/listarProdutos.php';
                        listarProdutos();
                    ?>
                
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