<?php if(have_posts()):;while(have_posts()):the_post();?>
<div class="col-lg-4 col-md-6 col-12 pb-4">
    <div class="row">
        <div style="width:100%;padding-bottom:calc(100% * (1000 / 750));margin:0 12px" class="col overflow-x-hidden mb-3 position-relative">
            <?php if(get_post_thumbnail_id()):?>
                <img src="<?php echo the_post_thumbnail_url('home-blog');?>" style="height:100%" class="position-absolute center-absolute-x">
            <?php endif;?>
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="font-semi-bold text-decoration-none"><?php the_date();?></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="font-black"><?php the_title();?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php the_excerpt();?>
            <a href="<?php echo the_permalink()?>" class="text-can-primary font-semi-bold text-decoration-none text-decoration-hover-underline">Read More</a>
        </div>
    </div>
</div>
<?php endwhile; endif;?>