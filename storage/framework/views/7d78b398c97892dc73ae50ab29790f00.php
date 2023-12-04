<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Hexagonal CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1 class="h1">Laravel Hexagonal CRUD</h1>
        <p>By: marioDevv</p>



        <h2>Users</h2>

        <!-- Tabla para mostrar los usuarios -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user['id']); ?></td>
                        <td><?php echo e($user['name']); ?></td>
                        <td><?php echo e($user['email']); ?></td>
                        <td>
                            <div class="d-flex gap-2">
                                <form action="<?php echo e(route('user.show', $user['id'])); ?>" method="GET">
                                    <button type="sumbit" class="btn btn-primary">
                                        Show
                                    </button>
                                </form>
    
                                <!-- Botón para expandir el formulario de edición -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="collapse"
                                    data-bs-target="#editForm-<?php echo e($user['id']); ?>">
                                    Edit
                                </button>
    
                                <form action="<?php echo e(route('user.delete', $user['id'])); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <!-- Fila para el formulario de edición -->
                    <tr id="editForm-<?php echo e($user['id']); ?>" class="collapse">
                        <td colspan="3">
                            <form action="<?php echo e(route('user.update', $user['id'])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input type="text" name="name" class="form-control mb-2 w-25"
                                    placeholder="New Name" value="<?php echo e($user['name']); ?>">
                                <input type="email" name="email" class="form-control mb-2 w-25"
                                    placeholder="New Email" value="<?php echo e($user['email']); ?>">
                                <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


        <h2 class="mt-4">Create New User</h2>

        <form action="<?php echo e(route('user.create')); ?>" method="POST" class="mt-2 w-25">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\hexagonal-laravel-crud\resources\views/welcome.blade.php ENDPATH**/ ?>