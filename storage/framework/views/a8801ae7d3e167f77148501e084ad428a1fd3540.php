<html>
<head>
    <title><?php echo e(config('blog.title')); ?></title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1><?php echo e(config('blog.title')); ?></h1>
    <h5>Page <?php echo e($posts->currentPage()); ?> of <?php echo e($posts->lastPage()); ?></h5>
    <hr>
    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('blog.detail', ['slug' => $post->slug])); ?>"><?php echo e($post->title); ?></a>
                <em>(<?php echo e($post->published_at); ?>)</em>
                <p>
                    <?php echo e(str_limit($post->content)); ?>

                </p>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <hr>
    <?php echo $posts->render(); ?>

</div>
</body>
</html><?php /**PATH G:\laragon\www\blog\resources\views/blog/index.blade.php ENDPATH**/ ?>