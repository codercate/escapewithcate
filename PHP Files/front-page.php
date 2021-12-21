<?php get_header(); ?>

<header class="page-header header container-fluid">
</header>
    <div class="container-fluid about">
        <div class="row">
            <div class="about_title_box container-fluid">
                <div class="about_wave d-none d-md-block"><img src="<?php echo get_template_directory_uri(); ?>/img/wave.png" class="img-fluid"></div>
                <div class="about_wave_mobile d-md-none"><img src="<?php echo get_template_directory_uri(); ?>/img/waveMobile.png" class="img-fluid"></div>
                <div class="about_title">About Me</div>
            </div>
            <div class="aboutPhotos col-lg-6 col-md-6 col-sm-12">
                <div id="container-div">
                    <div class="about_background d-none d-md-block"><img src="<?php echo get_template_directory_uri(); ?>/img/AboutMeBgrd.png" class="img-fluid"></div>
                    <div class="about_background_mobile d-md-none"><img src="<?php echo get_template_directory_uri(); ?>/img/AboutMeBgrdMobile.png" class="img-fluid"></div>
                    <div class="about_me d-none d-md-block"><img src="<?php echo get_template_directory_uri(); ?>/img/AboutMe.png" class="img-fluid"></div>
                    <div class="about_me_mobile d-md-none"><img src="<?php echo get_template_directory_uri(); ?>/img/AboutMeMobile.png" class="img-fluid"></div>
                </div>
            </div>
            <!-- <div class="aboutText col-lg-6 col-md-6 col-sm-12"> -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <p class="about_me_text">Hi! My name is Cate and I love to surf, travel, hike, and meet new people. I speak Japanese at a business level after living in Nagoya, Nagano, and Miyazaki. Currently I reside in San Clemente, CA, where I work as a web developer and surf every day. Check out my Instagram and blogs of my travels below.</p>
                </div>
                <div class="sakura col-lg-3 col-md-3 col-sm-12">
                    <div class="about_sakura d-none d-md-block"><img src="<?php echo get_template_directory_uri(); ?>/img/sakura.png" class="img-fluid"></div>
                    <div class="about_sakura_mobile d-md-none"><img src="<?php echo get_template_directory_uri(); ?>/img/sakura_mobile.png" class="img-fluid"></div>
                </div>
            <!-- </div> -->
        </div>
    </div>

    <div class="container-fluid follow_along">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class=follow_text>
                    <p class="headings d-none d-md-block" id="follow">follow</p>
                    <p class="headings d-none d-md-block" id="along">along</p>
                    <p class="headings d-md-none" id="followalong">follow along</p>
                    <p id="insta">@escapewithcate</p>
                </div>
            </div>
            
            <div class="instaGrid col-lg-6 col-md-6 col-sm-12">
                <div class = "instagram">
                    <div class="grid">
                        <div class="cell" id="swing"></div>
                        <div class="cell" id="bali"></div>
                        <div class="cell" id="surf"></div>
                        <div class="cell" id="hotspring"></div>
                        <div class="cell" id="hydrangea"></div>
                        <div class="cell" id="ocean"></div>
                        <div class="cell" id="hb"></div>
                        <div class="cell" id="waterfall"></div>
                        <div class="cell" id="flowers"></div>
                    </div>
                </div>
            </div>
        </div>
		<div class="blogList">
			<div id="mobileDeck" class="card-deck scrolling-wrapper-flexbox d-md-none">
				<?php 

					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 4
					);

					$blogposts = new WP_Query($args);

					while($blogposts->have_posts()) {
						$blogposts->the_post();
				?>
				<div class="card col-lg-4 col-md-4 col-sm-12">
					<a href="<?php the_permalink(); ?>">
						<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card image cap">
					</a>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
						<p class="card-text"><small class="text-muted"><?php the_date(); ?></small></p>
					</div>
				</div>
				<?php } wp_reset_query(); ?>
			</div>
			<div id="desktopDeck" class="card-deck scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">
				<?php 
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 6
					);

					$blogposts = new WP_Query($args);

					while($blogposts->have_posts()) {
						$blogposts->the_post();
				?>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
					<a href="<?php the_permalink(); ?>">
						<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card image cap">
					</a>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<p class="card-text"><?php the_excerpt(); ?></p>
						<p class="card-text"><small class="text-muted"><?php the_date(); ?></small></p>
					</div>
					</div>
				</div>
				<?php } wp_reset_query(); ?>
			</div>
			<div class="cardText">see my travels</div>
		</div>
</div>

<?php get_footer(); ?>