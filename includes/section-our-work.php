<?php if(have_posts()):while(have_posts()):the_post()?>
<a href="<?php the_permalink();?>" class="text-decoration-none col-12 col-md-6 col-lg-4 px-md-0 d-inline-block" style="height:calc(100% * (600 / 534));background-image:url('<?php echo the_post_thumbnail_url()?>')">
    <div class="p-4 mt-5">
        <h1 class="text-white font-black"><?php the_title();?></h1>
        <span class="text-white"><?php the_excerpt();?></span>
    </div>
</a>
<?php endwhile; endif;?>
