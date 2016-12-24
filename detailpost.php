<?=$this->layout('index');?>

	<!-- Insert Widget Breaking News -->
    <?=$this->insert('widget_breaking_news');?>

    <!-- Page-Banner -->
	<div class="page-banner">
		<img src="<?=$this->asset('/images/about-us/about-benner.png')?>" alt="benner">
		<h2> <?=$post['title'];?> </h2>
	</div>
	<!-- Page-Banner -->
	
	<!--page-breadcrumb -->
	<div class="page-breadcrumb">
		<div class="container">
			<h6><?=$post['title'];?></h6>
			<ol class="breadcrumb pull-right">
				<li><a href="index.html">Home</a></li>
				<li class="active"><?=$post['title'];?></li>
			</ol>
		</div>
	</div>
	<!-- page-breadcrumb /- -->

	<!-- Single Post -->
	<div id="single-post" class="single-post">
			
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- col-md-8 -->
				<div class="col-md-8 col-sm-6">
						<article>						
						<!-- blog-box -->
						<div class="blog-box">
							<div class="entry-cover efek">
								<a href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" data-effect="mfp-newspaper" data-lightbox="image"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" alt="<?=$post['title'];?>" /></a>
								<a id="add_sign_count-<?=$post['id_post'];?>" class="add-sign-big color-pink-red"><i class="fa fa-angle-down"></i></a>
							</div>
					
							<div class="blog-content" id="post-content-<?=$post['id_post'];?>">
								<?php if ($post['picture_description'] != '') { ?>
									<p><i><?=$post['picture_description'];?></i></p>
								<?php } ?>
								<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?> | <?=$post['time'];?></p>
								<?=htmlspecialchars_decode(html_entity_decode($post['content']));?>
								<div class="tags">
									<?=$this->post()->getPostTag($post['tag'], '');?>
								</div>
								<div class="blog-social blog-content-inner">
									<aside class="widget widget_social_icons">
										<h4>Share this post</h4>
										<ul class="pull-right">
											<li><a href="#" target="_blank" class="fb"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" target="_blank" class="tw"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" target="_blank" class="gp"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" target="_blank" class="lin"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#" target="_blank" class="dr"><i class="fa fa-dribbble"></i></a></li>						
										</ul>
									</aside>
								</div>
								
								<div class="blog-content-inner prev-next-post">
									<?php
										$prevpost = $this->post()->getPrevPost($post['id_post'], WEB_LANG_ID);
										if ($prevpost) {
									?>
									<div class="col-md-6">
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $prevpost);?>" class="col-md-4 col-sm-4 col-xs-3"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$prevpost['picture'];?>" alt="blog-next" /></a>
										<div class="col-md-8 col-sm-8 col-xs-9">
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $prevpost);?>"><i class="fa fa-angle-double-left"></i> Previous Post</a>
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $prevpost);?>" class="block-title"><?=$prevpost['title'];?></a>
										</div>
									</div>
									<?php } ?>
									<?php
										$nextpost = $this->post()->getNextPost($post['id_post'], WEB_LANG_ID);
										if ($nextpost) {
									?>
									<div class="col-md-6">
										<div class="col-md-8 col-sm-8 col-xs-9">
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $nextpost);?>">Next Post <i class="fa fa-angle-double-right"></i></a>
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $nextpost);?>" class="block-title"><?=$nextpost['title'];?></a>
										</div>
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $nextpost);?>" class="col-md-4 col-sm-4 col-xs-3"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$nextpost['picture'];?>" alt="blog-next" /></a>
									</div>
									<?php } ?>
								</div>
								
								<?php
									$editor = $this->post()->getAuthor($post['editor']);
									if ($editor['picture'] != '') {
										$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/'.$editor['picture'];
									} else {
										$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/user-editor.jpg';
									}
								?>
								<div class="blog-content-inner author-information">
									<div class="col-md-3 col-sm-3 col-xs-3 row">
										<img src="<?=$editor_avatar;?>" alt="author" />
									</div>
									<div class="col-md-9 col-sm-9 col-xs-9">
										<h4 class="block-title"><?=$editor['nama_lengkap'];?></h4>
										<p><?=htmlspecialchars_decode(html_entity_decode($editor['bio']));?></p>
									</div>
									<aside class="widget widget_social_icons">
										<ul>
											<li><a href="#" target="_blank" class="fb"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" target="_blank" class="tw"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" target="_blank" class="gp"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" target="_blank" class="lin"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#" target="_blank" class="dr"><i class="fa fa-dribbble"></i></a></li>						
										</ul>
									</aside>
								</div>

								<div class="blog-content-inner">
									<div class="row">
										
									<div id="related-post" class="owl-carousel owl-theme">
										<?php
											$norelated = 1;
											$relateds = $this->post()->getRelated($post['id_post'], $post['tag'], '4', 'DESC', WEB_LANG_ID);
											foreach($relateds as $related){
										?>
										<div class="item">
											<div class="col-md-12">
												<div class="post-box">
													<div class="image-box">
														<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$related['picture'];?>" alt="<?=$related['title'];?>" />
														<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $related);?>" class="add-sign-small color-dark-pink"><img src="<?=$this->asset('/images/icon/small-plus.png')?>" alt="big-plus" /></a>
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
														<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $related);?>" class="box-read-more"><img src="<?=$this->asset('/images/icon/arrow.png')?>" alt="arrow" /> Read More</a>
														<div class="box-content">
															<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $related);?>" class="block-title"><?=$related['title'];?></a>
															<p class="time"><i class="fa fa-clock-o"></i> <?=$this->pocore()->call->podatetime->tgl_indo($related['date']);?></p>
															<a href="#"><i class="fa fa-eye"></i> <?=$related['hits'];?></a>
															<a href="#"><img src="<?=$this->asset('/images/icon/comment-icon.png')?>" alt="comment" /> <?=$this->post()->getCountComment($related['id_post']);?></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>

									</div>
								</div>
								
								<?php if ($post['comment'] == 'Y') { ?>
								<div class="blog-content-inner single-post-comment">
									<?php if ($this->post()->getCountComment($post['id_post']) > 0) { ?>
									<!-- Section Header -->
									<div class="section-header">
										<h2><span><?=$this->post()->getCountComment($post['id_post']);?></span> <?=$this->e($front_comment);?></h2>
									</div>
									<!-- Section Header /- -->
									<?php
									$com_parent = $this->post()->getCommentByPost($post['id_post'], '6', 'DESC', $this->e($page));
									$com_template = array(
												'parent_tag_open' => '<li id="li-comment-{$comment_id}">',
												'parent_tag_close' => '</li>',
												'child_tag_open' => '<ul class="children">',
												'child_tag_close' => '</ul>',
												'comment_list' => '
													<div id="comment-{$comment_id}" class="comment">
														<span class="comment-image">
															<img alt="avatar image" src="{$comment_avatar}" class="avatar">
														</span>
														<span class="comment-info d-text-c">
															<span>{$comment_datetime} </span><a href="{$comment_url}" rel="external nofollow">{$comment_name}</a>
														</span>
														<p>{$comment_content}</p>
														<a class="comment-reply-link d-text-c" id="{$comment_id}" href="#respond" title="'.$this->e($comment_reply).'"><i class="fa fa-mail-reply"></i> Reply</a>
													</div>													
												'
									);
									?>

									<ul class="commentlist"> 
										<?=$this->post()->generateComment($com_parent, 'DESC', $com_template);?>
									</ul>

									<nav>
										<ul class="pagination">
											<?=$this->post()->getCommentPaging('6', $post['id_post'], $post['seotitle'], $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
										</ul>
									</nav>

									<script type='text/javascript'>  
										$(function(){  
											$("a.comment-reply-link").click(function() {
												var id = $(this).attr("id");
												$("#id_parent").val(id);
											});
											return true;
										});
									</script>
									<?php } ?>
								</div>
								
								<div id="respond" class="comment-form">
									<!-- Section Header -->
									<div class="section-header">
										<h2><?=$this->e($front_leave_comment);?></h2>
									</div>
									<?=$this->pocore()->call->poflash->display();?>
									<!-- Section Header /- -->
									<form action="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>#comments" method="post" id="commentform">
										<input type="hidden" name="id_parent" id="id_parent" value="0" />
										<input type="hidden" name="id" name="id" value="<?=$post['id_post'];?>" />
										<input type="hidden" name="seotitle" id="seotitle" value="<?=$post['seotitle'];?>" />
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user"></i></span>
												<input type="text" class="form-control" name="name" id="name" value="<?=(isset($_POST['name']) ? $_POST['name'] : '');?>" aria-describedby="sizing-addon1" placeholder="<?=$this->e($comment_name);?> *" required />
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-envelope"></i></span>
												<input type="email" class="form-control" name="email" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" aria-describedby="sizing-addon2" placeholder="<?=$this->e($comment_email);?> *" required />
											</div>
										</div>
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user"></i></span>
												<input type="text" class="form-control" name="url" id="url" value="<?=(isset($_POST['url']) ? $_POST['url'] : '');?>" aria-describedby="sizing-addon1" placeholder="<?=$this->e($comment_website);?>" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="g-recaptcha" data-sitekey="<?=$this->pocore()->call->posetting[21]['value'];?>"></div>
										</div>
										<div class="col-md-12">
											<div class="input-group textarea-control">
												<span class="input-group-addon" id="sizing-addon4"><i class="fa fa-pencil"></i></span>
												<textarea name="comment" class="form-control " rows="6"  placeholder="<?=$this->e($comment_text);?> *" required><?=(isset($_POST['comment']) ? $_POST['comment'] : '');?></textarea>
											</div>
										</div>
										<button name="submit" type="submit" id="submit-button" class="btn btn-default send-message" value="Submit"><?=$this->e($comment_submit);?></button>
									</form>
									<script type="text/javascript">
										$("#commentform").validate();
									</script>
								</div>
								<?php } ?>
								
							</div>								
							
						</div><!-- blog-box /- -->
					</article>
				</div><!-- col-md-8 /- -->
			
				<!-- Insert Sidebar -->
				<?=$this->insert('sidebar');?>
			</div>
		</div><!-- container /- -->
	</div><!-- Single Post /- -->