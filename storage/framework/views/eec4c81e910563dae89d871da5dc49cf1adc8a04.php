
<?php $__env->startSection('title'); ?>
settings
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="setting-page">
	<h3>Welcome to <span>Resto-Taste</span> Control panel</h3>
<div>
	<h4><a href="<?php echo e(route('mail')); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Mail Section</a></h4>
	<h4><a href="<?php echo e(route('add_menu')); ?>"><i class="fa fa-image" aria-hidden="true"></i> Menu Section</a></h4>
	<h4><a href="<?php echo e(route('add_employee')); ?>"><i class="fa fa-house-user" aria-hidden="true"></i> Employees Section</a></h4>
	<h4><a href="<?php echo e(route('delivery')); ?>"><i class="fa fa-truck" aria-hidden="true"></i> Delivery Section</a></h4>
	
</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurent\resources\views/settings.blade.php ENDPATH**/ ?>