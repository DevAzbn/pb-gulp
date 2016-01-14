<!DOCTYPE html>
<html <?php language_attributes();?> > 
<head>
<?
$this->tpl('_/head', array());
wp_head();
?>
</head>
<body <?php body_class('fecss full-height'); ?> >

<div class="container">

<?
if(!is_front_page()) {
	
}
?>
	
	<header class="header-block" >
		<div class="row">
			<div class="col-md-3">
				<div class="logo-site header-block__logo">
					<a href="/"><img src="<?php echo $this->path('img');?>/tpl/logotip.png" alt=""></a>
				</div>
			</div>
			<div class="col-md-9 header-block__md-9">
				<div class="header-block__banner"></div>
			</div>
		</div>
	</header>