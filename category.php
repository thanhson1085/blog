<?php
get_header();
?>
<div class="content blog">
  <div class="container">

  <h2>Blog</h2>
  <p class="big grey">Something Goes Here.</p>
  <hr>

  <div class="row">

                        <div class="span8">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->

								<?php
								if ( have_posts() ) :
								while ( have_posts() ) : the_post();
								?>

                              <div class="entry">
                                 <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> <?php the_date('Y-m-d');?> <i class="icon-user"></i> <?php the_author();?> <i class="icon-folder-open"></i> <a href="#">General</a> <span class="pull-right"><i class="icon-comment"></i> <a href="#"><?php comments_number( '0 Comments', '1 Comment', '% Comments' );?></a></span>
                                 </div>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb">
                                    <a href="#"><img src="img/photos/1.jpg" alt=""></a>
                                 </div>
                                 
                                 <!-- Para -->
                                 <p>
									<?php the_content('', false);?>
								 </p>

                                 <!-- Read more -->
                                 <div class="button"><a href="<?php the_permalink()?>">Read More...</a></div>
                              </div>
								<?php
								endwhile;
								endif;
								?>
                              
                              <!-- Pagination -->
                              <div class="paging">
								<?php
								$big = 999999999;
								$args = array(
									'base'         => '%_%',
									'format'       => '?page=%#%',
									'total'        => 1,
									'current'      => 0,
									'show_all'     => False,
									'end_size'     => 1,
									'mid_size'     => 2,
									'prev_next'    => True,
									'prev_text'    => __('« Previous'),
									'next_text'    => __('Next »'),
									'type'         => 'plain',
									'add_args'     => False,
									'add_fragment' => '',
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'current' => max( 1, get_query_var('paged') ),
									'total' => $wp_query->max_num_pages
								);
								echo paginate_links($args);

								?>
                              </div> 
                              
                              <div class="clearfix"></div>
                              
                           </div>
                        </div>                        
                        <div class="span4">

                            <!-- Sidebar 1 -->

                           <div class="sidebar">
                              <!-- Widget -->
                              <div class="widget">
                                 <h4>Search</h4>
                                 <form method="get" id="searchform" action="#" class="form-search">
                                    <input type="text" value="" name="s" id="s" class="input-medium">
                                    <button type="submit" class="btn">Search</button>
                                 </form>
                              </div>
                              <div class="widget">
                                 <h4>Recent Posts</h4>
                                 <ul>
                                 <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
                                 <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
                                 <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
                                 <li>Maecenas hendrerit neque id ante dictum mattis</li>
                                 <li>Vivamus non neque lacus, et cursus tortor</li>
                                 </ul>
                              </div>
                              <div class="widget">
                                 <h4>About</h4>
                                 <p>Nulla facilisi. Sed justo dui, id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>,velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. </p>
                              </div>                              
                           </div>                                                
                        </div>

                        
    </div>

 <div class="border"></div>

  </div>
</div>
<?php
get_footer();
