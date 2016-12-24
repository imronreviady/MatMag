<?=$this->layout('index');?>

	<!-- Insert Widget Breaking News -->
    <?=$this->insert('widget_breaking_news');?>	

	<!-- Page-Banner -->
	<div class="page-banner">
		<img src="<?=$this->asset('/images/contact/breadcrum-image.png')?>" alt="error 404">
		<h2> 404 </h2>
	</div>
	<!-- Page-Banner /- -->
 
	<!--page-breadcrumb -->
	<div class="page-breadcrumb">
		<div class="container">
			<h6>404</h6>
			<ol class="breadcrumb pull-right">
				<li><a href="index.html">Home</a></li>
				<li class="active">404</li>
			</ol>
		</div>
	</div>
	<!-- page-breadcrumb /- -->
	
	<!-- 404 error-page -->
	<div class="error-message-box">
		<div class="container">
			<div class="col-md-9 error-page-404">	
				<div class="error-page">
					<i class="fa fa-exclamation-triangle"></i>
					<h2> 404 <span> error </span></h2>
				</div>
				<h4><?=$this->e($front_404_text);?> </h4>
			</div>
		</div>
	</div>
	<!-- 404 error-page /- -->