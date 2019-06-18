<p>
    收到来自博客网站联系表单的新消息。
</p>
<p>
    下面是消息明细:
</p>
<ul>
    <li>姓名: <strong><?php echo e($data['name']); ?></strong></li>
    <li>邮箱: <strong><?php echo e($data['email']); ?></strong></li>
    <li>手机: <strong><?php echo e($data['phone']); ?></strong></li>
</ul>
<hr>
<p>
    <?php $__currentLoopData = $data['messageLines']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $messageLine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($messageLine); ?><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</p>
<hr><?php /**PATH G:\laragon\www\blog\resources\views/emails/contact.blade.php ENDPATH**/ ?>