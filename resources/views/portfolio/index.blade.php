@extends('layouts.portfolio')

@section('content')

	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="page_portfolio.html">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Portfolio
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1" data-toggle="tab">
								4 Columns </a>
							</li>
							<li>
								<a href="#tab_2" data-toggle="tab">
								3 Columns </a>
							</li>
							<li>
								<a href="#tab_3" data-toggle="tab">
								2 Columns </a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<!-- BEGIN FILTER -->
								<div class="margin-top-10">
									<ul class="mix-filter">
										<li class="filter" data-filter="all">
											 All
										</li>
										<li class="filter" data-filter="category_1">
											 UI Design
										</li>
										<li class="filter" data-filter="category_2">
											 Web Development
										</li>
										<li class="filter" data-filter="category_3">
											 Photography
										</li>
										<li class="filter" data-filter="category_3 category_1">
											 Wordpress and Logo
										</li>
									</ul>
									<div class="row mix-grid">
										<div class="col-md-3 col-sm-4 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img1.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img2.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img3.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img4.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_2 category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img5.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img5.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img6.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img6.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_2 category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img1.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img2.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img4.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img3.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto accusamus</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END FILTER -->
							</div>
							<div class="tab-pane" id="tab_2">
								<!-- BEGIN FILTER -->
								<div class="filter-v1 margin-top-10">
									<ul class="mix-filter">
										<li class="filter" data-filter="all">
											 All
										</li>
										<li class="filter" data-filter="category_1">
											 UI Design
										</li>
										<li class="filter" data-filter="category_2">
											 Web Development
										</li>
										<li class="filter" data-filter="category_3">
											 Photography
										</li>
										<li class="filter" data-filter="category_3 category_1">
											 Wordpress and Logo
										</li>
									</ul>
									<div class="row mix-grid thumbnails">
										<div class="col-md-4 col-sm-6 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img1.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img2.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img3.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img4.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_2 category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img5.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img5.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img6.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img6.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_2 category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img1.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img2.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img4.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img3.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END FILTER -->
							</div>
							<div class="tab-pane" id="tab_3">
								<!-- BEGIN FILTER -->
								<div class="filter-v1 margin-top-10">
									<ul class="mix-filter">
										<li class="filter" data-filter="all">
											 All
										</li>
										<li class="filter" data-filter="category_1">
											 UI Design
										</li>
										<li class="filter" data-filter="category_2">
											 Web Development
										</li>
										<li class="filter" data-filter="category_3">
											 Photography
										</li>
										<li class="filter" data-filter="category_3 category_1">
											 Wordpress and Logo
										</li>
									</ul>
									<div class="row mix-grid thumbnails">
										<div class="col-md-6 col-sm-6 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img1.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img2.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img3.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img4.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_2 category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img5.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img5.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img6.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img6.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_2 category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img1.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum deleniti.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img2.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img4.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="/assets/admin/pages/media/works/img3.jpg" alt="">
												<div class="mix-details">
													<h4>Cascusamus et iusto odio</h4>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="/assets/admin/pages/media/works/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END FILTER -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
@endsection
