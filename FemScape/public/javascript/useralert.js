$(document).ready(function () {
    $('#myAlert').on('closed.bs.alert', function () {
        console.log('Alerta cerrada');
    });
});