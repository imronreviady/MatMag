<?=$this->layout('index');?>

	<!-- Insert Widget Breaking News -->
    <?=$this->insert('widget_breaking_news');?>	
	
	<!-- Slider Section -->
	<div id="slider-section" class="slider-section">
		
		<!-- Insert Slider For Big Screen -->
    	<?=$this->insert('slider_desktop');?>

		<!-- Insert Slider For Mobile Screen -->
    	<?=$this->insert('slider_mobile');?>

	</div><!-- Slider Section /- -->
	
	<!-- Adds -->
	<div class="add-show">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><a href="#"><img src="<?=$this->asset('/images/adds-2.png')?>" alt="adds" /></a></div>
			</div>
		</div>
	</div><!-- Adds /- -->
	
	<!-- Insert Popular Post Section -->
    <?=$this->insert('popular_post_section');?>	
	
	<!-- Insert Category 1 Post Section -->
    <?=$this->insert('category_1_post_section');?>
	
    <!-- Insert Category 2 Post Section -->
    <?=$this->insert('category_2_post_section');?>
	
	<!-- Insert Category 3 Post Section -->
    <?=$this->insert('category_3_post_section');?>
	
	<!-- CAtegory 4 -->
	<div id="category-4" class="category-4">
		<!-- Section Header -->
		<div class="section-header">
			<?php $category_title4 = $this->category()->getOneCategory('4', WEB_LANG_ID); ?>
			<h2><?=$category_title4['title'];?></h2>
		</div>
		<!-- Section Header /- -->
		
		<!-- Container -->
		<div class="container">
			<div class="row">
				
				<!-- Insert Category 4 Post Section -->
    			<?=$this->insert('category_4_post_section');?>			
			
				<!-- Insert Sidebar For Home -->
    			<?=$this->insert('sidebar_home');?>

			</div>
		</div><!-- container /- -->
	</div><!-- Category 4 /- -->