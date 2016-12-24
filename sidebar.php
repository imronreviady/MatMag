<!-- Insert sidebar script here -->

				<!-- col-md-4 -->
				<div class="col-md-4 col-sm-6 widget-sidebar">
					<!-- Latest Post -->
					<aside class="widget widget_latest_post">
						<h3 class="widget-title"><?=$this->e($front_recent);?></h3>
						<div class="widget-inner">
							<ul class="post">
								<?php
									$recents_side = $this->post()->getRecent('3', 'DESC', WEB_LANG_ID);
									foreach($recents_side as $recent_side){
								?>
								<li>
									<div class="col-md-5 col-sm-5 col-xs-4">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $recent_side);?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$recent_side['picture'];?>" alt="<?=$recent_side['title'];?>" /></a>
									</div>
									<div class="col-md-7 col-sm-7 col-xs-8">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $recent_side);?>" class="post-title"><?=$recent_side['title'];?> </a>
										<p>
											<a href="#"><i class="fa fa-eye"></i> <?=$recent_side['hits'];?></a> 
											<span><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($recent_side['date']);?></span>
										</p>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</aside><!-- Latest Post /- -->
					
					<!-- Categories -->
					<aside class="widget widget_categories">
						<h3 class="widget-title"><?=$this->e($front_categories);?></h3>
						<div class="widget-inner">
							<ul>
								<?php
									$categorys_side = $this->category()->getAllCategory(WEB_LANG_ID);
									foreach($categorys_side as $category_side){
								?>
								<li class="cat-item">
									<a title="<?=$category_side['title'];?>" href="<?=BASE_URL;?>/category/<?=$category_side['seotitle'];?>"><?=$category_side['title'];?></a>
								</li>
								<?php } ?>
							</ul>
						</div>
					</aside><!-- Categories /- -->
					
					<!-- Latest Tweets -->
					<aside class="widget widget_latest_tweets">
						<h3 class="widget-title">latest Tweets</h3>
						<div class="widget-inner">
							<ul class="tweets">
								<li>
									<div class="col-md-1 col-sm-1 col-xs-1">
										<i class="fa fa-twitter"></i>
									</div>
									<div class="col-md-11 col-sm-11 col-xs-11">
										<a class="twitter-timeline" data-lang="id" data-height="500" data-link-color="#19CF86" href="https://twitter.com/irevi19">Tweets by irevi19</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
									</div>
								</li>
							</ul>
						</div>
					</aside><!-- Latest Tweets Over -->
					
					<!-- Galery -->
					<aside class="widget widget_Flicker">
						<h3 class="widget-title"><?=$this->e($front_gallery);?></h3>
						<div class="widget-inner">
							<div id="widget-flicker" class="owl-carousel owl-theme">
								<?php
									$albums_side = $this->gallery()->getAlbum('8', 'id_album ASC', $this->e($page));
									foreach($albums_side as $alb_side){
								?>
								<div class="item">
									<a href="<?=BASE_URL.'/gallery/'.$this->e($alb_side['seotitle']);?>">
										<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$alb_side['picture'];?>" alt="<?=$alb_side['title'];?>" />
										<span><?=$alb_side['title'];?></span>
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
					</aside><!-- Galery /- -->
					
					<!-- Comments -->
					<aside class="widget widget_comments">
						<h3 class="widget-title"><?=$this->e($front_comment);?></h3>
						<div class="widget-inner">
							<ul class="comment">
								<?php
									$comments_side = $this->post()->getComment('3', 'DESC');
									foreach($comments_side as $comment_side){
										$comment_post = $this->post()->getPostById($comment_side['id_post'], WEB_LANG_ID);
								?>
								<li>
									<div class="col-md-3 col-sm-3 col-xs-4">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $comment_post);?>#comment"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_avatar.jpg" alt="Komentar" /></a>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-8">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $comment_post);?>#comment" class="comment-title"><?=$comment_side['name'];?> <span><?=$comment_side['date'];?></span></a>
										<p><?=$comment_side['name'];?>:</strong> <?=$this->pocore()->call->postring->cuthighlight('post', $comment_side['comment'], '80');?>...</p>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</aside><!-- Comments /- -->
					
					<!-- Tags -->
					<aside class="widget widget_tag_cloud">
						<h3 class="widget-title"><?=$this->e($front_tag);?></h3>
						<div class="tagcloud widget-inner">
							<?=$this->post()->getAllTag('RAND()', '10', '');?>
						</div>
					</aside>
					<!-- Tags /- -->
					
					<!-- Archives -->
					<aside class="widget">
						<h3 class="widget-title">Facebook</h3>
						<div class="widget-inner">
							<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmaleslabs&amp;width=350&amp;height=240&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:240px; max-width: 100% !important;" allowTransparency="true"></iframe>
						</div>
					</aside><!-- Archives /- -->
					
				</div><!-- col-md-4 /- -->