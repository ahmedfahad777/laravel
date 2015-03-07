
@section('content')
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Contact Us <small>contact us page</small></h1>
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
                    <a href="page_contact.html">Pages</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li class="active">
Contact Us
</li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="portlet light">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Google Map -->
                            <div class="row">
                                <div id="map" class="gmaps margin-bottom-40" style="height:400px;">
                                </div>
                            </div>
                            <div class="row margin-bottom-20">
                                <div class="col-md-6">
                                    <div class="space20">
                                    </div>
                                    <h3 class="form-section">Contacts</h3>
                                    <p>
Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit.
                                    </p>
                                    <div class="well">
                                        <h4>Address</h4>
                                        <address>
                                            <strong>Loop, Inc.</strong><br>
795 Park Ave, Suite 120<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (234) 145-1810 </address>
                                        <address>
                                            <strong>Email</strong><br>
                                            <a href="mailto:#">
    first.last@email.com </a>
                                        </address>
                                        <ul class="social-icons margin-bottom-10">
                                            <li>
                                                <a href="javascript:;" data-original-title="facebook" class="facebook">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="github" class="github">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="linkedin" class="linkedin">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="rss" class="rss">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="skype" class="skype">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="twitter" class="twitter">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="youtube" class="youtube">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="space20">
                                    </div>
                                    <!-- BEGIN FORM-->
                                    <form action="javascript:;">
                                        <h3 class="form-section">Feedback</h3>
                                        <p>
Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer
</p>
                                        <div class="form-group">
                                            <div class="input-icon">
                                                <i class="fa fa-check"></i>
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-icon">
                                                <i class="fa fa-user"></i>
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-icon">
                                                <i class="fa fa-envelope"></i>
                                                <input type="password" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3=6" placeholder="Feedback"></textarea>
                                        </div>
                                        <button type="submit" class="btn green">Submit</button>
                                    </form>
                                    <!-- END FORM-->
                                </div>
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