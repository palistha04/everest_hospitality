<?php
/**
 * Template Name: Gallery
 */
?>
<?php
get_header();

$albums = get_field('eh_gallery');
if($albums):
?>


<div id="content" class="site-content">
<?php get_template_part('template-parts/common/banner'); ?>

             <!-- <section class="gallery-page">
                <div class="container">
                    <div class="space-120"></div>
                    <div class="row">


                    <?php
                        // $postArgs = array(
                        //     'post_type' => 'gallery',
                        //     'post_status' => 'publish',
                        // );
                        // $query = new WP_QUERY($postArgs);
                        // if($query->have_posts()  ):
                        //     while($query->have_posts()):
                        //         $query->the_post();

                        // $feat_image = get_the_post_thumbnail_url(get_the_ID(),'full');
                        // if ( $feat_image ):
                        //     $featured_img = $feat_image;
                        // else:
                        //     $featured_img = get_template_directory_uri().'/images/bathroom.jpg';
                        // endif;
                    ?>


                       <div class="col-lg-4">
                            <div class="project-item f3 normal ">
                                            <div class="projects-box b-b-p">
                                                <a href="<?php the_permalink(); ?>"> <img src="<?php echo $featured_img; ?>" class="" alt=""></a>
                                            </div>
                                            <h4><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h4>
                            </div>
                        </div>
                        <?php
                        //     endwhile;
                        // endif;
                        ?>

                      
                        
                    </div>
                    <div class="space-120"></div>
                </div>
            </section> -->


                <section>
                        <div class="container">
                            <div class="space-120"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="project-filter-wrapper">
                                        <div class="projects-grid pf_3_cols style-3 img-popup img-scale">
                                            <div class="grid-sizer"></div>

                                            <?php
                                                foreach($albums as $album):
                                            ?>
                                        


                                            <div class="project-item f3 normal">
                                                <div class="projects-box">
                                                    <div class="projects-thumbnail" data-src="<?php echo $album['url']; ?>">
                                                        
                                                            <img src="<?php echo $album['url']; ?>"  alt="<?php echo $album['alt']; ?>">
                                                        
                                                        <!-- <span class="overlay"><i class="ot-flaticon-loupe"></i></span> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                                endforeach;
                                            ?>


                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="space-120"></div>
                        </div>
                </section>
            <?php
            endif;
            ?>
    </div>  

        <?php
get_footer();
?>