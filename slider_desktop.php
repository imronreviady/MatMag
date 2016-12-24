		<!-- slider1-container -->
		<div id="slider1_container" class="slider1-container">
			<div data-u="slides" class="slides-new">
				<div>
					<div class="container">
						<div class="row">
							<?php
								$sliders_post = $this->post()->getPost('1', 'DESC', WEB_LANG_ID);
								foreach($sliders_post as $slider_post){
								$slider_category = $this->category()->getCategory($slider_post['id_post'], WEB_LANG_ID);
							?>
							<div class="col-md-6 slider-box-left">
								<div class="full-box-inner">

									<div class="image-box">
										<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" alt="<?=$slider_post['title'];?>" height="530px" />
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post);?>" class="add-sign-big color-violate"><img src="<?=$this->asset('/images/icon/big-plus.png')?>" alt="big-plus" /></a>
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

									<div class="box-content">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post);?>" class="block-title"><h3><?=$slider_post['title'];?></a>
										<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post['date']);?> | <?=$slider_post['time'];?></p>
									</div>

								</div>
							</div>
							<?php } ?>
							<div class="col-md-6 slider-box-right">
								<?php
									$sliders_post2 = $this->post()->getPost('1,4', 'DESC', WEB_LANG_ID);
									foreach($sliders_post2 as $slider_post2){
									$slider_category2 = $this->category()->getCategory($slider_post2['id_post'], WEB_LANG_ID);
								?>
								<div class="col-md-6 col-sm-6">
									<div class="post-box">
										<div class="image-box">
											<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post2['picture'];?>" alt="<?=$slider_post2['title'];?>" />
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post2);?>" class="add-sign-small color-green"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
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
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post2);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
											<div class="box-content">
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post2);?>" class="block-title"><?=$slider_post2['title'];?></a>
												<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post2['date']);?> | <?=$slider_post2['time'];?></p>
												<p><?=$this->pocore()->call->postring->cuthighlight('post', $slider_post2['content'], '50');?>... </p>
												<a href="#"><i class="fa fa-eye"></i> <?=$slider_post2['hits'];?></a>
												<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($slider_post2['id_post']);?></a>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div><!-- item /- -->
				
				<div>
					<div class="container">
						<div class="row">
							<?php
								$sliders_post3 = $this->post()->getPost('5,1', 'DESC', WEB_LANG_ID);
								foreach($sliders_post3 as $slider_post3){
								$slider_category3 = $this->category()->getCategory($slider_post3['id_post'], WEB_LANG_ID);
							?>
							<div class="col-md-6 slider-box-left">
								<div class="full-box-inner">
									<div class="image-box">
										<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post3['picture'];?>" alt="<?=$slider_post3['title'];?>" height="530px" />
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post3);?>" class="add-sign-big color-yellow-green"><img src="<?=$this->asset('/images/icon/big-plus.png')?>" alt="big-plus" /></a>
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
									<div class="box-content">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post3);?>" class="block-title"><?=$slider_post3['title'];?></a>
										<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post3['date']);?> | <?=$slider_post3['time'];?></p>
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="col-md-6 slider-box-right">
								<?php
									$sliders_post4 = $this->post()->getPost('6,4', 'DESC', WEB_LANG_ID);
									foreach($sliders_post4 as $slider_post4){
									$slider_category4 = $this->category()->getCategory($slider_post4['id_post'], WEB_LANG_ID);
								?>
								<div class="col-md-6 col-sm-6">
									<div class="post-box">
										<div class="image-box">
											<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post4['picture'];?>" alt="<?=$slider_post4['title'];?>" />
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post4);?>" class="add-sign-small color-purpal"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
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
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post4);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
											<div class="box-content">
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post4);?>" class="block-title"><?=$slider_post4['title'];?></a>
												<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post4['date']);?> | <?=$slider_post4['time'];?></p>
												<p><?=$this->pocore()->call->postring->cuthighlight('post', $slider_post4['content'], '50');?>... </p>
												<a href="#"><i class="fa fa-eye"></i> <?=$slider_post4['hits'];?></a>
												<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($slider_post4['id_post']);?></a>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div> <!-- item 2 /- -->
				
				<div>
					<div class="container">
						<div class="row">
							<?php
								$sliders_post5 = $this->post()->getPost('10,1', 'DESC', WEB_LANG_ID);
								foreach($sliders_post5 as $slider_post5){
									$slider_category5 = $this->category()->getCategory($slider_post5['id_post'], WEB_LANG_ID);
							?>
							<div class="col-md-6 slider-box-left">
								<div class="full-box-inner">
									<div class="image-box">
										<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post5['picture'];?>" alt="<?=$slider_post5['title'];?>" height="530px" />
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post5);?>" class="add-sign-big color-orange"><img src="<?=$this->asset('/images/icon/big-plus.png')?>" alt="big-plus" /></a>
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
									<div class="box-content">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post5);?>" class="block-title"><?=$slider_post5['title'];?></a>
										<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post5['date']);?> | <?=$slider_post5['time'];?></p>
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="col-md-6 slider-box-right">
								<?php
									$sliders_post6 = $this->post()->getPost('11,4', 'DESC', WEB_LANG_ID);
									foreach($sliders_post6 as $slider_post6){
										$slider_category6 = $this->category()->getCategory($slider_post6['id_post'], WEB_LANG_ID);
								?>
								<div class="col-md-6 col-sm-6">
									<div class="post-box">
										<div class="image-box">
											<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post6['picture'];?>" alt="<?=$slider_post6['title'];?>" />
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post6);?>" class="add-sign-small color-blue"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
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
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post6);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
											<div class="box-content">
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post6);?>" class="block-title"><?=$slider_post6['title'];?></a>
												<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post6['date']);?> | <?=$slider_post6['time'];?></p>
												<p><?=$this->pocore()->call->postring->cuthighlight('post', $slider_post6['content'], '50');?>... </p>
												<a href="#"><i class="fa fa-eye"></i> <?=$slider_post6['hits'];?></a>
												<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($slider_post6['id_post']);?></a>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div><!-- item 3 /- -->            
			</div>
			<!-- Arrow Left -->
			<span data-u="arrowleft" class="jssora13l">
				<i class="fa fa-angle-left"></i>
			</span>
			<!-- Arrow Right -->
			<span data-u="arrowright" class="jssora13r">
				<i class="fa fa-angle-right"></i>
			</span>
		</div><!-- slider-container1 /- -->