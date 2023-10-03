<?php
/**
 * Template Name:About Us
 */
?>

<?php
get_header();
?>

<div id="content" class="site-content">
<?php get_template_part('template-parts/common/banner'); ?>
            <?php
                $about_small_title = get_field('ab_small_title');
                $about_main_title = get_field('ab_main_title');
                $about_text = get_field('ab_text');
                $ft_image = get_the_post_thumbnail_url();
                $content = get_the_content();
                if($about_text||$ft_image|| $content ){
            ?>
            <section>
                <div class="container">
                    <div class="space-60 d-none d-md-block"></div>
                    <div class="space-80 d-md-none"></div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 align-self-center">
                            <?php  if($about_small_title || $about_main_title){ ?>
                            <div class="ot-heading">
                                <span class="ot-heading__sub"><?php echo $about_small_title; ?></span>
                                <h2 class="ot-heading__title"><?php echo $about_main_title; ?></h2>
                            </div>
                            <?php } ?>
                            <div class="space-10"></div>
                            <div class="space-6"></div>
                            <?php  echo $content; ?>
                            <hr>
                            <p class="lead-about"><?php echo $about_text; ?></p>
                            <div class="space-10"></div>
                            <div class="space-5"></div>
                        </div>
                        <?php 
                        if($ft_image){
                        ?>
                        <div class="col-xl-6 offset-xl-1 col-lg-6 mb-5 mb-lg-0 order-first order-lg-last">
                            <img src="<?php echo $ft_image; ?>" alt="Everest Hospitality Company's Info">
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="space-60 d-none d-md-block"></div>
                    <div class="space-80 d-md-none"></div>
                </div>
            </section>

            <?php
                }
                $about_small_text = get_field('ab_small_text');
                $about_main_text = get_field('ab_big_text');
                $about_video = get_field('ab_video');
                $about_image = get_field('ab_backgroung_image');
                if($about_image || $about_main_text ){
            ?>

            <section class="bg-light">
                <div class="container">
                    <div class="space-90 d-none d-md-block"></div>
                    <div class="space-60"></div>
                    <div class="row">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="video-popup video-popup-light">
                                <div class="video-image">
                                    <img src="<?php echo $about_image['url'];?>" alt="<?php echo $about_image['alt'];?>" data-recalc-dims="1">
                                </div>
                                <div class="btn-inner flex-middle">
                                    <a class="btn-play" href="<?php echo $about_video;?>">
                                        <i class="ot-flaticon-play"></i>
                                        <span class="circle-1"></span>
                                        <span class="circle-2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6">
                            <div class="ot-heading">
                                <span class="ot-heading__sub"> <?php echo $about_small_text;   ?></span>
                                <h2 class="ot-heading__title"><?php echo $about_main_text; ?></h2>
                            </div>
                            <div class="space-20"></div>
                            <div class="space-2"></div>


                            
                            <div class="ot-tabs">
                                       
                                <ul class="ot-tabs__heading unstyle">
                                     



                                        <?php
                                        $count = 1;
                                        if(have_rows('missionvision_title')): ?>
                                        <?php while(have_rows('missionvision_title')):
                                            the_row();
                                            $about_title = get_sub_field('ab_main_title'); 
                                            if ( $count == 1 ) {
                                                $current = 'current';
                                            }
                                            else {
                                                $current = '';
                                            }
                                        ?>
                                    <li class="tab-link is-line <?php echo $current; ?>" data-tab="tab-<?php echo $count; ?>"><?php echo $about_title; ?></li>
                                    <?php 
                                    $count++;
                                        endwhile;
                                        endif;
                                     ?>
                                    


                                </ul>
                                  


                                <?php
                                    $count = 1;
                                if(have_rows('missionvisiongoal_description')): ?>
                                        <?php while(have_rows('missionvisiongoal_description')):
                                        the_row();
                                        $about_detail = get_sub_field('ab_detail');
                                        $about_description = get_sub_field('ab_description');
                                        if ( $count == 1 ) {
                                            $current = 'current';
                                        }
                                        else {
                                            $current = '';
                                        }
                                        ?>
                                         
                                <div id="tab-<?php echo $count; ?>" class="ot-tabs__content <?php echo $current; ?>">
                                    <p class="lead ronmi-text-primary"><span><?php echo $about_detail;?></span></p><p><?php echo $about_description;?></p>
                                </div>
                                <?php 
                                $count++;
                                        endwhile;
                                        endif;
                                     ?>
                            </div>





                        </div>
                    </div>
                    <div class="space-90 d-none d-md-block"></div>
                    <div class="space-60"></div>
                </div>
            </section>
            <?php } ?>
        </div>

<?php
get_footer();