<?php
/*
Template Name: Интеллектуальная собственность
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
    <!-- <section class="wrapper">
        <section class="intellectual-property" style="margin-top:20px;">
            <div class="content">
                <h2>Интеллектуальная собственность</h2>
                <p>
                    Наша компания активно работает над разработкой уникальных продуктов,
                    защищенных патентами и авторскими правами. Мы постоянно внедряем
                    инновации, чтобы обеспечить вам лучшие технологические решения.
                </p>
                <button class="btn-more">Подробнее</button>
            </div>
        
            <div class="gallery">
                <div class="gallery-item">
                    <img src="https://www.internauka.org/sites/default/files/images/primery/mol-ruk.png" alt="Интеллектуальная собственность 3">
                </div>
                <div class="gallery-item">
                    <img src="https://www.internauka.org/sites/default/files/images/primery/mol-ruk.png" alt="Интеллектуальная собственность 4">
                </div>
            </div>
        

            <div class="modal" id="modal">
                <span class="closeModal">&times;</span>
                <img class="modal-content" id="modal-img">
            </div>
        </section>
    </section> -->
<?php
    get_footer();
?>