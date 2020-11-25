<div class="row m-0 p-0 mh-100 d-flex border-bottom border-dark" style="min-height:25vh;">    <!-- Cabeçalho menu -->

    <div class="col-lg-4 m-0 p-0 d-flex align-items-center justify-content-center mh-100">
        <img class="user-avatar" src="<?php echo "${pathUserAvatar}${userAvatar}"?>" alt="Foto do usuário"/>    
            <!-- Configurações da Foto do usuário - Caminho existe no include "credentials.php" -->
    </div>
                
    <div class="col-lg-8 m-0 p-0 mh-100 align-self-center overflow-hidden">
        <h1 class="p-0 m-0 display-4 text-center" style="font-size:200%;">Bem-vindo!</h1>
        <?php echo '<p class="m-0 p-0 font-weight-bold text-break text-center">'.$nickname.'</p>'?> <!-- Nickname do usuário "credentials.php" -->    
    </div>

</div>