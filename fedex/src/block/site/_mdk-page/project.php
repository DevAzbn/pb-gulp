<?php
/* Template Name: project - Проект */

$b_tpl = 'project';

if ( have_posts() ) {
	
	while ( have_posts() ) {
		the_post();
		$Azbn->post['id'] = get_the_ID();
		
		$Azbn->tpl('_/header', array());
		$Azbn->tpl($b_tpl.'/'.$Azbn->post['id'], array());
		$Azbn->tpl('_/footer', array());
		
	}
}
