<section class="wrapper">
        <section class="contacts-section">
            <div class="container">
              <div class="contacts-info">
                <h2>Контакты</h2>
                <p><?php the_field('contact_descr') ?></p>
                <p><strong>Телефон:</strong> <?php the_field('contact_phone', 2) ?></p>
                <p><strong>Email:</strong> <?php the_field('contact_email', 2) ?></p>
                <p><strong>Адрес:</strong> <?php the_field('contact_adress', 2) ?></p>
                <!-- <div class="social-media">
                  <h3>Мы в соцсетях:</h3>
                  <a href="#" class="social-icon">Facebook</a>
                  <a href="#" class="social-icon">Instagram</a>
                  <a href="#" class="social-icon">Twitter</a>
                </div> -->
              </div>
          
            <div class="contacts-map">
                <?php echo do_shortcode(get_field('map', 2)); ?>
              </div>
            </div>
          </section>          
    </section>
    <button id="scroll-to-top" class="scroll-to-top">&#8679;</button>
    <?php 
        wp_footer();
    ?>
</body>
</html>