<?php get_template_part('templates/header'); ?>
<main id="main">
    <?php get_template_part('templates/parts/main-left'); ?>
    <div class="mainCenter">
        <header id="header" class="w-full py-3.6 pl-2.8">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header_logo.svg" alt="" class="">
        </header>
        <!-- <div class="fixed__btn">
            <a href="" class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_img.jpg" alt="" class="btn">
            </a>`
            </a>
        </div> -->
        <section id="interview-page" class=" relative">
            <!-- <strong class="block absolute">Interview of</strong>
            <strong class="block absolute">TOPHAIR people</strong> -->
            <h1 class="mx-auto">
                INTERVIEW
                <span class="block"># インタビュー</span>
            </h1>
            <div class="interview__wrapper flex">
            <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                    $args = array(
                        'posts_per_page' => '12',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'post_type' => 'tophair-interview',
                    );
                    ?>
                    <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                <?php if ( $my_query->have_posts() ) :

                    while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                    <?php 
                        $mv = get_field('mv');
                        $job = get_field('job');
                        $year = get_field('year');
                        $school = get_field('school');
                        $name = get_field('name');
                        $salon = get_field('salon');
                        $name_en = get_field('name_en');
                    ?>
                    <?php
                    // ACFのテキストエリアの値を取得
                    $catch = get_field('catch'); 

                    // 改行で分割
                    $lines = explode("\n", trim($catch));

                    // 各行を <span> で囲む
                    $formatted_text = '';
                    foreach ($lines as $line) {
                        if (!empty(trim($line))) { // 空行を除外
                            $formatted_text .= '<span>' . nl2br(htmlspecialchars($line, ENT_QUOTES, 'UTF-8')) . '</span><br>';
                        }
                    }
                    ?>
                
                <div class="interview__content">
                    <a href="<?php the_permalink();?>">
                        <div class="interview__content--item">
                            <div class="thumb relative bg" style="background-image: url(<?php echo $mv;?>)">
                                <p>
                                    <?php echo $formatted_text; ?>
                                </p>
                            </div>

                            <div class="text mx-auto">
                                <div class="flex">
                                    <span><?php echo $year;?>｜</span>
                                    <span><?php echo $school;?>卒</span>
                                </div>
                                <p class="name"><?php echo $name;?>（<?php echo $salon;?>）</p>
                                <p class="furigana"><?php echo $name_en;?></p>
                            </div>

                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>	


            </div>

            <a href="" class="read_more mt-4">
                <span>ALL STORIES</span>
            </a>
        </section>



        <?php get_template_part('templates/parts/common-slider'); ?>

        <?php get_template_part('templates/footer-center'); ?>
    </div>

    <?php get_template_part('templates/parts/main-right'); ?>
</main>


<?php get_template_part('templates/footer'); ?>