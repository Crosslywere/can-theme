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
                    </section>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <span class="font-small copyright"><?php echo get_post_meta($post->ID, 'copyright', true);?></span>
                    </div>
                </div>
            </div>
            <?php endif; wp_reset_postdata();?>
        </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>