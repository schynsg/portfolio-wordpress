<?php

get_header();

?>

    <main class="contact__main">
        <div class="contact__title-rect">
            <h2 class="contact__title"><?php the_title(); ?></h2>
            <?php the_field('introduction_text'); ?>
        </div>
        <div class="contact__content">
            <div class="contact__links">
                <div class="link phone">
                    <h3>Phone</h3>
                    <span>0485486026</span>
                </div>
                <div class="link email">
                    <h3>E-mail</h3>
                    <span>schynsg@hotmail.com</span>
                </div>
                <div class="link adress">
                    <h3>Adress</h3>
                    <span>Kelmis</span>
                </div>
            </div>
            <div class="contact__form">
                <h3 class="hidden">Contact form</h3>
                <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>


            </div>
        </div>
    </main>

<?php

get_footer();

?>