<?php $__env->startSection('title', 'Students'); ?>
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



<?php if(session('success')): ?>
	<div class="container col-md-6 offset-md-4" style="padding-top:30px;margin-left:350px;">
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
	
	  
	<div class="page-header">
			
					
		
				<center><strong style="font-size:25px;margin-left:230px;" >Students</strong> </center>

	
	</div>
	<center><div>
	<a class="btn btn-primary btn-lg  py-3 px-5" style="margin-left:250px;" href="<?php echo e(url('admin/')); ?>" ><b>Back</b></a> 
	</div></center><br>
	
	<?php
	use App\User;
	?>
	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
					<tr style="">
							
							<th>Name</th>
						 	<th>10th School</th>
							<th>10th Board</th>
							<th>10th Passing Year</th>
							<th>10th Percentage</th>
							<th>10th Certificate</th>
							<th>12th College</th>
							<th>12th Board</th>
							<th>12th Passing Year</th>
							<th>12th Percentage</th>
							<th>12th Certificate</th>
							<th>Graduation College</th>
							<th>Graduation University</th>
							<th>Graduation Passing Year</th>
							<th>Graduation Percentage</th>
							<th>Graduation Certificate</th>
						</tr>  
					</thead>

					<tbody>
						<?php if($student != null): ?>
						
							
								<?php
								$user = User::where('id',$student->user_id)->first(); 
								?>	
								<tr>
							
									<td><?php echo e($student->first_name); ?>  <?php echo e($student->last_name); ?></td>
									<td><?php echo e($student->tenth_school); ?></td>
									<td><?php echo e($student->tenth_board); ?></td>
									<td><?php echo e($student->tenth_passingyear); ?></td>
									<td><?php echo e($student->tenth_percentage); ?></td>
									<td>
									<?php if($student->tenth_doc!=''): ?>
									<a href="<?php echo e(asset($student->tenth_doc)); ?>" download class="btn btn-primary" style="font-size:1.4rem">Download</a> 
									<?php endif; ?>
									</td>
									<td><?php echo e($student->twelth_school); ?></td>
									<td><?php echo e($student->twelth_board); ?></td>
									<td><?php echo e($student->twelth_passingyear); ?></td>
									<td><?php echo e($student->twelth_percentage); ?></td>
									<td>
									<?php if($student->twelth_doc!=''): ?>
									<a href="<?php echo e(asset($student->twelth_doc)); ?>" download class="btn btn-primary" style="font-size:1.4rem">Download</a> 
									<?php endif; ?>
									</td>
									<td><?php echo e($student->graduate_school); ?></td>
									<td><?php echo e($student->graduate_board); ?></td>
									<td><?php echo e($student->graduate_passingyear); ?></td>
									<td><?php echo e($student->graduate_percentage); ?></td>
									<td>
									<?php if($student->graduate_doc!=''): ?>
									<a href="<?php echo e(asset($student->graduate_doc)); ?>" download class="btn btn-primary" style="font-size:1.4rem">Download</a> 
									<?php endif; ?>
									</td>
								</tr>
						
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>