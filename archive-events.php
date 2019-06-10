<?php get_header(); ?>
<main>
<h1><?php _e('Events','test-theme') ?></h1>
<?php 
if(!$wp_query) {
	global $wp_query;
}

$args = array(
	'meta_key' => 'date_start',
	'orderby' => 'meta_value meta_value_num',
	'order' => 'ASC'
);
query_posts( array_merge( $args , $wp_query->query ) );
if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>">
	<div class="article_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	<div class="article_meta">
		<?php if (get_field('date_start')) { ?><div class="meta_date"><?php _e('Start Date:','test-theme'); ?> <?php the_field('date_start'); ?></div><?php }; ?>
		<?php if (get_field('date_end')) { ?><div class="meta_date"><?php _e('End Date:','test-theme'); ?> <?php the_field('date_end'); ?></div><?php }; ?>
		<?php if (get_field('url')) { ?><div class="meta_url"><?php _e('URL:','test-theme'); ?> <a href="<?php the_field('url'); ?>" rel="nofollow" target="_blank"><?php the_field('url'); ?></a></div><?php }; ?>
		<?php if (function_exists('get_address')) { ?><div class="meta_location"><?php echo get_address($post->ID); ?></div><?php }; ?>
		<?php if (function_exists('google_calendar_link')) { google_calendar_link($post->ID); }; ?>
	</div>
</article>

<?php endwhile; ?>
<?php else: ?>
<section>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
</section>
<?php endif; ?>
</main>
<?php get_footer(); ?>
