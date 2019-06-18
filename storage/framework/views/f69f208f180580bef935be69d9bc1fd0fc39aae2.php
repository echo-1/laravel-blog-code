<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong>
        There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?><?php /**PATH G:\laragon\www\blog\resources\views/admin/partials/errors.blade.php ENDPATH**/ ?>