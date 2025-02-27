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
        <section id="skill" class=" relative">

            <h1 class="mx-auto">
                SKILL UP
                <span class="block"># TOP HAIRの技術講習</span>
            </h1>

            <div class="skill__mv">
                <figure class="mx-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/first.png" alt="" class="mx-auto">
                </figure>

            </div>

            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/skillup.jpg" alt="" class="mx-auto">
            </figure>

            <div class="skillup__point">
                <div class="content">
                    <strong class="block">POINT</strong>

                    <div class="copy mx-auto">
                        <p>
                            毎月行われる<br>
                            トップヘアーミーティング
                        </p>
                    </div>

                    <p class="text">
                        技術力、人間力、営業力が<br>
                        身に付くカリキュラム。
                    </p>

                    <ul class="mx-auto">
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/skill_img01.jpg" alt="" class="mx-auto">
                                <figcaption class="relative">
                                    <p class="block relative text-center">
                                        <span class="absolute">01</span>
                                        オシャレの<br>
                                        パーソナルなレッスン
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/skill_img02.jpg" alt="" class="mx-auto">
                                <figcaption class="relative">
                                    <p class="block relative text-center">
                                        <span class="absolute">02</span>
                                        内外部講師による<br>
                                        ケアリスト勉強会
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/skill_img03.jpg" alt="" class="mx-auto">
                                <figcaption class="relative">
                                    <p class="block relative text-center">
                                        <span class="absolute">03</span>
                                        接客コミュニケーション力の<br>
                                        レッスン
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="academy">
                <figure class="ttl">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/academy_ttl.png" alt="" class="mx-auto">
                </figure>
                <div class="academy__wrapper mx-auto">
                    <div class="goodpoint__slider mx-auto relative">
                        <div class="swiper-wrapper">
                            <figure class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/academy_img01.jpg" alt="" class="w-full mx-auto">
                            </figure>
                            <figure class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/academy_img02.jpg" alt="" class="w-full mx-auto">
                            </figure>
                            <figure class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/academy_img03.jpg" alt="" class="w-full mx-auto">
                            </figure>
                            <figure class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skillup/academy_img04.jpg" alt="" class="w-full mx-auto">
                            </figure>

                        </div>

                        <div class="navigation absolute mb-4">
                            <div class="navigation__wrapper relative">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>

                    <div class="copy mx-auto">
                        <p>
                            新人スタッフは営業時間内に学べる、<br>
                            自社訓練校制度。
                        </p>
                    </div>

                    <p class="text mx-auto">
                    愛知県知事認定の職業訓練校です。自社アカデミーをTOP HAIR OFFICE内に併設しています。社内講師が常に在籍しているので美容師としての基礎をスピーディーにしっかり学べます。美容専門学校を卒業したスタッフだけでなく、高校を卒業して入社し、通信で美容学校に通いながら、美容師を目指すスタッフも多く在籍しています。
                    </p>
                </div>
            </div>
            
            <div class="min-container">
                <a href="" class="insta mx-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview/insta.jpg" alt="" class="mx-auto">
                </a>

                <div class="backto container mx-auto">
                    <a href="" class="backtoTop text-center block mx-auto">
                    TOP PAGEに戻る
                    </a>
                </div>
            </div>


            



        </section>



        <?php get_template_part('templates/parts/common-slider'); ?>

        <?php get_template_part('templates/footer-center'); ?>
    </div>

    <?php get_template_part('templates/parts/main-right'); ?>
</main>


<?php get_template_part('templates/footer'); ?>