<?php $__env->startSection('content'); ?>

<h2>History of Searches</h2>
<?php $__currentLoopData = $searches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<ul>
    <li><strong>Title:</strong> <?php echo e($search->title); ?>

    <li><strong>Time:</strong> <?php echo e($search->created_at); ?>

    <li><strong>Description:</strong> <?php echo e($search->description); ?>

    <li><strong>Body:</strong> <em><?php echo e(substr($search->body, 0, 300)); ?>...</em>
</ul>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e15/p3/resources/views/history.blade.php ENDPATH**/ ?>