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
					<a href="extra_search.html">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Search Results
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder">
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#tab_2_2">
								Booking Search </a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab_1_3">
								Classic Search </a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab_1_4">
								Company Search </a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab_1_5">
								User Search </a>
							</li>
						</ul>
						<div class="tab-content">


						<!--start tab-pane 2_2(booking Search)-->
					    @include('......searchResult.elements.tab_pane_2_2')
							<!--end tab-pane-->

							<!--start tab-pane 1_3(classic Search)-->
							@include('......searchResult.elements.tab_pane_1_3')
							<!--end tab-pane-->


							<!--start tab-pane 1_4(company Search)-->
							@include('......searchResult.elements.tab_pane_1_4')
							<!--end tab-pane-->


							<!--start tab pane 1_5 (user search)-->
                            @include('......searchResult.elements.tab_pane_1_5')
							<!--end tab pane 1_5-->
							<!--end tab-pane-->
						</div>
					</div>
				</div>
				<!--end tabbable-->
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>