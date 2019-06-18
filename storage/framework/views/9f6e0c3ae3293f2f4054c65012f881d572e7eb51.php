<?php $__env->startSection('content'); ?>
    <div class="container">

        
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3 class="pull-left">上传 </h3>
                <div class="pull-left">
                    <ul class="breadcrumb">
                        <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path => $disp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="/admin/upload?folder=<?php echo e($path); ?>"><?php echo e($disp); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="active"><?php echo e($folderName); ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#modal-folder-create">
                    <i class="fa fa-plus-circle"></i> 新增目录
                </button>
                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal-file-upload">
                    <i class="fa fa-upload"></i> 上传
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <?php echo $__env->make('admin.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.partials.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <table id="uploads-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>名称</th>
                        <th>类型</th>
                        <th>日期</th>
                        <th>尺寸</th>
                        <th data-sortable="false">操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    
                    <?php $__currentLoopData = $subfolders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <a href="/admin/upload?folder=<?php echo e($path); ?>">
                                    <i class="fa fa-folder fa-lg fa-fw"></i>
                                    <?php echo e($name); ?>

                                </a>
                            </td>
                            <td>目录</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <button type="button" class="btn btn-xs btn-danger" onclick="delete_folder('<?php echo e($name); ?>')">
                                    <i class="fa fa-times-circle fa-lg"></i>
                                    删除
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <a href="<?php echo e($file['webPath']); ?>">
                                    <?php if(is_image($file['mimeType'])): ?>
                                        <i class="fa fa-image fa-lg fa-fw"></i>
                                    <?php else: ?>
                                        <i class="fa fa-file fa-lg fa-fw"></i>
                                    <?php endif; ?>
                                    <?php echo e($file['name']); ?>

                                </a>
                            </td>
                            <td><?php echo e($file['mimeType'] ? : 'Unknown'); ?></td>
                            <td><?php echo e($file['modified']->format('j-M-y g:ia')); ?></td>
                            <td><?php echo e(human_filesize($file['size'])); ?></td>
                            <td>
                                <button type="button" class="btn btn-xs btn-danger" onclick="delete_file('<?php echo e($file['name']); ?>')">
                                    <i class="fa fa-times-circle fa-lg"></i>
                                    删除
                                </button>
                                <?php if(is_image($file['mimeType'])): ?>
                                    <button type="button" class="btn btn-xs btn-success" onclick="preview_image('<?php echo e($file['webPath']); ?>')">
                                        <i class="fa fa-eye fa-lg"></i>
                                        预览
                                    </button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.upload._modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>

        // 确认文件删除
        function delete_file(name) {
            $("#delete-file-name1").html(name);
            $("#delete-file-name2").val(name);
            $("#modal-file-delete").modal("show");
        }

        // 确认目录删除
        function delete_folder(name) {
            $("#delete-folder-name1").html(name);
            $("#delete-folder-name2").val(name);
            $("#modal-folder-delete").modal("show");
        }

        // 预览图片
        function preview_image(path) {
            $("#preview-image").attr("src", path);
            $("#modal-image-view").modal("show");
        }

        // 初始化数据
        $(function() {
            $("#uploads-table").DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\blog\resources\views/admin/upload/index.blade.php ENDPATH**/ ?>