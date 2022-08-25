<?php get_header();?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-auto">
                <h2 class="text-large font-black text-center my-4">The Team</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php get_template_part('includes/section', 'teams');?>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <?php the_posts_pagination();?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>