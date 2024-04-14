<?php get_header(); ?>

    <!-- サブヘッダ -->
    <div class="sub-header sub-header-notfound">
        <div class="sub-header-overlay">
            <div class="sub-header-content">
                <h2 class="sub-header-title">NOT FOUND</h2>
                <div class="sub-header-text">ページが見つかりません</div>
            </div>    
        </div>
    </div>
    <ol class="breadcrumb">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
        <li><span>ページが見つかりません</span></li>
    </ol>
    <!-- サブヘッダ -->
    
    <main class="main-content">
        <section class="notfound">
            <div class="content">
                <p>お探しのページは、削除されたか、名前が変更された可能性があります。<br>
                    直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認下さい。</p>
                <p>ブラウザの再読込みを行ってもこのページが表示される場合は、<a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a>から目的のページをお探しください。</p>
            </div>
        </section>
    </main>
    
<?php get_footer(); ?>
