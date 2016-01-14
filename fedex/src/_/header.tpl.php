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
	
		
		
		<script>
		$(document).ready(function() {
			var url = window.location.pathname;
			$('.navbar-block__list a[href="'+url+'"]').parent().addClass('active');
			
			$('.navbar-block__list a[data-post_id="<?=$this->post['id'];?>"]').parent().addClass('active');
			
		})
		</script>
		<nav class="navbar-block navbar-block__top">
			<div class="nav-collapse">
				<ul class="navbar-block__list">
					<li class="navbar-block__list-item">
						<a href="<?=l(1);?>" data-post_id="1" >Главная</a>
					</li>
					<!--
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="<?=l(5);?>">О группе</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="<?=l(7);?>">Проекты</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="<?=l(9);?>">Новости компании</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="<?=l(11);?>">Аналитика</a>
					</li>
					-->
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="#about" data-post_id="5" >О группе</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="#project" data-post_id="7" >Проекты</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="#news" data-post_id="9" >Новости компании</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="#analytics" data-post_id="11" >Аналитика</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a href="<?=l(3);?>" data-post_id="3" >Контакты</a> 
					</li>
				</ul>
				<div class="panel">
					<div id="about" class="navbar-block__item-three panel-collapse collapse">
						<ul class="navbar-block__list collapse-list">
							<li class="navbar-block__list-item"><a href="<?=l(5);?>" data-post_id="5" >Описание</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(26);?>" data-post_id="26" >История</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(22);?>" data-post_id="22" >Руководство</a></li>
						</ul>
					</div>
      			</div>
				<div class="panel">
					<div id="project" class="navbar-block__item-three panel-collapse collapse">
						<ul class="navbar-block__list collapse-list">
							<li class="navbar-block__list-item"><a href="<?=l(30);?>" data-post_id="30" >Строительство МкД</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(32);?>" data-post_id="32" >Ленд-девелопмент</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(34);?>" data-post_id="34" >Коммерческий блок</a></li>
						</ul>
					</div>
      			</div>
				<div class="panel">
					<div id="news" class="navbar-block__item-three panel-collapse collapse">
						<ul class="navbar-block__list collapse-list">
							<li class="navbar-block__list-item"><a href="<?=l(9);?>" data-post_id="9" >Новости компании</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(28);?>" data-post_id="28" >Пресс-кит</a>
							</li><li class="navbar-block__list-item"><a href="" data-post_id="0" >СМИ</a></li>
						</ul>
					</div>
      			</div>
				<div class="panel">
					<div id="analytics" class="navbar-block__item-three panel-collapse collapse">
						<ul class="navbar-block__list collapse-list">
							<li class="navbar-block__list-item"><a href="<?=l(11);?>" data-post_id="0-" >Рубрика</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(11);?>" data-post_id="0--" >Рубрика 2</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(11);?>" data-post_id="0---" >Рубрика 3</a></li>
						</ul>
					</div>
      			</div>
			</div>
		</nav>                                                                                                                                    