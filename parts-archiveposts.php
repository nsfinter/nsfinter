<li>
    <a href="<?php the_permalink(); ?>">
        <div class="thumbnail">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail'); ?>
            <?php else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/news-thumbnail.jpg" alt="">
            <?php endif; ?>
        </div>
        
        <div class="text">
            <div class="list-head">
                <time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time(get_option('date_format')); ?></time>
                <?php
                $cats = get_the_category();
                if($cats):
                ?>
                <ul>
                    <?php foreach($cats as $cat): ?>
                        <li class="cat-item"><?php echo $cat->name; ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <p class="title"><?php the_title(); ?></p>
        </div>
    </a>
</li>
