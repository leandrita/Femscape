
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

    var submitButton = document.querySelector('button[type="submit"]');

    submitButton.addEventListener('click', function(event) {
      event.preventDefault(); 


      var formSuccess = true;

      if (formSuccess) {
        var toast = new bootstrap.Toast(document.querySelector('.toast'));
        toast.show();
      }
    });
  });