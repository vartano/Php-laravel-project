<?php if($errors -> any()): ?>
<div class="alert alert-denger " style="width: 300px;">
    <ul>
        <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php if(session('success')): ?>
<div class="alert alert-success" style="width: 200px; height:50px">
	<ul>
		<?php echo e(session('success')); ?>

	</ul>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\restaurent\resources\views/inc/messages.blade.php ENDPATH**/ ?>