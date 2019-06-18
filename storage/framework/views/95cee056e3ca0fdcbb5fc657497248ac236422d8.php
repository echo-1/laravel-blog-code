<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('blog.title')); ?> 管理后台</title>

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand mr-auto mr-lg-0" href="#"><?php echo e(config('blog.title')); ?> 后台</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <?php echo $__env->make('admin.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</nav>

<main class="py-4">
    <?php echo $__env->yieldContent('content'); ?>
</main>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH G:\laragon\www\blog\resources\views/admin/layout.blade.php ENDPATH**/ ?>