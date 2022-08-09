<?php get_header();?>
<hr class="position-sticky d-none d-lg-block my-0">
<main>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row mb-4">
                    <div class="col-auto">
                        <h2 class="font-black lh-2"><?php the_title();?></h2>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <?php if(get_post_thumbnail_id()):?>
                            <img src="<?php echo get_the_post_thumbnail_url();?>" width="100%">
                        <?php endif;?>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col inner-header-black">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>
