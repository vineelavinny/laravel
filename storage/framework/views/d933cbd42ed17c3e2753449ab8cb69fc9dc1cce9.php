<h1>Customer Details</h1>
<div><a href="/customers"> >Back</a></div>
<label><strong>Name</strong></label>
<p><?php echo e($customer->name); ?></p>
<label><strong>Email</strong></label>
<p><?php echo e($customer->email); ?></p>

<div><a href="/customers/<?php echo e($customer->id); ?>/edit"> Edit</a></div>
<form action="/customers/<?php echo e($customer->id); ?>" method="post">
<?php echo method_field('DELETE'); ?>
<?php echo csrf_field(); ?>
<button>Delete</button>
</form><?php /**PATH C:\Users\rajul\larproject-1\resources\views/customer/show.blade.php ENDPATH**/ ?>