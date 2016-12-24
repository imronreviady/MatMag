<?=$this->layout('index');?>

	<!-- Team Section -->
	<div id="team-section" class="team-section">
		<!-- Section Header -->
		<div class="section-header">
			<h2> <?=$this->e($front_gallery);?></h2>
		</div>
		<!-- Section Header /- -->
		<!-- container -->
		<div class="container">
			<div class="row">
				<?php
					$albums = $this->gallery()->getAlbum('8', 'id_album ASC', $this->e($page));
					foreach($albums as $alb){
				?>
				<!-- col-md-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="team-box">
						<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$alb['picture'];?>" alt="<?=$alb['title'];?>">
						<h2><a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>"><?=$alb['title'];?></a> </h2>
						<hr>
						<ul>
							<li class="efek"><a href="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$alb['picture'];?>" class="fb" data-effect="mfp-newspaper" data-lightbox="image"><i class="fa fa-search-plus"></i></a></li>
							<li><a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>" class="tw"><i class="fa fa-paper-plane"></i></a></li>
						</ul>
					</div>
				</div><!-- col-md-3 /- -->
				<?php } ?>

				<nav>
					<ul class="pagination">
						<?=$this->gallery()->getAlbumPaging('8', $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
					</ul>
				</nav>
			</div>
		</div><!-- container /- -->
	</div><!-- Team Section -->