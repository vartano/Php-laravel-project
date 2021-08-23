<?php $__env->startSection('nav'); ?>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid" id="navbar">
		<div class="navbar-brand" id="logo">
			<p>Resto-Taste</p>
		</div>
    		<button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     		 <span class="navbar-toggler-icon" id="span"><i class="fas fa-bars"></i></span>
    			</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ">
				<a class="nav-link active" href="<?php echo e(route('homepage')); ?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
				<a class="nav-link" href="<?php echo e(route('menu')); ?>"><i class="far fa-image" aria-hidden="true">	</i>Our Menu</a>
				<a class="nav-link" href="<?php echo e(route('about')); ?>"><i class="far fa-address-card" aria-hidden="true"></i>About us</a>
				<a class="nav-link" href="<?php echo e(route('contact')); ?>"><i class="far fa-address-book" 	aria-hidden="true"></i>Contact</a>
	
			</div>
    	</div>

     
	</div>
</nav>

<!-- 	<div class="set" style="display: none">
		<ul>
		<li><a href="<?php echo e('login'); ?>"><i class="fas fa-user-cog" aria-hidden="true"></i></a></li>
		</ul>
	</div> --><?php /**PATH C:\xampp\htdocs\restaurent\resources\views/inc/nav.blade.php ENDPATH**/ ?>