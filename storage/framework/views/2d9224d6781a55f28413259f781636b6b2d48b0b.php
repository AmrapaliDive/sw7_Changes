<?php $__env->startSection('styles'); ?>
<style>
.btn {
  border: none;
  color: white;
  font-size: 16px;
  cursor: pointer;
}
    .success {background-color: #4CAF50;} 
    .success:hover {background-color: #46a049;}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    <br> 
    <center><b style="font-size:25px;text-decoration-style:single;">Forget Password</b></center>
        <div class="col-md-9 col-md-offset-2" style="margin-top:20px;">
            <div class="panel panel-primary">
                <div class="panel-heading"><b style="font-family:sans-serif; font-size:18px; ">Reset Password</Reset></b></div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <label>Please enter your email address below and we will send you information to change your password.</label>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" style="padding:20px;">
                        
                            <label for="email" class="control-label">E-Mail Address</label>

                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                            <div class="form-group" style="padding:20px;">
                             <center><button type="submit" class=" btn btn-primary btn-block">
                                    Reset
                                </button></center>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>