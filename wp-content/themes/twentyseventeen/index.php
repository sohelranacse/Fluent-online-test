<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="entry-content">
				<?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => '3',
					'paged' => 1,
				);
				$my_posts = new WP_Query( $args );
				if ( $my_posts->have_posts() ) : 
				?>
					<div class="my-posts">
						<?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
							<h2><?php the_title() ?></h2>
							<?php the_excerpt() ?>
						<?php endwhile ?>
					</div>
					<button class="btn loadmore">Load More</button>
				<?php endif ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
<script type="text/javascript">
	var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
	var page = 3;
	jQuery(function($) {
		$('body').on('click', '.loadmore', function() {
			var data = {
				'action': 'load_posts_by_ajax',
				'page': page,
				'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
			};

			$.post(ajaxurl, data, function(response) {
				$('.my-posts').append(response);
				page++;
			});
		});
	});
</script>
<?php get_footer();
