<?php get_header();?>
<main>
    <div class="container">
        <div class="row py-5">
            <?php get_template_part('includes/section', 'archive');?>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <?php the_posts_pagination();?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>