<div class="specialties">
<?php global $base_url; ?>
<!-- Navigation Bar Begins -->
<div class="nav-main">
    <?php
    $main_menu = menu_tree_all_data('main-menu', $link = NULL, $max_depth = NULL);  ?>
		<a class="part part-contact" href="http://maxhealthcare.co.ke/contact.php">
			<div class="part-inner part-icon">
				<img class="icon" src="http://maxhealthcare.co.ke/img/nav/icon-contact-active.svg">
			</div>
			<div class="part-inner part-description">Contact Us</div>
    </a>
    <?php foreach($main_menu as $menu_item): 
			if($menu_item['link']['hidden'] != '1'):
		?>
        <a class="part part-contact" href="<?php $path = drupal_get_path_alias($path = $menu_item['link']['link_path']); echo $base_url.'/'.$path; ?>">
            <div class="part-inner part-icon">
                <img class="icon" src="<?php echo $menu_item['link']['localized_options']['menu_icon']['path'];?>">
            </div>
            <div class="part-inner part-description">
                <?php echo $menu_item['link']['link_title'] ?>
            </div>
        </a>
    <?php   
		endif;
		endforeach;  ?>
		
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

<section class="section-specialty">
    <div class="container-content container-content-space">
			
				 <?php //$breadcrumb[] = l(drupal_get_title(), current_path());
				 //$bread = drupal_set_breadcrumb($breadcrumb); if (!empty($breadcrumb)): print $bread; endif;
				 print "<div class='breadcrumb' style='padding: 20px 0 0 0;'>".$breadcrumb."</div>";
				 ?>
        <h1 class="heading">
				<span>
					<?php echo $node->title; ?>
				</span>
        </h1>
        <ul class="container-treatments">
            <?php
            print render($page['content']);
            $treatments =  entity_reference_nodes("article", $node->nid);
            foreach($treatments as $treatment): ?>
            <li class="treatment">
                <span class="treatment-name">
                    <label><a href="<?php $path = "node/".$treatment['id']; $abs_url = drupal_get_path_alias($path); echo $abs_url ; ?>"><?php echo $treatment['title']; ?></a></label>
                </span>
                <span class="expander">
                    <div class="pointer">
                    </div>
                </span>
            </li>
            <?php
            endforeach;
            $doc = entity_reference_users($node->nid);
         	if(!empty($doc)):
            ?>

            <ul class="container-doctors">
                <p class="sub-heading">Team That Cares</p>
            <?php
            
            foreach($doc as $doctor):
                ?>

                    <li><p class="name"><?php  print_r($doctor['name']); ?></p>
                        <p class="designation"><?php  print_r($doctor['designation']); ?></p>
                        <p class="profile"><a href="<?php print_r($doctor['profile_link']); ?>" target="_blank">view profile</a></p>
                    </li>

            <?php    endforeach; ?>
            </ul>
            <?php endif; ?>
    </div>
    </div>
</section>

<!-- Section About Ends -->


<!-- ************ -->


<!-- Services Section Begins -->

<section class="section-services"><div class="table-services">
        <div class="cell-services">
            <div class="services">
                <img class="image-doc" src="<?php echo $base_url; ?>/sites/all/themes/maxhealthcare/images/specialties/doctor.jpg">
                <a class="call call-opinion" href="http://www.maxhealthcare.co.ke/contact.php">
                    Next Steps
                </a>
                <a class="call call-visit second-opinion" href="http://www.maxhealthcare.co.ke/contact.php">
                    Get a Second Opinion
                </a>
                <a class="call call-services get-quote" href="http://www.maxhealthcare.co.ke/contact.php">
                    Request for a Quote
                </a>
                <a class="call call-testimonial" href="http://www.maxhealthcare.co.ke/contact.php">
                    FAQ’s
                </a>
            </div>
        </div>
    </div></section>

<!-- Services Section Begins -->


<!-- ************ -->


<!-- Footer Begins -->

<div class="footer footer-space" style="bottom: 0;margin: 0;position: fixed;"><div class="line"></div>
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
            <a href="/hospital-locations">hospital locations</a>
            &nbsp;|&nbsp;
            <a href="/disclaimer"> DISCLAIMER</a>
            &nbsp;|&nbsp;
            <a href="privacy_policy.html">PRIVACY POLICY</a>
        </label>
    </div></div>
</div>
<!-- Footer Ends -->