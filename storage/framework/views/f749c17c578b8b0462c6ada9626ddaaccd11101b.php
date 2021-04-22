<?php $__env->startSection('title', 'Hostel'); ?>
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
			
					
		
				<center><strong style="font-size:25px;margin-left:230px;" >Hostel</strong> </center>

	
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
							<th>EMAIL</th>
							<th>DOB</th>
							<th>Contact</th>
							<th>FATHER'S NAME</th>
							<th>MOTHER'S NAME</th>		
							<th>ADDRESS</th>	
							<th>ADHAR NO.</th>	
							<th>PASSPORT IMAGE</th>		
							<th>Delete HOSTEL RECORD</th>
						</tr>  
					</thead>

					<tbody>
						<?php if($hostels != null): ?>
							<?php $__currentLoopData = $hostels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hostel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($hostel->email =="admin@gmail.com"): ?> 
								<?php continue; ?>
								<?php endif; ?>
								<?php
								$user = User::where('id',$hostel->user_id)->first(); 
								?>	
								<tr>
							
									<td><?php echo e($hostel->id); ?></td>							
									<td><?php echo e($hostel->name); ?></td>
									<td><?php echo e($hostel->email); ?></td>
									<td><?php echo e($hostel->dob); ?></td>
									<td><?php echo e($hostel->contact); ?></td>
									<td><?php echo e($hostel->father_name); ?></td>
									<td><?php echo e($hostel->mother_name); ?></td>
									<td><?php echo e($hostel->permanent_address); ?></td>
                                    <td><?php echo e($hostel->adhar_no); ?></td>
									<td><img style="margin-left:0px;margin-right:100px;width:100%;height:100px;" src="images/storage/ <?php echo e($hostel->passport_image); ?>" alt="" class="img-responsive">
                                   </td>
									<td>
									<a onclick="return confirm('Are you sure you want to delete?');" href="<?php echo e(url('/admin/delete_hostel/'.$hostel->id)); ?>" class="btn btn-danger" style="font-size:1.4rem">Delete</a> 
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