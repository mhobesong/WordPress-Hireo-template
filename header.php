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

			<div class="profile-status">
				<img src="<?= get_avatar_url(wp_get_current_user()->ID, ['size'=>55]);?>" alt="..." class="img-circle">
				<span class="online-status online"> </span>
			</div>

			<div class="notifications">
				<i class="far fa-bell fa-lg"><span class="badge badge-primary badge-notification">2</span></i>
				<i class="far fa-envelope fa-lg"><span class="badge badge-primary badge-notification">2</span></i>
			</div>
        </nav>
