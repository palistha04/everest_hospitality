<?php
get_header();

?>
        <div id="content" class="site-content">
                
                <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container h-f-100" data-alias="mask-showcase" data-source="gallery">
                    <div id="rev_slider_h4" class="rev_slider h-f-100" style="display:none;" data-version="5.4.1">
                   
                        <ul>
                        <?php
                        $banner_count = count(get_field('eh_banner_content'));
                        $number = ($banner_count < 10) ? '0' . $banner_count : $banner_count;
                        if(have_rows('eh_banner_content')): 
                            $count = 1;
                             $counter = 0;
                          
                           
                            ?>

                                <?php while(have_rows('eh_banner_content')):
                                    the_row();
                                    $formattedNumber = ($count < 10) ? '0' . $count : $count;
                                    $banner_image = get_sub_field('banner_image');
                                    $banner_title = get_sub_field('eh_banner_title');
                                    $banner_big_title = get_sub_field('eh_banner_big_title');
                                    ?>
                            <li data-index="rs-7<?php echo $counter; ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/transparent.png" data-bgcolor='#efeeec' style='' alt=""  data-bgposition="50% 50%" data-bgfit="auto" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina />
                                <!-- LAYER 2  Thin text title-->
                                <div class="tp-caption tp-resizeme" 
                                    id="slide-70-layer-1" 
                                    data-x="['left','left','left','left']" data-hoffset="['-261','-222','-166','-103']" 
                                    data-y="['top','top','top','top']" data-voffset="['244','208','156','97']" 
                                    data-width="['643',548','411','256']"
                                    data-height="['643',548','411','256']"
                         
                                    data-type="shape" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay": 0, "speed": 0},{"delay": "wait", "speed": 0}]'

                                    data-basealign="slide"
                
                                    style="background-color: rgb(235, 231, 228);border-radius: 50%;">
                                </div>
                                
                                <!-- LAYER 2  Thin text title-->
                                <div class="tp-caption tp-resizeme title" 
                                    id="slide-70-layer-2" 
                                    data-x="['left','left','left','left']" data-hoffset="['-151',-128','-96','-60']" 
                                    data-y="['top','top','top','top']" data-voffset="['70','59','44','27']" 
                                    data-fontsize="['390',332','249','155']"
                                    data-lineheight="['500','426','319','199']"
                                    data-width="['auto',auto','auto','auto']"
                                    data-height="['auto',auto','auto','auto']"
                                    data-fontweight="['400','400','400','400']"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay": 0, "speed": 0},{"delay": "wait", "speed": 0}]'

                                    data-textAlign="['left','left','left','left']"
                                    data-basealign="slide"
                
                                    style="font-family: Parisienne; color: rgba(255,255,255,.4);">Everest
                                </div>

                                <!-- LAYER 3  Thin text title-->
                                <div class="tp-caption tp-resizeme title" 
                                    id="slide-70-layer-3" 
                                    data-x="['right','right','right','right']" data-hoffset="['140',119','89','55']" 
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-115','-98','-73','-45']" 
                                    data-fontsize="['390',332','249','155']"
                                    data-lineheight="['500','426','319','199']"
                                    data-width="['auto',auto','auto','auto']"
                                    data-height="['auto',auto','auto','auto']"
                                    data-fontweight="['normal','normal','normal','normal']"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay": 0, "speed": 0},{"delay": "wait", "speed": 0}]'

                                    data-textAlign="['right','right','right','right']"
                                    data-basealign="slide"
                
                                    style="font-family: Parisienne; color: rgba(255,255,255,.4);">Hospitality 
                                </div>
                                
                                <!-- LAYER 4 -->
                                <div class="tp-caption tp-resizeme" 
                                    id="slide-70-layer-4" 
                                    data-x="['right','right','right','right']" data-hoffset="['100','50','50','50']" 
                                    data-y="['top','center','center','center']" data-voffset="['125','0','0','-30']" 
                                    data-width="['745','392','288','288']"
                                    data-height="['913','480','353','353']"
                                    data-visibility="['on','on','on','on']"
                                    data-whitespace="normal"
                         
                                    data-type="image" 
                                    data-responsive_offset="on" 
                                    data-responsive="on"
                                    data-basealign="slide" 
                
                                    data-frames='[{"delay":1800,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":0,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                    data-textAlign="['left','left','left','left']"
                
                                    >

                                    <img src="<?php echo $banner_image['url']; ?>" alt="Everest Hospitality">
                                </div>
                                
                                <!-- LAYER 6  Thin text title-->
                                <div class="tp-caption tp-resizeme title" 
                                    id="slide-70-layer-6" 
                                    data-x="['left','left','left','left']" data-hoffset="['15',15','15','15']" 
                                    data-y="['top','top','top','top']" data-voffset="['215','150','170','100']" 
                                    data-fontsize="['14',14','14','14']"
                                    data-lineheight="['27','27','27','27']"
                                    data-width="['auto',auto','auto','auto']"
                                    data-height="['auto',auto','auto','auto']"
                                    data-fontweight="['400','400','400','400']"
                                    data-color="#355b66"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":500,"speed":800,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                    data-textAlign="['left','left','left','left']"
                
                                    style="font-family: Lexend; text-transform: uppercase;"><?php echo $banner_title;  ?>
                                </div>

                                <!-- LAYER 7  Thin text title-->
                                <div class="tp-caption tp-resizeme title" 
                                    id="slide-70-layer-7" 
                                    data-x="['left','left','left','left']" data-hoffset="['15',15','15','15']" 
                                    data-y="['top','center','center','center']" data-voffset="['244','-112','-120','-120']" 
                                    data-fontsize="['90',80','60','42']"
                                    data-lineheight="['100','90','72','50']"
                                    data-width="['900',900','700','450']"
                                    data-height="['214',190','151','104']"
                                    data-fontweight="['400','400','400','400']"
                                    data-color="#009C9D"
                                    data-whitespace="normal"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":800,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                    data-textAlign="['left','left','left','left']"
                
                                    style="font-family: Palatino Linotype;"><?php echo $banner_big_title; ?>
                                </div>
                                
                                <!-- LAYER 8  Thin text title-->
                                <div class="tp-caption tp-resizeme title" 
                                    id="slide-70-layer-8" 
                                    data-x="['left','left','left','left']" data-hoffset="['100',50','50','15']" 
                                    data-y="['center','center','center','center']" data-voffset="['-86','2','-20','-38']" 
                                    data-fontsize="['18',18','18','18']"
                                    data-lineheight="['32','32','32','32']"
                                    data-fontweight="['400','400','400','400']"
                                    data-width="['100',100','100','100']"
                                    data-color="#585756"
                                    data-whitespace="normal"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                    data-textAlign="['left','left','left','left']"
                
                                    style="font-family: Lexend; ">
                                    <div class="flex-middle justify-content-between"> <?php echo $formattedNumber; ?> <svg width="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" fill="#585756" viewBox="0 0 40 40" xml:space="preserve" data-stylerecorder="true" style="text-align: left; line-height: 32px; letter-spacing: 0px; font-weight: 400; font-size: 18px;"><rect y="19" width="40" height="1" data-stylerecorder="true" style="text-align: left; line-height: 32px; letter-spacing: 0px; font-weight: 400; font-size: 18px;"></rect></svg> <?php echo $number; ?><br>
                                    </div>
                                </div>
                                
                                <!-- LAYER 9  Thin text title-->
                                
                                
                               
                            </li>
                            <?php
                            $count++;
                            $counter++;
                            endwhile;
                            endif;
                            ?>

                          
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="display: none !important;"></div> 
                    </div>
                </div>



                

 
            <!-- About Section  -->
                <?php 
                    $about_small_title = get_field('ab_small_title');
                    $about_main_title = get_field('ab_main_title'); 
                ?>

            <section class="sec-about-arc">
                <div class="row mx-0 align-items-center">
                    <?php
                    $feat_img = get_the_post_thumbnail_url();
                    if ( $feat_img ):
                        $featured_image = $feat_img;
                    else:
                        $featured_image = get_template_directory_uri().'/images/hall.jpg';
                    endif;
                    ?>
                    <div class="col-xl-6 px-0">
                        <img src="<?php echo $featured_image; ?>" alt="Everest Hospitality">
                    </div>
                    <div class="col-xl-6 px-0">
                        <div class="about-box">
                            <div class="ot-heading s-arc-light">
                                <span class="ot-heading__sub text-white"> <?php echo $about_small_title; ?></span>
                                <div class="space-4"></div>
                                <h3 class="ot-heading__title"> <?php echo $about_main_title; ?></h3>
                            </div> 
                            <div class="space-20"></div>
                            <div class="space-4"></div>
                            <?php the_content(); ?>
                            <div class="space-20"></div>
                            <div class="space-40"></div>

                            <?php
                                $link = get_field('eh_button');
                                $link_title = $link['title'];
                            ?>
                            <div class="ot-button">
                                <a href="<?php echo $link['url']; ?>" class="octf-btn octf-btn-outline about-button"><?php echo $link_title; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Mission vission goal section  -->
            <?php
            $mission_small_title = get_field('eh_small_title');
            $mission_big_title = get_field('eh_big_title');
            $mission_main_title = get_field('eh_main_title');

            ?>
            <section>
                <div class="container">
                    <div class="space-20"></div>
                    <div class="space-70 d-none d-md-block"></div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="ot-heading">
                                <span class="ot-heading__sub"><?php echo $mission_small_title; ?></span>
                                <h2 class="ot-heading__title"><?php echo $mission_big_title; ?></h2>
                            </div>
                            <div class="space-10"></div>
                            <div class="space-2"></div>
                            <p><?php echo $mission_main_title ?></p>
                            <div class="space-20"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">



                    <?php if(have_rows('eh_missionvisiongoal')): ?>
                        <?php while(have_rows('eh_missionvisiongoal')):
                            
                            the_row();
                            $home_image = get_sub_field('eh_image');
                            $home_title = get_sub_field('eh_title');
                            $home_detail = get_sub_field('eh_detail');
                            
                            $mission_link = get_sub_field('eh_link');
                            $mission_link_title = $mission_link['title'];
                            
                            ?>
                        
                        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                            <div class="ot-view-stacked ot-position-top text-center we-stick-home">
                                <div class="ot-icon-box icon-box-garden">
                                    <div class="ot-icon-box__icon">
                                       <img src="<?php echo $home_image['url']; ?>" alt="<?php echo $home_title; ?>">
                                    </div>
                                    <div class="ot-icon-box__content">
                                        <h5 class="icon-box-title"><a href="<?php echo $mission_link['url']; ?>"><?php  echo $home_title;  ?></a></h5>
                                        <div class="icon-box-des"><?php  echo $home_detail;  ?></div>
                                        <div class="icon-box-btn">
                                            <a href="<?php echo $mission_link['url']; ?>"><?php echo $mission_link_title; ?></a>
                                        </div>
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>
                            <?php
                        endwhile;
                        
                        endif;
                        ?>
     
                    </div>
                    <div class="space-80"></div>
                    <div class="space-60 d-none d-md-block"></div>
                </div>
            </section>


            <!-- Know More Section  -->
            <?php
            $know_more_title = get_field('km_small_title');
            $know_more_detail = get_field('km_detail');
            
            $bg_image = get_field('km_background_image');
            $image = $bg_image['sizes']['large'];
            $video = get_field('km_video');
            ?>

            <section class="cta" style="background-image:url(<?php echo $image;?>">
                <div class="bg-dark-shadow"></div>
                <div class="container">
                  <div class="space-80"></div>
                  <div class="space-100 d-none d-md-block"></div>
                  <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 text-center">
                        <div class="top-info-title d-flex align-items-center justify-content-center">
                         
                            <span class="info-title-text text-white"><?php echo $know_more_title;  ?> </span>
                        </div>
                        <div class="space-20"></div>
                        <div class="space-4"></div>
                        <h5 class="lead-about-h4 text-white"><?php echo $know_more_detail;  ?></h5>
                        <div class="space-3"></div>
                        <div class="space-80"></div>
                        <div class="ot-button">
                            <div class="video-popup">
                                
                                <div class="btn-inner flex-middle">
                                    <a class="btn-play" href="<?php echo $video; ?>">
                                        <i class="ot-flaticon-play"></i>
                                        <span class="circle-1"></span>
                                        <span class="circle-2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-80"></div>
                <div class="space-100 d-none d-md-blocimages/k"></div>
            </div>
        </section>



        <!-- Our Services Section  -->
        <?php
            $service_small_title = get_field('srv_small_title');
            $service_main_title = get_field('srv_main_title');
            
        ?>  
        
        <section class="section-design-project">
                <div class="container">
                    <div class="space-60 d-none d-md-block"></div>
                    <div class="space-5 d-none d-md-block"></div>
                    <div class="space-80"></div>
                    <div class="ot-heading version-design s-design-light">
                        <span class="ot-heading__sub dflex mb-2"><span></span><?php echo $service_small_title;  ?></span>
                        <div class="space-4"></div>
                        <h2 class="ot-heading__title"><?php echo $service_main_title;  ?></h2>
                    </div>
                    <div class="space-20"></div>
                    <div class="space-4"></div>
                    
                    
                            
                        <div class="row">
                        <?php
                            $service_id = get_field('our_services_page_id');
                                    if(have_rows('eh_content', $service_id)): 
                                         while(have_rows('eh_content', $service_id)):
                                        the_row();

                                        $property_image = get_sub_field('s_image', $service_id);
                                        $property_main_title = get_sub_field('s_main_title', $service_id);
                                        $property_description = get_sub_field('s_description', $service_id);

                                        $id_service = get_field('our_services_page_id');
                                        $new_url_id = sanitize_title($property_main_title);
                                ?>
                                
                            <div class="col-lg-4">
                            <div class="space-50"></div>
                                <div class="s-design-project">
                                    <div class="ot-hover-image">
                                        <figure class="ot-hover-image__inner">
                                            <img src="<?php echo $property_image['url']; ?>" title="" alt="<?php  echo  $property_main_title ;  ?>">
                                            
                                        </figure>
                                    </div>
                                    <div class="space-30"></div>
                                    <div class="space-2"></div>
                                    <div class="ot-title-link">
                                        <h5><a href= "<?php  echo home_url();  ?>/services/#<?php echo $new_url_id; ?>"><?php echo $property_main_title; ?></a></h5>
                                    </div>
                                    <p><?php  echo wp_trim_words($property_description, 12 , '...');  ?></p>
                            </div>
                        </div>
                        

                        <?php
                            endwhile;
                        endif;
                        ?>
                       
                    </div>
                    
                    <div class="space-50"></div>
                    <?php
                         $service_link = get_field('more_services');  
                         $service_link_title = $service_link['title'];
                    ?>
                   
                    <div class="space-80"></div>
                </div>
            </section>

           
                        <!-- Network section  -->
            <section class=" twentytwenty-after position-relative sec-about-arc ntBackground">
                <div class="container ">
                    <div class="space-20"></div>
                    <div class="space-70 d-none d-md-block"></div>
                    <div class="ot-heading s-arc-light">
                                <span class="ot-heading__sub text-white nttext-brown">Everest Hospitaity &amp; Hotel </span>
                                <div class="space-4"></div>
                                <h3 class="ot-heading__title nttext-black">Our Networks</h3>
                            </div>
                            <div class="space-20"></div>
                    <div class="space-70 d-none d-md-block"></div>
                    <div class="ot-slider ot-client-logo-slider">
                        <div class="owl-carousel owl-theme">
                            <?php
                            $network_id = get_field('our_networks_page_id');
                            $gallery = get_field('nt_gallery','option');
                        if($gallery):

                    ?>
                        <?php
                            foreach($gallery as $image):
                        ?>

                            <a class="client_link" href="#">
                                <span class="client-logo"><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"></span>
                                <span class="client-hover-logo"><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"></span>
                            </a>
                            <?php
                            endforeach;
                        endif;
                            ?>
                            
                        </div>
                    </div>
                
                    <div class="space-20"></div>
                    <div class="space-70 d-none d-md-block"></div>
                </div>
            </section>



             <!-- Notice Section             -->
             <?php
    $postArgs = array(
        'post_type' => 'post',
        'post_status' => 'publish',
    );
    $query = new WP_QUERY($postArgs);
    if($query->have_posts()  ):
             ?>
            <section>
                <div class="container">
                    <div class="space-90"></div>
                    <div class="space-70 d-none d-md-block"></div>
                    <div class="ot-heading text-center">
                        
                        <h2 class="ot-heading__title">Latest News</h2>
                    </div>
                    <div class="space-30"></div>
                    <div class="space-5"></div>
                    <div class="row blog-grid justify-content-center">
                    <?php
                    
                            while($query->have_posts()):
                                $query->the_post();

                        $feat_image = get_the_post_thumbnail_url(get_the_ID(),'full');
                        if ( $feat_image ):
                            $featured_img = $feat_image;
                        else:
                            $featured_img = get_template_directory_uri().'/images/bathroom.jpg';
                        endif;

                        $notice_content = get_field('notice_content');
                    ?>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                            <article class="post-box format-image">
                                <div class="post-inner">
                                    <div class="entry-media post-cat-abs">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title();  ?>"></a>
                                        <div class="entry-meta meta-s2">
                                            <span class="posted-on"><a href="#"><?php  echo get_the_date(); ?></a></span>
                                        
                                        </div>
                                    </div>
                                    <div class="space-10"></div>
                                    <div class="inner-post">
                                        <div class="entry-header">
                                            <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
                                        </div>
                                        <div class="entry-summary the-excerpt">
                                            <p><?php  echo wp_trim_words($notice_content , 5 , '...');  ?></p>
                                        </div>
                                        <div class="entry-footer"><a class="btn-details" href="<?php the_permalink(); ?>"> Read More</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <?php
                            endwhile;
                        ?>
                        
                    </div>
                    <div class="space-90"></div>
                    <div class="space-70 d-none d-md-block"></div>
                </div>
            </section>
            <?php
                            endif;

            ?>
        </div>
<?php
get_footer();
?>