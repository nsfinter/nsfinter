<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N7Q8PX9H');</script>
    <!-- End Google Tag Manager -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Marcellus&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
    <?php if(is_front_page()): ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <?php endif; ?>
    <?php if(is_front_page() or is_page('service')): ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7Q8PX9H"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- WordPressの管理バーを下に移動させるコード -->
    <?php if( is_user_logged_in() ) : ?>
        <style type="text/css">
        html {
            margin: 0 0 32px!important;
        }
        #wpadminbar {
            position: fixed!important;
            top: unset!important;
            bottom: 0;
        }
        </style>
    <?php endif; ?>

    <header class="site-header">
        <div class="main-header">
            <div class="main-header-content">
                <div class="site-branding">
                    <div class="logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="site-branding-wrapper">
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                        </h1>
                        <div class="site-description"><?php bloginfo('description') ?></div>
                    </div>
                </div>

                <?php
                wp_nav_menu( array( 
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'gnav',
                ) );
                ?>
                <button id="btn-nav" class="btn-nav"><span></span></button>
            </div>

            <?php
            wp_nav_menu( array( 
                'theme_location' => 'main-menu',
                'container' => 'nav',
                'container_class' => 'dnav',
            ) );
            ?>
        </div>

        <?php if(!(is_front_page())): ?>
            <!-- サブヘッダ -->
            <?php if(is_single() || is_home() || is_archive()): ?>

                    <div class="sub-header sub-header-news">
                        <div class="sub-header-overlay">
                            <div class="sub-header-content">
                                <h2 class="sub-header-title">NEWS</h2>
                                <div class="sub-header-text">お知らせ</div>
                            </div>
                        </div>
                    </div>

            <?php else: ?>
                
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>

                    <div class="sub-header sub-header-<?php echo strtolower($post->post_name); ?>">
                        <div class="sub-header-overlay">
                            <div class="sub-header-content">
                                <?php if(is_page('privacy')): ?>
                                    <h2 class="sub-header-title">PRIVACY POLICY</h2>    
                                <?php else: ?>
                                    <h2 class="sub-header-title"><?php echo strtoupper($post->post_name); ?></h2>
                                <?php endif; ?>
                                <div class="sub-header-text"><?php the_title(); ?></div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php endif; ?>
                
            <?php endif; ?>

            <?php if(!(is_404())): ?>
                <ol class="breadcrumb">
                    <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
                </ol>
            <?php endif; ?>
            <!-- サブヘッダ -->
        <?php endif; ?>
    
    </header>
