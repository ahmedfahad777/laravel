@extends('timeline')

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
					<a href="page_timeline.html">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 New Timeline
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="timeline">
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic" src="../../assets/admin/pages/media/users/avatar80_1.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">Andres Iniesta</a>
										<span class="timeline-body-time font-grey-cascade">Replied at 7:45 PM</span>
									</div>
									<div class="timeline-body-head-actions">
										<div class="btn-group">
											<button class="btn btn-circle green-haze btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="#">Action </a>
												</li>
												<li>
													<a href="#">Another action </a>
												</li>
												<li>
													<a href="#">Something else here </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="#">Separated link </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic" src="../../assets/admin/pages/media/users/avatar80_2.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
										<span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
									</div>
									<div class="timeline-body-head-actions">
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									<p>
										<img class="timeline-body-img pull-right" src="../../assets/admin/pages/media/blog/4.jpg" alt="">
										Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot winter purslane collard.
									</p>
									<p>
										 Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
									</p>
									<p>
										<img class="timeline-body-img pull-left" src="../../assets/admin/pages/media/blog/6.jpg" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens spring onion squash lentil.
									</p>
									<p>
										 Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
									</p>
									</span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM WITH GOOGLE MAP -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic" src="../../assets/admin/pages/media/users/avatar80_3.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">Carles Puyol</a>
										<span class="timeline-body-time font-grey-cascade">Added office location at 2:50 PM</span>
									</div>
									<div class="timeline-body-head-actions">
										<div class="btn-group">
											<button class="btn btn-circle btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="#">Action </a>
												</li>
												<li>
													<a href="#">Another action </a>
												</li>
												<li>
													<a href="#">Something else here </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="#">Separated link </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="timeline-body-content">
									<div id="gmap_polygons" class="gmaps">
									</div>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM WITH GOOGLE MAP -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<div class="timeline-icon">
									<i class="icon-user-following font-green-haze"></i>
								</div>
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<span class="timeline-body-alerttitle font-red-intense">You have new follower</span>
										<span class="timeline-body-time font-grey-cascade">at 11:00 PM</span>
									</div>
									<div class="timeline-body-head-actions">
										<div class="btn-group">
											<button class="btn btn-circle grey-salsa btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="#">Action </a>
												</li>
												<li>
													<a href="#">Another action </a>
												</li>
												<li>
													<a href="#">Something else here </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="#">Separated link </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									You have new follower <a href="#">Ivan Rakitic</a>
									</span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic" src="../../assets/admin/pages/media/users/avatar80_1.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">Andres Iniesta</a>
										<span class="timeline-body-time font-grey-cascade">Replied at 7:45 PM</span>
									</div>
									<div class="timeline-body-head-actions">
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<img class="timeline-badge-userpic img-circle" src="../../assets/admin/pages/media/users/avatar80_2.jpg">
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<a href="#" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
										<span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
									</div>
									<div class="timeline-body-head-actions">
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									<p>
										<img class="timeline-body-img pull-right" src="../../assets/admin/pages/media/blog/4.jpg" alt="">
										Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot winter purslane collard.
									</p>
									<p>
										 Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
									</p>
									<p>
										<img class="timeline-body-img pull-left" src="../../assets/admin/pages/media/blog/6.jpg" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens spring onion squash lentil.
									</p>
									<p>
										 Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
									</p>
									</span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
						<!-- TIMELINE ITEM -->
						<div class="timeline-item">
							<div class="timeline-badge">
								<div class="timeline-icon">
									<i class="icon-docs font-red-intense"></i>
								</div>
							</div>
							<div class="timeline-body">
								<div class="timeline-body-arrow">
								</div>
								<div class="timeline-body-head">
									<div class="timeline-body-head-caption">
										<span class="timeline-body-alerttitle font-green-haze">Server Report</span>
										<span class="timeline-body-time font-grey-cascade">Yesterday at 11:00 PM</span>
									</div>
									<div class="timeline-body-head-actions">
										<div class="btn-group dropup">
											<button class="btn btn-circle green-haze btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="#">Action </a>
												</li>
												<li>
													<a href="#">Another action </a>
												</li>
												<li>
													<a href="#">Something else here </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="#">Separated link </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="timeline-body-content">
									<span class="font-grey-cascade">
									Lorem ipsum dolore sit amet <a href="#">Ispect</a>
									</span>
								</div>
							</div>
						</div>
						<!-- END TIMELINE ITEM -->
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->

@endsection

