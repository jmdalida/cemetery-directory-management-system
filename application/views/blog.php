<!DOCTYPE html>
<html>
<head>
			<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp Dashboard</title>

	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="<?php echo base_url();?>assets/<?php echo base_url();?>assets/https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119386393-1');
	</script>
	<style type="text/css">
		.blog{
			background: #00c292;
			color: white;

		}
	</style>
</head>
<body>
	<?php echo $map['js']; ?>
	<div class="container">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12">
							<div class="blog">
                                <h4 style="color: white;"><span class="icon-copy ti-location-pin"></span>St. Michael Memorial Park</h4>
                                <p style="font-family: georgia; font-size: 12px; margin-left: 5px; ">Welcome to St. Michael Memorial Park Website</p>
                           	</div>
						</div>
						<div class="col-md-12 col-sm-12" style="margin-bottom: 5px;">
							<ul class="nav nav-tabs customtab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="<?php echo base_url();?>pages/view">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="<?php echo base_url();?>pages/map_burial_search" >Burial Search</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="<?php echo base_url();?>pages/map_lot_status">Lot Status</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="<?php echo base_url();?>pages/map_tour">Cemetery Map Tour</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="<?php echo base_url();?>pages/developers">About Developers</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="blog-wrap">
					<div class="container pd-0">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="blog-list">
									<ul>
										<li>
											<div class="row no-gutters">
												<div class="blog-caption">
													 <a href="#"><img src="<?php echo base_url("user_template_extend/img/2014-02-15.jpg"); ?>" alt="" /></a>
												</div>
                    							<br>
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4 style="text-decoration: underline; color: #00c292;">ABOUT US</h4>
														<div class="blog-by" style="color: black; font-size: 14px;">
															 <p class="text-justify"> <strong>St. Michael Memorial Park </strong> is situated at Pala-o, Iligan City, Philippines has an area of approximately 4 hectares equivalent to 40,000 square meters which lately expanded to 50,000 square meters area. St. Michael Memorial Park is a semi-private cemetery that entombed bodies of mostly well-known individuals. The semi-private cemetery handled by G. Lluch & Sons Incorporation. In addition, St. Michael Memorial Park is now the final resting place of 10,000 souls. St. Michael's Memorial Park is a diverse as the community it serves. It is a home to a melting pot of nationalities and religions. For example, people of Chinese, Korean, Japanese, American and many other nationalities are buried within it's gates. It's serves as a home to all the people of different religions of the world.  
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="bg-white border-radius-4 box-shadow mb-30">
									<h4 class="pd-20">CONTACT INFORMATION</h4>
									<div class="list-group">
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between"><span class="icon-copy ti-arrow-circle-left"> Gates Opens: 8:00 AM to 8:00 PM</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between"><span class="icon-copy ti-mobile"> (063)223-2543 or (063)221-2663</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between"><span class="icon-copy ti-location-pin"> 1st River Pala-o,Iligan City, Philippines</span></a>
									</div>
									<br> 
                    				<div><?php echo $map['html']; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- js -->
	<script src="<?php echo base_url();?>assets/<?php echo base_url();?>assets/vendors/scripts/script.js"></script>
</body>
</html>