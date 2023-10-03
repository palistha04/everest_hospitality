<?php
/* Template Name: Notice */
?>
<?php
get_header();
?>

<div id="content" class="site-content">
<?php get_template_part('template-parts/common/banner'); ?>

        <section class="blog-notice">
                <div class="entry-content blog-grid">
            <div class="container">
                <div class="row">
                <?php
                        $NoticeArgs = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                        );
                        $notice = new WP_QUERY($NoticeArgs);
                        if($notice->have_posts()  ):
                            while($notice->have_posts()):
                                $notice->the_post();

                                

                        $feat_image = get_the_post_thumbnail_url(get_the_ID(),'full');
                        if ( $feat_image ):
                            $featured_img = $feat_image;
                        else:
                            $featured_img = get_template_directory_uri().'/images/bathroom.jpg';
                        endif;
                    ?>
                
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-5">
                        <article class="post-box format-image">
                            <div class="post-inner">
                                <div class="entry-media post-cat-abs">
                                    <a href="<?php echo the_permalink(); ?>"><img src="<?php  echo $featured_img; ?>" alt="Everest Hospitality"></a>
                                    
                                    
                                </div>
                                <div class="inner-post">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#"><?php  echo get_the_date('F d, Y'); ?></a></span>
                                        
                                    </div>
                                    <div class="entry-header">
                                        <h3 class="entry-title"><a href="<?php echo the_permalink(); ?>"><?php the_title();  ?></a></h3>
                                    </div>
                                    
                                    <div class="entry-footer"><a class="btn-details" href="<?php echo the_permalink(); ?>"> Read More</a></div>
                                </div>
                            </div>
                        </article>
                    </div>


                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                    
                    <!-- <div class="col-sm-12 col-xs-12 mb-5 text-center">
                        <a href="#" class="octf-btn octf-btn-primary px-5">View More</a>
                    </div> -->
                </div>
            </div>
        </div>
            </section>       

<?php
get_footer();
?>