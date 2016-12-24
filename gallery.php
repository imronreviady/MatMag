<?=$this->layout('index');?>

	<!-- Team Section -->
	<div id="team-section" class="team-section">
		<!-- Section Header -->
		<div class="section-header">
			<h2> <?=$this->e($page_title);?></h2>
		</div>
		<!-- Section Header /- -->
		<!-- container -->
		<div class="container">
			<div class="row">
				<?php
					$gallerys = $this->gallery()->getGallery('12', 'id_gallery DESC', $album, $this->e($page));
					foreach($gallerys as $gal){
				?>
				<!-- col-md-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="team-box">
						<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?>" alt="<?=$gal['title'];?>">
						<h2><?=$gal['title'];?> </h2>
						<hr>
						<ul>
							<li class="efek"><a href="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?>" class="fb" data-effect="mfp-newspaper" data-lightbox="image"><i class="fa fa-search-plus"></i></a></li>
						</ul>
					</div>
				</div><!-- col-md-3 /- -->
				<?php } ?>

				<nav>
					<ul class="pagination">
						<?=$this->gallery()->getGalleryPaging('12', $album, $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
					</ul>
				</nav>
			</div>
		</div><!-- container /- -->
	</div><!-- Team Section -->