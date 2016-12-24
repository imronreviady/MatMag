<!-- Insert header script here -->

	<!-- Header Section -->
	<header id="header" class="header">
		<!-- top-header -->
		<div class="top-header">
			<!-- container -->
			<div class="container">
				<div class="row">
					<div class="top-menu col-md-6 col-sm-6">
						<nav class="navbar navbar-default">						
							<div class="navbar-header">
								<button aria-controls="navbar" aria-expanded="false" data-target="#navbar2" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse" id="navbar2">
								<ul class="nav navbar-nav">
									<li><a href="<?=BASE_URL;?>/pages/tentang-kami"><?=$this->e($front_about);?></a></li>
									<li><a href="<?=BASE_URL;?>/sitemap.xml">Sitemap</a></li>
									<li><a href="<?=BASE_URL;?>/contact"><?=$this->e($front_contact);?></a></li>
									<?php if ($this->pocore()->call->posetting[17]['value'] == 'Y') { ?>
										<?php if (empty($_SESSION['namauser_member']) AND empty($_SESSION['passuser_member']) AND empty($_SESSION['login_member'])) { ?>
										<li><a href="<?=BASE_URL;?>/member/login" class="hidden-sm hidden-xs"><i class="fa fa-plus"></i> <?=$this->e($front_member_login);?></a></li>
										<?php } else { ?>
										<li><a href="<?=BASE_URL;?>/member" class="hidden-sm hidden-xs"><i class="fa fa-user"></i> <?=$_SESSION['namauser_member'];?></a></li>
										<?php } ?>
									<?php } ?>
									<li>
										<form method="post" action="<?=BASE_URL;?>/./" role="form" onChange="submit()" style="margin-top: 10px">
											<input type="hidden" name="refer" value="<?=((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" />
											<div class="form-group">
												<select class="form-control" name="lang" required="">
													<?php
														$languages = $this->language()->getLanguage('ASC');
														foreach($languages as $language){
															echo "<option value='".$language['code']."' ".($language['code'] == WEB_LANG ? 'selected' : '').">".$language['title']."</option>";
														}
													?>
												</select>
											</div>
										</form>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<ul class="top-social col-md-6 col-sm-6">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div><!-- container /- -->
		</div><!-- top-header /- -->
		
		<!-- logo-add-block -->
		<div class="logo-add-block">
			<!-- container -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 logo-block col-sm-3">
						<a href="<?=BASE_URL;?>"><img src="<?=$this->asset('/images/logo.png')?>" alt="logo"></a>
					</div>
					<div class="col-md-9 add-block col-sm-9">
						<a href="#"><img src="<?=$this->asset('/images/adds.png')?>" alt="adds" /></a>
					</div>
				</div>
			</div><!-- container /- -->
		</div><!-- logo-add-block /- -->
		
		<!-- menu-block -->
		<div class="menu-block">
			<!-- container -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 search-follow ow-right-padding">
						<?php if ($this->pocore()->call->posetting[17]['value'] == 'Y') { ?>
							<?php if (empty($_SESSION['namauser_member']) AND empty($_SESSION['passuser_member']) AND empty($_SESSION['login_member'])) { ?>
							<a href="<?=BASE_URL;?>/member/login" class="follow hidden-md hidden-lg"><i class="fa fa-plus"></i> <?=$this->e($front_member_login);?></a>
							<?php } else { ?>
							<a href="<?=BASE_URL;?>/member" class="follow hidden-md hidden-lg"><i class="fa fa-user"></i> <?=$_SESSION['namauser_member'];?></a>
							<?php } ?>
						<?php } else { ?>
						<a href="#" class="follow hidden-md hidden-lg">Menu</a>
						<?php } ?>
						<div id="sb-search" class="sb-search">
							<form action="<?=BASE_URL;?>/search" method="post">
								<input class="sb-search-input" placeholder="<?=$this->e($front_search);?>..." type="text" value="" name="search" id="search">
								<button class="sb-search-submit"><i class="fa fa-search"></i></button>
								<span class="sb-icon-search"></span>
							</form>
						</div>
					</div>
					<div class="col-md-12">
						<nav class="navbar navbar-default">						
							<div class="navbar-header">
								<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="<?=BASE_URL;?>"><img src="<?=$this->asset('/images/responsive-logo.png')?>" alt="logo" /></a>
							</div>
							<div class="navbar-collapse collapse" id="navbar">
								<?php
									echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav navbar-nav"', 'class="dropdown"', 'class="dropdown-menu" role="menu"');
								?>
							</div><!-- .nav-collapse /- -->
						</nav> <!-- nav /- -->
					</div>
				</div>
			</div><!-- container /- -->
		</div><!-- menu-block /- -->
	</header>
	<!-- Header Section /- -->