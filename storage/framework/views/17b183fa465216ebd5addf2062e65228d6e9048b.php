<h1>Customers</h1>
<a href='/customers/create'>Add New Customer</a>
<?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<p><strong><a href="/customers/<?php echo e($c->id); ?>"><?php echo e($c->name); ?></a></strong>(<?php echo e($c->email); ?>)</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<p>No customers</p>
<?php endif; ?><?php /**PATH C:\Users\rajul\larproject-1\resources\views/customer/index.blade.php ENDPATH**/ ?>