	<!-- Category 3 -->
	<div id="category-3" class="category-1 category-3">
		<!-- Section Header -->
		<div class="section-header">
			<?php $category_title3 = $this->category()->getOneCategory('3', WEB_LANG_ID); ?>
			<h2><?=$category_title3['title'];?></h2>
		</div>
		<!-- Section Header /- -->
		
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- col-md-3 -->
				<div class="col-md-3 no-padding">
					<?php
						$post_by_categorys_3_query_2 = $this->post()->getPostByCategory('3', '1,2', 'DESC', WEB_LANG_ID);
						foreach($post_by_categorys_3_query_2 as $list_post_3_query_2){
					?>
					<div class="col-md-12 col-sm-6">
						<div class="post-box">
							<div class="image-box">
								<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post_3_query_2['picture'];?>" alt="<?=$list_post_3_query_2['title'];?>" />
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_3_query_2);?>" class="add-sign-small color-pink"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
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
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_3_query_2);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
								<div class="box-content">
									<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_3_query_2);?>" class="block-title"><?=$list_post_3_query_2['title'];?></a>
									<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($list_post_3_query_2['date']);?> | <?=$list_post_3_query_2['time'];?></p>
									<p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post_3_query_2['content'], '100');?>... </p>
									<a href="#"><i class="fa fa-eye"></i> <?=$list_post_3_query_2['hits'];?></a>
									<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($list_post_3_query_2['id_post']);?></a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div><!-- col-md-3 /- -->
			
				<!-- col-md-6 -->
				<?php
					$post_by_categorys_3_query_1 = $this->post()->getPostByCategory('3', '1', 'DESC', WEB_LANG_ID);
					foreach($post_by_categorys_3_query_1 as $list_post_3_query_1){
				?>
				<div class="col-md-6 col-sm-12">
					<div class="full-box-inner">
						<div class="image-box">
							<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$list_post_3_query_1['picture'];?>" alt="<?=$list_post_3_query_1['title'];?>" />
							<a class="add-sign-bigger color-darken-pink" href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_3_query_1);?>"><img alt="bigger-plus" src="<?=$this->asset('/images/icon/bigger-plus.png')?>"></a>
						</div>
						<ul class="comments-social">
							<li><a href="#"><img alt="like" src="<?=$this->asset('/images/icon/like-icon.png')?>"></a></li>
							<li class="dropdown">
								<a href="#"><img src="<?=$this->asset('/images/icon/more-icon.png')?>" alt="more-icon" /></a>
								<ul role="menu" class="dropdown-menu">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google</a></li>
									<li><a href="#">Linkedin</a></li>
								</ul>
							</li>
						</ul>
						<div class="box-content">
							<a class="block-title" href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_3_query_1);?>"><?=$list_post_3_query_1['title'];?></a>
							<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($list_post_3_query_1['date']);?> | <?=$list_post_3_query_1['time'];?></p>
							<p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post_3_query_1['content'], '200');?>...</p>
							<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon-big.png')?>" alt="comment" /> <?=$this->post()->getCountComment($list_post_3_query_1['id_post']);?> <?=$this->e($front_comment);?></a>
							<a href="#"><i class="fa fa-eye" style="color: green"></i> <?=$list_post_3_query_1['hits'];?> <?=$this->e($front_hits);?></a>
						</div>
					</div>
				</div><!-- col-md-6 /- -->
				<?php } ?>
			
				<!-- col-md-3 -->
				<div class="col-md-3 no-padding">
					<?php
						$post_by_categorys_3_query_3 = $this->post()->getPostByCategory('3', '3,2', 'DESC', WEB_LANG_ID);
						foreach($post_by_categorys_3_query_3 as $list_post_3_query_3){
					?>
					<div class="col-md-12 col-sm-6">
						<div class="post-box">
							<div class="image-box">
								<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post_3_query_3['picture'];?>" alt="<?=$list_post_3_query_3['title'];?>" />
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_3_query_3);?>" class="add-sign-small color-orange"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
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
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_3_query_3);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
								<div class="box-content">
									<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_3_query_3);?>" class="block-title"><?=$list_post_3_query_3['title'];?></a>
									<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($list_post_3_query_3['date']);?> | <?=$list_post_3_query_3['time'];?></p>
									<p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post_3_query_3['content'], '100');?>... </p>
									<a href="#"><i class="fa fa-eye"></i> <?=$list_post_3_query_3['hits'];?></a>
									<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($list_post_3_query_3['id_post']);?></a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div><!-- col-md-3 -->
			</div>
		</div><!-- Container /- -->
	</div>
	<!-- Category 3 /- -->