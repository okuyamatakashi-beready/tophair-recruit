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
        <section id="news" class="single__news">
            <div class="container mx-auto">
                <h2 class="flex">
                    <span>NEWS & TOPICS</span>
                </h2>
            </div>

        </section>
        <div class="post mx-auto">
            <div class="post__wrapper">
                <div class="ttl">
                    <span class="time">2023.05.08</span>
                    <h1><?php the_title();?></h1>
                </div>

                <div class="content">
                    <?php the_content();?>
                </div>
            </div>
        </div>

        <div class="post__pagenation">
            <div class="flex justify-center">
                <a href="" class="prev">前の記事へ <<</a>
                <a href="" class="backTopage">BACK</a>
                <a href="" class="next">>> 次の記事へ</a>
            </div>
        </div>




        <?php get_template_part('templates/parts/common-slider'); ?>

        <?php get_template_part('templates/footer-center'); ?>
    </div>

    <?php get_template_part('templates/parts/main-right'); ?>
</main>


<?php get_template_part('templates/footer'); ?>