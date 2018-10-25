<?php 
// ────── CUSTOM FIELDS ──────────────────────────────────────────//
$prelaunch_price    = get_post_meta( 13, 'prelaunch_price', true);
$launch_price       = get_post_meta( 13, 'launch_price', true);
$final_price        = get_post_meta( 13, 'final_price', true);
$course_url         = get_post_meta( 13, 'course_url', true);
$button_text        = get_post_meta( 13, 'button_text', true);

?>

<!-- Hero ================================ -->
<section id="hero" data-type="background" data-speed="5">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress">
                    </div>
                    <!--col 5-->
                    <div class="col-sm-7 hero-text">
                        <h1><?php bloginfo('name'); ?></h1>
                        <p class="lead"><?php bloginfo('description'); ?></p>
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Prelauch Price<small>Ends soon!</small></h4>
                                <span><?php echo $prelaunch_price; ?></span>
                            </div>
                            <div class="price">
                                <h4>Lauch Price<small>Coming soon!</small></h4>
                                <span><?php echo $launch_price; ?></span>
                            </div>
                            <!--Price -->
                            <div class="price">
                                <h4>Final lauch Price<small>Coming soon!</small></h4>
                                <span><?php echo $final_price; ?></span>
                            </div>
                            <!-- Price -->

                        </div>
                        <!--Price-timeline-->
                        <p>
                            <a href="" class="btn btn-lg btn-danger" href="</php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a>
                        </p>
                    </div>
                    <!--row-->
                </div>
            </div>
            <!--Container-->
        </article>
    </section>
    <!--Hero-->