<?php
	$url = explode('/',$_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'home';
?>

<?php get_header(); ?>
<section id="content" role="main" class="body-wrapper">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<?php edit_post_link(); ?>
</header>
<section class="entry-content" id="<?php echo $dir ?>">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>