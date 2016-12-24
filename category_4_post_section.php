			<!-- col-md-8 -->
				<div class="col-md-8 col-sm-6">
					<div class="row">
					<?php
						$post_by_categorys_4 = $this->post()->getPostByCategory('4', '10', 'DESC', WEB_LANG_ID);
						foreach($post_by_categorys_4 as $list_post_4){
							$editor_2 = $this->post()->getAuthor($list_post_4['editor']);
							if ($editor_2['picture'] != '') {
								$editor_avatar_2 = BASE_URL.'/'.DIR_CON.'/uploads/'.$editor_2['picture'];
							} else {
								$editor_avatar_2 = BASE_URL.'/'.DIR_CON.'/uploads/user-editor.jpg';
							}
					?>
					<!-- col-md-6 -->
					<div class="col-md-6">
						<div class="post-box">
							<div class="image-box">
								<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$list_post_4['picture'];?>" alt="<?=$list_post_4['title'];?>" />
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_4);?>" class="add-sign-big color-pink"><img src="<?=$this->asset('/images/icon/big-plus.png')?>" alt="big-plus" /></a>
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
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_4);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
								<div class="box-content">
									<span><img src="<?=$editor_avatar_2;?>" class="img-circle" alt="" width="20px"> <?=$editor_2['nama_lengkap'];?></span>
									<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $list_post_4);?>" class="block-title"><?=$list_post_4['title'];?></a>
									<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($list_post_4['date']);?> | <?=$list_post_4['time'];?></p>
									<p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post_4['content'], '100');?>...</p>
									<a href="#"><i class="fa fa-eye"></i> <?=$list_post_4['hits'];?></a>
									<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($list_post_4['id_post']);?></a>
								</div>
							</div>
						</div>
					</div><!-- col-md-6 /- -->
					<?php } ?>
					</div>
				</div><!-- col-md-8 /- -->