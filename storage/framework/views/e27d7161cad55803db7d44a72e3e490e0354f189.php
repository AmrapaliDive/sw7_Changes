<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/css/swiper.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	 <link rel="stylesheet" href="<?php echo e(asset('css/homepage.css')); ?>"> 
	<!-- <link rel="stylesheet" href="<?php echo e(asset('css/justifiedGallery.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('css/lightgallery.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('css/lg-transitions.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('css/articles/showarticle.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>" /> -->
	<!-- <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>" /> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo e(asset('other/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('other/css/animate-wow.css')); ?>">
      <!--main css-->

       <link rel="stylesheet" href="<?php echo e(asset('other/css/style.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('other//bootstrap-select.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('other/css/slick.min.css')); ?>"> 
      <!--responsive css-->
      <link rel="stylesheet" href="<?php echo e(asset('other/css/responsive.css')); ?>">
	<style>
	.box{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}
	#gallery{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}
	.box{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}
	#gallery{
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      
   }
   
.page-content-product {}

.main-product {
	background-color: #09284b;
	background-image: url('other/images/v.jpg');
	padding-bottom: 180px;
   background-position: center center;
   background-size: cover;
}

.box-img {
	background:#9932CC;
	text-align: center;
	padding-bottom: 30px;
	min-height: 280px;
	margin-bottom: 30px;
	position: relative;
	border-bottom: solid #007dea 3px;
	transition: ease all 0.5s;
}
	</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.jquery.min.js"></script> -->
	<script src="<?php echo e(asset('js/homepage.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.scrollex.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.justifiedGallery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/lightgallery-all.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/swiper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.scrollex.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.justifiedGallery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/lightgallery-all.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/images.js')); ?>"></script>
	<script src="<?php echo e(asset('js/chatbot.js')); ?>"></script>

<script>
var swiper = new Swiper('.swiper-1', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        watchActiveIndex: true,
    	spaceBetween: 30           ,
        centeredSlides: true,
        autoplay: 2000,
        loop: true,
		autoplayDisableOnInteraction: false,
		speed: 400,
        onAutoplay: function (swiper) {

                var className = $('.swiper-slide-active').attr('class');

                className = className.replace ( /[^\d.]/g, '' );

                swiper.params.autoplay = className;

                console.log(swiper.params.autoplay);
		}
		
});

$(window).on('load',function(){
			setTimeout(() => {
        $('#exampleModalCenter').modal('show');
			}, 10000);
    });



$(document).ready(function() {
		  "use strict";
		  $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
		  $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
		  $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">&nbsp;</a>");
		  $(".menu > ul > li").hover(function(e) {
		    if ($(window).width() > 943) {
		      $(this).children("ul").stop(true, false).fadeToggle(150);
		      e.preventDefault();
		    }
		  });
		  $(".menu > ul > li").click(function() {
		    if ($(window).width() <= 943) {
		      $(this).children("ul").fadeToggle(150);
		    }
		  });
		  $(".menu-mobile").click(function(e) {
		    $(".menu > ul").toggleClass('show-on-mobile');
		    e.preventDefault();
		  });
		});
		$(window).resize(function() {
		  $(".menu > ul > li").children("ul").hide();
		  $(".menu > ul").removeClass('show-on-mobile');
		});  
</script>	
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content"style="height:550px"style="margin-top:3px;margin-bottom:2px;margin-left:3pxmargin-right:3px">
					<div class="modal-header">
						<div class="row" >
							<div class="col-sm-8 col-md-8 col-xs-8 col-lg-8">
								<h3 class="modal-title" id="exampleModalLongTitle">Contact Us</h3>
							</div>
							<div class="col-sm-4 col-md-4 col-xs-4 col-lg-4">				
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
						</div>
					</div><br>
					
					
					<div class="modal-body">
						
						<form method="post" action="<?php echo e(url('/contact/insert')); ?>" >
									<?php echo e(csrf_field()); ?>

								<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12"style="padding-top:0px">
										<div class=" col-md-2 col-xs-12"style="padding-top:0px">
											<label  for="lgFormGroupInput" style="padding-left:10px;font-size:18px;" >Name</label>		
										</div>
										<div class="col-sm-9 col-md-9 col-sm-9 col-xs-9"style="padding:0px">
										<input type="text"  class="col-md-10 col-xs-10 col-lg-10 col-sm-10 form-control" id="lgFormGroupInput" placeholder="Enter Name" name="name" maxlength=25 title="Enter characters only" required>
										</div>
								</div>
								<br>
								<br>
								<br>
								<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
								<div class=" col-md-2 col-xs-12"style="padding-top:9px">
											<label for="lgFormGroupInput" style="padding-left:10px;font-size:18px;" >Email</label>		
										</div>
									<div class="col-sm-9 col-md-9 col-sm-9 col-xs-9"style="padding:0px">
									<input type="email"  class="col-md-10 col-xs-10 col-lg-10 col-sm-10 form-control" id="lgFormGroupInput" placeholder="Enter Email Id" name="email" title="Enter valid Email" required>
									</div>
									</div>
									<br>
								<br>
								<br>
						<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
						<div class=" col-md-2  col-xs-12"style="padding-top:0px">
									<label for="lgFormGroupInput" style="padding-left:10px;font-size:18px;" >Phone</label>		
								</div>
							<div class="col-sm-9 col-md-9 col-sm-9 col-xs-9"style="padding:0px">
							<input type="text"  class="col-md-10 col-xs-10 col-lg-10 col-sm-10 form-control" id="lgFormGroupInput" placeholder="Enter Contact Number" maxlength=10 name="cnumber" pattern="[0-9]{10}" title="Enter Valid Number" required>
							</div>
						</div>
						<br>
						<br>
						<br>

						<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-2  col-xs-12"style="padding-top:0px">
									<label for="lgFormGroupInput" style="padding-left:10px;font-size:18px;">Msg</label>		
								</div>
							
							<div class="col-sm-9 col-md-9 col-sm-9 col-xs-9"style="padding:0px">
							<textarea id="caption"  class="col-md-10 col-xs-10 col-lg-10 col-sm-10 form-control" rows="6" wrap="hard" cols="43" maxlength="600" name="caption"  placeholder="Message" required>
								</textarea>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12"><br>
							<button  class="btn  col-lg-9 col-md-9 col-md-offset-2 col-sm-12 col-xs-12" style="background-color:#4582ec;color:white;border-color:black;" type="submit">Submit</button>
						</div>
						</form>	
								</center>
								</div>
							</div>
						</div>
					</div>

					<!--- ------>
					<div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                 <center> <h1 style="font-size:70px;">Courses</h1></center><br><br>
                     <!-- <h4>The company established at Pune in 2008</h4> -->
                    
                     <div class="product-sh">
                        <div class="col-sm-6">
                           
                        </div>
                        <div class="col-sm-3">
                           <div class="form-sh">
                             
                           </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/Laptop Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/laptop.png')); ?>" alt=""  style="height:100px;"/>
                           <h4>Laptop Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/Printer Repairing Course')); ?>">
                        <div class="box-img text-center">
                        <img src="<?php echo e(asset('images/new/icon/printer-with-paper.png')); ?>" alt="" style="height:100px;"/>
                         <h4>Printer Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/LCD Repairing Course')); ?>">
                        <div class="box-img text-center">
                        <img src="<?php echo e(asset('images/new/icon/repair.png')); ?>" alt="" style="height:100px;"/>
                         <h4>LCD Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/Mobile Repairing Course')); ?>">
                        <div class="box-img text-center">
                        <img src="<?php echo e(asset('images/new/icon/mrepair.png')); ?>" alt="" style="height:100px;"/>
                         <h4>Mobile Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  </div>
                  <br><br><br><br>
                  <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/HDD Repairing Course')); ?>">
                        <div class="box-img text-center">
                        <img src="<?php echo e(asset('images/new/icon/hard-disk-drive.png')); ?>" alt="" style="height:100px;"/>
                        <h4>Hdd Repairing Course</h4> 
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/CCTV Repairing Course')); ?>">
                        <div class="box-img text-center">
                        <img src="<?php echo e(asset('images/new/icon/cctv.png')); ?>" alt="" style="height:100px;"/>
                        <h4>CCTV Repairing Course</h4> 
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/Washing Machine Repairing Course')); ?>">
                        <div class="box-img text-center">
                          <img src="<?php echo e(asset('images/new/icon/washing-machine.png')); ?>" alt="" style="height:100px;"/>
                          <h4>Washing Machine Repairing </h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/Motor Winding Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/electric-motor.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Motor Winding Repairing </h4>
                        </div>
                     </a>
                  </div>
                  </div>
                  <br><br><br><br>
                  <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="<?php echo e(url('/course_select/Grinder Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/grinder.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Grinder Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                 
                 <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/AC Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/air-conditioner.png')); ?>" alt="" style="height:100px;"/>
                           <h4>AC Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Freeze Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/freezer.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Freeze Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  
                  
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Xerox Machine Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/xerox-machine.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Xerox Machine Repairing</h4>
                        </div>
                     </a>
                  </div>
                  </div>
                  <br><br><br><br>
                  <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Fan Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/fan.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Fan Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Cooler Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/air-cooler.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Cooler Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Owen Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/owen.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Owen Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Elevator Repairing Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/elevator.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Elevator Repairing Course</h4>
                        </div>
                     </a>
                  </div>
                  </div>
                  <br><br><br><br>
                  <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Basic Electronic Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/screwdriver.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Basic Electronic Course</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Computer Hardware Course')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/computer.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Computer Hardware Course</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Combo Course 1')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/hand-tools.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Combo Course 1</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Combo Course 2')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/hand-tools.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Combo Course 2</h4>
                        </div>
                     </a>
                  </div>
                  </div>
                  <br><br><br><br>
                  <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
               <a href="<?php echo e(url('/course_select/Combo Course 3')); ?>">
                        <div class="box-img text-center">
                           <img src="<?php echo e(asset('images/new/icon/hand-tools.png')); ?>" alt="" style="height:100px;"/>
                           <h4>Combo Course 3</h4>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
      </div>
 
     

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>