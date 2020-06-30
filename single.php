<?php get_header(); ?>

<?php if (is_active_sidebar('simple_page_sidebar')):
	$classColumn = "col-md-9" ?>
<?php else:
	$classColumn = "col-md-12" ?>
<?php endif; ?>
<div class="container">
	<div class="row clearfix">
	    <!--<div class="col-md-12 column row">-->
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	  		<h1 class="entry-title mt25" style="width: 100%"><?php the_title();?></h1>
			<div class="<?php echo $classColumn ?> column">
				<div class="post">
					<?php the_content(); ?>
				</div>
			</div>
			<?php
			if (is_active_sidebar('simple_page_sidebar')) {
			?>
			<div class="col-md-3 column pl-4 mb-5">
				<?php dynamic_sidebar('simple_page_sidebar'); ?>
			</div>
			<?php
			}
			?>
			<?php endwhile;  endif; ?>
	    <!--</div>-->
  	</div>
</div>

<?php get_footer(); ?>
