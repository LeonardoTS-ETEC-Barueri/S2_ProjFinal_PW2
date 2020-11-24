<?php

    include_once '../includes/credentials.php';

    $respRecovery = $_POST['nAnswerRecovery'];

    if ( empty($respRecovery) ){
        exit('noAnswer');
    } elseif ($respRecovery != $secretAnswer){
        exit('incorrectAnswer');
    }

    if ( $respRecovery == $secretAnswer ){
        session_start();
        $_SESSION['answerIsCorrect'] = true;
        
        exit('correctAnswer');
    }


?>