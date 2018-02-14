<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
                <div class="social-btns">
                    <a href="https://twitter.com/TheOriginalBPC" class="soc-icon tw"></a>
                    <a href="https://www.facebook.com/britishpandachick/" class="soc-icon fb"></a>
                    <a href="https://www.linkedin.com/in/bpcseb32015" class="soc-icon  ln"></a>
                </div>
				<?php the_content(); ?>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>