<div class="box-news">
    <ul class="news-list">
        <?php
        $news_loop = CFS()->get('news_loop',34);
        foreach($news_loop as $fields):
        ?>
        <li>
            <div class="text">
                <time datetime="<?php echo $fields['news_date'] ?>" class="date"><?php echo $fields['news_date'] ?></time>
                <?php
                $select = $fields['news_cat'];
                foreach($select as $key => $value):
                ?>
                <p class="cat-item"><?php echo $value ?></p>
                <?php endforeach; ?>
                <p class="title"><?php echo $fields['news_title'] ?></p>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>    
</div>
