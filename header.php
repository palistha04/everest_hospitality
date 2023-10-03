<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Everest_Hospitality
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('royal_preloader'); ?>>
<?php wp_body_open(); ?>
<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo');
			$logo = wp_get_attachment_image_src( $custom_logo_id, 'full');
		?>

<div id="page" class="site">

          <header id="site-header" class="site-header header-transparent">
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row align-items-center">
                                <div class="octf-col logo-col">
                                    <div class="site-logo">   
                                        <a href="<?php echo  home_url(); ?>">
                                    <?php 
                                        if ( has_custom_logo() ) { ?>
                                            <img loading="lazy" src="<?php echo esc_url( $logo[0] ); ?>" alt="Everest Hospitality and Hotel" />
                                            <?php
                                            }
                                            else { ?>
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ehh-logo.png" alt="Everest Hospitality and Hotel">                                            <?php
                                            }
                                            ?>
                                     
                                           
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col">
                                    <nav id="site-navigation" class="main-navigation">

                                    <?php 
                              //call function in dashboard
                              wp_nav_menu( array(
                              'theme_location'  => 'menu-1',
                              'container'       => false,
                              'depth'           => 2, // 1 no dropdown
                              'menu_class'      => '',
                              'menu_id'         => '',
                              'walker'          => new EverestHospitality_Nav_Menu(),
                           ) );
                           ?>

                                        <!-- <ul class="menu">
                                            <li class="current-menu-item">
                                                <a href="index.html">Home</a>

                                            </li>
                                            <li class="menu-item-has-children"><a href="">About</a> 
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">Company’s Info</a></li>
                                                    <li><a href="">Organization Structure</a></li>
                                                    <li><a href="message-ceo.html">Message from CEO</a></li>
                                                    <li> <a href="networks.html">Our Network</a></li>
                                                </ul>

                                            </li>
                                            <li><a href="property.html">Properties</a> </li>

                                            <li><a href="property.html">Services</a> </li>
                                            <li><a href="investor.html">Investor</a> </li>
                                            <li class="menu-item-has-children"><a href="">Resources</a> 
                                                <ul class="sub-menu">
                                                    <li><a href="media.html">Media</a> </li>
                                                    <li><a href="blog-notice.html">Notice</a> </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a> </li>
                                        </ul> -->
                                    </nav>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="mlogo_wrapper clearfix">
                                <div class="mobile_logo">
                                    <a href="<?php echo  home_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ehh-logo.png" alt="Everest Hospitality and Hotel">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="octf-menu-mobile octf-cta-header justify-content-end">



                                <div id="mmenu-toggle" class="mmenu-toggle">
                                    <button><i class="ot-flaticon-menu-of-three-lines"></i></button>
                                    <div class="site-overlay mmenu-overlay"></div>
                                </div>

                                <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                    <div class="mmenu-inner">
                                        <a class="mmenu-close" href="#"><i class="ot-flaticon-next"></i></a>
                                        <div class="mobile-nav">
                                            <!-- <ul class="mobile_mainmenu none-style">
                                                <li class="current-menu-item">
                                                    <a href="<?php echo  home_url(); ?>">Home</a>

                                                </li>
                                                <li><a href="">About Us</a> </li>
                                                <li><a href="">Properties</a> </li>
                                                <li><a href="">Investor</a> </li>
                                                <li><a href="">Media</a> </li>
                                                <li><a href="">Notice</a> </li>
                                                <li><a href="">Contact Us</a> </li>
                                            </ul> -->
                                            <?php 
                              //call function in dashboard
                              wp_nav_menu( array(
                              'theme_location'  => 'menu-1',
                              'container'       => false,
                              'depth'           => 2, // 1 no dropdown
                              'menu_class'      => 'mobile_mainmenu none-style',
                              'menu_id'         => '',
                              'walker'          => new EverestHospitality_Nav_Menu(),
                           ) );
                           ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>