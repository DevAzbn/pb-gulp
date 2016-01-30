<?
/*
$query = new WP_Query(array(
	'post_type' => 'azbnelement',
	'tax_query' => array(array(
		'taxonomy' => 'azbnelement_taxonomies',
		'field' => 'slug',
		'terms' => array(
			'review-scan',
		),
		//operator
		//include_children
	)),
));
*/
//var_dump($query);

?>
	
	<div class="fluid-block page-header rest-menu" >
		<div class="block-container" >
			<div class="white-block" >
				
				<div class="adaptive-block margin-center grid grid-12" >
					<div class="grid-row " >
						
						<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-12 clmn-lg-12 at-center " >
							<div class="title" >Мы предлагаем</div>
							
							<!--
							<a href="#" class="t-arrow left hover-scale" ></a>
							<a href="#" class="t-arrow right hover-scale" ></a>
							-->
						</div>
						
						<div class="clear" ></div>
						
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="wbig-container" >
			
			<div class="adaptive-block margin-center grid grid-12 menu-select" >
				<div class="grid-row" >
					
					<a href="#chief" class="clmn-6 clmn-xs-12 clmn-sm-12 clmn-md-6 clmn-lg-6 item chief hover-color  show-chief-menu " >
						<div class="picture" ></div>
						<div class="text" >
							<div class="title" >Блюда от шеф-повара</div>
							<div class="preview" >Также приготовим ужин или обед<br />из трофеев, которые добыл гость</div>
						</div>
					</a>
					
					<a  href="#menu-complex" class="clmn-6 clmn-xs-12 clmn-sm-12 clmn-md-6 clmn-lg-6 item desk hover-color modal-item-btn" >
						<div class="picture" ></div>
						<div class="text" >
							<div class="title" >Комплексное меню</div>
							<div class="preview" >Недельное меню, вкусное и питательное</div>
						</div>
					</a>
					
					<div class="clear" ></div>
					
				</div>
			</div>
			
			
			<div class="adaptive-block margin-center grid grid-12 menu-list" >
				
				<div class="grid-row" >					
					
					<a href="#menu-dinner" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Завтраки <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-img1.jpg');" ></div>
					</a>
					
					<a href="#menu-cold-snack" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Холодные закуски <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-img2.jpg');" ></div>
					</a>
					
					<a href="#menu-salad" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Салаты <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-img3.jpg');" ></div>
					</a>
					
					<a href="#menu-first-meal" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Первые блюда <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-img4.jpg');" ></div>
					</a>
					
					<div class="clear" ></div>
					
				</div>
				
				<div class="grid-row" >
					
					<a href="#menu-hot-fish" class="clmn-12 not-xs clmn-sm-12 clmn-md-12 clmn-lg-12 hot-fish-food modal-item-btn " >
						
					</a>
					
					<a href="#menu-hot-fish" class="clmn-3 clmn-xs-12 not-sm not-md not-lg item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Горячие блюда<br />из рыбы <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
					</a>
					
					<div class="clear" ></div>
					
				</div>
				
				
				
				<div class="grid-row" >
					
					
					<a href="#menu-chief-menu" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Блюда от<br />шеф-повара <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-chief.jpg');" ></div>
					</a>
					
					<a href="#menu-sauce" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Соусы <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-img6.jpg');" ></div>
					</a>
					
					<a href="#menu-baking" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Выпечка <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-img7.jpg');" ></div>
					</a>
					
					<a href="#menu-garnish" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Гарниры <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-img5.jpg');" ></div>
					</a>
					
					<div class="clear" ></div>
					
				</div>
				
				
				<div class="grid-row" >
					
					<a href="#menu-hot-meat" class="clmn-12 not-xs clmn-sm-12 clmn-md-12 clmn-lg-12 hot-meat-food modal-item-btn " >
						
					</a>
					
					<a href="#menu-hot-meat" class="clmn-3 clmn-xs-12 not-sm not-md not-lg item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Горячие блюда<br />из мяса <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
					</a>
					
					<div class="clear" ></div>
					
				</div>
				
				
				<div class="grid-row" >
					
					<a href="#menu-drink" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Безалкогольные<br />напитки <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-drink.jpg');" ></div>
					</a>
					
					<a href="#menu-vodka" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Спиртные<br />напитки <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-vodka.jpg');" ></div>
					</a>
					
					<a href="#menu-beer" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Пиво <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-beer.jpg');" ></div>
					</a>
					
					<a href="#menu-zakuski" class="clmn-3 clmn-xs-12 clmn-sm-6 clmn-md-3 clmn-lg-3 item modal-item-btn " >
						<div class="title" >
							<div class="cell" >Закуски <img src="<?=$this->path('img');?>/tpl/menu-list-venzel.png" class="venzel" /></div>
						</div>
						<div class="image hover-scale " style="background-image:url('<?=$this->path('img');?>/tpl/rest-menu-item-zakuski.jpg');" ></div>
					</a>
					
					
					<div class="clear" ></div>
					
				</div>
				
				
				
			</div>
			
			
			<!--
			<div class="adaptive-block margin-center grid grid-12 menu-desk" >
				
				<div class="grid-row" >	
					
					<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-12 clmn-lg-12 " >
						&nbsp;
					</div>
					
					<div class="clear" ></div>
					
				</div>
				
				<a class="or-btn hover-color inv" href="<? the_field('menu-file', $this->post['id']);?>" ><span>Скачать меню</span></a> 
				
			</div>
			-->
			
			
		</div>
		
		<div class="clear" ></div>
	</div>
	
<?
//wp_reset_postdata();
?>