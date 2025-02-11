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
        <div class="story__wrapper">

            <div class="container mx-auto">
                <div class="episode__wrapper">
                    <figure class="episode__mv">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story/episode1-mv.png" alt="" class="w-full mx-auto">
                        <figcaption>
                            <p>
                                美容学校で寝てばかりいた僕が、<br>
                                いま専務をしているなんて。
                            </p>
                        </figcaption>
                    </figure>

                    <div class="profile flex justify-start items-center">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/episode/episode01-face.png" alt="" class="w-full mx-auto">
                        </figure>
                        <ul>
                            <li>
                            1994年入社<br>
                            中部美容尃門学校名古屋校卒
                            </li>
                            <li>中内 研二（TOP HAIR 専務）</li>
                        </ul>
                    </div>

                    <div class="episode__text">
                        <p>
                        美容学校時代、自転車で通学していたら輝いて見えたサロンがTOP HAIRでした。入口から見える社長のカットする姿がカッコ良くて「ここ受けたい」と思ったのが入社のきっかけ。授業で寝てばかりいたので、入社当時の自分に「将来専務になるよ」と言っても信じないでしょうね。信じて育ててくれた社長、副社長のおかげです。
                        </p>
                    </div>

                    
                </div> 

            </div>
        </div>

        <div class="episode__img relative">
            <figure class="mx-auto relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/episode/episode01-img.jpg" alt="" class="w-full mx-auto">
            </figure>
        </div>

        <div class="our__story relative">
            <div class="vertical">
                <span class="">OUR STORY</span>
            </div>

            <div class="container">
                <strong class="block mx-auto">
                    わたしより、<br>
                    わたしを<br>
                    信じてくれる<br>
                    人がいる。
                </strong>

                    <p class="text mx-auto leading-loose mb-7">
                        あなたなら、できるよ。<br>
                        ここには、どこまでも自分を信じ、<br>
                        見守り、声をかけてくれる人がいる。<br>
                        そんな人たちとのエピソードをすこしご紹介します。
                    </p>
                    
                    <div class="epi__slider swiper">
                        <div class="swiper-wrapper">
                            <div class="epi epi01 swiper-slide">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/epi01.jpg" alt="" class="w-full">
                                </figure>
                                <div class="epi__text">
                                    <span class="block">
                                        美容学校で寝てばかりいた僕が、<br>
                                        いま専務をしているなんて。
                                    </span>
                                    <p>
                                        1994年入社｜中部美容尃門学校名古屋校卒<br>
                                        中内 研二（TOP HAIR 専務）
                                    </p>
                                </div>
                            </div>
                            <div class="epi epi02 swiper-slide">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/epi02.jpg" alt="" class="w-full">
                                </figure>
                                <div class="epi__text">
                                    <span class="block mb-3">
                                        美容学校で寝てばかりいた僕が、<br>
                                        いま専務をしているなんて。
                                    </span>
                                    <p>
                                        1994年入社｜中部美容尃門学校名古屋校卒<br>
                                        中内 研二（TOP HAIR 専務）
                                    </p>
                                </div>
                            </div>
                            <div class="epi epi02 swiper-slide">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/epi03.jpg" alt="" class="w-full">
                                </figure>
                                <div class="epi__text">
                                    <span class="block mb-3">
                                        美容学校で寝てばかりいた僕が、<br>
                                        いま専務をしているなんて。
                                    </span>
                                    <p>
                                        1994年入社｜中部美容尃門学校名古屋校卒<br>
                                        中内 研二（TOP HAIR 専務）
                                    </p>
                                </div>
                            </div>
                            <div class="epi epi02 swiper-slide">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/epi04.jpg" alt="" class="w-full">
                                </figure>
                                <div class="epi__text">
                                    <span class="block mb-3">
                                        美容学校で寝てばかりいた僕が、<br>
                                        いま専務をしているなんて。
                                    </span>
                                    <p>
                                        1994年入社｜中部美容尃門学校名古屋校卒<br>
                                        中内 研二（TOP HAIR 専務）
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="navigation mb-4">
                            <div class="navigation__wrapper relative">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        
                    </div>
                    <a href="" class="read_more mt-4">
                        <span>ALL STORIES</span>
                    </a>


            </div>

        </div>


        <?php get_template_part('templates/parts/common-slider'); ?>

        <?php get_template_part('templates/footer-center'); ?>
    </div>

    <?php get_template_part('templates/parts/main-right'); ?>
</main>


<?php get_template_part('templates/footer'); ?>