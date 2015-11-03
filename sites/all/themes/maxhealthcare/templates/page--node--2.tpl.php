<div class="specialties">
    <?php global $base_url; ?>
    <!-- Navigation Bar Begins -->
    <div class="nav-main">
        <?php
        $main_menu = menu_tree_all_data('main-menu', $link = NULL, $max_depth = NULL);
        foreach($main_menu as $menu_item): ?>
            <a class="part part-contact" href="<?php $path = drupal_get_path_alias($path = $menu_item['link']['link_path']); echo $base_url.'/'.$path; ?>">
                <div class="part-inner part-icon">
                    <img class="icon" src="<?php echo $menu_item['link']['localized_options']['menu_icon']['path'];?>">
                </div>
                <div class="part-inner part-description">
                    <?php echo $menu_item['link']['link_title'] ?>
                </div>
            </a>
        <?php   endforeach;  ?>
        <div class="part part-logo">
            <div class="wrapper-logo">
                <div class="part-inner">
                    <div class="logo">
                        <a href="/">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/logo-main.svg">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/logo-banner.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div></div>

    <!-- Navigation Bar Ends -->
    <!-- ************ -->
    <!-- Specialties Panel Begins -->

    <div class="panel-specialties panel-specialties-compress"><div class="container-specialty specialty-head">
            <div class="specialty-icon">
                <div class="table-icon">
                    <div class="cell-icon">
                        <img class="icon" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/specialties/panel-open.svg">
                    </div>
                </div>
            </div>
            <div class="specialty-name">
                <div class="table-name">
                    <div class="cell-name">
                        Our Specialties
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay-preloader overlay-preloader-hide overlay-preloader-destroy">
            <div class="cell-preloader">
                <img class="preloader" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/preloader.gif">
            </div>
        </div>

        <ul class="wrapper-specialty ps-container ps-active-y ps-active-x" id="specialtiesPanel" data-ps-id="2f85ffbe-e4b6-508f-f65e-a68d625ddfc8">
            <?php
            $main_menu = menu_tree_all_data('menu-our-specialities', $link = NULL, $max_depth = NULL);
            foreach($main_menu as $menu_item): ?>
                <a class="part part-contact dynamic" href="<?php $path = drupal_get_path_alias($path = $menu_item['link']['link_path']); echo $base_url.'/'.$path; ?>">
                    <li class="container-specialty specialty-Bone">
                        <div class="specialty-icon">
                            <div class="table-icon">
                                <div class="cell-icon">
                                    <img class="icon" src="<?php echo $menu_item['link']['localized_options']['menu_icon']['path'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="specialty-name">
                            <div class="table-name">
                                <div class="cell-name"><?php echo $menu_item['link']['link_title'] ?></div>
                            </div>
                        </div>
                        <div class="specialty-pointer">
                            <div class="cell-pointer">
                                <div class="pointer-left">

                                </div></div></div>
                    </li>
                </a>
            <?php   endforeach;  ?>
        </ul>
    </div>

    <!-- Specialties Panel Ends -->


    <!-- ************ -->


<!-- Section About Begins -->

<section class="section-about">
    <div class="container-content container-content-space">

        <h1 class="heading">
				<span>
					About Us
				</span>
        </h1>
        <?php print render($page['content']); ?>
    </div>
</section>

<!-- Section About Ends -->


<!-- ************ -->


<!-- Services Section Begins -->

<section class="section-services"><div class="table-services">
        <div class="cell-services">
            <div class="services">
                <img class="image-doc" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/specialties/doctor.jpg">
                <a class="call call-opinion" href="contact.php">
                    Next Steps
                </a>
                <a class="call call-visit second-opinion" href="contact.php">
                    Get a Second Opinion
                </a>
                <a class="call call-services get-quote" href="contact.php">
                    Request for a Quote
                </a>
                <a class="call call-testimonial" href="contact.php">
                    FAQ’s
                </a>
            </div>
        </div>
    </div></section>

<!-- Services Section Begins -->


<!-- ************ -->


<!-- Footer Begins -->

<div class="footer footer-space"><div class="line"></div>
    <div class="wrapper-footer">
        <label class="footer-reserved">
            <a>Care For Life</a>
            &nbsp;|&nbsp;
            <a href="/hospital-locations">hospital locations</a>
        </label>

        <label class="footer-legal">
            © 2015 MAX HEALTHCARE. ALL RIGHTS RESERVED.
            &nbsp;|&nbsp;
            <a href="/disclaimer"> DISCLAIMER</a>
            &nbsp;|&nbsp;
            <a href="/privacy-policy">PRIVACY POLICY</a>
        </label>

        <label class="footer-mobile">
            <a href="hospital_locations.html">hospital locations</a>
            &nbsp;|&nbsp;
            <a href="disclaimer.html"> DISCLAIMER</a>
            &nbsp;|&nbsp;
            <a href="privacy_policy.html">PRIVACY POLICY</a>
        </label>
    </div></div>

<!-- Footer Ends -->