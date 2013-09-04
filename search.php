<?php get_header(); ?>

<!-- container -->

<div class="container">
  <h2 class="page-title">
    <?php the_title(); ?>
  </h2>
  
  <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs();  ?>
 </div>
<!--/ container -->

<div class="clear"></div>

<!-- content -->
<div id="content"> 
  <!-- container -->
  <div class="container"> 
    
    <!-- span7 -->
    <section class="span9 outer-none search">
			
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <div style="clear:both"></div>
      <?php endwhile; ?>
      <?php else : ?>
      <h2 class="center">Nothing Found</h2>
      <p class="center">Sorry, but you are looking for something that isn't here.</p>
      <?php // get_search_form(); ?>
      <?php endif; ?>
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
