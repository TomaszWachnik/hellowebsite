<?php get_header(); ?>

<?php

    the_archive_title( '<h1 class="article-title">', '</h1>' );

    if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>

        <div class="card">
            
            <div class="card-info">
                <p><?php echo get_the_date(); ?></p>
                
                <?php if( has_category() ) { ?>
                    <p><?php echo the_category( ' ' ); ?></p>
                <?php } ?>
                
            </div>

            <h2><?php the_title(); ?></h2>

            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="link">
                <button class="btn">
                    Czytaj artykuł
                </button></a>
        </div>

        <?php }

        the_posts_pagination();

    }
    ?>

<?php get_footer(); ?>