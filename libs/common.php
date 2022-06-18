<?php

#-----------------------------------------------------------------#
# 屏蔽古腾堡编辑器
# Block the Gutenberg editor
#-----------------------------------------------------------------#
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );


#-----------------------------------------------------------------#
# 禁用sitemap.xml
# Disable the sitemap XML
#-----------------------------------------------------------------#
add_filter( 'wp_sitemaps_enabled', '__return_false' );


#-----------------------------------------------------------------#
# 禁止自动转义字符
# Disables automatic escape of characters
#-----------------------------------------------------------------#
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('comment_text', 'wptexturize');

