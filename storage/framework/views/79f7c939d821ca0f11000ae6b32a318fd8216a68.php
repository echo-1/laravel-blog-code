<div id="disqus_thread"></div>
<script>
    var disqus_config = function () {
        this.page.url = 'http://blog.test/<?php echo e($post->slug); ?>';
        this.page.identifier = 'blog-<?php echo e($post->slug); ?>';
    };
    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://blog-he.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>
    请启用 JavaScript 查看 <a href="https://disqus.com/?ref_noscript">Disqus 驱动的评论框</a>。
</noscript><?php /**PATH G:\laragon\www\blog\resources\views/blog/partials/disqus.blade.php ENDPATH**/ ?>