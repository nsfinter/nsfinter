<?php get_header(); ?>

    <main class="main-content">
        <section id="news">
            <div class="content">

                <div class="news-wrapper">
                    <?php get_sidebar(); ?>
                    <div class="box-news">
                    <h3 data-title="news" class="content-title content-title-align">お知らせ</h3>
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
