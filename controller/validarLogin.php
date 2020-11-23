<?php
    session_start();

    include_once '../includes/credentials.php';

    $loginUsername = $_POST['nUsername'];
    $loginPassword = $_POST['nPass'];

    if ( empty($loginUsername) ){
        exit('noUsername');
    } elseif ($loginUsername != $keyUsername){
        exit('incorrectUsername');
    }

    if( empty($loginPassword) ){
        exit('noPassword');
    } elseif ($loginPassword != $keyPassword){
        exit('incorrectPassword');
    }

    $_SESSION['isAuthentic'] = true;    // Login = true (Está autênticado).
    echo 'usuarioConectado';

?>