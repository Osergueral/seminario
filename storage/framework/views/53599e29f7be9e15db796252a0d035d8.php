<!-- resources/views/items/alumnos.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Registrar Alumnos</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('alumnos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre Alumno*</label>
            <input type="text" name="name" class="form-control" id="name" value= "<?php echo e(old('name')); ?>" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido Alumno*</label>
            <input type="text" name="apellido" class="form-control" id="apellido" value= "<?php echo e(old('apellido')); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Alumno*</label>
            <input type="text" name="email" class="form-control" id="email" value= "<?php echo e(old('email')); ?>" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad Alumno*</label>
            <input type="number" name="edad" class="form-control" id="edad" value= "<?php echo e(old('age')); ?>"required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="<?php echo e(route('alumnos.index')); ?>" class="btn btn-secondary">Regresar</a>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\gestion_tareas\resources\views/alumnos/create.blade.php ENDPATH**/ ?>