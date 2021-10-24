<!-- Get the array of blogposts and page header -->
<?php 

	$args = array(
		'post_type' => 'post',
		'post_status’' => 'publish',
		'posts_per_page' => -1,
	);

    $blogposts = new WP_Query($args);

	get_header(); 
?>
<div class = "ewc-blogs">
<div class = "page-container">
    <div class="row">
    <div class = "main-content col-lg-9 col-md-8 col-sm-12">
        <?php if ( $blogposts->have_posts() ) : ?>
            <div class = "flex-row">
                <?php while ( $blogposts->have_posts() ) : $blogposts->the_post(); ?>
                    <article id = "post-<?php the_ID(); ?>" class="card-blog card-plain">
                    <hr>
                    <div class="row">
                        <div class="col-ms-5 col-sm-5">
                            <div class="card-image">
                                <a href = "<?php the_permalink(); ?>">
                                    <img class="blog-thumbnail" src="<?php if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail( get_the_ID(), 'full' );
                                    } ?>">
                                </a>
                            </div>
                        </div>  
                        <div class="col-ms-7 col-sm-7">
                            <h2 class = "post-title"><a><?php the_title(); ?></a></h2>
                            <div class = "post-excerpt">
                            <?php wp_kses_post( the_excerpt() ) ?>
                            </div>
                            <span class = "post-read-more">
                            <a itemprop = "url" href = "<?php the_permalink(); ?>" target = "_blank">
                            <?php echo esc_html__( 'Read more', 'theme-domain' ) ?>
                            </a>
                            </span> 
                            <h6 class = "post-category"><a><?php the_category(', '); ?></a></h6>
                        </div>
                    </div>
                    </article>
                <?php endwhile; ?>
            </div> 
        <?php else: ?>
            <p class = "no-blog-posts">
            <?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
            </p>
        <?php endif; 
        wp_reset_postdata(); ?>
    </div>
    <div class = "sidebar-content col-lg-3 col-md-6 col-sm-12">
        <?php get_sidebar(); ?>
    </div>
    </div>
</div>
</div>

<?php get_footer(); ?>