<?php $__env->startSection('title', 'Blogs'); ?>
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
	<div class="container col-md-6 offset-md-4" style="margin-left:350px;">
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> <?php echo e(session('success')); ?>

		</div>
		</div><br>
	<?php endif; ?>
	<?php if(session('danger')): ?>
	<div class="container col-md-6 offset-md-4">
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> <?php echo e(session('danger')); ?>

		</div>
		</div><br>
	<?php endif; ?>
	<div class="page-header">
		<h3 class="" style="font-size:30px;"><center><strong> Blogs</strong> </center></h3><br><br>
	</div>
	<div class="btn-group " role="group" aria-label="Second group" style="float:right;padding-right:36px;margin-bottom:50px;">
	        <a class="btn btn-primary btn-lg mr-2 py-3 px-5" style="background:#ffc20e;border-color:#ffc20e;" href="<?php echo e(url('/admin')); ?>"  ><b>Back</b></a>
			<a class="btn btn-primary btn-lg py-3 px-5"style="background:#ffc20e;border-color:#ffc20e;" href="<?php echo e(url('admin/userblogs/create')); ?>"><b>New Blog</b></a><br>
	</div><br><br><br>
	

	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
						<tr>
							<th>Blog Id</th>
							<th>Blog Title</th>
							<th>Created Date</th>
							<th>Blog Actions</th>
						</tr>
					</thead>

					<tbody>
						<?php if(isset($blogs)): ?>
						<?php $i=1;
						?>
							<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($blog->id); ?></td>
									<td><?php echo e($blog->title); ?></td>
									<td><?php echo e($blog->created_at->timezone('Asia/Kolkata')->format('d/m/Y h-i-s A')); ?></td>
									<td>
										<div class="btn-group" role="group">
											<a class="btn btn-primary" style="background:#ffc20e;border-color:#ffc20e;font-size:14px;padding-right:10px;padding-left:10px;" href="<?php echo e(url('/admin/userblogs/edit/'.$blog->id)); ?>"style="background-color:white;color:black;border-color:black;">Edit</a>
											<?php if($i>5): ?>
											<a class="btn btn-danger" style="font-size:14px;"  href="<?php echo e(url('/admin/userblogs/delete/'.$blog->id)); ?>">Delete</a>
											<?php endif; ?>
										</div>
									</td>
								</tr>
								<?php
								$i = $i+1;
								?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>