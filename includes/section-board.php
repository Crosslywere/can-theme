<?php if(have_posts()):while(have_posts()):the_post();?>
    <div class="row flex-md-row-reverse my-4">
        <div class="col-md-5 col-lg-3">
            <img src="<?php echo the_post_thumbnail_url();?>" width="100%" class="mb-3">
        </div>
        <div class="col-md-7 col-lg-9">
            <h3 class="p-3" style="border:1px solid black;width:fit-content"><?php the_title();?>, <?php echo get_post_meta($post->ID, 'position', true);?></h3>
            <p class="my-2"><i><?php echo get_post_meta($post->ID, 'time-frame', true);?></i></p>
            <?php the_content();?>
        </div>
    </div>
<?php endwhile; endif;?>