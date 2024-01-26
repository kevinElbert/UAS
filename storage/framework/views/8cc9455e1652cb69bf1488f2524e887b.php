<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    manage user
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="display: flex">
            <span><?php echo e($user->email); ?></span>
            <form action="<?php echo e(route('delete-user', ['id'=>$user->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit">Delete user</button>
        </form>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\Users\Anthonny\Documents\Kuliah\Semester 5\Web Programming\LatihanUAS\resources\views/manage.blade.php ENDPATH**/ ?>