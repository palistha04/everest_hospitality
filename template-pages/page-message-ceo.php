<?php
/* Template Name: Message ceo */
?>

<?php
get_header();
?>

<div id="content" class="site-content">
<?php get_template_part('template-parts/common/banner'); ?>
<?php
    $msg_small_title = get_field('mc_small_title');
    $msg_big_title = get_field('mc_big_title');
    $ft_image = get_the_post_thumbnail_url();

?>
            <section>
                <div class="container">
                    <div class="space-90 d-none d-md-block"></div>
                    <div class="space-60"></div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-5 mb-5 mb-lg-0">
                            <img src="<?php echo $ft_image; ?>" alt="Everest Hospitality">
                        </div>
                        <div class="col-lg-6 col-xl-6 align-self-center">
                            <div class="team-desc-block">
                                <h2><?php echo $msg_small_title;  ?></h2>
                                <h5><?php echo $msg_big_title; ?></h5>
                               <?php  the_content();  ?>
                                <div class="space-2"></div>
                              
                            </div>
                            <div class="space-30"></div>
                            <div class="space-5"></div>
                            <div class="author-widget_social">
                            <?php if(have_rows('msg_social_media')): ?>
                                <?php while(have_rows('msg_social_media')):
                                    the_row();
                                    $icon = get_sub_field('link_title');
                                    $link = get_sub_field('msg_link');

                                    ?>
                                <a class="social-facebook" href="<?php echo $link; ?>" target="_blank"><i class="fab <?php echo $icon ?>"></i></a>
                                <?php
                                endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="space-5"></div>
                    <div class="space-50"></div>
                </div>
           
            </section>   

       

        </div>


<?php
get_footer();
?>

