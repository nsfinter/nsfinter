<?php get_header(); ?>

    <main class="main-content">
        <section id="news">
            <div class="content">

                <div class="news-wrapper">
                    <?php get_sidebar(); ?>
                    <div class="box-news">
                    <?php if(is_category()): ?>
                        <h3 data-title="news" class="content-title content-title-align"><?php echo get_queried_object()->name; ?></h3>
                    <?php elseif(is_date()): ?>
                        <h3 data-title="news" class="content-title content-title-align"><?php echo get_query_var('year'); ?></h3>
                    <?php endif; ?>
                    <?php if(have_posts()): ?>
                        <ul class="news-list">
                        <?php
                        while(have_posts()): the_post();
                            get_template_part('parts', 'archiveposts');
                        endwhile;
                        ?>
                        </ul>
                    <?php else: ?>
                        <p>お知らせはありません。</p>
                    <?php endif; ?>

                    <?php wp_pagenavi(); ?>

                    </div>
                </div>
            </div>
        </section>
    </main>
    
<?php get_footer(); ?>
