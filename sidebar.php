<aside class="sidebar">
    <div class="box-archive">
        <div class="item">
            <h4 class="sidebar-title">CATEGORY</h4>
            <ul class="sidebar-list">
                <?php wp_list_categories('title_li=&show_count=1'); ?>
            </ul>
        </div>
        <div class="item">
            <h4 class="sidebar-title">ARCHIVES</h4>
            <ul class="sidebar-list">
                <select name="archive-dropdownlist" class="select" onchange="document.location.href=this.options[this.selectedIndex].value;">
                <option disabled selected value>年</option>
                <?php wp_get_archives('post_type=post&type=yearly&format=option&after=年'); ?>
                </select>
            </ul>
        </div>
    </div>
</aside>