<div class="container">

    <div class="card">
        <div class="card-header">
            Editar de Alumnos
        </div>

        <?php if (session('mensaje')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Enhorabuena!!</strong>
                <?= session('mensaje'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acción</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $dato): ?>
                        <tr>
                            <th scope="row"><?php echo $dato['id'] ?></th>
                            <td><?php echo $dato['nombre'] ?></td>
                            <td><?php echo $dato['apellido'] ?></td>
                            <td><?php echo $dato['telefono'] ?></td>
                            <td><a class="btn btn-warning" href="<?= base_url('inicio/edit/'.$dato['id'])?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="<?= base_url('inicio/delete/'.$dato['id'])?>">Eliminar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= base_url('inicio/add'); ?>" class="btn btn-success">Agregar</a>
        </div>
    </div>



</div>