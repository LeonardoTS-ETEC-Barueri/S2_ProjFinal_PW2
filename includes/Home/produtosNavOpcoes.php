<div class="row d-flex m-0 p-0 text-center text-break border-bottom border-dark align-items-center justify-content-center">    <!-- Opções: Novo Produto/Remover/Filtrar/Buscar -->
        
    <div class="btn-group-sm text-break text-center align-self-center" role="group" aria-label="myNavigationMenu">
        <button type="button" class="btn btn-sm btn-dark m-1 p-1">Novo produto</button>
        <button type="button" class="btn btn-sm btn-dark m-1 p-1 disabled">Remover selecionados</button>
    </div>

    <form class="form-inline justify-content-center" action="" method="GET"> <!-- Formulário responsivo do filtro de exibição dos produtos -->

        <div class="d-flex input-group-sm align-items-center p-1">
            <label class="font-weight-bold m-auto" for="tFiltro">Exibir por:</label>
        </div>

        <div class="d-flex input-group-sm align-items-center p-1">
            <select class="col-sm-auto py-1" style="border: solid black 1px;" name="nFiltro" id="tFiltro" >
                <option selected value="0">ABC</option>
                <option value="1">ZYX</option>
                <option value="2">Maior preço</option>
                <option value="3">Menor preço</option>
                <option value="4">Maior estoque</option>
                <option value="5">Menor estoque</option>
                <option value="6">Popularidade</option>
                <option value="7">Items em falta</option>
            </select>
        </div>

        <div class="d-flex align-items-center p-1 ">
            <input class="custom-select-sm col-sm-auto no-input-fx" name="nInputProcura" id="tInputProcura" type="search" placeholder="Buscar produto">
        </div>
        <div class="d-flex align-items-center p-1">
            <button class="btn btn-sm btn-dark" type="submit">&#x1F50D;</button>
        </div>

    </form>

</div>