<?php

/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package restoration-performance
 */

get_header();
?>

<?php if( have_rows('slider_images') ): ?>
<div class="slider position-relative">
    <div class="slide-arrows d-flex justify-content-between position-absolute w-100">
        <a class="slide-prev text-white pl-3"><i class="las la-angle-left"></i></a>
        <a class="slide-next text-white pr-3"><i class="las la-angle-right"></i></a>
    </div>
    <div class="home-slider">

        <?php while( have_rows('slider_images') ): the_row(); 

    // vars
    $image = get_sub_field('image');
    $text = get_sub_field('text');
    $button_text = get_sub_field('button_text');
    $button_link = get_sub_field('button_link');

    ?>

        <div class="slide">
            <div class="slide-content d-flex align-items-center"
                style="background-image: url(<?php echo $image['url']; ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="slide-text text-center text-lg-left">
                                <?php echo $text; ?>
                                <a class="btn btn-primary"
                                    href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <?php endwhile; ?>

    </div>

</div>

<?php endif; ?>
<div id="choose-your-vehicle" class="bg-light border-bottom">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="home-ymm">
                    <?php //echo facetwp_display('facet', 'year_make_model'); ?>
                    <p class="mb-0 text-center"><a class="btn-lg btn btn-primary"
                            href="<?php echo site_url(); ?>/shop#ymm-bar">Choose your Vehicle</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-lg-5">
    <div class="container py-5">
        <div class="row home-benefits">
            <div class="col-12 pb-5">
                <h1 class="text-center h2 pb-3">Restoration Performance - classic car and restoration auto parts at low
                    prices everyday!</h1>
                <p class="text-center pb-4">Your choice for auto restoration and performance car parts because of our
                    respective associations as a dealer from over 50 aftermarket and restoration parts manufacturers to
                    meet all your Classic or Muscle vehicle's needs.</p>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <i class="las la-shipping-fast text-primary"></i>
                <h5 class="my-2 font-weight-bold">$7.50 Shipping</h5>
                <p>Ground orders over $150 ship for only $7.50! <strong>Freight only $130!</strong></p>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <i class="las la-check-circle text-primary"></i>
                <h5 class="my-2 font-weight-bold">High Quality Parts</h5>
                <p>Restoration parts sourced from high quality manufacturers</p>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <i class="las la-headset text-primary"></i>
                <h5 class="my-2 font-weight-bold">Expert Advice</h5>
                <p>Our experts are here to help you with your restoration project</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a href="<?php echo site_url(); ?>/shop#ymm-bar" class="btn btn-primary">Get your project started</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center py-5">
        <div class=" col-12 col-lg-5 order-2 order-lg-1">
            <img class="img-fluid"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-page-chevelle.jpg">

        </div>
        <div class="col-12 col-lg-7 order-1 order-lg-2 mb-5 mb-lg-5">
            <div class="px-3">
                <h2 class="pb-3 mb-3 title-border">Why Restoration Performance should be your first choice for classic
                    &amp;
                    muscle car parts
                </h2>
                <p>
                    We strive to meet all your classic car and truck vehicles needs. Don&#39;t be fooled by other
                    companies
                    that
                    offer monthly or weekend sells offering discounts at 15 - 25% off RETAIL price! We have the lowest
                    prices every month all year long! Just try us and you will see.</p>

                <a href="<?php echo site_url(); ?>/shop#ymm-bar" class="btn btn-primary">Browse parts for your
                    vehicle</a>
            </div>

        </div>
    </div>
</div>
<?php if( have_rows('home_brands') ): ?>
<div class="border-bottom border-top py-5">
    <div class="container">
        <h3 class="text-center pt-3">Some of our featured brands</h3>
        <p class="text-center pb-3">Restoration Performance carries a wide range of brands for all stages of car
            restoration.</p>
        <div class="row align-items-center justify-content-center">
            <?php while( have_rows('home_brands') ): the_row(); 

            $image = get_sub_field('brand_image');

        ?>
            <div class="col-6 col-md-3 text-center pb-3">
                <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
            <?php endwhile; ?>
        </div>
        <div class="text-center pt-5 pt-lg-3">
            <a href="<?php echo site_url(); ?>/shop#ymm-bar" class="btn btn-primary">Select your vehicle to get
                started</a>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="border-bottom pb-5">
    <div class="container py-5">
        <h3 class="text-center pt-3">Need help with your project?</h3>
        <p class="text-center pb-5">The Restoration Performance resource center is here to help answer all of your
            classic car questions.</p>
        <div class="row">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                <div class="card home-resource py-5"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/classic-car-is-in-a-workshop.jpg);">
                    <div class="card-body position-relative">
                        <h4 class="text-white text-center h2">Tech Tips</h4>
                        <p class="text-white text-center">Helpful hits for your restoration project</p>
                        <a class="text-white text-center d-block mt-5"
                            href="<?php echo site_url(); ?>/category/tech-tips/">Browse
                            all Tech Tips</a>
                    </div>
                    <div class="hero-overlay"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card home-resource py-5"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/firebird.jpg);">
                    <div class="card-body position-relative">
                        <h4 class="text-white text-center h2">Frequently Asked Questions</h4>
                        <p class="text-white text-center">Common questions we get about ordering</p>
                        <a class="text-white text-center d-block mt-5"
                            href="<?php echo site_url(); ?>/frequently-asked-questions/">Browse Frequently
                            Asked Questions</a>
                    </div>
                    <div class="hero-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="home-content pt-3 pb-5">
        <?php
		while ( have_posts() ) :
			the_post();
			//get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
        ?>
    </div>


    <?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                ),
            ),
        );
    $loop = new WP_Query( $args );
    
    if ( $loop->have_posts() ) {
        echo '<div class="home-featured mb-5">';
        echo '<h3>Featured Products</h3>';
        echo '<p class="pb-3 mb-3 title-border">Here are some products hand picked by our staff</p>';
        echo '<div class="row products">';
        while ( $loop->have_posts() ) : $loop->the_post();
            wc_get_template_part( 'content', 'product-homepage' );
        endwhile;
        echo '</div></div>';
    }
    wp_reset_postdata();
    ?>




    <?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'orderby' =>'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_tag',
                'field'    => 'name',
                'terms'    => 'new',
            ),
        ),
    );
    $loop = new WP_Query( $args );
    
    if ( $loop->have_posts() ) {
        echo '<div class="home-new">';
        echo '<h3>New Products</h3>';
        echo '<p class="pb-3 mb-3 title-border">Browse the latest products from our high quality manufacturers</p>';
        echo '<div class="row products">';
        while ( $loop->have_posts() ) : $loop->the_post();
            wc_get_template_part( 'content', 'product-homepage' );
        endwhile;
        echo '</div></div>';
    }
    wp_reset_postdata();
    ?>

</div>

<?php
//get_sidebar();
get_footer();