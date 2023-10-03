<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Everest_Hospitality
 */

get_header();
?>

<div id="content" class="site-content">
         
<?php get_template_part('template-parts/common/banner'); ?>


        <div class="entry-content">
            <div class="container">
                <div class="row">
                    <div class="content-area col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-5 mb-lg-0">
                        <article class="blog-post post-box">
                            <div class="inner-post">
								<?php 
								 	$feature_image = get_the_post_thumbnail_url();
									$notice_content = get_field('notice_content');
								?>
                                <div class="entry-summary">
                                    <figure class="wp-block-image size-full m-0">
                                        <img src="<?php echo $feature_image;?>" alt="<?php the_title(); ?>">
                                    </figure>
                                    <div class="entry-header mt-3">
                                        <h6><?php  echo get_the_date('F d, Y'); ?></h6>
                                        
                                    </div>
									<?php $the_content;	?>
									<div class="space-20"></div>
									<?php echo $notice_content;	?>
                                </div>
                                <div class="entry-footer clearfix">
                                    
                                    <div class="share-post">
									
                                        <a href="twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="pinterest.com" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                      

                                    </div>
                                </div>
                               
                            </div>
                        </article>
                    
                      
                       

                    </div>

                    <?php
                        $page_id = get_the_ID();

                        $post_Args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'post__not_in' => [$page_id],
                        );
                        $query = new WP_QUERY($post_Args);
                        if($query->have_posts()  ):
                          
?>
                    <div class="widget-area primary-sidebar col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      
                        <aside class="widget widget_recent_news">
                            <h5 class="widget-title">Recent Posts</h5>
                            <ul class="recent-news clearfix">
                                <?php  
                                      while($query->have_posts()):
                                        $query->the_post();
                                        $feat_image = get_the_post_thumbnail_url(get_the_ID(),'full');
                                        if ( $feat_image ):
                                            $featured_img = $feat_image;
                                        else:
                                            $featured_img = get_template_directory_uri().'/images/bathroom.jpg';
                                        endif;
                                ?>
                                <li class="clearfix dflex"> 
                                    <div class="thumb">
                                        <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $featured_img; ?>" alt="<?php the_title(); ?>"></a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="<?php echo the_permalink(); ?>"><?php the_title();  ?></a></h6>
                                        <span class="post-on"><span class="entry-date"><?php  echo get_the_date('F d, Y'); ?></span></span>
                                    </div>
                                </li>
                                    <?php
                                  endwhile;  
                                    ?>
                              
                            </ul>
                        </aside>
                        
                    </div>
<?php
endif;
?>
                </div>
            </div>
        </div>

<?php
get_footer();
