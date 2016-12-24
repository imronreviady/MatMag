	<!-- Breaking News -->
	<div class="container">
		<div class="latest-update col-md-2 no-padding">
			<h3><?=$this->e($front_breaking_news);?></h3>
		</div>
		<div class="col-md-10 latest-post-list no-padding">
			<div data-speed="20000" data-direction="left" class='marquee'>
				<?php
					$headlines = $this->post()->getHeadline('5', 'DESC', WEB_LANG_ID);
					foreach($headlines as $headline){
				?>
				<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $headline);?>">
					<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$headline['picture'];?>" alt="<?=$headline['title'];?>" width="40px" /> <strong><?=$headline['title'];?>:</strong> <?=$this->pocore()->call->postring->cuthighlight('post', $headline['content'], '80');?>...
				</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- Breaking News /- -->