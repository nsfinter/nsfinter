    <footer class="site-footer">
        <div class="main-footer">
            <div class="main-footer-content">

                <?php
                wp_nav_menu( array( 
                    'theme_location' => 'footer-menu',
                    'container_class' => 'fnav'
                ) ); 
                ?>  

            </div>
            <div class="sub-footer-content">
                <div class="site-info">
                    <p><a href="<?php echo esc_url(home_url('/')); ?>privacy/">プライバシーポリシー</a></p>
                    <small>&copy; <?php bloginfo('name'); ?></small>
                </div>
            </div>
        </div>
        <a class="pagetop" href="#"><div class="pagetop-arrow"></div></a>
    </footer>

    <?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <?php if(is_front_page()): ?>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php endif; ?>
    <?php if(is_front_page() or is_page('service')): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    <?php endif; ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>