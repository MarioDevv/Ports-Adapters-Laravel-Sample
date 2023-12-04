<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-card {
            margin-top: 50px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .card-img-top {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 20px auto 10px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card profile-card" style="width: 20rem;">
            <img src="https://robohash.org/<?php echo e($user['email']); ?>?set=set1&size=200x200" class="card-img-top" alt="Avatar">
            <div class="card-body text-center">
                <h5 class="card-title"><?php echo e($user['name']); ?></h5>
                <p class="card-text">Email: <?php echo e($user['email']); ?></p>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-zO07aB2VCHx+g4pQQs7pF0K+6e7Jg7x7M8MbsfX5c39vC0n1t5R0T+jS7f3CZT+q"
        crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hexagonal-laravel-crud\resources\views/show.blade.php ENDPATH**/ ?>