<?php
/* Template Name: Network */
?>

<?php
get_header();
?>

<div id="content" class="site-content">
    
<?php get_template_part('template-parts/common/banner'); ?>

            <section>
                <div class="container ">
                    <div class="space-90 d-none d-md-block"></div>
                    <div class="space-60"></div>
                     <div class="row justify-content-center">

                     <?php
                        // $postArgs = array(
                        //     'post_type' => 'network',
                        //     'post_status' => 'publish',
                        // );
                        // $query = new WP_QUERY($postArgs);
                        // if($query->have_posts()  ):
                        //     while($query->have_posts()):
                        //         $query->the_post();

                        // $nt_feat_image = get_the_post_thumbnail_url(get_the_ID(),'full');
                        // if ( $nt_feat_image ):
                        //     $nt_featured_img = $nt_feat_image;
                        // else:
                        //     $nt_featured_img = get_template_directory_uri().'/images/nhh-logo.svg';
                        // endif;
                            
                        $gallery = get_field('nt_gallery','option');
                        if($gallery):

                    ?>
                        <?php
                            foreach($gallery as $image):
                        ?>
                        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                            <div class="ot-view-stacked ot-position-top text-center we-stick mb-20">
                                <div class="ot-icon-box icon-box-garden">
                                    
                                  
                                      <img src="<?php echo $image['url'];?>" alt= "<?php echo $image['alt'];?>">   

                                  
                                  
                                </div>
                            </div>
                        </div>

                        
                        <?php
                            endforeach;
                        ?>
                                    

                        <?php
                            endif;
                        ?>
                        
                    </div>
                    <div class="space-5"></div>
                    <div class="space-50"></div>
                </div>
           
            </section>   

       

        </div>

    <?php
        get_footer();
    ?>