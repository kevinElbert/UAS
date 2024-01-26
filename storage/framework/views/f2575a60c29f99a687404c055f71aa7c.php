<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <a href="/register">Register</a>
    <a href="/login">Login</a>
    <form action="<?php echo e(route('register')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"/>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"/>

        <div>
            <label for="admin">Admin</label>
            <input type="radio" id="admin" name="role" value="admin"/>
        </div>
        <div>
            <label for="user">User</label>
            <input type="radio" id="user" name="role" value="user">
        </div>
        <label for="pic">Pic</label>
        <input type="file" id="pic" name="pic">
        <button type="submit">Register</button>

        <?php if($errors->any()): ?>
        <p style="color: red"><?php echo e($errors->first()); ?></p>

        <?php endif; ?>



    </form>
</body>
</html>
<?php /**PATH C:\Users\Anthonny\Documents\Kuliah\Semester 5\Web Programming\LatihanUAS\resources\views/register.blade.php ENDPATH**/ ?>