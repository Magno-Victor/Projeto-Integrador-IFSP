const popupsConfig = [
  { botaoId: 'btn-ver-bolos', popupId: 'popup-bolos' },
  { botaoId: 'btn-ver-potes', popupId: 'popup-potes' },
  { botaoId: 'btn-ver-brigs', popupId: 'popup-brigadeiros' }
];

function abrirPopUp(popupId) {
  const popup = document.getElementById(popupId);
  if (popup) {
    popup.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }
}

function fecharPopUp(event) {
  const popup = event.target.closest('.popup');
  if (popup) {
    popup.style.display = 'none';
    document.body.style.overflow = 'auto';
  }
}

popupsConfig.forEach(config => {
  const botao = document.getElementById(config.botaoId);
  if (botao) {
    botao.addEventListener('click', () => abrirPopUp(config.popupId));
  }
});

document.querySelectorAll('.btn-fechar').forEach(btn => {
  btn.addEventListener('click', fecharPopUp);
});