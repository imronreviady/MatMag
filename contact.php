<?=$this->layout('index');?>

	<!-- Insert Widget Breaking News -->
    <?=$this->insert('widget_breaking_news');?>

    <!-- Page-Banner -->
	<div class="page-banner">
		<img src="<?=$this->asset('/images/contact/breadcrum-image.png')?>" alt="breadcrum-header">
		<h2> <?=$this->e($front_contact);?> </h2>
	</div>
	<!-- Page-Banner -->

	<!--page-breadcrumb -->
	<div class="page-breadcrumb no-padding">
		<div class="container">
			<h6><?=$this->e($front_contact);?></h6>
			<ol class="breadcrumb pull-right">
				<li><a href="index.html">Home</a></li>
				<li class="active"><?=$this->e($front_contact);?></li>
			</ol>
		</div>
	</div>
	<!-- page-breadcrumb -->
	
	<!--Map -->
	<div class="map">
		<iframe src="https://maps.google.com/maps?q=<?=$this->pocore()->call->posetting[9]['value'];?>&hl=es;z=14&amp;output=embed"></iframe>
	</div>
	<!--Map -->	
	
	
	<div class="send-us-mail">
		<!-- Section Header -->
		<div class="section-header">
			<h2><?=$this->e($front_contact);?></h2>
		</div>
		<!-- Section Header /- -->
	
		<!-- contact-form -->
		<div class="container">
			<div class="col-md-offset-1 col-md-3 col-sm-5 no-padding contact-details">
				<div class="contact">	
					<div class="col-md-3 col-sm-2 col-xs-2 no-padding">
						<img src="<?=$this->asset('/images/icon/home-icon.png')?>" alt="home-icon">
					</div>
					<div class="col-md-9 col-sm-10 col-xs-10 contact-list">
						<h3> Address</h3>
						<p><?=htmlspecialchars_decode($this->pocore()->call->posetting[8]['value']);?> </p>
					</div>
				</div>
				<div class="contact">
					<div class="col-md-3 col-sm-2 col-xs-2 no-padding">
						<img src="<?=$this->asset('/images/icon/telephone-icon.png')?>" alt="telephone-icon">
					</div>
					<div class="col-md-9 col-sm-10 col-xs-10 contact-list">
						<h3> Telephone</h3>
						<p><?=$this->pocore()->call->posetting[6]['value'];?> </p>
					</div>
				</div>
				<div class="contact">	
					<div class="col-md-3 col-sm-2 col-xs-2 no-padding">
						<img src="<?=$this->asset('/images/icon/e-mail-icon.png')?>" alt="e-mail-icon">
					</div>
					<div class="col-md-9 col-sm-10 col-xs-10 contact-list">
						<h3>E-Mail Address </h3>
						<p><?=$this->pocore()->call->posetting[5]['value'];?> </p>
					</div>
				</div>
				<div class="contact">
					<div class="col-md-3 col-sm-2 col-xs-2 no-padding">
						<img src="<?=$this->asset('/images/icon/url-icon.png')?>" alt="website-icon">
					</div>
					<div class="col-md-9 col-sm-10 col-xs-10  contact-list">
						<h3>Website</h3>
						<p> <?=BASE_URL;?></p>
					</div>
				</div>
			</div>
			<div id="contact" class="col-md-7 col-sm-7 contact-form">
				<?=htmlspecialchars_decode($this->e($alertmsg));?>
				<form id="template-contactform" name="template-contactform" action="<?=BASE_URL;?>/contact" method="post">
					<div id="alert-msg" class="alert-msg"></div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon" id="template-contactform-name"><img src="<?=$this->asset('/images/icon/user.png')?>" alt="user"></span>
						<input type="text" class="form-control" id="template-contactform-name" name="contact_name" value="<?=(isset($_POST['contact_name']) ? $_POST['contact_name'] : '');?>" placeholder="<?=$this->e($contact_name);?> *" aria-describedby="sizing-addon1" required />
					</div>
					<div class="input-group input-group-lg ">
						<span class="input-group-addon" id="template-contactform-email"><i class="fa fa-envelope"></i></span>
						<input type="email" class="form-control" id="template-contactform-email" name="contact_email" value="<?=(isset($_POST['contact_email']) ? $_POST['contact_email'] : '');?>" placeholder="<?=$this->e($contact_email);?> *" aria-describedby="sizing-addon2" required />
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon" id="template-contactform-subject"><i class="fa fa-tasks"></i></span>
						<input type="text" class="form-control" id="template-contactform-subject" name="contact_subject" value="<?=(isset($_POST['contact_subject']) ? $_POST['contact_subject'] : '');?>" placeholder="<?=$this->e($contact_subject);?> *" aria-describedby="sizing-addon3" required />
					</div>
					<div class="input-group input-group-lg textarea-control">
						<span class="input-group-addon" id="template-contactform-message"><i class="fa fa-pencil"></i></span>
						<textarea class="form-control" id="template-contactform-message" name="contact_message" rows="6"  placeholder="<?=$this->e($contact_message);?> *"><?=(isset($_POST['contact_message']) ? $_POST['contact_message'] : '');?></textarea>
					</div>
					<div class="input-group input-group-lg hidden">
						<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control" />
					</div>
		
					<button class="btn btn-default send-message" type="submit" id="template-contactform-submit" name="contact_submit" value="submit"><?=$this->e($front_contact_btn);?></button>
				</form>
				<script type="text/javascript">
					$("#template-contactform").validate();
				</script>
			</div>
		</div>
	</div>
	<!--contact-form -->