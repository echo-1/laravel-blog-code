<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link" href="/">首页</a></li>
    <?php if(auth()->guard()->check()): ?>
        <li <?php if(Request::is('admin/post*')): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
            <a class="nav-link" href="/admin/post">文章</a>
        </li>
        <li <?php if(Request::is('admin/tag*')): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
            <a class="nav-link" href="/admin/tag">标签</a>
        </li>
        <li <?php if(Request::is('admin/upload*')): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
            <a class="nav-link" href="/admin/upload">上传</a>
        </li>
    <?php endif; ?>
</ul>

<ul class="navbar-nav ml-auto">
    <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item"><a class="nav-link" href="/login">登录</a></li>
    <?php else: ?>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
               aria-expanded="false">
                <?php echo e(Auth::user()->name); ?>

                <span class="caret"></span>
            </a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="/logout">退出</a>
            </div>
        </li>
    <?php endif; ?>
</ul><?php /**PATH G:\laragon\www\blog\resources\views/admin/partials/navbar.blade.php ENDPATH**/ ?>