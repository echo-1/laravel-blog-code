<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo e($meta_description); ?>">
    <meta name="author" content="<?php echo e(config('blog.author')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($title ?? config('blog.title')); ?></title>
    <link rel="alternate" type="application/rss+xml" href="<?php echo e(url('rss')); ?>"
          title="RSS Feed <?php echo e(config('blog.title')); ?>">

    
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
<?php echo $__env->make('blog.partials.page-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('page-header'); ?>

<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->yieldContent('comments'); ?>
<?php echo $__env->make('blog.partials.page-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH G:\laragon\www\blog\resources\views/blog/layouts/master.blade.php ENDPATH**/ ?>