			<!-- col-md-4 -->
				<div class="col-md-4 col-sm-6 widget-sidebar">
					
					<!-- Latest Post -->
					<aside class="widget widget_latest_post">
						<h3 class="widget-title"><?=$this->e($front_recent);?></h3>
						<div class="widget-inner">
							<ul class="post">
								<?php
									$recents_side_home = $this->post()->getRecent('3', 'DESC', WEB_LANG_ID);
									foreach($recents_side_home as $recent_side_home){
								?>
								<li>
									<div class="col-md-5 col-sm-5 col-xs-4">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $recent_side_home);?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$recent_side_home['picture'];?>" alt="<?=$recent_side_home['title'];?>" /></a>
									</div>
									<div class="col-md-7 col-sm-7 col-xs-8">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $recent_side_home);?>" class="post-title"><?=$recent_side_home['title'];?> </a>
										<p>
											<a href="#"><i class="fa fa-eye"></i> <?=$recent_side_home['hits'];?></a> 
											<span><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($recent_side_home['date']);?></span>
										</p>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</aside><!-- Latest Post /- -->
					
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
					</aside><!-- Latest Tweets /- -->
					
					<!-- Album -->
					<aside class="widget">
						<h3 class="widget-title"><?=$this->e($front_gallery);?></h3>
						<div class="widget-inner">
							<div id="widget-flicker" class="owl-carousel owl-theme">
								<?php
									$albums_side_home = $this->gallery()->getAlbum('8', 'id_album ASC', '');
									foreach($albums_side_home as $alb_side_home){
								?>
								<div class="item">
									<a href="<?=BASE_URL.'/gallery/'.$this->e($alb_side_home['seotitle']);?>">
										<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$alb_side_home['picture'];?>" alt="<?=$alb_side_home['title'];?>" />
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
					</aside><!-- Album /- -->
					
					<!-- Comments -->
					<aside class="widget widget_comments">
						<h3 class="widget-title"><?=$this->e($front_comment);?></h3>
						<div class="widget-inner">
							<ul class="comment">
								<?php
									$comments_side_home = $this->post()->getComment('3', 'DESC');
									foreach($comments_side_home as $comment_side_home){
									$comment_post_home = $this->post()->getPostById($comment_side_home['id_post'], WEB_LANG_ID);
								?>
								<li>
									<div class="col-md-3 col-sm-3 col-xs-4">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $comment_post_home);?>#comment"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_avatar.jpg" alt="Komentar" /></a>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-8">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $comment_post_home);?>#comment" class="comment-title"><?=$comment_side_home['name'];?> <span><?=$comment_side_home['date'];?></span></a>
										<p><?=$this->pocore()->call->postring->cuthighlight('post', $comment_side_home['comment'], '80');?>...</p>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</aside><!-- Comments /- -->
					
				</div><!-- col-md-4 /- -->