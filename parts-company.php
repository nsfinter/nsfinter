<div class="box-company<?php if(is_front_page()) echo ' js-fadeinup-trigger'; ?>">
    <!-- CFS()->get の第2引数に会社概要 固定ページのページID(15)を指定することによって、会社概要固定ページからデータを取得している -->
    <?php
    $company_loop = CFS()->get('company_loop',15);
    foreach($company_loop as $fields):
    ?>
    <dl>
        <dt><?php echo $fields['company_title'] ?></dt>
        <dd><?php echo $fields['company_description'] ?></dd>
    </dl>
    <?php endforeach; ?>
</div>
