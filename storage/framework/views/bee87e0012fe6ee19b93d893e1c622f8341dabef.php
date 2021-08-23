<?php $__env->startSection('settingnav'); ?>
<div class="wrap">
<nav class="setnavbar">
   
	<div class="clogo">
		<h3>Resto-Taste</h3>
		<h5>Control Panel</h5>
		<p>Logged as </p><h4>Admin : <?php echo e(Auth::user()->name); ?></h4>
	</div>
	<ul>
		<li><a href="<?php echo e(route('mail')); ?>"><i class="far fa-envelope" aria-hidden="true"></i> Mail</a></li>
		<li><a href="<?php echo e('add_menu'); ?>"><i class="far fa-image" aria-hidden="true"></i> Add Menu</a></li>
		<li><a href="<?php echo e(route('add_employee')); ?>"><i class="fas fa-house-user" aria-hidden="true"></i> Add Employees</a></li>
		<li><a href="<?php echo e(route('delivery')); ?>"><i class="fas fa-truck" aria-hidden="true"></i> Delivery</a></li>
		
	</ul>
	<div class="set" >
		<ul>
			<li>
				<div style="">
                    <a class="" href="<?php echo e(route('logout')); ?>"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         <i class="fas fa-user-cog" aria-hidden="true" > <?php echo e(__('Logout')); ?> </i>                     
                     </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
			</li>
		</ul>
	</div>
</nav>

<?php /**PATH C:\xampp\htdocs\restaurent\resources\views/inc/settingnav.blade.php ENDPATH**/ ?>