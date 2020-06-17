
<?php $__env->startSection('title','Sample2'); ?>
<?php $__env->startSection('content'); ?>
 <!--<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><?php echo e($s); ?></li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
-->
<form action="/ser" method="post">
    <input type="text" name="name">
    <?php echo csrf_field(); ?>
    <input type="submit" value="Add service">
    <p style="color:red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
</form>

<ul>
<?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<li><?php echo e($s->name); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<li>No services</li>

<?php endif; ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajul\larproject-1\resources\views/Service/Service.blade.php ENDPATH**/ ?>