    <footer>
        <div class="container-fluid background-black text-white">
            <?php $the_query = new WP_Query(['post_type'=>'misc', 'name'=>'footer-content']);?>
            <?php if($the_query->have_posts()):$the_query->the_post();?>
            <div class="container pt-4 pb-5">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-auto py-4">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_post_meta($post->ID, 'alt logo', true);?>"></a>
                    </div>
                </div>
                <div class="row justify-content-around justify-content-lg-between py-3">
                    <section id="contact" class="col-lg-3 col-md-5 mb-3">
                        <h4 class="text-center"><strong>Contact</strong></h4>
                        <p><a href="<?php echo get_post_meta($post->ID, 'message link', true);?>" class="text-white">Click here to send us a message</a></p>
                        <br>
                        <p>Email us at <a href="mailto:<?php echo get_post_meta($post->ID, 'contact mail', true);?>" class="text-white lh-5"><?php echo get_post_meta($post->ID, 'contact mail', true);?></a></p>
                        <br>
                        <h5><strong>Write us at</strong></h5>
                        <?php echo get_post_meta($post->ID, 'po box', true);?>
                        <br>
                        <br>
                        <h5><strong>Physical address</strong></h5>
                        <?php echo get_post_meta($post->ID, 'address', true);?>
                    </section>
                    <section id="connect"class="col-lg-3 col-md-5 mb-3">
                        <h4 class="text-center"><strong>Connect</strong></h4>
                        <p class="text-center">Sign up for monthly updates</p>
                        <br>
                        <?php get_template_part('includes/form', 'connect');?>
                    </section>
                    <section id="support" class="col-lg-3 col-md-5 mb-3">
                        <h4 class="text-center"><strong>Support</strong></h4>
                        <p class="text-center lh-5"><?php echo get_post_meta($post->ID, 'support message', true);?></p>
                        <div class="d-flex justify-content-center"><a href="#" class="button"><strong>DONATE</strong></a></div>
                        <div class="row justify-content-around pt-4">
                            <div class="col-auto">
                                <?php $facebook = get_post_meta($post->ID, 'facebook', true);
                                if($facebook):?>
                                    <a href="<?php echo $facebook?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/icons/facebook.svg" alt="facebook"></a>
                                <?php endif;?>
                            </div>
                            <div class="col-auto">
                                <?php $twitter = get_post_meta($post->ID, 'twitter', true);
                                if($twitter):?>
                                    <a href="<?php echo $twitter?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/icons/twitter.svg" alt="twitter"></a>
                                <?php endif;?>
                            </div>
                            <div class="col-auto">
                                <?php $instagram = get_post_meta($post->ID, 'instagram', true);
                                if($instagram):?>
                                    <a href="<?php echo $instagram?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/icons/instagram.svg" alt="instagram"></a>
                                <?php endif;?>
                            </div>
                            <div class="col-auto">
                                <?php $youtube = get_post_meta($post->ID, 'youtube', true);
                                if($youtube):?>
                                    <a href="<?php echo $youtube?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/icons/youtube.svg" alt="youtube"></a>
                                <?php endif;?>
                            </div>
                            <div class="col-auto">
                                <?php $linkedin = get_post_meta($post->ID, 'linkedin', true);
                                if($linkedin):?>
                                    <a href="<?php echo $linkedin?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/icons/linkedin.svg" alt="linkedin"></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p class="font-small text-center mb-0"><?php echo get_post_meta($post->ID, 'copyright', true);?></p>
                    </div>
                </div>
            </div>
            <?php endif; wp_reset_postdata();?>
        </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>