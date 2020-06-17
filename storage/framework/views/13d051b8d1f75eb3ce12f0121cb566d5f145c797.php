<div>
        <label>Name</label>
        <input type="text" name="name" autocomplete="off" value="<?php echo e(old('name') ?? $customer->name); ?>"> 
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p style="color:red"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div>   
        <label>Email</label>
        <input type="email" name="email" autocomplete="off" value="<?php echo e(old('email') ?? $customer->email); ?>">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p style="color:red"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <?php echo csrf_field(); ?><?php /**PATH C:\Users\rajul\larproject-1\resources\views/customer/form.blade.php ENDPATH**/ ?>