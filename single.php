<?php include 'header.php';  ?>

<div class="row-fluid single">
<? /*Begin Content area Query*/ ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
      <h1 class="pageTitle"><?php the_title(); ?></h1>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    <div class="comments-section">
    <?php comments_template(); ?>
    </div>
   <?php endwhile; ?>
 <?php else : ?>
 <h2 class="center">Not Found</h2>
 <p class="center">Sorry, but you are looking for something that isn't here.</p>
 <?php get_search_form(); ?>
<?php endif; wp_reset_query(); ?>
<? /*End Content area Query*/ ?>
</div>
            

<?php include 'footer.php';  ?>