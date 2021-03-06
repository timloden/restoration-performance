<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */
$newsletter_form_id = get_field('footer_newsletter_signup_field_id', 'option'); 
?>

</div><!-- #content -->

<footer class="site-footer border-top">
    <div class="container pt-5 pb-4">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="d-flex">
                    <div class="col-4">
                        <h6>Shop</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/shop">Shop by Vehicle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0"
                                    href="<?php echo site_url(); ?>/product-tag/specials">Specials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h6>Account</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/my-account">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/tracking">Tracking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0"
                                    href="<?php echo site_url(); ?>/frequently-asked-questions">Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/cart">Cart</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h6>Resources</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/resources">All Resources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/category/tech-tips/">Tech
                                    Tips</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0"
                                    href="<?php echo site_url(); ?>/frequently-asked-questions">FAQ's</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url(); ?>/shipping">Shipping</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <p mb-0>Restoration Performance is a reseller and dealer of replacement restoration parts relating to
                    the Licensed trademark Chevy, Chevrolet, Ford and Mopar.</p>
                <div class="mb-3">
                    <?php 
                    if ($newsletter_form_id) {
                        echo '<p class="mb-2 font-weight-bold">Get all the latest product updates, specials and coupons!</p>';
                        //gravity_form( $newsletter_form_id, false, false, false, '', true, 12 );
                        echo do_shortcode($newsletter_form_id);
                    }
                     ?>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12 text-center">
                <img class="img-fluid cc-logos"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/cc-logos.png"
                    alt="credit card logos">
                <img class="pl-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/paypal-logo.png"
                    alt="PayPal Logo">

                <p class="mt-4" style="font-size: 14px;">
                    <a href="<?php echo site_url(); ?>/policies" class="text-dark">Policies</a> | <a
                        href="<?php echo site_url(); ?>/terms-and-conditions" class="text-dark">Terms and
                        Conditions</a>
                </p>
                <p style="font-size: 14px; color: #6c757d">(*$7.50 Shipping excludes oversized items)</p>
            </div>

        </div>
    </div>
    <div class="copyright bg-primary">
        <div class="container">
            <p class="text-white m-0 p-2 text-center">&copy; Restoration Performance LLC <?php echo date("Y"); ?></p>

        </div>

    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<?php the_field('footer_embed', 'option'); ?>
</body>

</html>