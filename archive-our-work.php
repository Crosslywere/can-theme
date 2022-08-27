<?php get_header();?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <?php $the_query = new WP_Query(['post_type'=>'misc', 'name'=>'our-work']);?>
            <?php if($the_query->have_posts()): $the_query->the_post();?>
                <div class="col col-md-9 col-lg-7">
                    <h2 class="text-can-primary text-center mt-3 mb-4 font-black"><?php the_title();?></h2>
                    <?php the_content();?>
                </div>
            <?php endif; wp_reset_postdata();?>
        </div>
        <div class="row px-0 my-5 d-table">
            <?php get_template_part('includes/section', 'our-work');?>
        </div>
    </div>
</main>
<?php get_footer();?>
