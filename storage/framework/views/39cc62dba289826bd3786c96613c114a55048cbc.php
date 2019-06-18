<?php $__env->startSection('page-header'); ?>
    <header class="masthead" style="background-image: url('<?php echo e(page_image('contact-bg.jpg')); ?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>联系我们</h1>
                        <span class="subheading">你有问题？我有答案。</span>
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
                <?php echo $__env->make('admin.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.partials.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <p>
                    想与我联系？填写下面的表单给我发消息，我会尽快给你回复！
                </p>
                <form name="sentMessage" action="/contact" method="post" id="contactForm" novalidate>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>姓名</label>
                            <input type="text" name="name" class="form-control" placeholder="填写你的名字" id="name" value="<?php echo e(old('name')); ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>邮箱</label>
                            <input type="email" name="email" class="form-control" placeholder="填写你的邮箱" id="email" value="<?php echo e(old('email')); ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>手机</label>
                            <input type="tel" name="phone" class="form-control" placeholder="填写你的手机号" id="phone" value="<?php echo e(old('phone')); ?>" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>消息</label>
                            <textarea rows="5" name="message" class="form-control" placeholder="填写你想发送的消息" id="message" value="<?php echo e(old('message')); ?>" required></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">发送</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layouts.master', ['meta_description' => '联系我们'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\blog\resources\views/blog/contact.blade.php ENDPATH**/ ?>