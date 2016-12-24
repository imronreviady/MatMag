		<!-- carousel -->
		<div id="carousal-slider" class="carousal-slider1">		
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="container">
							<div class="row">
								<?php
									$sliders_post7 = $this->post()->getPost('1', 'DESC', WEB_LANG_ID);
									foreach($sliders_post7 as $slider_post7){
										$slider_category7 = $this->category()->getCategory($slider_post7['id_post'], WEB_LANG_ID);
								?>
								<div class="col-md-6 slider-box-left">
									<div class="full-box-inner">
										<div class="image-box">
											<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post7['picture'];?>" alt="<?=$slider_post7['title'];?>" height="260px" />
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post7);?>" class="add-sign-big color-violate"><img src="<?=$this->asset('/images/icon/big-plus.png')?>" alt="big-plus" /></a>
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
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post7);?>" class="block-title"><?=$slider_post7['title'];?></a>
											<p class="time"><i class="fa fa-clock-o"></i> </i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post7['date']);?> | <?=$slider_post7['time'];?></p>
										</div>
									</div>
								</div>
								<?php } ?>
								<div class="col-md-6 slider-box-right">
									<?php
										$sliders_post8 = $this->post()->getPost('1,4', 'DESC', WEB_LANG_ID);
										foreach($sliders_post8 as $slider_post8){
										$slider_category8 = $this->category()->getCategory($slider_post8['id_post'], WEB_LANG_ID);
									?>
									<div class="col-md-6 col-sm-6">
										<div class="post-box">
											<div class="image-box">
												<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post8['picture'];?>" alt="<?=$slider_post8['title'];?>" />
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post8);?>" class="add-sign-small color-purpal"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
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
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post8);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
												<div class="box-content">
													<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post8);?>" class="block-title"><?=$slider_post8['title'];?></a>
													<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post8['date']);?> | <?=$slider_post8['time'];?></p>
													<p><?=$this->pocore()->call->postring->cuthighlight('post', $slider_post8['content'], '50');?>... </p>
													<a href="#"><i class="fa fa-eye"></i> <?=$slider_post8['hits'];?></a>
													<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($slider_post8['id_post']);?></a>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>					
					
					<div class="item">
						<div class="container">
							<div class="row">
								<?php
									$sliders_post9 = $this->post()->getPost('5,1', 'DESC', WEB_LANG_ID);
									foreach($sliders_post9 as $slider_post9){
										$slider_category9 = $this->category()->getCategory($slider_post9['id_post'], WEB_LANG_ID);
								?>
								<div class="col-md-6 slider-box-left">
									<div class="full-box-inner">
										<div class="image-box">
											<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post9['picture'];?>" alt="<?=$slider_post9['title'];?>" height="260px" />
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
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post9);?>" class="block-title"><?=$slider_post9['title'];?></a>
											<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post9['date']);?> | <?=$slider_post9['time'];?></p>
										</div>
									</div>
								</div>
								<?php } ?>
								<div class="col-md-6 slider-box-right">
									<?php
										$sliders_post10 = $this->post()->getPost('5,1', 'DESC', WEB_LANG_ID);
										foreach($sliders_post10 as $slider_post10){
											$slider_category10 = $this->category()->getCategory($slider_post10['id_post'], WEB_LANG_ID);
									?>
									<div class="col-md-6 col-sm-6">
										<div class="post-box">
											<div class="image-box">
												<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post10['picture'];?>" alt="<?=$slider_post10['title'];?>" />
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post10);?>" class="add-sign-small color-purpal"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
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
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post10);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
												<div class="box-content">
													<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post10);?>" class="block-title"><?=$slider_post10['title'];?></a>
													<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($slider_post10['date']);?> | <?=$slider_post10['time'];?></p>
													<p><?=$this->pocore()->call->postring->cuthighlight('post', $slider_post10['content'], '50');?>... </p>
													<a href="#"><i class="fa fa-eye"></i> <?=$slider_post10['hits'];?></a>
													<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($slider_post10['id_post']);?></a>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
					<span class="fa fa-angle-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
					<span class="fa fa-angle-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>	
		</div>