<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>文章 <small>» 列表</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/post/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 创建新文章
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <?php echo $__env->make('admin.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.partials.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <table id="posts-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>发布时间</th>
                        <th>标题</th>
                        <th>副标题</th>
                        <th data-sortable="false">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td data-order="<?php echo e($post->published_at->timestamp); ?>">
                                <?php echo e($post->published_at->format('Y-m-d g:ia')); ?>

                            </td>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->subtitle); ?></td>
                            <td>
                                <a href="/admin/post/<?php echo e($post->id); ?>/edit" class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> 编辑
                                </a>
                                <a href="/blog/<?php echo e($post->slug); ?>" class="btn btn-xs btn-warning">
                                    <i class="fa fa-eye"></i> 查看
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(function() {
            $("#posts-table").DataTable({
                order: [[0, "desc"]]
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\blog\resources\views/admin/post/index.blade.php ENDPATH**/ ?>