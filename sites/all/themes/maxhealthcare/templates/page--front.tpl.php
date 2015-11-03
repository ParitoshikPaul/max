<?php global $base_url; ?>
    <!-- Navigation Bar Begins -->
    <div class="nav-main nav-main-transparent">
        <?php
        $main_menu = menu_tree_all_data('main-menu', $link = NULL, $max_depth = NULL);
        foreach($main_menu as $menu_item): ?>
            <a class="part part-contact" href="<?php $path = drupal_get_path_alias($path = $menu_item['link']['link_path']); echo $base_url.'/'.$path; ?>">
                <div class="part-inner part-icon">
                    <img class="icon" src="<?php echo $menu_item['link']['localized_options']['menu_icon']['path'];?>">
                </div>
                <div class="part-inner part-description">
                    <?php //echo $menu_item['link']['link_title'] ?>
                </div>
            </a>
        <?php   endforeach;  ?>
        <div class="part part-specialties">
            <div class="part-inner part-icon">
                <img class="icon" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/nav/icon-menu-active.svg">
            </div>
            <div class="part-inner part-description">
                Our Specialties
            </div>
        </div>
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
        </div>
    </div>
    <!-- ************ -->
    <!-- Specialties Panel Begins -->

    <div class="panel-specialties panel-specialties-collapse"><div class="container-specialty specialty-head">
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

<section class="banner-main">
    <div class="container-banner">
        <div class="cell-banner">
            <label class="heading">
                <p class="bottom">Care <span>for</span> Life</p>
            </label>
            <div class="description">
                <p>
                    At Max Super Speciality Hospitals, it is our level of service and eye<br> for detailing in everything that we do, that truly sets us apart and<br> makes us the care provider of choice for millions of patients
                </p>
                <div class="button-play">
                    <div class="container-play">
                        <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/icon-play.svg">
                    </div>
                    <label>Play Video</label>
                    <div class="underlay"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-point-down">
        <div class="point-down"></div>
    </div>
</section>
<!-- Banner Ends -->
<div class="container-video">
    <span class="close"></span>
    <div class="table-video">
        <div class="cell-video">
            <video class="video-banner" controls="">
                <source src="http://maxhealthcare.co.ke/video/intro.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
<section class="section-spacer">
    <img class="check-load" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/banner.jpg">
</section>
<!-- Mobile Nav Begins -->
<!-- Mobile Nav Ends -->
<section class="section-mobile-nav">
    <div class="container-content">
        <ul class="container-mobile-nav">
            <li class="nav-option">
                <a class="option option-about" href="about.html">
                    <span class="option-name">About Us</span>
                  <span class="expander">
                  <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/mobile-nav-arrow.svg">
                  </span>
                </a>
            </li>
            <li class="nav-option">
                <a class="option option-patient" href="patient_services.html">
                    <span class="option-name">Patient Services</span>
                  <span class="expander">
                  <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/mobile-nav-arrow.svg">
                  </span>
                </a>
            </li>
            <li class="nav-option">
                <a class="option option-specialties">
                    <span class="option-name">Specialties</span>
                  <span class="expander">
                  <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/mobile-nav-arrow.svg">
                  </span>
                </a>
            </li>
            <li class="nav-option">
                <a class="option option-patient" href="contact.php">
                    <span class="option-name">FAQs</span>
                  <span class="expander">
                  <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/mobile-nav-arrow.svg">
                  </span>
                </a>
            </li>
            <li class="nav-option">
                <a class="option option-opinion" href="contact.html">
                    <span class="option-name second-opinion">Get a Second Opinion</span>
                  <span class="expander">
                  <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/mobile-nav-arrow.svg">
                  </span>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- Intro Begins -->
<section class="section-intro">
    <!-- Intro Content Begins -->
    <div class="container-content">
        <h1 class="heading-home">
            <span>MAX</span>&nbsp;
            <span> Healthcare</span>
        </h1>
        <p class="description">
            Max Healthcare is India's leading provider of comprehensive, seamless and integrated world-class healthcare services. It is well on its way to become the region's chief healthcare provider with 1900 beds. Max Healthcare has over 2100 leading doctors with international levels of expertise and acclaim in their area of practice.
        </p>
        <div class="container-links">
            <div class="row-links">
                <a class="cell-links" href="<?php echo $base_url; ?>/patient-services">
                    Patient Services
                </a>
                <div class="cell-spacer"></div>
                <a class="cell-links second-opinion" href="<?php echo $base_url; ?>/contact.php">
                    Get a Second Opinion
                </a>
            </div>
            <div class="row-links">
                <a class="cell-links" href="<?php echo $base_url; ?>/contact.php">
                    Frequently Asked Questions
                </a>
                <div class="cell-spacer"></div>
                <a class="cell-links" href="http://www.maxhealthcare.in/" target="_blank">
                    Visit Maxhealthcare.in
                </a>
            </div>
        </div>
        <div class="container-testimonial">
            <a class="button-testimonial" href="<?php echo $base_url; ?>/testimonials">
                <div class="container-play">
                    <img src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/nav/icon-testimonial.svg">
                </div>
                <label>Patient Testimonials</label>
            </a>
            <div class="container-logos">
                <img class="logo" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/about-logo-1.svg">
                <img class="logo" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/about-logo-3.svg">
                <img class="logo" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/home/about-logo-2.svg">
            </div>
        </div>
    </div>
    <!-- Intro Content Ends -->
</section>
<!-- Intro Ends -->
<div class="footer">
    <div class="line"></div>
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
    </div>
</div>