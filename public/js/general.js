const titleModal = document.querySelector('#myModalLabel');
const idAward = document.querySelector('#idAward');

function listDetails(award){
    idAward.value = award.id;
    titleModal.innerHTML = `Asignacion de ${award.name}`
    $('#myModal').modal('show');
}