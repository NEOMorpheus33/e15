<!doctype html>
<html lang='en'>
<head>

    <title><?php echo $__env->yieldContent('title', 'Jsearch | Best Search Engine | Incognito Search Engine'); ?></title>


    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link href='style.css' rel='stylesheet'>

    <?php echo $__env->yieldContent('head'); ?>
</head>
<body>

    <?php if(session('flash-alert')): ?>
    <div class='flash-alert'><?php echo e(session('flash-alert')); ?></div>
    <?php endif; ?>


    <a href='/'><img alt="JSearchLogo" src="/images/JSLogo4.jpg" width="272" height="77" /></a>

    <?php if(Auth::user()): ?>
    <h2>
        Hello <?php echo e(Auth::user()->name); ?>!
    </h2>
    <?php endif; ?>


    <nav>
        <ul>
            <li><a href='/'>Home</a>
            <li><a href='/history'>History</a>

                <?php if(!Auth::user()): ?>
            <li><a href='/login'>Login</a>
            <li><a href='/login'>Register</a>

                <?php else: ?>
            <li>
                <form method='POST' id='logout' action='/logout'>
                    <?php echo e(csrf_field()); ?>

                    <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                </form>
                <?php endif; ?>

        </ul>
    </nav>




    <?php echo $__env->yieldContent('content'); ?>

    <footer>
        <?php echo $__env->make('includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e15/p3/resources/views/layouts/main.blade.php ENDPATH**/ ?>