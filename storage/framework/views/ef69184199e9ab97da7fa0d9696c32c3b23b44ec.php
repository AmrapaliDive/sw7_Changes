<style>
.mini-footer {
 background:#192027;
 text-align:center;
 padding:32px 0
}
.mini-footer p {
 margin:0;
 line-height:26px;
 font-size:15px;
 color:#999
}
.mini-footer p a {
 color:#5867dd
}
.mini-footer p a:hover {
 color:#34bfa3
}
.widget-about img {
 display:block;
 margin-bottom:30px
}
.widget-about p {
 font-weight:400
}
.widget-about .contact-details {
 margin:30px 0 0 0
}
.widget-about .contact-details li {
 margin-bottom:10px
}
.widget-about .contact-details li:last-child {
 margin-bottom:0
}
.widget-about .contact-details li span {
 padding-right:12px
}
.widget-about .contact-details li a {
 color:#5867dd
}
@media (max-width:991px) {
 .footer-menu {
  padding-left:0
 }
}

 </style>
</head>
	<body>
	
		<!-- The content of your page would go here. -->

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg" >
  <div class="footer-bottom" style="background-color:#b60a0a;color:white;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="row">
          
          <!-- /.module-heading -->
          <div class="col-md-6 col-sm-6">
            <div class="module-heading">
              <h4 class="module-title" style="color:white;">Address</h4>
            </div>
            <div class="module-body">
              <ul class="toggle-footer" style="">
                <li class="media">
                  <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                  <div class="media-body">
                    <p style="color:white;">Rahatani Link Rd,<br>Dagadu Patil Nagar,<br>Thergaon,Pimpri-Chinchwad,<br>Maharashtra 411017,India</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
          <div class="module-heading">
              <h4 class="module-title" style="color:white;">Contact Us</h4>
            </div>
          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p style="color:white;">+91  7030023002</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body"> <span><a href="mailto:support@sw7infomedia.com" style="color:white;">support@sw7infomedia.com</a></span> </div>
              </li>
            </ul>
          </div><!-- /.module-body -->
          </div>
      </div>
</div>
      <div class="col-md-6 col-sm-12">
          <div class="row">
              <div class="col-sm-4 col-md-4">
              <div class="module-heading">
            <h4 class="module-title" style="color:white;">Customer Service</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <?php if(Auth::check()): ?>
            
              <?php else: ?>
              <li class="first"><a href="#staticBackdrop8" data-toggle="modal" title="login" style="color:white;">Sign in</a></li>
              <?php endif; ?>
              <li><a href="<?php echo e(route('product.shoppingcart')); ?>" title="Order History" style="color:white;">Order History</a></li>
<!--<li><a href="<?php echo e(url('/faq')); ?>" title="faq">FAQ</a></li>-->
              <!--<li><a href="#" title="Popular Searches">Specials</a></li>
              <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>-->
			  
            </ul>
          </div>
          <!-- /.module-body -->
              </div>

              <div class="col-sm-4 col-md-4">
              <div class="module-heading">
            <h4 class="module-title" style="color:white;">Why Choose Us</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <!--<li class="first"><a href="#" title="About us">Shopping Guide</a></li>-->
              <li><a href="<?php echo e(url('/userblogs/all')); ?>" title="Blog" style="color:white;">Blog</a></li>
              <!--<li><a href="#" title="Company">Company</a></li>
              <li><a href="#" title="Investor Relations">Investor Relations</a></li>-->
              <li class=" last"><a href="<?php echo e(url('/contact')); ?>" title="Suppliers" style="color:white;">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
              </div>
          <div class="col-sm-4 col-md-4">
              <div class="module-heading">
                <h4 class="module-title" style="color:white;">Social Media</h4>
              </div>
              <!-- /.module-heading -->
          
              <div class="module-body">
                <a href="https://www.facebook.com/sw7india" style="font-size:24px;color:white;" class="mr-2"><i class="fa fa-facebook"></i>&nbsp;</a>
                   <!-- <a href="#" class="https://www.instagram.com/neetatech/" style="font-size:24px;color:red;"><i class="fa fa-instagram"></i></a>-->
                   <!--<a href="mailto:?subject=&body=:%20" style="font-size:24px;color:red;" ><i class="fa fa-envelope" class="ml-4"></i></a>-->
                    <a href="https://youtube.com/channel/UC9tDBJ_8vXHlWJiNtdX1RnA" style="font-size:24px;color:white;" >&nbsp;<i class="fa fa-youtube"></i></a>
					      <a href="https://www.instagram.com/sw7_india?r=nametag"  style="font-size:24px;color:white;">&nbsp;&nbsp;<i class="fa fa-instagram" aria-hidden="true" ></i></a> 
              </div>
               <!-- /.module-body --> 
            </div>
        </div>
      </div>
  </div>
</footer>
  <div class="mini-footer" style="background-color:#b60a0a;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p style="color:white;">© 2020
              <a href="#" style="color:white;">SW7india</a>. All rights reserved. Created by
              <a href="#" style="color:white;">Neetatech</a>&nbsp; and Designed By
              <a href="kodsoft.in"  style="color:white;">KODSOFT</a>

            </p>
          </div>

          <!-- <div class="go_top">
            <span class="icon-arrow-up"></span>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</footer>
    
	</body>
</html>