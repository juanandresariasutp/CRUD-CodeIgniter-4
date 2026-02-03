<div class="container">

    <div class="card">
        <div class="card-header">
            Listado de Alumnos
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($datos as $dato): ?>
                    <tr>
                        <th scope="row"><?php echo $dato['id'] ?></th>
                        <td><?php echo $dato['nombre'] ?></td>
                        <td><?php echo $dato['apellido'] ?></td>
                        <td><?php echo $dato['telefono'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= base_url('inicio/add'); ?>" class="btn btn-success">Agregar</a>
        </div>
    </div>



</div>