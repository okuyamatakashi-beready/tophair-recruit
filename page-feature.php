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
        <section id="feature" class=" relative">

            <h1 class="mx-auto">
                FEATURE
                <span class="block"># TOP HAIRの特徴</span>
            </h1>

            <div class="feature__mv">
                <div class="container-l relative mx-auto">
                    <div class="mv__catch mx-auto">
                        <p>
                            <span>あなたの力を</span> <br>
                            <span>最大限発揮できる</span> <br>
                            <span>最高の環境が</span> <br>
                            <span>ここにあります</span>
                        </p>
                    </div>

                    <div class="container mx-auto">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/feature_mv.png" alt="" class="mx-auto">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="skill__wrapeer">
                <strong class="ttl block text-center">-THREE SKILL-</strong>
            </div>


            



            <a href="" class="insta mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview/insta.jpg" alt="" class="mx-auto">
            </a>

            <div class="backto container">
                <a href="" class="backtoTop text-center block mx-auto">
                TOP PAGEに戻る
                </a>
            </div>
        </section>



        <?php get_template_part('templates/parts/common-slider'); ?>

        <?php get_template_part('templates/footer-center'); ?>
    </div>

    <?php get_template_part('templates/parts/main-right'); ?>
</main>


<?php get_template_part('templates/footer'); ?>