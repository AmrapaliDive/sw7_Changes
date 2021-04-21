<style>
.ftco-animate{
 color:black;
 margin-top:35px;
 
  
}
.hero-wrap, .img {
  height:640px;
  margin-top:0px;
  
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
</style>
<?php $__env->startSection('content'); ?>


<center>

<div class="hero-wrap" style="background-image: url(<?php echo e(asset('/images/bg_3.jpg')); ?>);">
    <div class="container" >
    <div class="col-md-6 col-md-offset-4 ftco-animate text-center">
            <h2 class="" style="font-size:40px;"><b>Admin Panel</b></h2>
          </div>
    </div>     <div class="col-md-6 col-md-offset-4"style="margin-top:70px;">
						<a style="font-size:20px;" type="button" class="btn btn-primary btn-lg btn-block"  href="<?php echo e(url('/productlist')); ?>">Product List</a>
					</div>
	        <div class="col-md-6 col-md-offset-4"style="margin-top:50px;">
						<a style="font-size:20px;" type="button" class="btn btn-primary btn-lg btn-block"  href="<?php echo e(url('/franchiseelist')); ?>">Franchisee List</a>
					</div>
					<div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn btn-primary btn-lg btn-block"  href="<?php echo e(url('/customerlist')); ?>">Customer List</a>
					</div>
          <!-- <div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn btn-primary btn-lg btn-block"  href="<?php echo e(url('/admin/slider')); ?>">Sliders</a>
					</div> -->
          <div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn btn-primary btn-lg btn-block"  href="<?php echo e(url('/admin/orderlist')); ?>">Payments</a>
					</div>

			<div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn btn-primary btn-lg btn-block"  href="<?php echo e(url('/admin/userblogs')); ?>">Blogs</a>
					</div>

					<div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn btn-primary btn-lg btn-block"  href="<?php echo e(url('/admin/map')); ?>">Change Location</a>
					</div>
	</div>

</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>