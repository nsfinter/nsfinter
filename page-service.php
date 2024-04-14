<?php get_header(); ?>

    <main class="main-content">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <section class="service js-fadein-trigger">
            <div class="content">
                <h3 data-title="service" class="content-title content-title-align">事業紹介</h3>
                <div class="box-item-container">
                    <?php
                    $service_loop = CFS()->get('service_loop');
                    foreach($service_loop as $fields):
                    ?>
                    <div class="box-item-service">
                        <h4 class="item-title item-title-sub"><?php echo $fields['service_name'] ?></h4>
                        <figure class="item-img">
                            <a href="#service-item-<?php echo $fields['service_id'] ?>"><img src="<?php echo $fields['service_img1'] ?>" alt="<img src="<?php echo $fields['service_img1_alt'] ?>"></a>
                        </figure>
                        <div class="item-link">
                            <a href="#service-item-<?php echo $fields['service_id'] ?>"></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <span class="line"></span>
            </div>
        </section>

        <section class="service-item">
            <div class="content">
                <?php
                $service_loop = CFS()->get('service_loop');
                foreach($service_loop as $fields):
                ?>
                <h3 id="service-item-<?php echo $fields['service_id'] ?>" class="service-item-abstract"><?php echo $fields['service_name'] ?></h3>
                <div class="service-item-container js-fadeinup-trigger">
                    <div class="service-item-wrapper <?php if($fields['service_id'] == 'web') echo 'reverse'; ?>">
                        <h4 class="service-item-title summary">サービス概要</h4>
                        <figure class="service-item-img <?php if($fields['service_id'] == 'web') echo 'reverse'; ?>">
                            <img src="<?php echo $fields['service_img2'] ?>" alt="<?php echo $fields['service_img2_alt'] ?>">
                        </figure>
                        <div class="service-item-text">
                            <p><?php echo $fields['service_text'] ?></p>
                            <h5 class="service-item-title work">主な業務内容</h5>
                            <ul>
                                <?php
                                $content_loop = $fields['content_loop'];
                                foreach($content_loop as $contents):
                                ?>
                                <li><?php echo $contents['content'] ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <h5 class="service-item-title skill">具体的な技術要素</h5>
                            <ul>
                                <?php
                                $skill_loop = $fields['skill_loop'];
                                foreach($skill_loop as $skills):
                                ?>
                                <li><?php echo $skills['skill'] ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <span class="line" <?php if($fields['service_id'] == 'consultant') echo 'style="display: none;"'; ?>></span>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
    
<?php get_footer(); ?>
