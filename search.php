<?php get_header(); ?>





<?php

    if( have_posts() ) { ?>

        <h3>Wyniki wyszukiwania dla frazy '<?php echo get_search_query(); ?>' </h3>

        <?php
        while( have_posts() ) {
            the_post(); ?>


            <div class="card">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="link"><button class="btn">Czytaj artykuł</button></a>
            </div>



        <?php }

    } else { ?>

            <h3>Ups, jeszcze nic nie napisałem na temat '<?php echo get_search_query(); ?>' </h3>

    <?php } ?>

    <?php get_footer(); ?>