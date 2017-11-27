<?php get_header(); ?>

<div class="row">
		
		<div class="col-xs-12">
		
		<div id="awesome-carousel" class="carousel slide" data-ride="carousel">
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			  
			<?php 
			
				$args_cat = array(
					'include' => '13, 14, 15'
				);
				
				$categories = get_categories($args_cat);
				$count = 0;
				$bullets = '';
				
				$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
							
						if( $lastBlog->have_posts() ):
							
							while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
								
								<?php get_template_part('content',get_post_format()); ?>
							
							<?php endwhile;
							
						endif;
						
						wp_reset_postdata();
			
			?>
			
			<!-- Indicators -->
			  <ol class="carousel-indicators">
			    <?php echo $bullets; ?>
			  </ol>
		    
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#awesome-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#awesome-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
		</div>
		
</div>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		
		//PRINT OTHER 2 POSTS NOT THE FIRST ONE
/*
		$args = array(
			'type' => 'post',
			'posts_per_page' => 2,
			'offset' => 1,
		);
		
		$lastBlog = new WP_Query($args);
			
		if( $lastBlog->have_posts() ):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		
		wp_reset_postdata();
*/
				
		?>
		
		<!-- <hr> -->
		
		<?php
			
		//PRINT ONLY TUTORIALS
/*
		$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
			
		if( $lastBlog->have_posts() ):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		
		wp_reset_postdata();
*/
				
		?>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>