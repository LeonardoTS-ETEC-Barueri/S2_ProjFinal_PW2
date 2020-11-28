function logout(){
    alert(`Bye bye ${nickname}`)
    window.document.location = '../../view/Login/';
}

function goTo(btnId, page){
    // From HOME Navigation Menu, go to...
    sessionStorage.setItem("selectedBtnId", `#${btnId}`);
    console.log(sessionStorage.getItem("selectedBtnId"));
    window.document.location = `../../view/Home/${page}`;
}

function setSelectedButton(){
    // Config path... "arrays.php" → "asideNavButtons.php" → "includes/Home/header.php"...

    $(sessionStorage.getItem("selectedBtnId")).addClass("active");
    
    //sessionStorage.clear(); // Limpa o armazenamento de sessão.

    /* As linhas abaixo serão mantidas como lembrança para atividades futuras
            
    //console.log(localStorage.getItem("selectedBtnId"));
    //var selectedBtnId = localStorage.getItem("selectedBtnId");
    //window.document.querySelector(`${selectedBtnId}`).classList.add("active");

    */
}


// Início da seleção de todos os checkboxes de Produto.
function allChkBox(){
    console.log($('#boxChecker').prop);
    var myBoxChecker = document.querySelector('#boxChecker');
    var myChkBoxes = document.querySelectorAll('.prodChkBoxId');

    console.log(myBoxChecker.checked);
    
    if (myBoxChecker.checked) { // Se o checkbox "Remover Tudo?" estiver selecionado...

        myChkBoxes.forEach((item) => {  // Todos os checkboxes dos produtos que estão sendo exibidos serão marcados.
            item.checked = true;
        });

    } else {

        myChkBoxes.forEach((item) => {  // Se não... Todos serão desmarcados.
            item.checked = false;
        });

    }
}

function liberarEdicaoProd(){
    //var myAlteraFotoBtn = document.querySelector('#tBtnAlteraFoto');
    var myNomeProd = document.querySelector('#tNomeProd');
    var myPrecoProd = document.querySelector('#tPrecoProd');
    var myEstoqueProd = document.querySelector('#tEstoqueProd');
    var myDescProd = document.querySelector('#tDescProd');

    var myEditBtn = document.querySelector('#tBtnEditarProd');
    
    var mySaveBtnMsg = "&#x270F; Salvar";

    //myAlteraFotoBtn.disabled = false;
    myNomeProd.disabled = false;
    myPrecoProd.disabled = false;
    myEstoqueProd.disabled = false;
    myDescProd.disabled = false;

    
    myEditBtn.removeAttribute('onclick');
    myEditBtn.innerHTML = mySaveBtnMsg;
    myEditBtn.setAttribute('type', 'submit');
    myEditBtn.setAttribute('onclick', 'this.setAttribute("form", "tAtualizaProduto")')

}

function limparDetalheProd(){
    myDetalheProd = document.querySelector('#tAtualizaProduto');

    console.log(myDetalheProd.innerHTML);
    myDetalheProd.innerHTML = "";

}

function detalharProduto(codProdutoOnclick){
    myDetalheProd = document.querySelector('#tAtualizaProduto');

    console.log(myDetalheProd.innerHTML);
    myDetalheProd.innerText = `<?php 
        $codProduto = ${codProdutoOnclick};
        include_once '../../model/detalharProduto.php';
        detalharProduto($codProduto);
    ?>`;

    $('#detalheProdutoModal').modal('show');
}

/*
function sendPostNoForm(codProd){
    var xhr = new XMLHttpRequest();
    var url = '../../controller/validarDetalharProd.php';

    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({
        nBtnDetalhar: codProd
    }));

} 
*/

