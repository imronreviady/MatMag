<?=$this->layout('index');?>

	<!-- Insert Widget Breaking News -->
    <?=$this->insert('widget_breaking_news');?>	

    <!-- Slider Section -->
	<div id="slider-section" class="slider-section">
		
		<!-- Insert Slider For Big Screen -->
    	<?=$this->insert('slider_desktop');?>

		<!-- Insert Slider For Mobile Screen -->
    	<?=$this->insert('slider_mobile');?>

	</div><!-- Slider Section /- -->

	<!-- Adds -->
	<div class="add-show">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><a href="#"><img src="<?=$this->asset('/images/adds-2.png')?>" alt="adds" /></a></div>
			</div>
		</div>
	</div><!-- Adds /- -->

	<!--page-breadcrumb -->
	<div class="page-breadcrumb">
		<div class="container">
			<h6><?=$this->e($page_title);?></h6>
			<ol class="breadcrumb pull-right">
				<li><a href="index.html">Home</a></li>
				<li class="active"><?=$this->e($page_title);?></li>
			</ol>
		</div>
	</div>
	<!-- page-breadcrumb /- -->

	<!-- Blog Section -->
	<div id="blog-section" class="blog-section" style="margin-top: 67px;">
		<!-- container -->
		<div class="container">
			<div class="row">
				
				<!-- col-md-8 -->
				<div class="col-md-8 col-sm-6">
					<?php
						$tags = $this->post()->getPostFromTag('6', 'post.id_post DESC', $this->e($tag_seo), $this->e($page), WEB_LANG_ID);
						foreach($tags as $post){
							$editor = $this->post()->getAuthor($post['editor']);
						if ($editor['picture'] != '') {
							$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/'.$editor['picture'];
						} else {
							$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/user-editor.jpg';
						}
					?>
					<article>						
						<!-- blog-box -->
						<div class="blog-box">
							<div class="entry-cover">
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" alt="<?=$post['title'];?>" /></a>
								<a id="add_sign_count-<?=$post['id_post'];?>" class="add-sign-big color-lighter-violate"><img src="<?=$this->asset('/images/icon/big-plus.png')?>" alt="<?=$post['title'];?>" /></a>
							</div>
							
							<div class="post-box-inner">
								<div class="box-content">
									<span><?=$this->e($page_title);?></span>
									<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>" class="entry-title"><?=$post['title'];?></a>
									<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?> | <?=$post['time'];?></p>
									<span class="byline">
										<span class="author-image"><img src="<?=$editor_avatar;?>" alt="<?=$editor['nama_lengkap'];?>" class="img-circle" alt="editor" width="30px" /></span>
										<span class="author vcard">
											<span><?=$editor['nama_lengkap'];?></span>
										</span>
									</span>
									<div class="post-content" id="post-content-<?=$post['id_post'];?>">
										<p><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '400');?>...</p>
										<a href="#"><i class="fa fa-eye"></i> </i> <?=$post['hits'];?> <?=$this->e($front_hits);?></a>
										<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($post['id_post']);?> <?=$this->e($front_comment);?></a>
									</div>
								</div>								
							</div>
						</div><!-- blog-box /- -->
						
						<div class="blog-social">
							<aside class="widget widget_social_icons">
								<ul>
									<li><a href="#" target="_blank" class="fb"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" target="_blank" class="tw"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank" class="gp"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" target="_blank" class="lin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" target="_blank" class="dr"><i class="fa fa-dribbble"></i></a></li>						
								</ul>
							</aside>
							<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>" class="read-more pull-right">Read More</a>
						</div>						
					</article>
					<?php } ?>

					<nav>
						<ul class="pagination">
							<?=$this->post()->getTagPaging('6', $this->e($tag_seo), $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
						</ul>
					</nav>
					
				</div><!-- col-md-8 /- -->
				
				<!-- Insert Sidebar -->
				<?=$this->insert('sidebar');?>

			</div>
		</div><!-- container /- -->
	</div>
	<!-- Blog Section /- -->