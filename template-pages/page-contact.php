<?php
/* Template Name: Contact Us*/
?>

<?php
get_header();
?>

<div id="content" class="site-content">

<?php get_template_part('template-parts/common/banner'); ?>
  

            <section class="contact-page">
                <div class="container">
                    <div class="space-60 d-none d-md-block"></div>
                    <div class="space-80 d-md-none"></div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="ot-heading">
                                <span class="ot-heading__sub">Find Us</span>
                                <h2 class="ot-heading__title">Contact Us </h2>
                            </div>
                            <div class="space-10"></div>
                            <div class="space-5"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                            <div class="cinfo we-stick">
                                <div class="cinfo_title">
                                    <span class="cinfo-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 482.6 482.6"><g>    <path d="M98.339,320.8c47.6,56.9,104.9,101.7,170.3,133.4c24.9,11.8,58.2,25.8,95.3,28.2c2.3,0.1,4.5,0.2,6.8,0.2  c24.9,0,44.9-8.6,61.2-26.3c0.1-0.1,0.3-0.3,0.4-0.5c5.8-7,12.4-13.3,19.3-20c4.7-4.5,9.5-9.2,14.1-14  c21.3-22.2,21.3-50.4-0.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2c-12.8,0-25.1,5.6-35.6,16.1l-35.8,35.8  c-3.3-1.9-6.7-3.6-9.9-5.2c-4-2-7.7-3.9-11-6c-32.6-20.7-62.2-47.7-90.5-82.4c-14.3-18.1-23.9-33.3-30.6-48.8  c9.4-8.5,18.2-17.4,26.7-26.1c3-3.1,6.1-6.2,9.2-9.3c10.8-10.8,16.6-23.3,16.6-36s-5.7-25.2-16.6-36l-29.8-29.8  c-3.5-3.5-6.8-6.9-10.2-10.4c-6.6-6.8-13.5-13.8-20.3-20.1c-10.3-10.1-22.4-15.4-35.2-15.4c-12.7,0-24.9,5.3-35.6,15.5l-37.4,37.4  c-13.6,13.6-21.3,30.1-22.9,49.2c-1.9,23.9,2.5,49.3,13.9,80C32.739,229.6,59.139,273.7,98.339,320.8z M25.739,104.2  c1.2-13.3,6.3-24.4,15.9-34l37.2-37.2c5.8-5.6,12.2-8.5,18.4-8.5c6.1,0,12.3,2.9,18,8.7c6.7,6.2,13,12.7,19.8,19.6  c3.4,3.5,6.9,7,10.4,10.6l29.8,29.8c6.2,6.2,9.4,12.5,9.4,18.7s-3.2,12.5-9.4,18.7c-3.1,3.1-6.2,6.3-9.3,9.4  c-9.3,9.4-18,18.3-27.6,26.8c-0.2,0.2-0.3,0.3-0.5,0.5c-8.3,8.3-7,16.2-5,22.2c0.1,0.3,0.2,0.5,0.3,0.8  c7.7,18.5,18.4,36.1,35.1,57.1c30,37,61.6,65.7,96.4,87.8c4.3,2.8,8.9,5,13.2,7.2c4,2,7.7,3.9,11,6c0.4,0.2,0.7,0.4,1.1,0.6  c3.3,1.7,6.5,2.5,9.7,2.5c8,0,13.2-5.1,14.9-6.8l37.4-37.4c5.8-5.8,12.1-8.9,18.3-8.9c7.6,0,13.8,4.7,17.7,8.9l60.3,60.2  c12,12,11.9,25-0.3,37.7c-4.2,4.5-8.6,8.8-13.3,13.3c-7,6.8-14.3,13.8-20.9,21.7c-11.5,12.4-25.2,18.2-42.9,18.2  c-1.7,0-3.5-0.1-5.2-0.2c-32.8-2.1-63.3-14.9-86.2-25.8c-62.2-30.1-116.8-72.8-162.1-127c-37.3-44.9-62.4-86.7-79-131.5  C28.039,146.4,24.139,124.3,25.739,104.2z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                    </span>
                                    <span class="cinfo-text">Phones</span>
                                </div>
                                <div class="space-20"></div>
                                <div class="space-4"></div>


                                <?php if(have_rows('numbers','option')): ?>
                                <?php while(have_rows('numbers','option')):
                                    the_row();
                                    $number = get_sub_field('number');

                                    ?>
                                 <div class="cinfo_desc"><a href="tel:<?php echo $number; ?>"><?php echo $number; ?></a></div>
                                
                                <?php
                                    endwhile;
                                    endif;
                                ?>


                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                            <div class="cinfo we-stick">
                                <div class="cinfo_title">
                                    <span class="cinfo-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"><g>    <g><path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257   c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22   C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34   C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180   C406.1,207.121,398.689,233.688,384.866,256.818z"></path> </g></g><g> <g>     <path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z    M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2   C316.1,212.683,289.784,240.2,256,240.2z"></path>   </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                    </span>
                                    <span class="cinfo-text">ADDRESS</span>
                                </div>
                                <div class="space-20"></div>
                                <div class="space-4"></div>
                                <?php
                                    $address = get_field('address','option');
                                ?>
                                <p><?php echo $address; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-5 mb-sm-0">
                            <div class="cinfo we-stick">
                                <div class="cinfo_title">
                                    <span class="cinfo-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 479.058 479.058"><path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"></path></svg>
                                    </span>
                                    <span class="cinfo-text">Email</span>
                                </div>
                                <div class="space-20"></div>
                                <div class="space-4"></div>
                                <ul class="none-style mb-0">
                                <?php if(have_rows('emails','option')): ?>
                                <?php while(have_rows('emails','option')):
                                    the_row();
                                    $email = get_sub_field('email');

                                    ?>
                                    <li><a href="mailto:<?php echo $email;  ?>" class="title-link ronmi-text-second"><?php echo $email; ?></a></li>
                                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="space-60 d-none d-md-block"></div>
                    <div class="space-80 d-md-none"></div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-form-block text-center">
                                <div class="ot-heading">
                                    <span class="ot-heading__sub">Get in touch</span>
                                    <h2 class="ot-heading__title">Drop Us a Line</h2>
                                </div>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="space-5"></div>

                                <?php echo do_shortcode('[contact-form-7 id="90" title="Everest Hospitality Contact"]');  ?>
                                <!-- <form id="ajax-form" name="ajax-form" action="contact.php" method="post" class="wpcf7"> -->
                                    <!-- <div class="main-form">
                                        <div class="row">
                                            <div class="col-lg-6 text-left">
                                                <p>
                                                    <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                                    <span class="field-label">FULL NAME*</span>
                                                    <input id="name" type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name " required="">
                                                </p>
                                                <div class="space-10"></div>
                                            </div>
                                            <div class="col-lg-6 text-left">
                                                <p>
                                                    <label for="email"> 
                                                        <span class="error" id="err-email">please enter e-mail</span>
                                                        <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                                    </label>
                                                    <span class="field-label">EMAIL*</span>
                                                    <input type="email" name="email" id="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email " required="">
                                                </p>
                                                <div class="space-10"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-left">
                                                <p>
                                                    <label for="message"></label>
                                                    <span class="field-label">YOUR MESSAGE</span>
                                                    <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required=""></textarea>
                                                </p>
                                                <div class="space-10"></div>
                                            </div>
                                        </div>
                                        <p><button type="submit" id="send" class="octf-btn octf-btn-outline">Send Message</button></p>
                                        <div class="clear"></div>   
                                        <div class="error" id="err-form">There was a problem validating the form please check!</div>
                                        <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                        <div class="error" id="err-state"></div>
                                    </div> -->
                                <!-- </form> -->
                                <div class="clear"></div>
                                <div id="ajaxsuccess">Successfully sent!!</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                $map = get_field('location');
            ?>
            <div class="contact_map">
           
                    <iframe src="<?php echo $map; ?>" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
            </div>
        </div>

<?php
get_footer();
?>