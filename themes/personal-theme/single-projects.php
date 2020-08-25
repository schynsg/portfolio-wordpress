<?php

get_header();

?>

    <main class="project__main">
        <div class="project__intro">
                <div class="intro__title">
                    <span class="title_top">Let's discover </span>
                    <h2><?php the_field('name'); ?></h2>
                </div>
            <div class="intro__content">
                <div class="intro__left">
                    <img src="<?php the_field('vignette'); ?>" alt="<?php the_field('name'); ?> - Thumbnail" width="300" height="300">
                </div>
            <div class="intro__right">
                <div class="intro__text">
                    <?php the_field('about_text'); ?>
                </div>
                <div class="intro__links">
                    <a href="<?php the_field('site_link'); ?>" class="intro__first-link">Visit the website</a>
                    <a href="<?php the_field('github_link'); ?>" class="intro__second-link">Github</a>
                </div>
            </div>
            </div>
        <div class="project__overview">
            <div class="overview__title">
                <h2>Project overview</h2>
            </div>
            <div class="overview__img">
                <img src="<?php the_field('project_image'); ?>" alt="<?php the_field('name'); ?> - Overview" height="1450" width="1000">
            </div>
        </div>
    </main>

<?php

get_footer();

?>