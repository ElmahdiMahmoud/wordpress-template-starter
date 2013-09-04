<?php 
/*
Template Name: CUSTOM TEMPLATE
*/
get_header(); 
?>

<!-- container -->

<div class="container">
  <h2 class="page-title">
    <?php the_title(); ?>
  </h2>
  <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?>
 </div>
<!--/ container -->

<div class="clear"></div>

<!-- content -->
<div id="content"> 
  <!-- container -->
  <div class="container"> 
    
    <!-- span7 -->
    <section class="span9 outer-none custom-page">
	
		<!-- page-post -->
		<article class="CUSTOM-TEMPLATE">
		<?php query_posts('category_name=gallery'); ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile;?> 
		</article>
		<!--/ page-post -->
				
    </section>
    <!--/ span7 --> 
    
    <!-- sidebar -->
    <aside class="span3 pull-right">
      <?php get_sidebar();?>
    </aside>
    <!--/ sidebar --> 
    
  </div>
  <!--/ container --> 
</div>
<!--/ content -->

<?php get_footer(); ?>
