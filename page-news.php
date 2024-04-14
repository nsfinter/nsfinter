<?php get_header(); ?>

    <main class="main-content">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <section id="news">
            <div class="content">
                <h3 data-title="news" class="content-title content-title-align">お知らせ</h3>
                <?php get_template_part('parts','news'); ?>
            </div>
        </section>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
    
<?php get_footer(); ?>
