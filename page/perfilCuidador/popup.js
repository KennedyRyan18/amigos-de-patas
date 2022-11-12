const button = document.querySelector('.btn-reservar');
const dialog = document.querySelector('dialog');
const buttonClose = document.querySelector('.btn-close');

button.onclick = function() {
    dialog.showModal();
}

buttonClose.onclick = function() {
    dialog.close();
}

