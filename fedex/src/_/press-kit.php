<?php
/* Template Name: news/press-kit - Пресс-кит */

$b_tpl = 'news/press-kit';

if ( have_posts() ) {
	
	while ( have_posts() ) {
		the_post();
		$Azbn->post['id'] = get_the_ID();
		
		$Azbn->tpl('_/header', array());
		$Azbn->tpl($b_tpl.'/index', array());
		$Azbn->tpl('_/footer', array());
		
	}
}
