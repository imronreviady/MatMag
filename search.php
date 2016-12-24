<?=$this->layout('index');?>

	<!-- Page-Banner -->
	<div class="page-banner">
		<img src="<?=$this->asset('/images/about-us/about-benner.png')?>" alt="benner">
		<h2> <?=$this->e($front_search_title);?> </h2>
	</div>
	<!-- Page-Banner -->
	
	<!--page-breadcrumb -->
	<div class="page-breadcrumb">
		<div class="container">
			<h6><?=$this->e($page_title);?></h6>
			<ol class="breadcrumb pull-right">
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="<?=$this->e($social_url);?>"><?=$this->e($page_title);?></a></li>
			</ol>
		</div>
	</div>
	<!-- page-breadcrumb /- -->

	<!-- Search Result -->
	<div id="search-result" class="search-result" style="margin-top: 67px;">
		
		<!-- Container -->
		<div class="container">
			<div class="row">
				
				<!-- col-md-8 -->
				<div class="col-md-8 col-sm-6">
					<div class="row">
					<?php
						$search = $this->post()->getPostFromSearch('10', 'post.id_post DESC', $this->e($query), $this->e($page), WEB_LANG_ID);
						foreach($search as $post){
							$editor_2 = $this->post()->getAuthor($post['editor']);
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
								<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" alt="<?=$post['title'];?>" />
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>" class="add-sign-big color-pink"><img src="<?=$this->asset('/images/icon/big-plus.png')?>" alt="big-plus" /></a>
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
								<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
								<div class="box-content">
									<span><img src="<?=$editor_avatar_2;?>" class="img-circle" alt="" width="20px"> <?=$editor_2['nama_lengkap'];?></span>
									<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>" class="block-title"><?=$post['title'];?></a>
									<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?> | <?=$post['time'];?></p>
									<p><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '100');?>...</p>
									<a href="#"><i class="fa fa-eye"></i> <?=$post['hits'];?></a>
									<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($post['id_post']);?></a>
								</div>
							</div>
						</div>
					</div><!-- col-md-6 /- -->
					<?php } ?>
					</div>

					<nav>
						<ul class="pagination">
							<?=$this->post()->getSearchPaging('10', $this->e($query), $this->e($page), WEB_LANG_ID, '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
						</ul>
					</nav>

				</div><!-- col-md-8 /- -->			
			
				<!-- Insert Sidebar For Home -->
    			<?=$this->insert('sidebar');?>

			</div>
		</div><!-- container /- -->
	</div><!-- Category 4 /- -->