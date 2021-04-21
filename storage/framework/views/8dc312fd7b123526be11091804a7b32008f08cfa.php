<?php $__env->startSection('title', 'Enquiry'); ?>
<?php $__env->startSection('meta'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
	
<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

	</script>
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});

</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



  
	
	  
	<div class="page-header">
			
					
		
				<center><strong style="font-size:25px;margin-left:230px;" >Enquiry</strong> </center>

	
	</div>
	<div class="row" style="margin-bottom:10px;">
		<div class="col-md-8">
		<?php if(session('success')): ?>
	  <div class="container col-md-6 offset-md-4" style="margin-left:350px;">
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> <?php echo e(session('success')); ?>

		</div>
		</div>
		<?php endif; ?>
		<?php if(session('danger')): ?>
		<div class="container col-md-6 offset-md-4">
			<div class="alert alert-danger fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Error!</strong> <?php echo e(session('danger')); ?>

			</div>
			</div>
		<?php endif; ?>
		</div>
		<div class="col-md-4"  style="text-align:right;padding-right:48px;">
		<a class="btn btn-primary btn-lg  py-3 px-5" style="margin-left:250px;background:#ffc20e;border-color:#ffc20e;" href="<?php echo e(url('admin/')); ?>" ><b>Back</b></a> 
		
		</div>
	</div>
	
	<!-- <div style="text-align:right;padding-right:34px;">
	</div><br> -->
	
	<?php
	use App\User;
	use App\enq;
	?>
	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
					<tr style="">
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Course</th>							
							<th>Enquiry Type</th>
							<th>Delete enq</th>
						</tr>  
					</thead>

					<tbody>
						<?php if($enquiry != null): ?>
							<?php $__currentLoopData = $enquiry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($enq->email =="admin@gmail.com"): ?> 
								<?php continue; ?>
								<?php endif; ?>
								<?php
								$user = User::where('id',$enq->user_id)->first(); 
								?>	
								<tr>
							
									<td><?php echo e($enq->id); ?></td>							
									<td><?php echo e($enq->username); ?></td>
									<td><?php echo e($enq->email); ?></td>
									<td><?php echo e($enq->contact); ?></td>
									<td><?php echo e($enq->course); ?></td>
									<td><?php echo e($enq->enquiry_type); ?></td>
									<td>
									<a onclick="return confirm('Are you sure you want to delete?');" href="<?php echo e(url('/admin/delete_enquiry/'.$enq->id)); ?>" class="btn btn-danger" style="font-size:1.4rem">Delete</a> 
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>