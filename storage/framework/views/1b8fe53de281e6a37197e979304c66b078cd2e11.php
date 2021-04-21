<?php $__env->startSection('title', ' payments'); ?>
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
<div class="container col-md-6 offset-md-4" >
	<?php if(session('success')): ?>
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<br><br>
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
	<!-- <a class="panel-heading"class="btn btn-primary" style="font-size:20px;width:50px; height:50px;background-color:#2ab27b;color:white;border-color:#2ab27b;margin-left:230px;" href="<?php echo e(url('admin/')); ?>" ><b><</b></a> -->

	
					<div class="page-header row">
		<h3 class=" col-md-12 col-sm-12 col-xs-12" style="font-size:25px;"><center><strong>Manage Orders</strong> </center></h3>

		</div>
		<center><div>
	<!-- <a class="btn btn-primary btn-lg  py-3 px-5 "style="margin-left:0px;"  href="<?php echo e(url('admin/')); ?>" ><b>Back</b>&nbsp;&nbsp;&nbsp;</a>  -->
	<a class="btn btn-primary btn-lg pull-right "style="float:right;width:200px;margin:10px;margin-top:0px;font-size:1.4rem" href="<?php echo e(url('/admin/orderlist2')); ?>">Find Records</a>
	</div></center><br>
	</div>
	
	<div class="panel panel-default container"style="margin-left:360px;width:960px;overflow:auto">
		<div class="panel-body row">
			<div class="col-md-12">
				<table id="example" class="table table-hover">
					<thead>
						<tr style="">
							<th>ID</th>
							<th>User Id</th>
							<th>Name</th>	
							<th>Total Price</th>
							<th>Payment Type</th>
							<th>Address</th>
							<th>Date\Time</th>
							<th>Cart Description</th>
							<!-- <th>Status</th>
							<th>Reason</th>
							<th>Update</th>
							<th>Delete</th> -->
						</tr>
					</thead>

					<tbody>
						<?php if($order != null): ?>
							<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
								<tr>		
									<td><?php echo e($order->id); ?></td>	
									<td><?php echo e($order->user_id); ?></td>						
									<td><?php echo e($order->name); ?></td>
									<!-- <td>
									<?php $__currentLoopData = $order->cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php echo e($item['item']['title']); ?> | <?php echo e($item['qty']); ?> ,
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</td> -->
									
									<td>  ₹ <?php echo e($order->cart->totalPrice); ?></td>
									<td><?php echo e($order->payment_method); ?></td>
									<td><?php echo e($order->address); ?></td>
									<td><?php echo e($order->created_at->format('d/m/Y')); ?></td>
						
									<!-- <form  method="POST" action =" <?php echo e(url('/admin/updateorder/'.$order->id)); ?>">
									<?php echo e(csrf_field()); ?>

									<td><?php if(isset($order)): ?>
											<select  class="form-control" style="width:120px" id="status" name="status">
											<option value="Accepted" <?php echo e($order->status === 'Accepted' ? 'selected' : ''); ?>>Accepted</option>
											<option value="In Process" <?php echo e($order->status === 'In Process' ? 'selected' : ''); ?>>In Process</option>
											<option value="Completed" <?php echo e($order->status === 'Completed' ? 'selected' : ''); ?>>Completed</option>
											<option value="Cancel" <?php echo e($order->status === 'Cancel' ? 'selected' : ''); ?>>Cancel</option>
   
											</select>
											<?php else: ?>
											<?php endif; ?></td>
                                     <td><?php if(isset($order)): ?>
											<select  class="form-control" style="width:120px" id="reason" name="reason">
											<option value="" <?php echo e($order->reason === '' ? 'selected' : ''); ?>>..</option>
											<option value="Insufficient Stock" <?php echo e($order->reason === 'Insufficient Stock' ? 'selected' : ''); ?>>Insufficient Stock</option>
											<option value="Management Issue" <?php echo e($order->reason === 'Management Issue' ? 'selected' : ''); ?>>Management Issue</option>
											<option value="Long Distance Issue" <?php echo e($order->reason === 'Long Distance Issue' ? 'selected' : ''); ?>>Long Distance Issue</option>
											
   
											</select>
											<?php else: ?>
											<?php endif; ?>
									</td>
											<td><button type="submit" class="btn btn-success btn-raised " ><i class="fa fa-edit"></i></button></td>
								     </form>
                					<td><a href="<?php echo e(url('/admin/deleteorder/'.$order->id)); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a></td> -->
									<td>
									<a href="<?php echo e(url('/admin/cart/'.$order->id)); ?>" class="btn btn-primary pull-left" style=""><i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></a>
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