
<?php $__env->startSection('title'); ?>
add_menu
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="employee" id="#top">
	<div class="emp-title">
	<h3>Welcome to <span>Resto-Taste</span> Control panel</h3>
	 <h4>Add new Menu  <a href="<?php echo e(route('settings')); ?>" style="font-size:20px;text-decoration:none"><i class="fas fa-arrow-circle-left" aria-hidden="true"></i> Back to Control Panel</a></h4>
	</div>
	<div class="emp-form">
		 
		<form action="<?php echo e(route('menu-form')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
      		<div class="forme">
      			<label for="item code">Item Code :</label>
				<input type="text" name="itemcode" placeholder="Item Code">
				<label for="Plate name">Item Name :</label>
				<input type="text" name="itemname" placeholder="Item Name">
	            <label for="quantity">Item Quantity :</label>
				<input type="text" name="quantity" placeholder="Item Quantity">
				<label for="Type">Type : </label>
				<select name="type" placeholder="Type of food">
					<option value="BreakFast">BreakFast</option>
					<option value="Appetizer">Appetizer</option>
					<option value="Salad">Salad</option>
					<option value="Meal">Meal</option>
					<option value="Burger">Burger</option>
					<option value="Sandwich">Sandwich</option>
					<option value="Drinks">Drinks</option>
					<option value="Dessert">Dessert</option>
				</select>		
				<br>
    		</div>
			<div class='forme1'>
				   <label for="Pieces">Pieces : 	</label>
				<select name="piece"  placeholder="Piece">
					<option value="1piece">1 piece</option>
					<option value="2Pieces">2 pieces</option>
					<option value="3Pieces">3 pieces</option>
				</select>
				<label for="Weight">Weight : </label>
				<input type="text" name="weight" placeholder="Weight">
				<label for="Price">Price : </label>
				<input type="text" name="price" placeholder="price">
				<label for="upload" style="cursor:pointer">Upload Item Photo </label> <input type="file" name="img" value="upload" id="upload" hidden>
				<br><br>
		<button type="submit" class="update">Save</button>
		<br><br>
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
							<th>Item Code</th>
							<th>Item Name</th>
							<th>Quantity</th>
							<th>Type</th>
							<th>piece</th>
							<th>Weight</th>
							<th>Price</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="ettr1">
							<th><?php echo e($value->id); ?></th>
							<th><?php echo e($value->itemcode); ?></th>
							<th><?php echo e($value->itemname); ?></th>
							<th><?php echo e($value->quantity); ?></th>
							<th><?php echo e($value->type); ?></th>
							<th><?php echo e($value->piece); ?></th>
							<th><?php echo e($value->weight); ?></th>
							<th><?php echo e($value->price); ?></th>
							<th><img src="<?php echo e(asset('/upload/image/'.$value->img)); ?>" alt="" width="100px" height="65px"></th>
							<th><a href="<?php echo e(route('del-item',$value->id)); ?>"><button class="delete">Delete</button></a></th>
							<th><a href="<?php echo e(route('update-menu',$value->id)); ?>"><button class="update">Update</button></a></th>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				<br>
				 <h5><a href="#top" style="font-size:20px;text-decoration:none"><i class="fas fa-arrow-circle-left" aria-hidden="true"></i> Back to Top</a></h5>
			</div>
		</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurent\resources\views/add_menu.blade.php ENDPATH**/ ?>