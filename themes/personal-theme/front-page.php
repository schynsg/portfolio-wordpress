<?php

get_header();

?>

    <main class="index__main">
        <div class="index__intro">
            <div class="intro__svg">
                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 550"><defs><style>.cls-1{fill:#303031;}.cls-2{fill:none;}</style></defs><polygon id="item_5" class="cls-1" points="482.42 367.96 490.62 396.23 496.04 386.17 504.71 396.2 507.27 393.95 498.49 383.92 508.95 380.71 482.42 367.96"/><g id="item_4"><path class="cls-1" d="M107.1,128.49l8.73,6.79L113,140.8,99.44,128.64l2.58-5,20.56-1.32-3.12,6Z"/><path class="cls-1" d="M117.08,147.54,112.23,146l24.92-26.57L142,121Z"/><path class="cls-1" d="M146.72,140.75,138.06,134l2.85-5.49,13.43,12.12-2.58,5-20.46,1.36,3.12-6Z"/></g><g id="item_3"><path class="cls-1" d="M128.24,435.69l32-10.35-2.4-7.42s11.22-8.44,3.12-20.67c0,0-6.39-9.11-16-5.7a13.93,13.93,0,0,0-14.21-2.84c-8.84,2.86-9.86,10.19-9.86,10.19s-13.21,6.18-9.06,19c0,0,3.14,10.33,14.12,10.18Z"/><rect class="cls-1" x="129.58" y="433.27" width="33.5" height="6.93" transform="translate(-127.29 66.22) rotate(-17.92)"/></g><path id="item_2" class="cls-1" d="M523.24,76.05l-9.92,20s-4.73,8.48,5.32,15.16l-16.21,32.71-1.62-.81-9.88,20.15s-1.65,4.17,2.31,6.24,6.76-1.43,6.76-1.43l10.09-20.35-1.62-.81,16.43-33.13s7.92,5.21,15.21-4.13l10-20.27Zm-2.72,24.11-2.9-1.43,8.07-16.27,2.89,1.43Zm7.49,3.72-2.89-1.44,8.06-16.27,2.9,1.44Zm7.39,3.66-2.9-1.43,8.07-16.27,2.9,1.43Z"/><g id="item_1"><circle class="cls-1" cx="701.01" cy="462.7" r="18.43"/><path class="cls-1" d="M719,481.93a26.16,26.16,0,1,0-39.48-4.16l-.14-.15-3.14,2.86-1-1.08-11.8,11.13s-2.91,4,.16,7.22,6.93.73,6.93.73l12-11.34-.87-.92,3-2.93A26.17,26.17,0,0,0,719,481.93Zm-32-6a19.31,19.31,0,1,1,27.29.79A19.32,19.32,0,0,1,687,476Z"/></g><rect id="rect" class="cls-2" width="1300" height="550"/><g id="item_4-2" data-name="item_4"><path class="cls-1" d="M1195,175.44l8.73,6.79-2.86,5.52-13.53-12.16,2.59-5,20.55-1.32-3.11,6Z"/><path class="cls-1" d="M1205,194.49l-4.86-1.54,24.93-26.57,4.87,1.54Z"/><path class="cls-1" d="M1234.62,187.7l-8.67-6.79,2.86-5.49,13.43,12.12-2.59,5-20.45,1.36,3.11-6Z"/></g><path id="item_2-2" data-name="item_2" class="cls-1" d="M1209.44,415.64l-9.92,20s-4.73,8.48,5.32,15.16l-16.21,32.71-1.62-.81-9.88,20.15s-1.65,4.17,2.32,6.24,6.75-1.43,6.75-1.43l10.09-20.35-1.62-.8,16.43-33.14s7.93,5.21,15.21-4.13l10-20.27Zm-2.72,24.11-2.9-1.43,8.07-16.27,2.9,1.43Zm7.49,3.72-2.89-1.44,8.06-16.27,2.9,1.44Zm7.39,3.66-2.89-1.43,8.06-16.27,2.9,1.43Z"/><g id="item_3-2" data-name="item_3"><path class="cls-1" d="M1012.38,228.22l32-10.36-2.4-7.42s11.22-8.44,3.12-20.67c0,0-6.39-9.1-16-5.7,0,0-5.38-5.69-14.21-2.83s-9.86,10.19-9.86,10.19-13.21,6.18-9,19c0,0,3.13,10.34,14.11,10.18Z"/><rect class="cls-1" x="1013.72" y="225.8" width="33.5" height="6.93" transform="translate(-20.55 328.22) rotate(-17.92)"/></g><polygon id="item_5-2" data-name="item_5" class="cls-1" points="839.7 56.92 847.9 85.19 853.32 75.13 861.99 85.16 864.55 82.91 855.77 72.87 866.23 69.67 839.7 56.92"/></svg>
            </div>
            <div class="introduction">
                <div class="intro__text">
                    <h2 class="intro__h2 hidden">Introduction</h2>
                    <?php the_field('introduction_text'); ?>
                </div>
                <div class="intro__links">
                    <a href="#" class="intro__first-link">See my projects</a>
                    <a href="#" class="intro__second-link">Let's talk</a>
                </div>
            </div>
            <div class="background__pic">
                <img src="<?php echo get_theme_file_uri('/src/img/background.png'); ?>" alt="Goran Schyns">
            </div>
        </div>

        <?php

        $homePageAbout = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'about',
        ));

        while ($homePageAbout->have_posts()) {
            $homePageAbout->the_post(); ?>
            <div id="about" class="about">
                <div class="about__img">
                    <img src="<?php echo get_theme_file_uri('/src/img/cutlery.svg'); ?>" alt="Cutlery set" width="130" height="91">
                </div>
                <h2 class="hidden">About me</h2>
                <div class="about__text">
                    <div class="about__me">
                        <div>
                            <div class="title__rect">
                                <span class="title_top">But first, </span>
                                <h3>Who's Goran ?</h3>
                            </div>
                            <?php the_field('about_goran'); ?>
                        </div>
                    </div>
                    <div class="experience">
                        <div>
                            <div class="title__rect">
                                <span class="title_top">What about </span>
                                <h3>My experience</h3>
                            </div>
                            <ul>
                                <?php the_field('experience'); ?>
                            </ul>
                            <div class="experience__cta">
                                <a href="#">See my projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }  wp_reset_postdata(); ?>
    </main>

<?php

get_footer();

?>