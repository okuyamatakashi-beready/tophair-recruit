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
        <?php get_template_part('templates/parts/news'); ?>



        <?php get_template_part('templates/parts/common-slider'); ?>

        <?php get_template_part('templates/footer-center'); ?>
    </div>

    <?php get_template_part('templates/parts/main-right'); ?>
</main>


<?php get_template_part('templates/footer'); ?>