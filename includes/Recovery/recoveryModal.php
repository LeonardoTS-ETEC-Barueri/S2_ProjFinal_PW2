<!-- Configuração do Modal de recuperação de conta -->
<div class="modal fade" id="recoveryModal" tabindex="-1" aria-labelledby="recoveryModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recoveryModalLabel">Suas credenciais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container modal-body">
            <div class="row justify-content-center align-items-center m-1">
                <p class="col-8 m-0 border mr-2"><span class="font-weight-bold">Usuário:</span> <span class="text-break" id="myRecUsername">**********</span></p>
                <button id="userRecBtn" type="image" class="border" onclick="verUsuario()"><img id="usernameRecIcon" class="recovery-btn-img" src="../../media/images/Recovery/hidden_keys.svg"/></button>
            </div>
            <div class="row justify-content-center align-items-center m-1">
                <p class="col-8 m-0 border mr-2"><span class="font-weight-bold">Senha:</span> <span class="text-break" id="myRecPassword">**********</span></p>
                <button id="passRecBtn" type="image" class="border" onclick="verSenha()"><img id="passwordRecIcon" class="recovery-btn-img" src="../../media/images/Recovery/hidden_keys.svg"/></button>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
      </div>
    </div>
  </div>
</div>
<!-- Fim do Modal -->