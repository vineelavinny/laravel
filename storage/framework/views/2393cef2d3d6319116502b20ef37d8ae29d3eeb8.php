<h1>Edit Customer</h1>
<form action="/customers/<?php echo e($customer->id); ?>" method="post">
    <?php echo method_field('PATCH'); ?>
    <?php echo $__env->make('customer.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button>Save Customer</button>
</form><?php /**PATH C:\Users\rajul\larproject-1\resources\views/customer/edit.blade.php ENDPATH**/ ?>