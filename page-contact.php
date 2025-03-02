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


        <section id="contact" class="sec">
            <h2>
                <p>CONTACT</p>
                <span># お問い合わせ</span>
            </h2>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.png" alt="" class="w-full mx-auto">
            </figure>

        </section>

        <div class="contact">
            <div class="container">

                <p class="fonm__text">
                    フォームからのお問い合わせ
                    <span>※の項目は必須入力項目です。</span>
                </p>

                <div class="form__wrapper">
                    <?php echo do_shortcode('[contact-form-7 id="1376" title="tophair リクルートサイト"]'); ?>

                </div>
            </div>
        </div>

        <?php get_template_part('templates/parts/tel'); ?>
        
        <div class="backto container">
            <a href="" class="backtoTop text-center block">
            TOP PAGEに戻る
            </a>
        </div>

        <?php get_template_part('templates/parts/news'); ?>



        <?php get_template_part('templates/parts/common-slider'); ?>

        <?php get_template_part('templates/footer-center'); ?>
    </div>

    <?php get_template_part('templates/parts/main-right'); ?>
</main>


<?php get_template_part('templates/footer'); ?>