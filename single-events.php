<?php get_header(); ?>
<main>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<article id="post-<?php the_ID(); ?>">
	<?php if (function_exists('event_status')) { event_status($post->ID); }; ?>
	<div class="article_meta">
		<?php if (get_field('date_start')) { ?><div class="meta_date"><?php _e('Start Date:','test-theme'); ?> <?php the_field('date_start'); ?></div><?php }; ?>
		<?php if (get_field('date_end')) { ?><div class="meta_date"><?php _e('End Date:','test-theme'); ?> <?php the_field('date_end'); ?></div><?php }; ?>
		<?php if (get_field('url')) { ?><div class="meta_url"><?php _e('URL:','test-theme'); ?> <a href="<?php the_field('url'); ?>" rel="nofollow" target="_blank"><?php the_field('url'); ?></a></div><?php }; ?>
		<?php if (function_exists('get_address')) { ?><div class="meta_location"><?php echo get_address($post->ID); ?></div><?php }; ?>
		<?php if (function_exists('google_calendar_link')) { google_calendar_link($post->ID); }; ?>
	</div>
	<?php if (function_exists('insert_map')) { insert_map($post->ID); }; ?>
</article>

<?php endwhile; ?>
<?php else: ?>
<section>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
</section>
<?php endif; ?>
<a class="button" href="<?php bloginfo('url'); ?>/events/"><?php _e('Back to Events List','test-theme'); ?></a>
</main>
<?php get_footer(); ?>
