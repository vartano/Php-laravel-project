
<?php $__env->startSection('title'); ?>
mail
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="cmail">
	<h3>Inbox  <span><a href="<?php echo e(route('settings')); ?>"><i class="fas fa-arrow-circle-left"></i> Back to Control Panel</a></span> </h3>
<div class="disp-mail">
	<table>
		<thead>
			<tr class="ttr">
			    <th>From</th>
			    <th>Message</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone</th>
				<th>Date Recieved</th>
				<th>Action</th>
			</tr>
		</thead>
        <tbody>
        	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<tr class="ttr1">
        		<th><?php echo e($value->email); ?></th>
        		<th><?php echo e($value->message); ?></th>
        		<th><?php echo e($value->fname); ?></th>
        		<th><?php echo e($value->lname); ?></th>
           		<th><?php echo e($value->phone); ?></th>
           		<th><?php echo e($value->updated_at); ?></th>
           		<th><a href="<?php echo e(route('del-con',$value->id)); ?>">
           		<button >Delete</button></a></th>
        	</tr>
        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
	</table>
	<p><?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></p>
</div>
<?php $__env->stopSection(); ?>



	





<?php echo $__env->make('layouts.cpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurent\resources\views/mail.blade.php ENDPATH**/ ?>