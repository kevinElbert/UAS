<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/register">Register</a>
    <a href="/login">Login</a>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"/>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"/>
        <button type="submit">Register</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\Anthonny\Documents\Kuliah\Semester 5\Web Programming\LatihanUAS\resources\views/login.blade.php ENDPATH**/ ?>