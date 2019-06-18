<?php $__env->startSection('page-header'); ?>
    <header class="masthead" style="background-image: url('<?php echo e(page_image($page_image)); ?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1><?php echo e($title); ?></h1>
                        <span class="subheading"><?php echo e($subtitle); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post-preview">
                        <a href="<?php echo e($post->url($tag)); ?>">
                            <h2 class="post-title"><?php echo e($post->title); ?></h2>
                            <?php if($post->subtitle): ?>
                                <h3 class="post-subtitle"><?php echo e($post->subtitle); ?></h3>
                            <?php endif; ?>
                        </a>
                        <p class="post-meta">
                            Posted on <?php echo e($post->published_at->format('Y-m-d')); ?>

                            <?php if($post->tags->count()): ?>
                                in
                                <?php echo join(', ', $post->tagLinks()); ?>

                            <?php endif; ?>
                        </p>
                    </div>
                    <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <div class="clearfix">
                    
                    <?php if($reverse_direction): ?>
                        <?php if($posts->currentPage() > 1): ?>
                            <a class="btn btn-primary float-left" href="<?php echo $posts->url($posts->currentPage() - 1); ?>">
                                ←
                                Previous <?php echo e($tag->tag); ?> Posts
                            </a>
                        <?php endif; ?>
                        <?php if($posts->hasMorePages()): ?>
                            <a class="btn btn-primary float-right" ref="<?php echo $posts->nextPageUrl(); ?>">
                                Next <?php echo e($tag->tag); ?> Posts
                                →
                            </a>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($posts->currentPage() > 1): ?>
                            <a class="btn btn-primary float-left" href="<?php echo $posts->url($posts->currentPage() - 1); ?>">
                                ←
                                Newer <?php echo e($tag ? $tag->tag : ''); ?> Posts
                            </a>
                        <?php endif; ?>
                        <?php if($posts->hasMorePages()): ?>
                            <a class="btn btn-primary float-right" href="<?php echo $posts->nextPageUrl(); ?>">
                                Older <?php echo e($tag ? $tag->tag : ''); ?> Posts
                                →
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\blog\resources\views/blog/layouts/index.blade.php ENDPATH**/ ?>