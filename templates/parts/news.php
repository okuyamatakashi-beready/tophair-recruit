<section id="news">
    <div class="container mx-auto">
        <h2 class="flex">
            <span>NEWS & TOPICS</span>
            <a href="">ALL POSTS</a>
        </h2>
    </div>
    <div class="news__wrapper mx-auto">
        <ul>

        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
            $args = array(
                'posts_per_page' => '6',
                'post_status' => 'publish',
                'paged' => $paged,
                'post_type' => 'post',
            );
            ?>
            <?php $my_query = new WP_Query( $args ); ?>

                <?php if ( $my_query->have_posts() ) :

                    while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
            <li class="pb-2.3">
                <a href="<?php the_permalink(); ?>">
                    <span><?php the_date('Y.m.d'); ?></span>
                    <h3><?php the_title(); ?></h3>
                </a>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>	

        </ul>
    </div>
</section>
