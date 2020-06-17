<h1>Add Customer</h1>
<form action="/customers" method="post">
    <?php echo $__env->make('customer.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button>Add New Customer</button>
</form><?php /**PATH C:\Users\rajul\larproject-1\resources\views/customer/create.blade.php ENDPATH**/ ?>