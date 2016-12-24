<!-- Insert footer script here -->

<!-- Footer Section -->
	<div id="footer-section" class="footer-section">
		<!-- container -->
		<div class="container">
			<!-- col-md-4 -->
			<div class="col-md-4">
				<aside class="widget widget_about_us">
					<h3 class="widget-title"><?=$this->e($front_about);?></h3>
					<p>MatMag is Awesome Material Design Theme for PopojiCMS, clean, fast, and powefull.</p>
				</aside>
				<aside class="widget widget_social_icons">
					<h3 class="widget-title">Stay in touch</h3>
					<ul>
						<li><a href="#" target="_blank" class="fb"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" target="_blank" class="tw"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" target="_blank" class="gp"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" target="_blank" class="lin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank" class="dr"><i class="fa fa-dribbble"></i></a></li>						
					</ul>
				</aside>
			</div><!-- col-md-4 /- -->
			<!-- col-md-4 -->
			<div class="col-md-4">
				<aside class="widget widget_latest_post">
					<h3 class="widget-title"><?=$this->e($front_popular);?></h3>
					<ul class="post">
						<?php
							$populars = $this->post()->getPopular('3', 'DESC', WEB_LANG_ID);
							foreach($populars as $popular){
								$editor_footer = $this->post()->getAuthor($popular['editor']);
								if ($editor_footer['picture'] != '') {
									$editor_avatar_footer = BASE_URL.'/'.DIR_CON.'/uploads/'.$editor_footer['picture'];
								} else {
									$editor_avatar_footer = BASE_URL.'/'.DIR_CON.'/uploads/user-editor.jpg';
								}
						?>
						<li>
							<div class="col-md-3 col-sm-2 col-xs-2">
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular);?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular['picture'];?>" alt="<?=$popular['title'];?>" /></a>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10">
								<span><img src="<?=$editor_avatar_footer;?>" class="img-circle" alt="editor" width="20px"> <?=$editor_footer['nama_lengkap'];?></span>
								<p><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular);?>"><?=$popular['title'];?></a></p>
							</div>
						</li>
						<?php } ?>
					</ul>
				</aside>
			</div><!-- col-md-4 /- -->
			
			<!-- col-md-4 -->
			<div class="col-md-4">
				<aside class="widget widget_newsletter">
					<h3 class="widget-title"><?=$this->e($front_subscribe);?></h3>
					<p><?=$this->e($front_txt_subscribe);?></p>
					<form action="<?=BASE_URL;?>/subscribe" role="form" method="post">
						<div class="input-group">
							<input type="email" name="email" class="form-control" placeholder="<?=$this->e($front_email);?>">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><img src="<?=$this->asset('/images/footer/email-newsletter-icon.png')?>" alt="email-newsletter-icon" /></button>
							</span>
						</div><!-- /input-group -->
					</form>
				</aside>
			</div><!-- col-md-4 /- -->
		</div><!-- container /- -->
		<!-- Footer Bootom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="col-md-6 col-sm-6">
					<p>&copy; <?=date('Y');?> <?=$this->pocore()->call->posetting[0]['value'];?> All Rights Reserved. </p>
				</div>
				<div class="col-md-6 col-sm-6">
					<nav class="navbar navbar-default">						
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#footer-menu" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse" id="footer-menu">
							<ul class="nav navbar-nav">
								<li><a href="https://maleslabs.github.io">Theme MatMag Developed By Imron Reviady With <i class="fa fa-heart" style="color: red"></i></a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- Footer Bootom /- -->
	</div>
	<!-- Footer Section /- -->