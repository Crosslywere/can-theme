<?php $team_id = 0;?>
<?php if(have_posts()):while(have_posts()):the_post();?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-12 my-4">
        <div class="row">
            <div class="col" style="">
                <?php if(get_post_thumbnail_id()):?>
                    <img src="<?php echo get_the_post_thumbnail_url();?>" width="100%" class="z-index-under">
                <?php endif;?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <h4 class="text-center text-dark"><?php the_title();?></h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <p class="text-dark text-center"><?php echo get_post_meta($post->ID, 'position', true);?><br><?php echo get_post_meta($post->ID, 'team-group', true);?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="<?php echo get_post_meta($post->ID, 'linkedin', true);?>" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/icons/linkedin.dark.svg"></a>
            </div>
            <div class="col-auto">
                <a onclick="show('id-<?php echo $team_id;?>')"><img src="<?php echo get_template_directory_uri();?>/assets/icons/profile.svg"></a>
            </div>
        </div>
    </div>
    <div class="position-fixed d-none d-flex align-items-center justify-content-center profile" id="id-<?php echo $team_id;?>" style="width:100vw;height:calc(100vh - 124px);bottom:0;background-color:rgba(0,0,0,0.4)">
        <div class="container bg-white py-4 position-relative" style="max-height:calc(100vh - 268px);overflow-y:scroll;">
            <a class="z-index-top close"><img src="<?php echo get_template_directory_uri();?>/assets/icons/close.svg" class="position-absolute" style="top:0;right:0;"></a>
            <div class="row">
                <div class="col-md-4 col-12 pe-md-4 py-4">
                    <img src="<?php echo the_post_thumbnail_url();?>" width="100%">
                </div>
                <div class="col ps-md-4">
                    <h3><?php the_title();?></h3>
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
    <?php $team_id += 1;?>
<?php endwhile; endif;?>