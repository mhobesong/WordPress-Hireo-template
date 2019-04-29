<!DOCTYPE HTML>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="top-nav">
            <div id="logo">
                <a href="<?php echo get_bloginfo('url'); ?>">
                    <?php the_custom_logo(); ?>
                </a>
            </div>
            
            <ul class="nav pages">
                <?php wp_list_pages(['sort_column'=>'menu_order', 'title_li'=>NULL]);?>
            </ul>
        </nav>
