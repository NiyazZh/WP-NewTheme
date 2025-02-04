<?php
    get_header();
?>
    <section id="about" class="wrapper">
        <section class="about-company">
            <div class="about-image">
                <img src="<?php the_field('about_img'); ?>" alt="О компании">
            </div>
            <div class="about-content">
                <h2>
                    <?php the_field('about_title'); ?>
                </h2>
                <p>
                    <?php the_field('about_descr'); ?>
                </p>
                <a href="<?php echo get_permalink('77'); ?>" class="btn-more">Подробнее</a>
            </div>
        </section>
    </section>
    <section id="team" class="wrapper">
        <h2>Команда разработчиков</h2>
        <div class="team_cards">
            <?php 
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'team',
                    'orderby'     => 'date',
                    'order'       => 'ASC', 
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );

                    // формат вывода the_title() ...
                     ?>
                        <div class="employee-card">
                            <div class="employee-photo">
                                <img src="<?php the_field('team_img') ?>" alt="Employee Photo">
                            </div>
                            <div class="employee-info">
                                <h2><?php the_field('team_name') ?></h2>
                                <p>Должность: <?php the_field('team_descr') ?></p>
                                <p>Email: <?php the_field('team_email') ?></p>
                            </div>
                        </div>  
                     <?php
                }

                wp_reset_postdata(); // сброс
            ?>
        </div>    
    </section>
    <section class="wrapper">
        <section class="intellectual-property">
            <div class="content">
                <h2>
                    <?php the_field('patent-title'); ?>
                </h2>
                <p>
                    <?php the_field('patent-descr'); ?>
                </p>
                <a href="<?php echo get_permalink('79'); ?>" class="btn-more">Подробнее</a>
            </div>
        
            <div class="gallery">
                <div class="gallery-item">
                    <img src="<?php the_field('patent-img-1'); ?>" alt="Сертификаты">
                </div>
                <div class="gallery-item">
                    <img src="<?php the_field('patent-img-2'); ?>" alt="Сертификаты">
                </div>
            </div>
        
            <!-- Модальное окно для увеличения изображения -->
            <div class="modal" id="modal">
                <span class="closeModal">&times;</span>
                <img class="modal-content" id="modal-img">
            </div>
        </section>
    </section>
<?php
    get_footer();
?>