
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

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.custom-form');
    const successMessage = document.querySelector('.success-message');

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
                
            }
        });
    });


    cancelButton.addEventListener('click', function() {
        Swal.fire({
            title: '¿Estás seguro de cancelar?',
            showCancelButton: true,
            confirmButtonText: 'Sí, cancelar',
            cancelButtonText: 'No',
            icon: 'warning',
        }).then((result) => {
            if (result.isConfirmed) {

            }
        });
    });
});
