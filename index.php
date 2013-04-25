<?php
/**
* Fri Mar 22, 2013 14:52:26 added by Thanh Son 
* Email: thanhson1085@gmail.com 
*/
get_header();
?>
<div class="full-slider">
	<!-- Slider (Flex Slider) -->
	  <div class="container">
		<div class="row">
		  <div class="span12">
			<div class="flexslider">
			  <ul class="slides">
				<?php 
				$sliders = query_posts(array('posts_per_page' => -1, 'post_type' => 'flex_slider'));
				foreach ($sliders as $slider): setup_postdata($slider)
				?>
				<li>
					<?php the_content();?>
				</li>
				<?php endforeach;?>

			  </ul>
			<ol class="flex-control-nav flex-control-paging">
			</ol>
			</div>
		  </div>
		</div>
	  </div>
</div>
<div class="content">
	<div class="container">
		<div class="row center">
		  <div class="span12">
			<div class="bor"></div>
			<h2>Welcome to Metro Mania</h2>
			<p>Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit.</p>
			<div class="bor"></div>
			<hr>
		  </div>  
		</div>
		<div class="row">
			<div class="span4">
			   <!-- Timeline #1 -->
			   <div class="time">
				  <div class="tidate b-red">
					 1990
				  </div>
				  <div class="timatter">
					 <h5>Nulla ullamcorper</h5>
					 <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor commodo in sagittis est accumsan.</p>
				  </div>
				  <div class="clearfix"></div>
			   </div>
			</div>
			<div class="span4">
			   <div class="time">
				  <div class="tidate b-blue">
					 1994
				  </div>
				  <div class="timatter">
					 <h5>Nulla ullamcorper</h5>
					 <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor commodo in sagittis est accumsan.</p>
				  </div>
				  <div class="clearfix"></div>
			   </div>
			</div>
			<div class="span4">
			   <div class="time">
				  <div class="tidate b-green">
					 1996
				  </div>
				  <div class="timatter">
					 <h5>Nulla ullamcorper</h5>
					 <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor commodo in sagittis est accumsan.</p>
				  </div>
				  <div class="clearfix"></div>
			   </div>
			</div>                        
			<div class="span4">
			   <div class="time">
				  <div class="tidate b-purple">
					 1992
				  </div>
				  <div class="timatter">
					 <h5>Nulla ullamcorper</h5>
					 <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor commodo in sagittis est accumsan.</p>
				  </div>
				  <div class="clearfix"></div>
			   </div>       
			</div>
			<div class="span4">
			   <div class="time">
				  <div class="tidate b-orange">
					 1999
				  </div>
				  <div class="timatter">
					 <h5>Nulla ullamcorper</h5>
					 <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor commodo in sagittis est accumsan.</p>
				  </div>
				  <div class="clearfix"></div>
			   </div>
			</div>
			<div class="span4">
			   <div class="time">
				  <div class="tidate b-lblue">
					 2000
				  </div>
				  <div class="timatter">
					 <h5>Nulla ullamcorper</h5>
					 <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor commodo in sagittis est accumsan.</p>
				  </div>
				  <div class="clearfix"></div>
			   </div>
			</div>
		 </div>
		<div class="color-blocks">
			<div class="row">
			  <div class="span4">
				<div class="c-block">
				  <!-- Left column with color background -->
				  <div class="col-l b-red">
					<!-- Link -->
					<a href="contactus.html">
					  <!-- Icon -->
					  <i class="icon-envelope-alt"></i>
					  <!-- Text -->
					  Contact
					</a>
				  </div>
				  <div class="col-r b-purple">
					<a href="aboutus.html">
					  <i class="icon-user"></i>
					  About
					</a>
				  </div>
				</div>
				<div class="clearfix"></div>
			  </div>
			  <div class="span4">
				<div class="c-block">
				  <!-- Left column with color background -->
				  <div class="col-l b-green">
					<!-- Link -->
					<a href="blog.html">
					  <!-- Icon -->
					  <i class="icon-comments"></i>
					  <!-- Text -->
					  Blog
					</a>
				  </div>
				  <div class="col-r b-blue">
					<a href="#">
					  <i class="icon-facebook"></i>
					  Facebook
					</a>
				  </div>
				</div>
				<div class="clearfix"></div>
			  </div>
			  <div class="span4">
				<div class="c-block">
				  <!-- Left column with color background -->
				  <div class="col-l b-lblue">
					<!-- Link -->
					<a href="#">
					  <!-- Icon -->
					  <i class="icon-twitter"></i>
					  <!-- Text -->
					  Twitter
					</a>
				  </div>
				  <div class="col-r b-orange">
					<a href="#">
					  <i class="icon-google-plus"></i>
					  Google Plus
					</a>
				  </div>
				</div>
				<div class="clearfix"></div>
			  </div>
			</div>
		  </div>
	</div>
</div>
<?php
get_footer();
