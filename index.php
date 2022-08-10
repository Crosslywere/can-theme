<?php get_header();?>
<main>
    <?php if(is_page('Home')):?>
        <div class="container-fluid hero-img" style="background-image:url('<?php echo get_post_meta($post->ID, 'hero image', true);?>')">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-lg-6 col-md-9 hero-text">
                        <span class="text-white"><?php the_content();?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col py-4">
                    <p class="font-large font-bold text-center lh-3"><?php echo get_post_meta($post->ID, 'excerpt', true);?></p>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-lg-3 col-md-4 col-12 pb-3">
                    <div class="text-center"><strong><?php echo get_post_meta($post->ID, 'title 1', true);?></strong></div>
                    <div class="font-larger font-bold text-center lh-1"><?php echo get_post_meta($post->ID, 'value 1', true);?></div>
                </div>
                <div class="col-lg-3 col-md-4 col-12 pb-3">
                    <div class="text-center"><strong><?php echo get_post_meta($post->ID, 'title 2', true);?></strong></div>
                    <div class="font-larger font-bold text-center lh-1"><?php echo get_post_meta($post->ID, 'value 2', true);?></div>
                </div>
                <div class="col-xl-3 col-lg-auto col-md-auto col-12 pb-3">
                    <div class="text-center"><strong><?php echo get_post_meta($post->ID, 'title 3', true);?></strong></div>
                    <div class="font-larger font-bold text-center lh-1"><?php echo get_post_meta($post->ID, 'value 3', true);?></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <hr>
                <?php $the_query = new WP_Query(['post_type'=>'misc', 'name'=>'what-we-do']);?>
                <?php if($the_query->have_posts()):$the_query->the_post();?>
                    <div class="col-md-11 py-4">
                        <span class="font-big text-center lh-2">
                            <?php the_content();?>
                        </span>
                    </div>
                <?php endif; wp_reset_postdata();?>
            </div>
            <div class="row py-5">
                <div class="col-12">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col col-md-4">
                            <h2 class="font-large font-bold">What is happening right now</h2>
                        </div>
                        <hr class="my-0 z-index-under">
                    </div>
                    <?php $the_query = new WP_Query(['category_name'=>'blog', 'posts_per_page'=>4]);?>
                    <div class="row text-black">
                        <?php if($the_query->have_posts()):;while($the_query->have_posts()):$the_query->the_post();?>
                            <div class="col-lg-3 col-md-6 col-12 pb-4">
                                <a href="<?php echo the_permalink();?>"  class="text-dark text-decoration-none text-decoration-hover-underline">
                                    <div class="row">
                                        <div style="width:100%;padding-bottom:calc(100% * (1000 / 750));" class="col position-relative">
                                            <?php if(get_post_thumbnail_id()):?>
                                                <img src="<?php echo the_post_thumbnail_url('home-blog');?>" style="width:calc(100% - 24px)" class="center-absolute-y position-absolute">
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php $tags = get_the_tags($post->ID);?>
                                        <?php if($tags):foreach($tags as $tag):?>
                                            <div class="col-auto pe-1 mb-2">
                                                <div class="tag font-small"><?php echo $tag->name;?></div>
                                            </div>
                                        <?php endforeach; endif;?>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="font-medium text-decoration-none mb-0"><?php the_date();?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mt-2">
                                            <h5 class="font-black"><?php the_title();?></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; endif;?>
                    </div>
                    <div class="row justify-content-center justify-content-md-start">
                        <hr class="my-0">
                        <div class="col-auto">
                            <a href="<?php echo get_category_link(get_cat_id('Blog'));?>" class="font-bold text-dark text-decoration-none text-decoration-hover-underline">More of the latest updates</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif(is_page('About Us')):?>
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h2 class="text-large font-black text-center mb-4"><?php the_title();?></h2>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    <?php endif;?>
</main>
<?php get_footer();?>