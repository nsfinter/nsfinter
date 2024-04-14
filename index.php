<?php get_header(); ?>

    <main class="main-content">

        <?php if (have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>

        <section class="<?php echo strtolower($post->post_name); ?>">
            <?php the_content(); ?>
        </section>
        
        <?php endwhile; ?>
        <?php endif; ?>

    </main>
    
<?php get_footer(); ?>