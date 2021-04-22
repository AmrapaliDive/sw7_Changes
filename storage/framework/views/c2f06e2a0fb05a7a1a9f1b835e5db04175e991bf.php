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
	<div style="text-align:right;padding-right:34px;">
	<a class="btn btn-primary btn-lg  py-3 px-5" style="margin-left:250px;background:#ffc20e;border-color:#ffc20e;" href="<?php echo e(url('admin/')); ?>" ><b>Back</b></a> 
	</div><br>
	
	<?php
	use App\User;
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
							<th>Address</th>
							<!-- <th>Pincode</th>
							<th>Father's Name</th>
							<th>Father's Occupation</th>
							<th>Mother's Name</th>
							<th>Mother's Occupation</th>
							<th>Parent's Contact</th>
							<th>nationality</th>
							<th>state</th> -->
							<th>Aadhaar No.</th>
							<!-- <th>Birth Date</th>
							<th>Gender</th>
							<th>Image Download</th> -->
							<th>Aadhaar Download</th>
							<th>Transaction Query Report</th>
							<th>Delete Student</th>
						</tr>  
					</thead>

					<tbody>
						<?php if($students != null): ?>
							<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($student->email =="admin@gmail.com"): ?> 
								<?php continue; ?>
								<?php endif; ?>
								<?php
								$user = User::where('id',$student->user_id)->first(); 
								?>	
								<tr>
							
								<td><?php echo e($student->id); ?></td>							
									<td><?php echo e($student->first_name); ?>  <?php echo e($student->last_name); ?></td>
									<td><?php echo e($student->email); ?></td>
									<td><?php echo e($student->student_contact); ?></td>
									<td><?php echo e($student->permanent_address); ?></td>
									<!-- <td><?php echo e($student->pincode); ?></td>
									<td><?php echo e($student->fathers_name); ?></td>
									<td><?php echo e($student->fathers_occupation); ?></td>
									<td><?php echo e($student->mothers_name); ?></td>
									<td><?php echo e($student->mothers_occupation); ?></td>
									<td><?php echo e($student->parent_contact); ?></td>
									<td><?php echo e($student->nationality); ?></td>
									<td><?php echo e($student->state); ?></td> -->
									<td><?php echo e($student->aadhar_no); ?></td>
									<!-- <td><?php echo e($student->remark5); ?></td> -->
									<!-- <td><?php echo e($student->gender); ?></td>
									<td>
									<a href="<?php echo e(asset($student->passport_image)); ?>" download class="btn btn-primary" style="font-size:1.4rem">Download</a> 
									</td> -->
									<td>
									<a href="<?php echo e(asset($student->aadhar_pdf)); ?>" download class="btn btn-primary" style="font-size:1.4rem;background:#ffc20e;border-color:#ffc20e;">Download</a> 
									</td>
									<td>
									<a href="<?php echo e(url('/student_documents/'.$student->id)); ?>" class="btn btn-primary" style="font-size:1.4rem;background:#ffc20e;border-color:#ffc20e;">View Documents</a> 
									</td>
									<td>
									<a onclick="return confirm('Are you sure you want to delete?');" href="<?php echo e(url('/studentlist/delete/'.$student->id)); ?>" class="btn btn-danger" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;">Delete</a> 
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