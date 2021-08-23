
<?php $__env->startSection('title'); ?>
menu
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="menu-page">
	<h3>Welcome to <span>Resto-Taste</span> Food Menu</h3>
	<div class="ourmenu">
		<div class="disp-menu">
			<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<ul style="background-color:rgba(210, 25, 16, 0.66);">
				<li id="m-title"> <span><?php echo e($value->itemname); ?></span></li>
				<li><img src="<?php echo e(asset('/upload/image/'.$value->img)); ?>" alt="" width="300px" height="220px"></li>
				<li>Item Code :<span><?php echo e($value->itemcode); ?></span></li>
				<li>Item Name : <span><?php echo e($value->itemname); ?></span></li>
				<li>Quantity :<span><?php echo e($value->quantity); ?></span></li>
				<li>Type :<span><?php echo e($value->type); ?></span> </li>
				<li>piece : <?php echo e($value->piece); ?> </li>
				<li>Weight : <span><?php echo e($value->weight); ?> gr</span></li>
				<li>Price :<span><?php echo e($value->price); ?> amd</span></li>
			</ul>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
		</div>
			<br>
			<h5><a href="#top" style="font-size:20px;text-decoration:none"><i class="fas fa-arrow-circle-left" aria-hidden="true"></i> Back to Top</a></h5>
	</div>
<div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurent\resources\views/menu.blade.php ENDPATH**/ ?>