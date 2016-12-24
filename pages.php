<?=$this->layout('index');?>

	<!-- Insert Widget Breaking News -->
    <?=$this->insert('widget_breaking_news');?>	

    <!-- Page-Banner -->
	<div class="author-banner-box">
		<?php if ($this->e($pages['picture']) != '') { ?>
		<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($pages['picture']);?>" alt="benner">
		<?php } ?>
		<div class="container">
			<div class="image-box">
				<a class="add-sign-big color-violate"><i class="fa fa-angle-down"></i></a>			
			</div>
			<div class="author-content">
				<h2><?=$this->e($pages['title']);?></h2>
			</div>
		</div>
	</div>
	<!-- Page-Benner -->
	
	<div class="container author-content-inner">
		<?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?>
		<div class="blog-social">
			<aside class="widget widget_social_icons">
				<ul class="pull-right">
					<li><a class="fb" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a class="tw" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a class="gp" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a class="lin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a class="dr" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>						
				</ul>
			</aside>
		</div>
	</div>