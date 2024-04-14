<?php get_header(); ?>

    <!-- トップページ専用 -->
    <div class="slick">
        <?php
        $slick_loop = CFS()->get('slick_loop');
        foreach($slick_loop as $fields):
        ?>
        <div class="home-header home-header-<?php echo $fields['slick_id'] ?>">
            <div class="home-header-content">
                <h2 class="home-header-title"><?php echo $fields['slick_title'] ?></h2>
                <div class="home-header-text"><?php echo $fields['slick_text'] ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <!-- トップページ専用 -->

    <main class="main-content">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <section class="about">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </section>
    
        <section id="service" class="home-service">
            <div class="content">
                <h3 data-title="Service" class="content-title">事業内容</h3>
                <div class="box-item-container js-fadeinup-trigger">
                    <?php
                    $service_loop = CFS()->get('service_loop',21);
                    foreach($service_loop as $fields):
                    ?>
                    <div class="box-item-home">
                        <figure class="item-img">
                            <img src="<?php echo $fields['service_img2'] ?>" alt="<?php echo $fields['service_img2_alt'] ?>">
                        </figure>
                        <h4 class="item-title <?php echo $fields['service_id'] ?>"><?php echo $fields['service_name'] ?></h4>
                        <div class="item-text">
                            <p><?php echo $fields['service_text'] ?></p>
                        </div>
                        <div class="item-button-wrapper">
                            <a class="item-button" href="<?php echo esc_url(home_url('/')); ?>service/#service-item-<?php echo $fields['service_id'] ?>">詳細はこちら</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <div class="company-news-wrapper">
            <section class="home-company">
                <div class="content">
                    <h3 data-title="company" class="content-title">会社概要</h3>
                    <?php get_template_part('parts','company'); ?>
                </div>
            </section>

            <section id="home-news" class="home-news">
                <div class="content">
                    <h3 data-title="news" class="content-title">お知らせ</h3>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                    );
                    $the_query = new WP_Query($args);
                    if($the_query->have_posts()):
                    ?>
                        <ul class="news-list js-fadeinup-trigger">
                        <?php
                        while($the_query->have_posts()): $the_query->the_post();
                            get_template_part('parts', 'archiveposts');
                        endwhile;
                        ?>
                        </ul>
                    <?php else: ?>
                        <p>お知らせはありません。</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
    
<?php get_footer(); ?>
