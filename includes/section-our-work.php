<?php if(have_posts()):while(have_posts()):the_post()?>
<div class="col-12 col-md-6 col-lg-4 px-md-0 my-4" style="flex-shrink:2;min-height:calc(100% * (600 / 534));">
    <a href="<?php the_permalink();?>" class="text-decoration-none d-inline-block" style="height:calc(100% * (600 / 534));/**/background-image:url('<?php echo the_post_thumbnail_url()?>')">
        <div class="p-4">
            <h1 class="text-white font-black" style="text-shadow:1px 1px 0 rgb(0 0 0 / 60%)"><?php the_title();?></h1>
            <span class="text-white" style="text-shadow:1px 1px 0 rgb(0 0 0 / 60%)"><?php the_excerpt();?></span>
        </div>
    </a>
</div>
<?php endwhile; endif;?>
