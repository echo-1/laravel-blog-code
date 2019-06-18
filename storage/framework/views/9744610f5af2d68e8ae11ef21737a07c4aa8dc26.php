<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(asset('css/pickadate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/selectize.default.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>文章 <small>» 创建新文章</small></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">创建新文章表单</h3>
                    </div>
                    <div class="card-body">

                        <?php echo $__env->make('admin.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <form role="form" method="POST" action="<?php echo e(route('post.store')); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                            <?php echo $__env->make('admin.post._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <div class="col-md-10 offset-md-2">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-disk-o"></i>
                                                保存新文章
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/pickadate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/selectize.min.js')); ?>"></script>
    <script>
        $(function() {
            $("#publish_date").pickadate({
                format: "yyyy-mm-dd"
            });
            $("#publish_time").pickatime({
                format: "h:i A"
            });
            $("#tags").selectize({
                create: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\blog\resources\views/admin/post/create.blade.php ENDPATH**/ ?>