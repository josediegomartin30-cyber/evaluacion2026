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
    <div class="container-fluid">
        <h1>Integrante</h1>

        <!-- Button trigger modal -->
        <a href="<?= base_url('/') ?>" class="btn btn-primary mb-4">
            Menú
        </a>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Integrante
        </button>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Integrante</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_integrantes');?>" method="post">
                            <label for="txt_integrantes" class="form-label">Integrante ID</label>
                            <input type="number" name="txt_integrantes" id="txt_integrantes " class="form-control">
                            <label for="txt_nombre" class="form-label">nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                            <label for="txt_apellido" class="form-label">apellido</label>
                            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                            <label for="txt_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="txt_nacimiento" id="txt_nacimiento" class="form-control">
                            <label for="txt_muerte" class="form-label">Fecha de muerte</label>
                            <input type="date" name="txt_muerte" id="txt_muerte" class="form-control">
                            <label for="txt_web" class="form-label">web oficial</label>
                            <input type="text" name="txt_web" id="txt_web" class="form-control">

                            <label for="txt_pais" class="form-label">País de Nacimiento</label>
                            <input type="text" name="txt_pais" id="txt_pais" class="form-control">
                            <button type="submit" class="btn btn-primary form-control mt-2">Guardar</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <table class="table table-striped table-bordered w-auto text-center">
            <thead>
                <tr>
                    
                    <th class="w-25">Integrante ID</th>
                    <th class="w-25">Nombre</th>
                    <th class="w-25">apellido</th>
                    <th class="w-25">Fecha de nacimiento</th>
                    <th class="w-25">Fecha de muerte</th>
                    <th class="w-25">web oficial</th>
                    <th class="w-25">País de nacimiento</th>

                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $integrantes) {
            ?>
                <tr>
                    <td> <?=$integrantes['integrante_id'];?> </td>
                    <td> <?=$integrantes['nombre'];?> </td>
                    <td> <?=$integrantes['apellido'];?> </td>
                    <td> <?=$integrantes['fecha_nacimiento'];?> </td>
                    <td> <?=$integrantes['fecha_muerte'];?> </td>
                    <td> <?=$integrantes['web_oficial'];?> </td>
                    <td> <?=$integrantes['pais_nacimiento'];?> </td>

                    <td>
                        <a href="<?=base_url('buscar_integrantes/').$integrantes['integrante_id'];?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <a href="<?=base_url('eliminar_integrantes/').$integrantes['integrante_id'];?>">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
                }
            ?>
            </tbody>

        </table>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>