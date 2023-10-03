<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Everest_Hospitality
 */

?>

<footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="space-120 d-none d-md-block"></div>
            <div class="space-60 d-md-none"></div>
            <div class="space-5"></div>
            <div class="row">

            <?php
                $ft_number = get_field('ft_number', 'option');
                $ft_address = get_field('address','option');
                $ft_email = get_field('ft_email','option');
                $ft_copyright = get_field('copyright','option');


            ?>
                <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
                <div class="footer-widget mr-xl-5">
                    <h5 class="footer-title">Contact</h5>
                    <div class="space-1"></div>
                    <p><?php echo $ft_address; ?></p>
                    <div class="space-7"></div>
                    <div class="footer-phone"><a href="tel:<?php echo $ft_number; ?>" class="title-link">P: <?php echo $ft_number; ?></a></div>
                    <div class="space-20"></div>
                    <div class="space-3"></div>
                    <div class="ft-mail"><a href="mailto:<?php echo $ft_email; ?>" class="title-link"><?php echo $ft_email; ?></a></div>
                    <div class="space-3"></div>
                    <div class="space-20"></div>
                    <?php if(have_rows('social_media','option')): ?>
                    <div class="author-widget_social">
                                
                                    <?php

                                    while(have_rows('social_media','option')):
                                    the_row();
                                    $icon = get_sub_field('media');
                                    $link = get_sub_field('social_link');
                                if( $link ){
                                    $mediaLink = $link;
                                    $target = '_blank';
                                }else{
                                    $mediaLink = 'javascript:void(0);';
                                    $target = '_self';
                                }
                                ?>  

                            <a href="<?php echo $mediaLink; ?>" target="<?php echo $target; ?>"><i class="fab <?php echo $icon; ?>"></i></i></a> </li>
	                        
                        <?php
                            endwhile;
                           
                        ?>
                    </div>
                    <?php  endif; ?>


                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
                


            
                            <?php
                                if ( is_active_sidebar('footer-widget-first') ) :
                                dynamic_sidebar('footer-widget-first');
                                endif;
                            ?>

<!-- 
                    <div class="space-1"></div>
                    <div class="ot-icon-list-wrapper">
                        <ul class="unstyle ot-icon-list-items">
                            <li class="ot-icon-list-item"><a href="#"><span class="ot-icon-list-text title-link">About Company</span></a></li>
                            <li class="ot-icon-list-item"><a href="#"><span class="ot-icon-list-text title-link">Organization structure</span></a></li>
                            <li class="ot-icon-list-item"><a href="#"><span class="ot-icon-list-text title-link">Message From CEO</span></a></li>
                            <li class="ot-icon-list-item"><a href="#"><span class="ot-icon-list-text title-link">Properties</span></a></li>
                            <li class="ot-icon-list-item"><a href="#"><span class="ot-icon-list-text title-link">Investor</span></a></li>
                        </ul>
                    </div> -->



                
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h5 class="footer-title">Services</h5>
                    <div class="space-1"></div>
                    <?php
                        $service_id = get_field('service_id', 'options');
                        if(have_rows('eh_content' ,$service_id)):
                            $i=0;
                            while(have_rows('eh_content',$service_id)):
                                the_row();

                        $property_main_title = get_sub_field('s_main_title',$service_id);
                        $new_url = sanitize_title($property_main_title);
                
                        $i++;
                        
                        if( $i > 7 )
                        {
                            break;
                        }
                    ?>
                    <div class="ot-icon-list-wrapper">
                        <ul class="unstyle ot-icon-list-items">
                            <li class="ot-icon-list-item pb-2"><a href="<?php  echo home_url();  ?>/services/#<?php echo $new_url; ?>"><span class="ot-icon-list-text title-link"><?php echo $property_main_title; ?></span></a></li>
                           </ul>
                    </div>

                    <?php   
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
            </div>
            <div class="space-70 d-none d-md-block"></div>
            <div class="space-40 d-md-none"></div>
            <div class="space-7"></div>
            <hr>
            <div class="space-20"></div>
            <div class="space-5"></div>
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <p class="copyright-text mb-0"><?php echo everest_hospitality_copyright_text(); ?></p>
                </div>
                <div class="col-md-4">
                    <ul class="unstyle privacy d-flex justify-content-center justify-content-md-end mb-0">
                        <li class="mr-4"><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
            <div class="space-20"></div>
            <div class="space-5"></div>
        </div>
    </footer><!-- #site-footer -->
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="ot-flaticon-arow"></i></a>

<?php wp_footer(); ?>

<script>
    jQuery('#menu-footer-widget-first').addClass('unstyle ot-icon-list-items');
    jQuery('#menu-footer-widget-first li').addClass('pb-2');
    jQuery('#menu-footer-widget-first a').each(function() {
        var text = jQuery(this).text();
        jQuery(this).text('').wrapInner('<span class="ot-icon-list-text title-link">' + text + '</span>');
    });


        window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           : 'logo',
                logo           : '<?php echo get_template_directory_uri(); ?>/images/logo-dark.svg',
                logo_size      : [160, 75],
                showProgress   : true,
                showPercentage : true,
                text_colour: '#000000',
                background:  '#ffffff'
            });
        })(jQuery);



    </script>

</body>
</html>
