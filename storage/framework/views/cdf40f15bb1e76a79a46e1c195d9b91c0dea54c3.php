<?php $__env->startSection('page-header'); ?>
    <header class="masthead" style="background-image: url('<?php echo e(page_image($post->page_image)); ?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><?php echo e($post->title); ?></h1>
                        <h2 class="subheading"><?php echo e($post->subtitle); ?></h2>
                        <span class="meta">
                            Posted on <?php echo e($post->published_at->format('Y-m-d')); ?>

                            <?php if($post->tags->count()): ?>
                                in
                                <?php echo join(', ', $post->tagLinks()); ?>

                            <?php endif; ?>
                        </span>
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
                
                <article>
                    <?php echo $post->content_html; ?>

                </article>

                <hr>

                
                <div class="clearfix">
                    
                    <?php if($tag && $tag->reverse_direction): ?>
                        <?php if($post->olderPost($tag)): ?>
                            <a class="btn btn-primary float-left" href="<?php echo $post->olderPost($tag)->url($tag); ?>">
                                ←
                                Previous <?php echo e($tag->tag); ?> Post
                            </a>
                        <?php endif; ?>
                        <?php if($post->newerPost($tag)): ?>
                            <a class="btn btn-primary float-right" ref="<?php echo $post->newerPost($tag)->url($tag); ?>">
                                Next <?php echo e($tag->tag); ?> Post
                                →
                            </a>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($post->newerPost($tag)): ?>
                            <a class="btn btn-primary float-left" href="<?php echo $post->newerPost($tag)->url($tag); ?>">
                                ←
                                Newer <?php echo e($tag ? $tag->tag : ''); ?> Post
                            </a>
                        <?php endif; ?>
                        <?php if($post->olderPost($tag)): ?>
                            <a class="btn btn-primary float-right" href="<?php echo $post->olderPost($tag)->url($tag); ?>">
                                Older <?php echo e($tag ? $tag->tag : ''); ?> Post
                                →
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('comments'); ?>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php echo $__env->make('blog.partials.disqus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layouts.master', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?? config('blog.description'),
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\blog\resources\views/blog/layouts/post.blade.php ENDPATH**/ ?>