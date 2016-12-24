	<!-- Category 2 -->
	<div id="category-2-section" class="category-2-section">
		<!-- Section Header -->
		<div class="section-header">
			<?php $category_title2 = $this->category()->getOneCategory('2', WEB_LANG_ID); ?>
			<h2><?=$category_title2['title'];?></h2>
		</div>
		<!-- Section Header /- -->
		
		<!-- Container -->
		<div class="container">
			<div class="row">
				<div id="category-2" class="owl-carousel owl-theme">
					<?php
						$post_by_categorys_2 = $this->post()->getPostByCategory('2', '6', 'DESC', WEB_LANG_ID);
						foreach($post_by_categorys_2 as $list_post_2){
					?>
					<div class="item">
						<div class="col-md-12">
							<div class="post-box">
								<div class="image-box">
									<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post_2['picture'];?>" alt="<?=$list_post_2['title'];?>" />
									<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_2);?>" class="add-sign-small color-dark-pink"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
								</div>
								<ul class="comments-social">
									<li><a href="#"><img src="<?=$this->asset('/images/icon/like-icon.png')?>" alt="like" /></a></li>
									<li class="dropdown">
										<a href="#"><img src="<?=$this->asset('/images/icon/more-icon.png')?>" alt="more-icon" /></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Facebook</a></li>
											<li><a href="#">Twitter</a></li>
											<li><a href="#">Google</a></li>
											<li><a href="#">Linkedin</a></li>
										</ul>
									</li>
								</ul>
								<div class="post-box-inner">
									<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_2);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
									<div class="box-content">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_2);?>" class="block-title"><?=$list_post_2['title'];?></a>
										<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($list_post_2['date']);?> | <?=$list_post_2['time'];?></p>
										<p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post_2['content'], '100');?>... </p>
										<a href="#"><i class="fa fa-eye"></i> <?=$list_post_2['hits'];?></a>
										<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($list_post_2['id_post']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Category 2 Over  -->