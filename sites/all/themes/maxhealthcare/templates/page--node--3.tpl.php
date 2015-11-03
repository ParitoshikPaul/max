<div class="specialties">
    <?php global $base_url; ?>
    <!-- Navigation Bar Begins -->
    <div class="nav-main    ">
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
        <div class="part part-specialties">
            <div class="part-inner part-icon">
                <img class="icon" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/nav/icon-menu-active.svg">
            </div>
            <div class="part-inner part-description">
                Our Specialties
            </div>
        </div>
        <div class="part part-logo">
            <div class="wrapper-logo">
                <div class="part-inner">
                    <div class="logo">
                        <a href="">
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


<!-- Section Patient-Services Begins -->

<section class="section-patient-services">
    <div class="container-content container-content-space">
        <h1 class="heading">
            <span>Patient Services</span>
            <div class="container-icon">
                <div class="icon-dd"></div>
            </div>
            <div class="wrapper-dd">
                <ul class="container-dd">
                    <li>Plan Your Visit</li>
                    <li>Service &amp; Amenities</li>
                    <li>Assistance</li>
                </ul>
            </div>
        </h1>

        <p class="sub-heading">Plan Your Visit</p>

        <div class="content-patient patient-plan">
            <ul class="container-treatments">
                <li class="treatment">
                    <span class="treatment-name treatment-name-selected">Contact Procedure</span>
						<span class="expander">
							<div class="icon-expand icon-collapse"></div>
						</span>
                </li>
                <div class="treatment-content treatment-content-open treatment-Signs">
                    <ul class="points">
                        <li>Patient shares the query and/or reports </li>
                        <li>IPS Team contacts the relevant consultant and provides diagnosis, proposed treatment and estimate </li>
                        <li>Patient confirms if he wants to have treatment at Max Healthcare, so we may provide the Visa Facilitation Letter </li>
                        <li>Patient confirms the arrival itinerary, with date and time </li>
                        <li>IPS Team, in the meantime, books rooms, OT etc. for the patient </li>
                        <li>Patient is received at the Airport and then brought to the Hospital/Guest House/Hotel, based on treatment plan </li>
                    </ul>
                </div>
                <li class="treatment">
                    <span class="treatment-name treatment-name-selected">Admission Procedure</span>
						<span class="expander">
							<div class="icon-expand icon-collapse"></div>
						</span>
                </li>
                <div class="treatment-content treatment-content-open treatment-Signs">
                    <ul class="points">
                        <li>A relationship manager is assigned to the patient to help with admission procedure and registration formalities </li>
                        <li>Patient undergoes treatment/surgery as planned and is then discharged and shifted back to Guest House/Hotel or transferred directly to the Airport </li>
                        <li>Travel back home is facilitated </li>
                        <li>Post-procedure follow up via email/phone/video conferencing </li>
                    </ul>
                </div>
                <li class="treatment">
                    <span class="treatment-name treatment-name-selected">Documents Required at the Hospital</span>
						<span class="expander">
							<div class="icon-expand icon-collapse"></div>
						</span>
                </li>
                <div class="treatment-content treatment-content-open treatment-Signs">
                    <ul class="points">
                        <li>Original diagnostics/ investigation reports, X-ray films and a record of medical history </li>
                        <li>List of medications currently on, if any </li>
                    </ul>
                </div>
            </ul>
        </div>

        <div class="content-patient patient-service content-patient-hide">
            <ul class="about-disciplines about-disciplines-bold">
                <li>Travel Assistance: Visas and Customs&nbsp;– Each country has its own visa and custom regulations. It is the responsibility of the patient and attendants to adhere to the protocols
                </li>

                <li>Airport Pick-up from the International Airport in New Delhi </li>

                <li> Ground Transportation: We also provide assistance in finding a shuttle, hiring a car or choosing any other mode of transportation within the city </li>
                <li>
                    Regional Translators: Arabic, Persian, French, Iraqi, Bangladeshi, Russian (In house interpreter)
                </li>

                <li>
                    Dedicated relationship manager for every patient
                </li>
                <li>
                    Assistance in registration formalities at FRRO
                </li>
                <li>
                    Choice of international cuisines
                </li>
                <li>
                    Money Exchange Services
                </li>
                <li>
                    Arrangement of local SIM card for easy access and communication
                </li>
                <li>
                    Easy Payment Options
                </li>
                <li>
                    Regular updates on patient’s progress to the attendants
                </li>
                <li>
                    Accommodation assistance: We have tie ups with guest houses, five star hotels etc. We arrange the accommodation on request, or share the details of the guest houses or hotels
                </li>
                <li>
                    Sight seeing arrangements in New Delhi/ Agra
                </li>
                <li>
                    Facilitate the travel back home
                </li>
                <li>
                    Post-procedure follow up via email/ phone/ video conferencing
                </li>
                <li>
                    International Patient Lounge
                </li>
                <li>
                    Centrally air-conditioned hospitals
                </li>
                <li>
                    Wi-Fi enabled rooms
                </li>
                <li>
                    Book shop/Coffee Shop
                </li>
                <li>
                    Prayer rooms for Muslims
                </li>
            </ul>
        </div>

        <div class="content-patient patient-assistance content-patient-hide">
            <ul class="about-disciplines about-disciplines-bold">
                <li>
                    Travel Assistance - We help with Visa &amp; Customs
                </li>
                <li>
                    Registration Assistance – We assist with formalities at FRRO
                </li>
                <li>
                    Money Exchange Services
                </li>
                <li>
                    Communication Assistance – We arrange local SIM cards for easy access and communication
                </li>
                <li>
                    Accommodation Assistance – We have tie ups with guest houses, five star hotels etc. We arrange accommodation on request, or share the details of guest houses or hotels
                </li>
                <li>
                    Sightseeing Assistance – We arrange travel in New Delhi/ Agra
                </li>
                <li>
                    Travel home Assistance – We facilitate the patients travel back home
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Section Patient-Services Ends -->


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
            <a href="hospital_locations">hospital locations</a>
            &nbsp;|&nbsp;
            <a href="disclaimer"> DISCLAIMER</a>
            &nbsp;|&nbsp;
            <a href="privacy_policy">PRIVACY POLICY</a>
        </label>
    </div></div>

<!-- Footer Ends -->