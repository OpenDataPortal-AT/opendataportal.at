<?php
/*
Template Name: Sitemap
*/
?>
<div class="container">
    <div class="sitemap_menus">
    <?php if (has_nav_menu('primary_navigation')) : ?>
        <h3>Header</h3>
        <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'depth' => 1));
    endif;
    ?>
        </div>
        <div class="sitemap_menus">
    <?php if (has_nav_menu('topics_navigation')) : ?>
        <h3>Topics</h3>
        <?php wp_nav_menu(array('theme_location' => 'topics_navigation', 'menu_class' => 'nav'));
    endif;
    ?>
</div>
            <div class="sitemap_menus">
    <?php if (has_nav_menu('footer_navigation')) : ?>
        <h3>Footer</h3>
            <?php wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav')); ?>
    <?php endif; ?>
                </div>
    <div style="clear:both;"></div>
    <p>
        Hier klicken für eine <a href="<?php echo home_url(); ?>/sitemap.xml" title="XML Sitemap">XML Sitemap</a>.
    </p>
</div>