<?php get_header(); ?>

<?php 
    while(have_posts()) {
        the_post(); ?>

        <div class="blogcontent">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>

        <?php if( has_tag() ) { ?>
            <p><?php echo the_tags(); ?></p>
        <?php } ?>

    <?php 
        if( comments_open() || get_comments_number() ) {
            comments_template();
        }

    } ?>

<?php get_footer(); ?>