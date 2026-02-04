<div class="container">

    <div class="card">
        <div class="card-header">
            Agregar Alumnos
        </div>

        <?php if (session('mensaje')) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong> <?= session('mensaje'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <form action="<?= base_url('inicio/update') ?>" method="post">

            <div class="card-body">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" 
                    name="nombre" value="<?= $dato['nombre'] ?>">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido"
                        name="apellido" value="<?= $dato['apellido'] ?>">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono"
                        name="telefono" value="<?= $dato['telefono'] ?>">
                </div>
                <button type="submit" class="btn btn-success">Editar</button>
                <input type="hidden" name="id" value="<?= $dato['id']?>">
                <a href="<?= base_url('inicio'); ?>" class="btn btn-danger">Cancelar</a>

            </div>

        </form>


    </div>



</div>