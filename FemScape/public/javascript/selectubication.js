
document.addEventListener("DOMContentLoaded", function() {
    const ubicacionSelect = document.getElementById('ubicacion');

    fetch('countries.json')
    .then(response => response.json())
    .then(countries => {
        countries.forEach(country => {
            const option = document.createElement('option');
            option.value = country.name;
            option.textContent = country.name;
            ubicacionSelect.appendChild(option);
        });
    })
    .catch(error => console.error('Error cargando el JSON de países:', error));
});


//JAVASCRIPT MODAL



form.addEventListener('submit', function(event) {
    event.preventDefault();

    Swal.fire({
        title: '¿Quieres guardar los cambios?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Guardar',
        denyButtonText: 'No guardar',
    }).then((result) => {
        if (result.isConfirmed) {
             successMessage.textContent = 'Su registro se ha creado exitosamente';


            form.submit();
        } else if (result.isDenied) {
            // O manejar la negación de la alerta aquí
        }
    });
});



