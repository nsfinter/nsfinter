<?php get_header(); ?>

    <main class="main-content">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <section class="greeting">
            <div class="content">
                <h3 data-title="greeting" class="content-title content-title-align">ご挨拶</h3>
                <div class="greeting-wrapper">
                    <!-- <figure class="greeting-figure">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/greeting.png" alt="">
                    </figure> -->
                    <div class="greeting-text">
                        <?php the_content(); ?>
                        <div class="greeting-name">
                            <p>NSFインター株式会社</p>
                            <p>代表　名越　英樹</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="company">
            <div class="content">
                <h3 data-title="company" class="content-title content-title-align">企業情報</h3>
                <div class="company-info-wrapper">
                    <?php get_template_part('parts','company'); ?>
                    <div class="space"></div>
                    <div class="map">
                        <?php echo CFS()->get('company_map'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="history">
            <div class="content">
                <h3 data-title="history" class="content-title content-title-align">沿革</h3>
                <table class="tbl">
                    <tbody>
                        <?php
                        $history_loop = CFS()->get('history_loop');
                        foreach($history_loop as $fields):
                        ?>
                        <tr>
                            <th><?php echo date('Y年m月', strtotime($fields['history_date'])) ?></th>
                            <td><?php echo $fields['history_text'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
    
<?php get_footer(); ?>
