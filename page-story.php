<?php get_template_part('templates/header'); ?>
<main id="main">
    <div class="mainLeft fixed">
        <div class="relative">
            <div class="mainLeft__inner pt-17 relative">
                <div class="mainLeft__inner--content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="mainLeft__inner--logo mb-6 pl-12">
                    <div class="mainLeft__slider relative mb-10">
                        <strong class="block text-5 font-normal absolute">
                            わたしより、<br>
                            わたしを<br>
                            信じてくれる<br>
                            人がいる。
                        </strong>
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide bg"></div>
                                <div class="swiper-slide bg"></div>
                                <div class="swiper-slide bg"></div>
                                <div class="swiper-slide bg"></div>
                                <div class="swiper-slide bg"></div>
                                <div class="swiper-slide bg"></div>
                                <div class="swiper-slide bg"></div>
                                <div class="swiper-slide bg"></div>
                                <div class="swiper-slide bg"></div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="mainLeft__sns">
                <span class="text-[11px] block">FOLLOW US｜</span>
                <ul class="flex items-center justify-center">
                    <li>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-icon.svg" alt="" class=""></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube-icon.svg" alt="" class=""></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-icon.svg" alt="" class=""></a>
                    </li>
                </ul>

                <small class="block">©︎TOPHAIR All Rights Reserved</small>
            </div>
        </div>
    </div>

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
        <div id="page__mv" class="relative w-full mb-20">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about_mv.png" alt="" class="mr-auto">
            </figure>
            <p class="mx-auto">
                お客様にとって。地域にとって。<br>
                そして、スタッフにとって。<br>
                一番のお店であること。<br>
                TOPHAIRのTOPは、その決意の表れです。
            </p>
        </div>

        <div class="movie container">
            <figure class="mb-7">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/movie_thumb.jpg" alt="" class="mx-auto w-full">
            </figure>

        </div>

        <div class="challenge">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/challenge.jpg" alt="" class="w-full">
            </figure>
            <div class="container-l">
                <span class="block mb-3">
                    どうすれば、<br>
                    スタッフ一人ひとりが<br>
                    自分の可能性を信じ抜けるだろう。
                </span>
                <p>
                    人は、夢を叶えられる。私たちはそう信じています。<br>
                    ここにいる一人ひとりが、それを証明してきたからです。<br>
                    ただ、私はできる、と思えるまでに時間がかかるだけ。<br>
                    だから。スタッフが自分を信じられるようにサポートすること。<br>
                    それが、これからも変わらないTOPHAIRの挑戦です。
                </p>
            </div>
        </div>

        <div class="recruiter pt-5 pb-6">
            <h2 class="text-center mb-3">
                <p class=" font-bold">RECRUITER</p>
                <span># TOP HAIR 採用担当</span>
            </h2>

            <figure class="text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/recruiter.png" alt="" class="w-full mx-auto">
                <figcaption>
                    <p>
                        水本枝里
                        <span class="block">Eri Mizumoto</span>
                    </p>
                    <ul>
                        <li>〇〇〇〇〇〇学校卒</li>
                        <li>2006年入社／TOP HAIR HILLS</li>
                    </ul>
                </figcaption>
            </figure>
        </div>

        <?php get_template_part('templates/parts/message'); ?>

        <div class="company">
            <div class="container">
                <h2 class="text-center">COMPANY</h2>
                <dl class="flex">
                    <dt>［代表者］</dt>
                    <dd>石川 昭</dd>
                </dl>
                <dl class="flex">
                    <dt>［設立］</dt>
                    <dd>平成元年（1989年）</dd>
                </dl>
                <dl class="flex">
                    <dt>［資本金］</dt>
                    <dd>1,000万円</dd>
                </dl>
                <dl class="flex">
                    <dt>［従業員数］</dt>
                    <dd>100名（2023年現在）</dd>
                </dl>
                <dl class="flex">
                    <dt>［本社］</dt>
                    <dd>〒472-0056　愛知県知立市宝3-5-1</dd>
                </dl>
                <dl class="flex">
                    <dt>［TEL］</dt>
                    <dd>0566-95-8383</dd>
                </dl>
                <dl class="flex">
                    <dt>［FAX］</dt>
                    <dd>0566-95-8386</dd>
                </dl>
                <dl class="flex">
                    <dt>［URL］</dt>
                    <dd>tophair.jp</dd>
                </dl>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18295.027175483207!2d137.01703430277547!3d35.008310614774246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60049c4dd574c4ad%3A0x6cdc8db692a736eb!2z44CSNDcyLTAwNTYg5oSb55-l55yM55-l56uL5biC5a6d77yT5LiB55uu77yV4oiS77yR!5e0!3m2!1sja!2sjp!4v1739138305153!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="" class="block">[ Google Map<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/map-icon.svg" alt="" class="">]</a>
                </div>
            </div>
        </div>

        <div class="contact">
            <div class="container">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-img.jpg" alt="" class="w-full">
                </figure>
                <h3 class="ttl">
                    # お問い合わせ
                    <span>CONTACT</span>
                </h3>

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

        <?php get_template_part('templates/parts/common-slider'); ?>

        <?php get_template_part('templates/footer-center'); ?>
    </div>

    <?php get_template_part('templates/parts/main-right'); ?>
</main>


<?php get_template_part('templates/footer'); ?>