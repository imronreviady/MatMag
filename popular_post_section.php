	<!-- Post --> 
	<div id="category-post-section" class="category-post-section">
		<!-- Container -->
		<div class="container">
			<div class="row">
				<?php
					$populars_post = $this->post()->getPopular('6', 'DESC', WEB_LANG_ID);
					foreach($populars_post as $popular_post){
						$editor = $this->post()->getAuthor($popular_post['editor']);
						if ($editor['picture'] != '') {
							$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/'.$editor['picture'];
						} else {
							$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/user-editor.jpg';
						}
				?>
				<!-- col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<div class="post-box">
						<div class="image-box">
							<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$popular_post['picture'];?>" alt="<?=$popular_post['title'];?>" height="230px" />
							<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_post);?>" class="add-sign-big color-orange"><img src="<?=$this->asset('/images/icon/big-plus.png')?>" alt="big-plus" /></a>
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
							<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_post);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
							<div class="box-content">
								<span><img src="<?=$editor_avatar;?>" class="img-circle" alt="" width="20px"> <?=$editor['nama_lengkap'];?></span>
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_post);?>" class="block-title"><?=$popular_post['title'];?></a>
								<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($popular_post['date']);?> | <?=$popular_post['time'];?></p>
								<p><?=$this->pocore()->call->postring->cuthighlight('post', $popular_post['content'], '100');?>...</p>
								<a href="#"><i class="fa fa-eye"></i> <?=$popular_post['hits'];?></a>
								<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($popular_post['id_post']);?></a>
							</div>
						</div>
					</div>
				</div><!-- col-md-4 /- -->
				<?php } ?>
			</div>
		</div><!-- Container /- -->
	</div><!-- Post Section /- -->