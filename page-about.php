<?php
/*
Template Name: О платформе
*/
?>

<?php
    get_header();
?>
        <section class="wrapper">
            <div class="content-area">
            <?php  
            if ( function_exists('bcn_display') ) {
                echo '<div class="breadcrumbs" style="margin-top:20px; margin-bottom: 30px;">';
                bcn_display();
                echo '</div>';
            }
            ?>
                <main class="site-main">
                    <?php
                    // The WordPress Loop: Load content from the editor
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    ?>
                </main>
            </div>
        </section>
    <!-- <section id="about" class="wrapper">
        <section class="about-company">
            <div class="about-image">
                <img src="<?php the_field('about_img', 2); ?>" alt="О компании">
            </div>
            <div class="about-content">
                <h2>
                    <?php the_field('about_title', 2); ?>
                </h2>
                <p>
                    <?php the_field('about_descr', 2); ?>
                </p>
            </div>
        </section>
    </section> -->
<?php
    get_footer();
?>