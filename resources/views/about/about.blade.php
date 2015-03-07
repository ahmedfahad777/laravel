
@extends('layouts.about')

@section('content')

<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>About Us <small>about us page</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				<!-- BEGIN THEME PANEL -->
				<div class="btn-group btn-theme-panel">
					<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
					<i class="icon-settings"></i>
					</a>
					<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<h3>THEME COLORS</h3>
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<ul class="theme-colors">
											<li class="theme-color theme-color-default" data-theme="default">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Default</span>
											</li>
											<li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Blue Hoki</span>
											</li>
											<li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Blue Steel</span>
											</li>
											<li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Orange</span>
											</li>
											<li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Yellow Crusta</span>
											</li>
										</ul>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<ul class="theme-colors">
											<li class="theme-color theme-color-green-haze" data-theme="green-haze">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Green Haze</span>
											</li>
											<li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Red Sunglo</span>
											</li>
											<li class="theme-color theme-color-red-intense" data-theme="red-intense">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Red Intense</span>
											</li>
											<li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Purple Plum</span>
											</li>
											<li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Purple Studio</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 seperator">
								<h3>LAYOUT</h3>
								<ul class="theme-settings">
									<li>
										 Theme Style
										<select class="theme-setting theme-setting-style form-control input-sm input-small input-inline tooltips" data-original-title="Change theme style" data-container="body" data-placement="left">
											<option value="boxed" selected="selected">Square corners</option>
											<option value="rounded">Rounded corners</option>
										</select>
									</li>
									<li>
										 Layout
										<select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
											<option value="boxed" selected="selected">Boxed</option>
											<option value="fluid">Fluid</option>
										</select>
									</li>
									<li>
										 Top Menu Style
										<select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body" data-placement="left">
											<option value="dark" selected="selected">Dark</option>
											<option value="light">Light</option>
										</select>
									</li>
									<li>
										 Top Menu Mode
										<select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body" data-placement="left">
											<option value="fixed">Fixed</option>
											<option value="not-fixed" selected="selected">Not Fixed</option>
										</select>
									</li>
									<li>
										 Mega Menu Style
										<select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body" data-placement="left">
											<option value="dark" selected="selected">Dark</option>
											<option value="light">Light</option>
										</select>
									</li>
									<li>
										 Mega Menu Mode
										<select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body" data-placement="left">
											<option value="fixed" selected="selected">Fixed</option>
											<option value="not-fixed">Not Fixed</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- END THEME PANEL -->
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
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
					<a href="page_about.html">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 About Us
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row margin-bottom-30">
						<div class="col-md-6">
							<p>
								 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
							</p>
							<ul class="list-unstyled margin-top-10 margin-bottom-10">
								<li>
									<i class="fa fa-check icon-default"></i> Nam liber tempor cum soluta
								</li>
								<li>
									<i class="fa fa-check icon-success"></i> Mirum est notare quam
								</li>
								<li>
									<i class="fa fa-check icon-info"></i> Lorem ipsum dolor sit amet
								</li>
								<li>
									<i class="fa fa-check icon-danger"></i> Mirum est notare quam
								</li>
								<li>
									<i class="fa fa-check icon-warning"></i> Mirum est notare quam
								</li>
							</ul>
							<!-- Blockquotes -->
							<blockquote class="hero">
								<p>
									 Lorem ipsum dolor sit amet, consectetuer sed diam nonummy nibh euismod tincidunt.
								</p>
								<small>Bob Nilson</small>
							</blockquote>
						</div>
						<div class="col-md-6">
							<iframe src="http://player.vimeo.com/video/22439234" style="width:100%; height:327px;border:0" allowfullscreen>
							</iframe>
						</div>
					</div>
					<!--/row-->
					<!-- Meer Our Team -->
					<div class="headline">
						<h3>Meet Our Team</h3>
					</div>
					<div class="row thumbnails">
						<div class="col-md-3">
							<div class="meet-our-team">
								<h3>Bob Nilson <small>Chief Executive Officer / CEO</small></h3>
								<img src="../../assets/admin/pages/media/pages/2.jpg" alt="" class="img-responsive"/>
								<div class="team-info">
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...
									</p>
									<ul class="social-icons pull-right">
										<li>
											<a href="javascript:;" data-original-title="twitter" class="twitter">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="facebook" class="facebook">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="linkedin" class="linkedin">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="skype" class="skype">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="meet-our-team">
								<h3>Marta Doe <small>Project Manager</small></h3>
								<img src="../../assets/admin/pages/media/pages/3.jpg" alt="" class="img-responsive"/>
								<div class="team-info">
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...
									</p>
									<ul class="social-icons pull-right">
										<li>
											<a href="javascript:;" data-original-title="twitter" class="twitter">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="facebook" class="facebook">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="linkedin" class="linkedin">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="skype" class="skype">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="meet-our-team">
								<h3>Bob Nilson <small>Chief Executive Officer / CEO</small></h3>
								<img src="../../assets/admin/pages/media/pages/2.jpg" alt="" class="img-responsive"/>
								<div class="team-info">
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...
									</p>
									<ul class="social-icons pull-right">
										<li>
											<a href="javascript:;" data-original-title="twitter" class="twitter">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="facebook" class="facebook">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="linkedin" class="linkedin">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="skype" class="skype">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="meet-our-team">
								<h3>Marta Doe <small>Project Manager</small></h3>
								<img src="../../assets/admin/pages/media/pages/3.jpg" alt="" class="img-responsive"/>
								<div class="team-info">
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...
									</p>
									<ul class="social-icons pull-right">
										<li>
											<a href="javascript:;" data-original-title="twitter" class="twitter">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="facebook" class="facebook">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="linkedin" class="linkedin">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="skype" class="skype">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--/thumbnails-->
					<!-- //End Meer Our Team -->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
@endsection
