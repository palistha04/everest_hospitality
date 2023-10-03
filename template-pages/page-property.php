

<?php
/* Template Name: Property */
?>


<?php
get_header();
?>

<div id="content" class="site-content">
<?php get_template_part('template-parts/common/banner'); ?>

        <section class="bottomProp">
            <div class="container">
            <?php 
             $counter = 0;   
             if(have_rows('eh_content')):
            while(have_rows('eh_content')):
                the_row();

                $property_image = get_sub_field('s_image');
                $property_small_title = get_sub_field('s_small_title');
                $property_main_title = get_sub_field('s_main_title');
                $property_description = get_sub_field('s_description');

                
                $new_url = sanitize_title($property_main_title);
                ?>        
                 <?php if ($counter % 2 === 0) :?>
                <div class="space-60 d-none d-md-block" id = "<?php echo $new_url; ?>"></div>
                <div class="space-20"></div>
                <div class="row we-stick pt-40">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="<?php echo esc_url($property_image['url']); ?>"alt="<?php echo $property_main_title ; ?>">
                        
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1 ">
                        <div class="ot-heading">
                            <span class="ot-heading__sub"><?php echo $property_small_title; ?></span>
                            <h2 class="ot-heading__title"><?php echo $property_main_title; ?></h2>
                        </div>
                        <div class="space-20"></div>
                        <div class="space-2"></div>
                        <?php echo $property_description; ?>
                    </div>
                </div>
                <?php else: ?>
                    <div class="space-60 d-none d-md-block" id = "<?php echo $new_url; ?>"></div>
                <div class="space-20"></div>
                <div class="row we-stick pt-40">
                    <div class="col-xl-5 col-lg-6">
                        <div class="ot-heading">
                            <span class="ot-heading__sub"><?php echo $property_small_title; ?></span>
                            <h2 class="ot-heading__title"><?php echo $property_main_title; ?></h2>
                        </div>
                        <div class="space-20"></div>
                        <div class="space-2"></div>
                        <?php echo $property_description; ?>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0 offset-xl-1">
                        <img src="<?php echo $property_image['url']; ?>"alt="<?php echo $property_main_title ; ?>">
                        
                    </div>
                    
                </div>
                <?php endif; ?>
                <?php
                $counter++;
                endwhile;
                endif;
                ?>
          
        </section>
     
      


</div>      

<?php
get_footer();
?>