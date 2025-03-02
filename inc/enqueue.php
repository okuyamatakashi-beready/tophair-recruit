<?php
function theme_enqueue_scripts() {
    wp_enqueue_style(
        'main-css',
        get_template_directory_uri() . '/assets/css/dist/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/dist/main.css')
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
    wp_enqueue_script(
        'sub-js',
        get_template_directory_uri() . '/assets/js/sub.js',
        [],
        filemtime(get_template_directory() . '/assets/js/sub.js'),
        true
    );
    if (is_page('concept')) { // ページスラッグが 'about' の場合
        wp_enqueue_style(
            'concept-css',
            get_template_directory_uri() . '/assets/css/dist/concept.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/concept.css')
        );

        // wp_enqueue_script(
        //     'about-js',
        //     get_template_directory_uri() . '/assets/js/about.js',
        //     [],
        //     filemtime(get_template_directory() . '/assets/js/about.js'),
        //     true
        // );
    }
    if (is_page('menu')) { // ページスラッグが 'about' の場合
        wp_enqueue_style(
            'menu-css',
            get_template_directory_uri() . '/assets/css/dist/menu.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/menu.css')
        );

    }
    if (is_page('about')) { // ページスラッグが 'about' の場合
        wp_enqueue_style(
            'about-css',
            get_template_directory_uri() . '/assets/css/dist/about.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/about.css')
        );

    }
    if (is_page('news')) { // ページスラッグが 'news' の場合
        wp_enqueue_style(
            'news-css',
            get_template_directory_uri() . '/assets/css/dist/news.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/news.css')
        );

    }
    if (is_page('story')) { // ページスラッグが 'gallery' の場合
        wp_enqueue_style(
            'story-css',
            get_template_directory_uri() . '/assets/css/dist/story.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/story.css')
        );

    }

    if (is_page('interview')) { // ページスラッグが 'faq' の場合
        wp_enqueue_style(
            'interview-css',
            get_template_directory_uri() . '/assets/css/dist/interview.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/interview.css')
        );

    }
    if (is_page('crosstalk')) { // ページスラッグが 'faq' の場合
        wp_enqueue_style(
            'crosstalk-css',
            get_template_directory_uri() . '/assets/css/dist/crosstalk.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/crosstalk.css')
        );

    }
    if (is_page('feature')) { // ページスラッグが 'faq' の場合
        wp_enqueue_style(
            'feature-css',
            get_template_directory_uri() . '/assets/css/dist/feature.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/feature.css')
        );

    }
    if (is_page('skill')) { // ページスラッグが 'faq' の場合
        wp_enqueue_style(
            'skill-css',
            get_template_directory_uri() . '/assets/css/dist/skill.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/skill.css')
        );

    }
    if (is_page('recruit')) { // ページスラッグが 'faq' の場合
        wp_enqueue_style(
            'recruit-css',
            get_template_directory_uri() . '/assets/css/dist/recruit.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/recruit.css')
        );

    }
    if (is_page('contact')) { // ページスラッグが 'faq' の場合
        wp_enqueue_style(
            'recruit-css',
            get_template_directory_uri() . '/assets/css/dist/recruit.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/recruit.css')
        );

    }
    if (is_page('news')) { // ページスラッグが 'faq' の場合
        wp_enqueue_style(
            'news-css',
            get_template_directory_uri() . '/assets/css/dist/news.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/news.css')
        );

    }

    if (is_singular('tophair-interview')) { // ページスラッグが 'faq' の場合
        wp_enqueue_style(
            'interview-css',
            get_template_directory_uri() . '/assets/css/dist/interview.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/interview.css')
        );

    }
    $episode_pages = ['episode1', 'episode2', 'episode3', 'episode4', 'episode5', 'episode6', 'episode7', 'episode8', 'episode9'];

    if (is_page($episode_pages)) {
        wp_enqueue_style(
            'story-css',
            get_template_directory_uri() . '/assets/css/dist/story.css',
            [],
            filemtime(get_template_directory() . '/assets/css/dist/story.css')
        );
    }
    
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

