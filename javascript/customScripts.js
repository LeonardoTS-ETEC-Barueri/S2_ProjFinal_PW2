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