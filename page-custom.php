<?php
/*
Template Name: Универсальная страница
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
<?php
get_footer();
?>