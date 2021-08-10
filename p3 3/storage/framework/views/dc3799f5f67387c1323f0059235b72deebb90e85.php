<?php $__env->startSection('content'); ?>

<form action="/search" method="GET">

    <label for='keywords'>Keywords:</label>
    <input type='text' id='keywords' name='keywords'>
    <button type='submit'>Search</button>

</form>

<?php if($serps): ?>
<h2>Search Results</h2>
<ul>
    <li><strong>Title:</strong> <?php echo e($serps->title); ?>

    <li><strong>Description:</strong> <?php echo e($serps->description); ?>

    <li><strong>Body:</strong> <em><?php echo e(substr($serps->body, 0, 1000)); ?>...</em>
</ul>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e15/p3/resources/views/index.blade.php ENDPATH**/ ?>