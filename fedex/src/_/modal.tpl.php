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

$groups = get_terms( array( 'azbnelement_taxonomies', ), array(
	'hide_empty' => false,
	'fields' => 'all',
	'parent' => '9',
));

?>

	<div class="modal-block-container " >
		<div class="modal-block" >
			
			<div class="adaptive-block margin-center grid grid-12 white-container " >
				
				<a class="hide-modal " href="#close" ></a>
				
				<a class="modal-btn prev-item-btn" href="#prev" ></a>
				<a class="modal-btn next-item-btn" href="#next" ></a>
				
				<div class="grid-row modal-title" >
					
					<div class="clmn-2 clmn-xs-2 clmn-sm-1 clmn-md-2 clmn-lg-2 " >
						&nbsp;
					</div>
					
					<div class="clmn-8 clmn-xs-8 clmn-sm-10 clmn-md-8 clmn-lg-8 text" >
						
					</div>
					
					<div class="clmn-2 clmn-xs-2 clmn-sm-1 clmn-md-2 clmn-lg-2 " >
						&nbsp;
					</div>
					
					<div class="clear" ></div>
					
				</div>
				
				<?
				if(count($groups)) {
					foreach($groups as $term){
						//var_dump($term);
						
						$query = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'azbnelement',
							'tax_query' => array(array(
								'taxonomy' => 'azbnelement_taxonomies',
								'field' => 'slug',
								'terms' => array(
									$term->slug,
								),
								//operator
								//include_children
							)),
						));
					
					if($term->slug == 'vodka') {
						
					?>
					
				<div class="grid-row item" id="menu-<?=$term->slug;?>" data-title="<?=$term->name;?>" >
					
					<div class="grid grid-12 item-table rest" >
						
						<div class="grid-row table-title" >
							
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-7 clmn-lg-7 cell title" >
								<b>Наименование</b>
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<b>За 1л</b>
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<b>За 0,7л</b>
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<b>За 0,5л</b>
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<b>За 100г</b>
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<b>За 50г</b>
							</div>
							
							<div class="clear" ></div>
						
						</div>
						
					<?
					while ($query->have_posts()) {
						$query->the_post();
						$id = get_the_ID();
					?>
					
						<div class="grid-row table-row" >
							
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-7 clmn-lg-7 cell title" >
								<? the_title();?>&nbsp;
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<? the_field('cost-1000');?>&nbsp;
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<? the_field('cost-700');?>&nbsp;
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<? the_field('cost-500');?>&nbsp;
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<? the_field('cost-100');?>&nbsp;
							</div>
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-1 clmn-lg-1 cell weight" >
								<? the_field('cost-50');?>&nbsp;
							</div>
							
							<div class="clear" ></div>
						
						</div>
					
					<?
					}
					?>
					</div>
					
					<div class="clear" ></div>
					
				</div>
					
					<?
							
					} elseif($term->slug == 'complex') {
						
					?>
					
				<div class="grid-row item rest-menu" id="menu-<?=$term->slug;?>" data-title="<?=$term->name;?>" >
					
					<div class="grid grid-12 menu-desk" >
						
						<div class="grid-row" >					
							
							<div class="clmn-12 clmn-xs-12 clmn-sm-12 clmn-md-12 clmn-lg-12 " >
								&nbsp;
							</div>
							
							<div class="clear" ></div>
							
						</div>
						
						<a class="or-btn hover-color inv" href="<? the_field('menu-file', $this->post['id']);?>" ><span>Скачать меню</span></a>

					</div>
					
					<div class="clear" ></div>
					
				</div>
					
					<?
							
					} else {
						
					?>
					
				<div class="grid-row item" id="menu-<?=$term->slug;?>" data-title="<?=$term->name;?>" >
					
					<div class="grid grid-12 item-table rest" >
						
						<div class="grid-row table-title" >
							
							<div class="clmn-12 clmn-xs-6 clmn-sm-6 clmn-md-6 clmn-lg-6 cell title" >
								<b>Наименование</b>
							</div>
							<div class="clmn-12 clmn-xs-3 clmn-sm-6 clmn-md-3 clmn-lg-3 cell weight" >
								<b>Масса порции</b><br />(граммы)
							</div>
							<div class="clmn-12 clmn-xs-3 clmn-sm-3 clmn-md-3 clmn-lg-3 cell cost" >
								<b>Стоимость порции</b><br />(рубли)
							</div>
							
							<div class="clear" ></div>
						
						</div>
						
					<?
					while ($query->have_posts()) {
						$query->the_post();
						$id = get_the_ID();
					?>
					
						<div class="grid-row table-row" >
							
							<div class="clmn-12 clmn-xs-6 clmn-sm-6 clmn-md-6 clmn-lg-6 cell title" >
								<? the_title();?>&nbsp;
							</div>
							<div class="clmn-12 clmn-xs-6 clmn-sm-6 clmn-md-3 clmn-lg-3 cell weight" >
								<? the_field('weight');?>&nbsp;
							</div>
							<div class="clmn-12 clmn-xs-6 clmn-sm-6 clmn-md-3 clmn-lg-3 cell cost" >
								<? the_field('cost');?>&nbsp;
							</div>
							
							<div class="clear" ></div>
						
						</div>
					
					<?
					}
					?>
					</div>
					
					<div class="clear" ></div>
					
				</div>
					
					<?
						
					}
				
					}
				}
				?>
				
				
			</div>
			
		</div>
	</div>
	
<?
//wp_reset_postdata();
?>