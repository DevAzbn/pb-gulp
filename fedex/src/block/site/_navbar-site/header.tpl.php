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
		})
		</script>
		<nav class="navbar-block navbar-block__top">
			<div class="nav-collapse">
				<ul class="navbar-block__list">
					<li class="navbar-block__list-item">
						<a href="<?=l(1);?>">Главная</a>
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
						<a data-toggle="collapse" data-parent=".nav-collapse" href="#about">О группе</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="#project">Проекты</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="#news">Новости компании</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a data-toggle="collapse" data-parent=".nav-collapse" href="#analytics">Аналитика</a>
					</li>
					<li class="navbar-block__list-item panel">
						<a href="<?=l(3);?>">Контакты</a> 
					</li>
				</ul>
				<div class="panel">
					<div id="about" class="navbar-block__item-three panel-collapse collapse">
						<ul class="navbar-block__list collapse-list">
							<li class="navbar-block__list-item"><a href="<?=l(5);?>">Описание</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(26);?>">История</a>
							</li><li class="navbar-block__list-item"><a href="<?=l(22);?>">Руководство</a></li>
						</ul>
					</div>
      			</div>
				<div class="panel">
					<div id="project" class="navbar-block__item-three panel-collapse collapse">
						<ul class="navbar-block__list collapse-list">
							<li class="navbar-block__list-item"><a href="/project-mdk.html">Строительство МкД</a>
							</li><li class="navbar-block__list-item"><a href="/project-land.html">Ленд-девелопмент</a>
							</li><li class="navbar-block__list-item"><a href="/commerce.html">Коммерческий блок</a></li>
						</ul>
					</div>
      			</div>
				<div class="panel">
					<div id="news" class="navbar-block__item-three panel-collapse collapse">
						<ul class="navbar-block__list collapse-list">
							<li class="navbar-block__list-item"><a href="<?=l(9);?>">Новости компании</a>
							</li><li class="navbar-block__list-item"><a href="/presskit.html">Пресс-кит</a>
							</li><li class="navbar-block__list-item"><a href="" >СМИ</a></li>
						</ul>
					</div>
      			</div>
				<div class="panel">
					<div id="analytics" class="navbar-block__item-three panel-collapse collapse">
						<ul class="navbar-block__list collapse-list">
							<li class="navbar-block__list-item"><a href="/analytics.html">Аналитика 1</a>
							</li><li class="navbar-block__list-item"><a href="/analytics.html">Аналитика 2</a>
							</li><li class="navbar-block__list-item"><a href="/analytics.html">Аналитика 3</a></li>
						</ul>
					</div>
      			</div>
			</div>
		</nav>                                                                                                                                    