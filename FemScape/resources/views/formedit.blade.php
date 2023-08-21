<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de edición</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/formedit.css') }}">

</head>
<body>
<header></header>
<main class="container mt-5">
    <div class="row">
        <div class="liner"></div>
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <form class="custom-form">
                <h2 class="text-center mb-9 title">Editar destino</h2>
        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Escribe un título" required>
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicación</label>
                    <select class="form-control" id="ubicacion" required data-error="Debes seleccionar una ubicación">
                        <option value="">Seleccione un país</option>
                    </select>
                </div>
                <div class="custom-file">
                        <input type="file" class="form-control-file" id="imagenInput"><input type="text" class="form-control" id="titulo" placeholder="Sube una imagen" required data-error="Adjunte una imagen">

                    </div>
                <button type="submit" class="btn btn-primary">Aceptar</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
            </form>
        </div>
        <div class="col-md-6">
            <!-- <img src="ruta-a-tu-imagen.jpg" alt="Imagen" class="img-fluid"> -->

            <div class="form-group mt-3">
                <label for="comentarios">¿Porque quieres viajar allí?</label>
                <textarea class="form-control" id="comentarios" rows="10" required data-error="Por favor, ingresa la descripción"></textarea>
            </div>
        </div>
    </div>
</div>
</main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
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

</script>
</body>
</html>