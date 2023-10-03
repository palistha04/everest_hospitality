<?php
/* Template Name: Investor */
?>
<?php
get_header();
?>


<div id="content" class="site-content">
<?php get_template_part('template-parts/common/banner'); ?>

            <section class="pricing-page">
                <div class="container">
                    <div class="space-70 d-none d-md-block"></div>
                    <div class="space-60"></div>

                  
                    
                    <div class="row justify-content-center">
                    <?php
                        $Investor_Args = array(
                            'post_type' => 'investor',
                            'post_status' => 'publish',
                        );
                        $investor = new WP_QUERY($Investor_Args);
                        if($investor->have_posts()  ):
                            while($investor->have_posts()):
                                $investor->the_post();
                                $file = get_field('file');
                                if($file):
                                
                    ?>
                        <div class="col-xl-4 col-md-6 mb-5 mb-xl-5">
                            <div class="we-stick ot-pricing-table ronmi-bg-third">
                                <div class="ot-pricing-table__header">
                                    <h4 class="ot-pricing-table__title"><?php the_title();  ?></h4>
                                </div>
                                <div class="ot-pricing-table__divider s1"><span></span></div>
                                <div class="ot-pricing-table__footer">
                                    <a href="<?php echo $file['url'] ; ?>" class="octf-btn octf-btn-outline w-200"download> Download</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    endif;
                    endwhile;
                    endif;
                    ?>
                    
                    </div>

                   
                    <div class="space-70 d-none d-md-block"></div>
                    <div class="space-60"></div>
                </div>
            </section>

        </div>           

<?php
get_footer();
?>