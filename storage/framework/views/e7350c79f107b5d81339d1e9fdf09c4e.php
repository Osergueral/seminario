<!-- resources/views/alumnos/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Editar Alumnos</h1>
    
    <form action="<?php echo e(route('alumnos.update', $alumno->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre Alumno*</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo e($alumno->nombre); ?>" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido Alumno*</label>
            <input type="text" name="apellido" class="form-control" id="apellido" value= "<?php echo e($alumno->apellido); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Alumno*</label>
            <input type="text" name="email" class="form-control" id="email" value= "<?php echo e($alumno->email); ?>" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad Alumno*</label>
            <input type="number" name="edad" class="form-control" id="edad" value= "<?php echo e($alumno->edad); ?>"required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo e(route('alumnos.index')); ?>" class="btn btn-secondary">Regresar</a>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\gestion_tareas\resources\views/alumnos/edit.blade.php ENDPATH**/ ?>