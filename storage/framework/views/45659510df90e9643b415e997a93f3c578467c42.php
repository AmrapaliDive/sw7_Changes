<?php $__env->startSection('title', ' Franchisee'); ?>
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
	  
	<div class="page-header">
			
			<h3 class="col-md-6 offset-md-4" style="font-size:30px;"><center><strong>Manage Franchisee</strong> </center></h3><br><br>		
			
			<!-- <a class="btn btn-primary pull-right"style="width:200px;margin:10px;margin-top:0px" href="<?php echo e(url('/admin/product')); ?>">New Product</a> -->
		

	
	</div>
	<center><div class="">
	<a class="btn btn-primary btn-lg  py-3 px-5" style="margin-left:250px;background:#ffc20e;border-color:#ffc20e;" href="<?php echo e(url('admin/')); ?>"><b>Back</b></a>
	<a class="btn btn-primary btn-lg  py-3 px-5" style="background:#b60a0a;border-color:#b60a0a;" href="<?php echo e(url('/franchisee_addresses')); ?>"><b>Franchisee Registration Report</b></a>
	<a class="btn btn-primary btn-lg  py-3 px-5" style="background:#b60a0a;border-color:#b60a0a;" href="<?php echo e(url('/franchisee_details')); ?>" ><b>Franchisees Details</b></a>
	</div></center>
	</div>
	<br>
	<?php
	use App\User;
	use App\Franchisee;
	?>

	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
					<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<!-- <th>Referral Person</th>
							<th>Referral contact</th> -->
							<th>Address</th>
							<th>City</th>
							<th>Pincode</th>
							<th>Batches</th>
							<th>Documents</th>
							<th>Email Verification</th>
							<th>Change Status</th>
							<th>Action</th>
							<th>edit Franchisee</th>
							<th>Delete Franchisee</th>
							<!-- <th>Edit</th>
							<th>Delete</th> -->
						</tr> 
					</thead>

					<tbody>
					<?php if($franchisees != null): ?>
							<?php $__currentLoopData = $franchisees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $franchisee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
								<?php
								$user = User::where('id',$franchisee->user_id)->first(); 
								?>		
									<td><?php echo e($franchisee->id); ?></td>							
									<td><?php echo e($franchisee->first_name); ?>  <?php echo e($franchisee->last_name); ?></td>
									<td><?php echo e($franchisee->email); ?></td>
									<td><?php echo e($franchisee->contact1); ?></td>
									<!-- <td><?php echo e($franchisee->contact_person); ?></td>
									<td><?php echo e($franchisee->contact_person_contact); ?></td> -->
									<td><?php echo e($franchisee->address); ?></td>
									<td><?php echo e($franchisee->city); ?></td>
									<td><?php echo e($franchisee->pincode); ?></td>
									<td><a class="btn btn-primary btn-raised" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;" href="<?php echo e(url('/admin/franchisee_batches/'.$user->id)); ?>" >Batches</a></td>
									<td><a class="btn btn-primary" style="font-size:1.4rem;background:#ffc20e;border-color:#ffc20e;" href="<?php echo e(url('/admin/franchisee_doc/'.$franchisee->id)); ?>" >Documents</a></td>
									<td>
									<?php if($franchisee->verify==1): ?>
									Verified
									<?php else: ?>
									Not Verified
									<?php endif; ?>
									</td>
									<td style="max-width:100px;">
								
										
											<form  method="post" action =" <?php echo e(url('/admin/update_franchisee_status/'.$franchisee->id)); ?>">
											<?php echo e(csrf_field()); ?>

												
														<!-- <label class="control-label" style="font-size:20px" for="title">Status</label> -->
														
											<?php if(isset($franchisee)): ?>
											<select  class="form-control" style="width:110px;height:30px;font-size:1.4rem" id="status" name="status">
											<option style="font-size:1.4rem" value="Accepted" <?php echo e($user->status === 'Accepted' ? 'Accepted' : ''); ?>>Accepted</option>
											<option style="font-size:1.4rem" value="Block" <?php echo e($user->status === 'Block' ? 'selected' : ''); ?>>Block</option>
											<option style="font-size:1.4rem"value="Pending" <?php echo e($user->status === 'Pending' ? 'selected' : ''); ?>>Pending</option>
											</select>
											<?php else: ?>
										<?php endif; ?>
										</td>			
										<td >
															<button type="submit" class="btn btn-primary btn-raised" style="font-size:1.4rem;background:#ffc20e;border-color:#ffc20e;" >Change</button>
										</td >			
										<td >
											<a href="<?php echo e(url('/admin/edit_franchisee/'.$franchisee->id)); ?>" class="btn btn-primary btn-raised" style="font-size:1.4rem;color:white;background:#ffc20e;border-color:#ffc20e;" >Edit Franchisee</a>
										</td >	
										<td >
											<a onclick="return confirm('Are you sure you want to delete?');" href="<?php echo e(url('/admin/delete_franchisee/'.$franchisee->id)); ?>" class="btn btn-danger btn-raised" style="font-size:1.4rem;color:white;background:#b60a0a;border-color:#b60a0a;" >Delete</a>
										</td >					
									</form>	
										
														 
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