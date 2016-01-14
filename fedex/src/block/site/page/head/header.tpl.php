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
