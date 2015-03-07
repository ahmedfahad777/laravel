
@extends('layouts.blog_item')

@section('content')


<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Blog Post <small>blog post samples</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">

				@include('settings.theme')

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

			@include('partials-blogitem.breadcrumb')

			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-12 blog-page">
							<div class="row">
								<div class="col-md-9 article-block">
									<h3 style="margin-top:0;">Hello here will be some recent news..</h3>
									<div class="blog-tag-data">
										<img src="../../assets/admin/pages/media/gallery/item_img.jpg" class="img-responsive" alt="">
										<div class="row">
											<div class="col-md-6">
												<ul class="list-inline blog-tags">
													<li>
														<i class="fa fa-tags"></i>
														<a href="javascript:;">
														Technology </a>
														<a href="javascript:;">
														Education </a>
														<a href="javascript:;">
														Internet </a>
													</li>
												</ul>
											</div>
											<div class="col-md-6 blog-tag-data-inner">
												<ul class="list-inline">
													<li>
														<i class="fa fa-calendar"></i>
														<a href="javascript:;">
														April 16, 2013 </a>
													</li>
													<li>
														<i class="fa fa-comments"></i>
														<a href="javascript:;">
														38 Comments </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!--end news-tag-data-->
									<div>
										<p>
											 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
										</p>
										<blockquote class="hero">
											<p>
												 Lorem ipsum dolor sit amet, consectetur adipiscing elit posuere erat a ante.
											</p>
											<small>Someone famous <cite title="Source Title">Source Title</cite></small>
										</blockquote>
										<p>
											 Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpa
										</p>
									</div>
									<hr>
									<div class="media">
										<h3>Comments</h3>
										<a href="javascript:;" class="pull-left">
										<img alt="" src="../../assets/admin/pages/media/blog/9.jpg" class="media-object">
										</a>
										<div class="media-body">
											<h4 class="media-heading">Media heading <span>
											5 hours ago / <a href="javascript:;">
											Reply </a>
											</span>
											</h4>
											<p>
												 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
											</p>
											<hr>
											<!-- Nested media object -->
											<div class="media">
												<a href="javascript:;" class="pull-left">
												<img alt="" src="../../assets/admin/pages/media/blog/5.jpg" class="media-object">
												</a>
												<div class="media-body">
													<h4 class="media-heading">Media heading <span>
													17 hours ago / <a href="javascript:;">
													Reply </a>
													</span>
													</h4>
													<p>
														 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
													</p>
												</div>
											</div>
											<!--end media-->
											<hr>
											<div class="media">
												<a href="javascript:;" class="pull-left">
												<img alt="" src="../../assets/admin/pages/media/blog/7.jpg" class="media-object">
												</a>
												<div class="media-body">
													<h4 class="media-heading">Media heading <span>
													2 days ago / <a href="javascript:;">
													Reply </a>
													</span>
													</h4>
													<p>
														 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
													</p>
												</div>
											</div>
											<!--end media-->
										</div>
									</div>
									<!--end media-->
									<div class="media">
										<a href="javascript:;" class="pull-left">
										<img alt="" src="../../assets/admin/pages/media/blog/6.jpg" class="media-object">
										</a>
										<div class="media-body">
											<h4 class="media-heading">Media heading <span>
											July 5,2013 / <a href="javascript:;">
											Reply </a>
											</span>
											</h4>
											<p>
												 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
											</p>
										</div>
									</div>
									<!--end media-->
									<hr>

									@include('blog-item.partials.comment')

								</div>
								<!--end col-md-9-->
								<div class="col-md-3 blog-sidebar">

									@include('widgets.flickr')

									<div class="space20">
									</div>
									<h3>Top Entiries</h3>
									<div class="top-news">

										@include('news.metronic')

										@include('music.top_week')

									@include('international_news.gold_price')

										@include('education.study_abroad')

									@include('place.destination')

									</div>
									<div class="space20">
									</div>


								@include('blog-item.partials.blog_tag')

									<div class="space20">
									</div>

									@include('blog-item.widgets.tabs')


									<div class="space20">
									</div>


									@include('widgets.recent_twitt')

								</div>
								<!--end col-md-3-->
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
<!-- END PAGE CONTAINER -->

@endsection