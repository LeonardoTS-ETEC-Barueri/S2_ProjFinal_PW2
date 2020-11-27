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
