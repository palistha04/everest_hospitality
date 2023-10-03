<?php
get_header();
?>

<div id="content" class="site-content">
<?php get_template_part('template-parts/common/banner'); ?>

<?php

$albums = get_field('eh_gallery');
if($albums):
?>

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
                                                <a href="pỏtfolio-detailts-1.html">
                                                    <img src="<?php echo $album['url']; ?>" class="" alt="<?php echo $album['alt']; ?>">
                                                </a>
                                                <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
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
