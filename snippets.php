<? /* GET SITE URL */ ?>
<a href="<?php echo get_site_url(); ?>/">LINK</a>

<? /* GET SITE NAME */ ?>
<?php echo bloginfo('name'); ?>

<? /* GET IMAGE PATH */ ?>
<img src="<?php bloginfo('template_url'); ?>/" alt="<?php the_title(); ?>" />

<? /* GET LOGO */ ?>
<a href="<?php echo bloginfo('home'); ?>">
	<img src="<?php echo get_option('of_logo') ?>" alt="<?php echo bloginfo('name'); ?>" />
</a>

<? /* GET POST FROM CATEGORY */ ?>
<?php query_posts('category_name=CAT-NAME-GOES-HERE&posts_per_page=1'); ?>
<?php while (have_posts()) : the_post(); ?>
	<?php the_title(); ?>
	<?php the_post_thumbnail(); ?>
	<?php the_permalink(); ?>
	<?php the_content(); ?>
	<?php the_author() ?>
	<?php the_time('j M Y'); ?>  <!-- 9 Oct 2013 -->
<?php endwhile;?> 

<? /* GET CUSTOM FIELD */ ?>
<?php 
	$cf = get_post_meta($post->ID, 'SLUG-GOES-HERE', true);
	if ($cf) : 
?>
<div>
	<span>Custom Field:</span> <?php echo $cf ?>
</div>
<?php endif; ?>	


<? /* GET OPTIONS */ ?>
<?php if (get_option('of_ID-GOES-HERE') ) : ?>
	<p><?php echo get_option('of_ID-GOES-HERE') ?></p>
<?php endif; ?>	

<? /* SEARCH FORM */ ?>
<form method="get"  id="search-form" action="<?php echo home_url(); ?>/">
	<div class="search-field">
		<input name="s" type="text" placeholder="search" />
		<button class="btn dark-red uppercase" type="Submit">Search</button>
	</div>
</form>

<? /* GET MENU */ ?>
<?php wp_nav_menu(array(
	'theme_location' => 'primary-menu',
	'after' => '<li><i class="icon-separator"></i></li>'
	)); 
?>  

<? /* GET THUMBNAIL */ ?>
<?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'alignleft')); ?>
