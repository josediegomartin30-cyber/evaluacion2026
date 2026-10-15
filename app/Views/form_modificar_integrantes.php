<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <form action="<?= base_url('modificar_integrantes'); ?>" method="post">
            <label for="txt_integrantes" class="form-label">Integrantes</label>
            <input type="number" name="txt_integrantes" id="txt_integrantes " class="form-control" value="<?=$datos['integrante_id'];?>">
            <label for="txt_nombre" class="form-label">Nombre</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>" >
            <label for="txt_apellido" class="form-label">Apellido</label>
            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control"  value="<?=$datos['apellido'];?>">

            <label for="txt_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="txt_nacimiento" id="txt_nacimiento" class="form-control"  value="<?=$datos['fecha_nacimiento'];?>">
            <label for="txt_muerte" class="form-label">Fecha de muerte</label>
            <input type="date" name="txt_muerte" id="txt_muerte" class="form-control"  value="<?=$datos['fecha_muerte'];?>">
            <label for="txt_web" class="form-label">Web Oficial</label>
            <input type="text" name="txt_web" id="txt_web" class="form-control"  value="<?=$datos['web_oficial'];?>">

            <label for="txt_pais" class="form-label">País de Nacimiento</label>
            <input type="text" name="txt_pais" id="txt_pais" class="form-control"  value="<?=$datos['pais_nacimiento'];?>">
            <button type="submit" class="btn btn-primary form-control mt-2">Guardar</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>