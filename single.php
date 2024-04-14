<?php get_header(); ?>

    <main class="main-content">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        
        <section>
            <div class="content">
                <div class="news-wrapper">

                    <?php get_sidebar(); ?>
                
                    <div class="box-news">

                        <div class="post-header">
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time>

                            <?php
                            $cats = get_the_category();
                            if($cats):
                            ?>
                            <ul class="cat-list">
                                <?php foreach($cats as $cat): ?>
                                    <li><?php echo $cat->name ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>


                        <h3 class="post-title"><?php the_title(); ?></h3>
                        <div class="post-wrapper">
                            <?php if(has_post_thumbnail()): ?>
                            <figure class="eyecatch">
                                <?php the_post_thumbnail('full'); ?>
                            </figure>
                            <?php endif; ?>

                            <?php the_content(); ?>
                        </div>

                        <ul class="page-nav">
                            <li><?php previous_post_link('%link', '前の記事へ'); ?></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>news/" class="to-archive">お知らせトップ</a></li>
                            <li><?php next_post_link('%link', '次の記事へ'); ?></li>
                        </ul>

                    </div>

                </div>
            </div>
        </section>
        
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
    
<?php get_footer(); ?>
