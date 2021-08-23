
<?php $__env->startSection('title'); ?>
contact
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="contact">
	<!-- <div class="row" style="display: flex;"> -->
	<div class="col-sm-6" id="contact-img">
		<h2>Contact us</h2>
		<p>we are happy to assist</p>
	</div>
	<div class="col-sm-6 " id="con-form">
		   <form action="<?php echo e(route('contact-form')); ?>" method="post">
                    <?php echo csrf_field(); ?>
		<label for="first name">First Name</label>
		<br>
		<input type="text" name="fname" placeholder="First Name" required>
		<br><br>
		<label for="last name">Last Name</label>
		<br>
		<input type="text" name="lname" placeholder="Last Name" required>
		<br><br>
		
		<label for="contact email">Contact Email</label>
		<br>
		<input type="email" name="email" placeholder="Email" required>
		<br><br>

		<label for="phone">Contact Phone </label>
		<br>
		<input type="text" name="phone" placeholder="Phone">
		<br><br>
		<label for="message">Message</label>
		<br>
		<textarea id="txtid" name="message" rows="4" cols="50" maxlength="200"placeholder="Type your Message here"></textarea>
		<br><br>
		<button type="submit" >Send</button>
		</form>
		<div class="msg"><?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
<!-- 	</div> -->
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurent\resources\views/contact.blade.php ENDPATH**/ ?>