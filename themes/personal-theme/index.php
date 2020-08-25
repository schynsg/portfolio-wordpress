<?php

get_header();

?>

    <main class="projects__main">
        <div class="projects__title-rect">
            <h2 class="projects__title">My projects</h2>
            <p>Let me show you some of my projects.</p>
        </div>
        <div class="projects">
            <?php

            $projects = new WP_Query(array(
                'posts_per_page' => 9,
                'post_type' => 'projects',
            ));

            while ($projects->have_posts()) {
                $projects->the_post(); ?>
            <div class="project">
                <a class="project__link" href="<?php the_permalink(); ?>" itemscope itemtype="http://schema.org/Product" title="<?php the_field('name'); ?>">
                    <figure itemprop="image">
                        <img src="<?php the_field('vignette'); ?>" alt="<?php the_field('name'); ?> - Thumbnail" width="300" height="300">
                        <figcaption class="overlay">
                            <h3 class="project__link-title" itemprop="name"><?php the_field('name'); ?></h3>
                            <span class="project__link-discover">Discover</span>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <?php }  wp_reset_postdata(); ?>
        </div>
    </main>

<?php

get_footer();

?>