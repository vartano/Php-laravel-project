
<?php $__env->startSection('title'); ?>
add_employee
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="employee">
	<div class="emp-title">
	<h3>Welcome to <span>Resto-Taste</span> Control panel</h3>
	 <h4>Add new Employee  <a href="<?php echo e(route('settings')); ?>"><i class="fas fa-arrow-circle-left" aria-hidden="true"></i> Back to Control Panel</a></h4>
	</div>
	<div class="emp-form">
		 
		<form action="<?php echo e(route('employee-form')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
      		<div class="forme">
				<label for="full name">Full Name :</label>
				<input type="text" name="fullname" placeholder="Full Name">
	
				<label for="position">Work Position : </label>
				<select name="position" placeholder="Position">
					<option value="Chef">Chef</option>
					<option value="SousChef">SousChef</option>
					<option value="Cook">Cook</option>
					<option value="Server">Chef</option>
					<option value="Runner">Runner</option>
					<option value="Server">Bartender</option>
				</select>
	
				<label for="position">Work Shift : 	</label>
				<select name="shift" id="">
					<option value="Full-time">Full-time</option>
					<option value="Part-time">Part-Time</option>
					<option value="Night-shift">Night-Shift</option>
				</select>
				<label for="contact email">Contact Email : </label>
				<input type="text" name="email" placeholder="Email">
				<br>
    		</div>
			<div class='forme1'>
				<label for="phone">Contact Phone : </label>
				<input type="text" name="phone" placeholder="Phone">
				<label for="address">Address :</label>
				<input type="text" name="address" placeholder="Address"> 
				<label for="upload" style="cursor:pointer">Upload Photo </label> <input type="file" name="image" value="upload" id="upload" hidden>
				<br><br>
		<button class="update" type="submit" >Save</button>
		<p style="position: absolute;top:50%;left:30%"><?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></p>
			</div>
			</div>
		</form>

	<div class="emp">
		<div class="disp-emp">
			<table>
				<thead>
					<tr class="ettr">
						<th>Id</th>
						<th>Full Name</th>
						<th>Work Position</th>
						<th>Work Shift</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        			<tr class="ettr1">
						<th><?php echo e($value->id); ?></th>
						<th><?php echo e($value->fullname); ?></th>
						<th><?php echo e($value->position); ?></th>
						<th><?php echo e($value->shift); ?></th>
						<th><?php echo e($value->email); ?></th>
						<th><?php echo e($value->Phone); ?></th>
						<th><?php echo e($value->address); ?></th>
						<th><img src="<?php echo e(asset('/upload/image/'.$value->image)); ?>" alt="" style="height:100px;width:100px"></th>
						<th><a href="<?php echo e(route('del-emp',$value->id)); ?>"><button class="delete">Delete</button></a></th>
						<th><a href="<?php echo e(route('update-emp',$value->id)); ?>"><button class="update">Update</button></a></th>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurent\resources\views/add_employee.blade.php ENDPATH**/ ?>