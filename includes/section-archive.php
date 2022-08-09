<?php if(have_posts()):;while(have_posts()):the_post();?>
<div class="col-lg-4 col-md-6 col-12 pb-4">
    <div class="row">
        <div style="width:100%;padding-bottom:calc(100% * (1000 / 750));" class="col position-relative">
            <?php if(get_post_thumbnail_id()):?>
                <img src="<?php echo the_post_thumbnail_url('home-blog');?>" style="width:calc(100% - 24px)" class="position-absolute center-absolute-y">
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
</div>
<?php endwhile; endif;?>