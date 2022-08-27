<?php get_header();?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <?php $the_query = new WP_Query(['post_type'=>'misc', 'name'=>'board-of-directors']);?>
            <?php if($the_query->have_posts()):$the_query->the_post();?>
                <div class="col col-md-9 col-lg-7">
                    <h2 class="text-can-primary text-center font-black my-4"><?php the_title();?></h2>
                    <?php the_content();?>
                </div>
            <?php endif; wp_reset_postdata();?>
        </div>
        <?php get_template_part('includes/section', 'board');?>
        <div class="row justify-content-end">
            <div class="col-auto">
                <?php the_posts_pagination();?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>