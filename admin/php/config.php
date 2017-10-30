<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.0
Version: 2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | E-Commerce - Product Edit</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2-metronic.css"/>
    <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
    <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="header-inner">
        <!-- BEGIN LOGO -->
        <a class="navbar-brand" href="index.html">
            <img src="assets/img/logo.png" alt="logo" class="img-responsive"/>
        </a>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="assets/img/menu-toggler.png" alt=""/>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-warning"></i>
                    <span class="badge">
						 6
					</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li>
                        <p>
                            You have 14 new notifications
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <li>
                                <a href="#">
									<span class="label label-icon label-success">
										<i class="fa fa-plus"></i>
									</span>
                                    New user registered.
                                    <span class="time">
										 Just now
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="label label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
                                    Server #12 overloaded.
                                    <span class="time">
										 15 mins
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="label label-icon label-warning">
										<i class="fa fa-bell-o"></i>
									</span>
                                    Server #2 not responding.
                                    <span class="time">
										 22 mins
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="label label-icon label-info">
										<i class="fa fa-bullhorn"></i>
									</span>
                                    Application error.
                                    <span class="time">
										 40 mins
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="label label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
                                    Database overloaded 68%.
                                    <span class="time">
										 2 hrs
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="label label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
                                    2 user IP blocked.
                                    <span class="time">
										 5 hrs
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="label label-icon label-warning">
										<i class="fa fa-bell-o"></i>
									</span>
                                    Storage Server #4 not responding.
                                    <span class="time">
										 45 mins
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="label label-icon label-info">
										<i class="fa fa-bullhorn"></i>
									</span>
                                    System Error.
                                    <span class="time">
										 55 mins
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="label label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
                                    Database overloaded 68%.
                                    <span class="time">
										 2 hrs
									</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="#">
                            See all notifications <i class="m-icon-swapright"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN INBOX DROPDOWN -->
            <li class="dropdown" id="header_inbox_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-envelope"></i>
                    <span class="badge">
						 5
					</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <li>
                        <p>
                            You have 12 new messages
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <li>
                                <a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar2.jpg" alt=""/>
									</span>
                                    <span class="subject">
										<span class="from">
											 Lisa Wong
										</span>
										<span class="time">
											 Just Now
										</span>
									</span>
                                    <span class="message">
										 Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar3.jpg" alt=""/>
									</span>
                                    <span class="subject">
										<span class="from">
											 Richard Doe
										</span>
										<span class="time">
											 16 mins
										</span>
									</span>
                                    <span class="message">
										 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar1.jpg" alt=""/>
									</span>
                                    <span class="subject">
										<span class="from">
											 Bob Nilson
										</span>
										<span class="time">
											 2 hrs
										</span>
									</span>
                                    <span class="message">
										 Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar2.jpg" alt=""/>
									</span>
                                    <span class="subject">
										<span class="from">
											 Lisa Wong
										</span>
										<span class="time">
											 40 mins
										</span>
									</span>
                                    <span class="message">
										 Vivamus sed auctor 40% nibh congue nibh...
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar3.jpg" alt=""/>
									</span>
                                    <span class="subject">
										<span class="from">
											 Richard Doe
										</span>
										<span class="time">
											 46 mins
										</span>
									</span>
                                    <span class="message">
										 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
									</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="inbox.html">
                            See all messages <i class="m-icon-swapright"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END INBOX DROPDOWN -->
            <!-- BEGIN TODO DROPDOWN -->
            <li class="dropdown" id="header_task_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-tasks"></i>
                    <span class="badge">
						 5
					</span>
                </a>
                <ul class="dropdown-menu extended tasks">
                    <li>
                        <p>
                            You have 12 pending tasks
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <li>
                                <a href="#">
									<span class="task">
										<span class="desc">
											 New release v1.2
										</span>
										<span class="percent">
											 30%
										</span>
									</span>
                                    <span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 40% Complete
											</span>
										</span>
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="task">
										<span class="desc">
											 Application deployment
										</span>
										<span class="percent">
											 65%
										</span>
									</span>
                                    <span class="progress progress-striped">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 65% Complete
											</span>
										</span>
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="task">
										<span class="desc">
											 Mobile app release
										</span>
										<span class="percent">
											 98%
										</span>
									</span>
                                    <span class="progress">
										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 98% Complete
											</span>
										</span>
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="task">
										<span class="desc">
											 Database migration
										</span>
										<span class="percent">
											 10%
										</span>
									</span>
                                    <span class="progress progress-striped">
										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 10% Complete
											</span>
										</span>
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="task">
										<span class="desc">
											 Web server upgrade
										</span>
										<span class="percent">
											 58%
										</span>
									</span>
                                    <span class="progress progress-striped">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 58% Complete
											</span>
										</span>
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="task">
										<span class="desc">
											 Mobile development
										</span>
										<span class="percent">
											 85%
										</span>
									</span>
                                    <span class="progress progress-striped">
										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 85% Complete
											</span>
										</span>
									</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
									<span class="task">
										<span class="desc">
											 New UI release
										</span>
										<span class="percent">
											 18%
										</span>
									</span>
                                    <span class="progress progress-striped">
										<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 18% Complete
											</span>
										</span>
									</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="#">
                            See all tasks <i class="m-icon-swapright"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" src="assets/img/avatar1_small.jpg"/>
                    <span class="username">
						 Bob Nilson
					</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="extra_profile.html">
                            <i class="fa fa-user"></i> My Profile
                        </a>
                    </li>
                    <li>
                        <a href="page_calendar.html">
                            <i class="fa fa-calendar"></i> My Calendar
                        </a>
                    </li>
                    <li>
                        <a href="inbox.html">
                            <i class="fa fa-envelope"></i> My Inbox
                            <span class="badge badge-danger">
								 3
							</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-tasks"></i> My Tasks
                            <span class="badge badge-success">
								 7
							</span>
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="javascript:;" id="trigger_fullscreen">
                            <i class="fa fa-arrows"></i> Full Screen
                        </a>
                    </li>
                    <li>
                        <a href="extra_lock.html">
                            <i class="fa fa-lock"></i> Lock Screen
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-key"></i> Log Out
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu">
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone">
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <form class="sidebar-search" action="extra_search.html" method="POST">
                        <div class="form-container">
                            <div class="input-box">
                                <a href="javascript:;" class="remove">
                                </a>
                                <input type="text" placeholder="Search..."/>
                                <input type="button" class="submit" value=" "/>
                            </div>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="start ">
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                        <span class="title">
							Dashboard
						</span>
                    </a>
                </li>
                <li class="active ">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="title">
							E-Commerce
						</span>
                        <span class="selected">
						</span>
                        <span class="arrow open">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="ecommerce_index.html">
                                <i class="fa fa-bullhorn"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="ecommerce_orders.html">
                                <i class="fa fa-shopping-cart"></i>
                                Orders
                            </a>
                        </li>
                        <li>
                            <a href="ecommerce_orders_view.html">
                                <i class="fa fa-tags"></i>
                                Order View
                            </a>
                        </li>
                        <li>
                            <a href="ecommerce_products.html">
                                <i class="fa fa-sitemap"></i>
                                Products
                            </a>
                        </li>
                        <li class="active">
                            <a href="ecommerce_products_edit.html">
                                <i class="fa fa-file-o"></i>
                                Product Edit
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-gift"></i>
                        <span class="title">
							Frontend Themes
						</span>
                        <span class="arrow">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Complete E-Commerce Frontend Theme For Metronic Admin">
                            <a href="http://keenthemes.com/preview/index.php?theme=metronic_ecommerce" target="_blank">
								<span class="title">
									E-Commerce Frontend
								</span>
                            </a>
                        </li>
                        <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Complete Multipurpose Corporate Frontend Theme For Metronic Admin">
                            <a href="http://keenthemes.com/preview/index.php?theme=metronic_frontend" target="_blank">
								<span class="title">
									Corporate Frontend
								</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span class="title">
							Page Layouts
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="index_horizontal_menu.html">
                                Dashboard & Mega Menu
                            </a>
                        </li>
                        <li>
                            <a href="layout_horizontal_sidebar_menu.html">
                                Horizontal & Sidebar Menu
                            </a>
                        </li>
                        <li>
                            <a href="layout_horizontal_menu1.html">
                                Horizontal Mega Menu 1
                            </a>
                        </li>
                        <li>
                            <a href="layout_horizontal_menu2.html">
                                Horizontal Mega Menu 2
                            </a>
                        </li>
                        <li>
                            <a href="layout_search_on_header.html">
                                Searchbar On Header
                            </a>
                        </li>
                        <li>
                            <a href="layout_sidebar_toggler_on_header.html">
                                Sidebar Toggler On Header
                            </a>
                        </li>
                        <li>
                            <a href="layout_sidebar_reversed.html">
								<span class="badge badge-roundless badge-success">
									new
								</span>
                                Right Sidebar Page
                            </a>
                        </li>
                        <li>
                            <a href="layout_sidebar_fixed.html">
                                Sidebar Fixed Page
                            </a>
                        </li>
                        <li>
                            <a href="layout_sidebar_closed.html">
                                Sidebar Closed Page
                            </a>
                        </li>
                        <li>
                            <a href="layout_ajax.html">
                                Content Loading via Ajax
                            </a>
                        </li>
                        <li>
                            <a href="layout_disabled_menu.html">
                                Disabled Menu Links
                            </a>
                        </li>
                        <li>
                            <a href="layout_blank_page.html">
                                Blank Page
                            </a>
                        </li>
                        <li>
                            <a href="layout_boxed_page.html">
                                Boxed Page
                            </a>
                        </li>
                        <li>
                            <a href="layout_language_bar.html">
                                Language Switch Bar
                            </a>
                        </li>
                        <li>
                            <a href="layout_promo.html">
                                Promo Page
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-bookmark-o"></i>
                        <span class="title">
							UI Features
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="ui_general.html">
                                General
                            </a>
                        </li>
                        <li>
                            <a href="ui_buttons.html">
                                Buttons & Icons
                            </a>
                        </li>
                        <li>
                            <a href="ui_typography.html">
                                Typography
                            </a>
                        </li>
                        <li>
                            <a href="ui_tabs_accordions_navs.html">
                                Tabs, Accordions & Navs
                            </a>
                        </li>
                        <li>
                            <a href="ui_tree.html">
								<span class="badge badge-roundless badge-important">
									new
								</span>
                                Tree View
                            </a>
                        </li>
                        <li>
                            <a href="ui_blockui.html">
								<span class="badge badge-roundless badge-warning">
									new
								</span>
                                Block UI
                            </a>
                        </li>
                        <li>
                            <a href="ui_notific8.html">
                                Notific8 Notifications
                            </a>
                        </li>
                        <li>
                            <a href="ui_toastr.html">
                                Toastr Notifications
                            </a>
                        </li>
                        <li>
                            <a href="ui_alert_dialog_api.html">
								<span class="badge badge-roundless badge-important">
									new
								</span>
                                Alerts & Dialogs API
                            </a>
                        </li>
                        <li>
                            <a href="ui_session_timeout.html">
                                Session Timeout
                            </a>
                        </li>
                        <li>
                            <a href="ui_idle_timeout.html">
                                User Idle Timeout
                            </a>
                        </li>
                        <li>
                            <a href="ui_modals.html">
                                Modals
                            </a>
                        </li>
                        <li>
                            <a href="ui_extended_modals.html">
                                Extended Modals
                            </a>
                        </li>
                        <li>
                            <a href="ui_tiles.html">
                                Tiles
                            </a>
                        </li>
                        <li>
                            <a href="ui_datepaginator.html">
								<span class="badge badge-roundless badge-success">
									new
								</span>
                                Date Paginator
                            </a>
                        </li>
                        <li>
                            <a href="ui_nestable.html">
                                Nestable List
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-puzzle-piece"></i>
                        <span class="title">
							UI Components
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="components_pickers.html">
                                Pickers
                            </a>
                        </li>
                        <li>
                            <a href="components_dropdowns.html">
                                Custom Dropdowns
                            </a>
                        </li>
                        <li>
                            <a href="components_form_tools.html">
                                Form Tools
                            </a>
                        </li>
                        <li>
                            <a href="components_editors.html">
                                Markdown & WYSIWYG Editors
                            </a>
                        </li>
                        <li>
                            <a href="components_ion_sliders.html">
                                Ion Range Sliders
                            </a>
                        </li>
                        <li>
                            <a href="components_noui_sliders.html">
                                NoUI Range Sliders
                            </a>
                        </li>
                        <li>
                            <a href="components_jqueryui_sliders.html">
                                jQuery UI Sliders
                            </a>
                        </li>
                        <li>
                            <a href="components_knob_dials.html">
                                Knob Circle Dials
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-table"></i>
                        <span class="title">
							Form Stuff
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="form_controls.html">
                                Form Controls
                            </a>
                        </li>
                        <li>
                            <a href="form_layouts.html">
                                Form Layouts
                            </a>
                        </li>
                        <li>
                            <a href="form_editable.html">
								<span class="badge badge-roundless badge-warning">
									new
								</span>
                                Form X-editable
                            </a>
                        </li>
                        <li>
                            <a href="form_wizard.html">
                                Form Wizard
                            </a>
                        </li>
                        <li>
                            <a href="form_validation.html">
                                Form Validation
                            </a>
                        </li>
                        <li>
                            <a href="form_image_crop.html">
								<span class="badge badge-roundless badge-important">
									new
								</span>
                                Image Cropping
                            </a>
                        </li>
                        <li>
                            <a href="form_fileupload.html">
                                Multiple File Upload
                            </a>
                        </li>
                        <li>
                            <a href="form_dropzone.html">
                                Dropzone File Upload
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-envelope-o"></i>
                        <span class="title">
							Email Templates
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="email_newsletter.html">
                                Responsive Newsletter<br>
                                Email Template
                            </a>
                        </li>
                        <li>
                            <a href="email_system.html">
                                Responsive System<br>
                                Email Template
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="title">
							Pages
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="page_portfolio.html">
                                <i class="fa fa-briefcase"></i>
                                <span class="badge badge-warning badge-roundless">
									new
								</span>
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="page_timeline.html">
                                <i class="fa fa-clock-o"></i>
                                <span class="badge badge-info">
									4
								</span>
                                Timeline
                            </a>
                        </li>
                        <li>
                            <a href="page_coming_soon.html">
                                <i class="fa fa-cogs"></i>
                                Coming Soon
                            </a>
                        </li>
                        <li>
                            <a href="page_blog.html">
                                <i class="fa fa-comments"></i>
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="page_blog_item.html">
                                <i class="fa fa-font"></i>
                                Blog Post
                            </a>
                        </li>
                        <li>
                            <a href="page_news.html">
                                <i class="fa fa-coffee"></i>
                                <span class="badge badge-success">
									9
								</span>
                                News
                            </a>
                        </li>
                        <li>
                            <a href="page_news_item.html">
                                <i class="fa fa-bell"></i>
                                News View
                            </a>
                        </li>
                        <li>
                            <a href="page_about.html">
                                <i class="fa fa-group"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="page_contact.html">
                                <i class="fa fa-envelope-o"></i>
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="page_calendar.html">
                                <i class="fa fa-calendar"></i>
                                <span class="badge badge-important">
									14
								</span>
                                Calendar
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-gift"></i>
                        <span class="title">
							Extra
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="extra_profile.html">
                                User Profile
                            </a>
                        </li>
                        <li>
                            <a href="extra_lock.html">
                                Lock Screen
                            </a>
                        </li>
                        <li>
                            <a href="extra_faq.html">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html">
								<span class="badge badge-important">
									4
								</span>
                                Inbox
                            </a>
                        </li>
                        <li>
                            <a href="extra_search.html">
                                Search Results
                            </a>
                        </li>
                        <li>
                            <a href="extra_invoice.html">
                                Invoice
                            </a>
                        </li>
                        <li>
                            <a href="extra_pricing_table.html">
                                Pricing Tables
                            </a>
                        </li>
                        <li>
                            <a href="extra_404_option1.html">
                                404 Page Option 1
                            </a>
                        </li>
                        <li>
                            <a href="extra_404_option2.html">
                                404 Page Option 2
                            </a>
                        </li>
                        <li>
                            <a href="extra_404_option3.html">
                                404 Page Option 3
                            </a>
                        </li>
                        <li>
                            <a href="extra_500_option1.html">
                                500 Page Option 1
                            </a>
                        </li>
                        <li>
                            <a href="extra_500_option2.html">
                                500 Page Option 2
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-folder-open"></i>
                        <span class="title">
							Multi Level Menu
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-cogs"></i> Item 1
                                <span class="arrow">
								</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-user"></i>
                                        Sample Link 1
                                        <span class="arrow">
										</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-remove"></i> Sample Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-pencil"></i> Sample Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-edit"></i> Sample Link 1
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user"></i> Sample Link 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-external-link"></i> Sample Link 2
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-bell"></i> Sample Link 3
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-globe"></i> Item 2
                                <span class="arrow">
								</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user"></i> Sample Link 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-external-link"></i> Sample Link 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-bell"></i> Sample Link 1
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder-open"></i>
                                Item 3
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span class="title">
							Login Options
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="login.html">
                                Login Form 1
                            </a>
                        </li>
                        <li>
                            <a href="login_soft.html">
                                Login Form 2
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span class="title">
							Data Tables
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="table_basic.html">
                                Basic Datatables
                            </a>
                        </li>
                        <li>
                            <a href="table_responsive.html">
                                Responsive Datatables
                            </a>
                        </li>
                        <li>
                            <a href="table_managed.html">
                                Managed Datatables
                            </a>
                        </li>
                        <li>
                            <a href="table_editable.html">
                                Editable Datatables
                            </a>
                        </li>
                        <li>
                            <a href="table_advanced.html">
                                Advanced Datatables
                            </a>
                        </li>
                        <li>
                            <a href="table_ajax.html">
                                Ajax Datatables
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-file-text"></i>
                        <span class="title">
							Portlets
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="portlet_general.html">
                                General Portlets
                            </a>
                        </li>
                        <li>
                            <a href="portlet_ajax.html">
                                Ajax Portlets
                            </a>
                        </li>
                        <li>
                            <a href="portlet_draggable.html">
                                Draggable Portlets
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-map-marker"></i>
                        <span class="title">
							Maps
						</span>
                        <span class="arrow ">
						</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="maps_google.html">
                                Google Maps
                            </a>
                        </li>
                        <li>
                            <a href="maps_vector.html">
                                Vector Maps
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="last ">
                    <a href="charts.html">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="title">
							Visual Charts
						</span>
                    </a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
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
            <!-- BEGIN STYLE CUSTOMIZER -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler">
                </div>
                <div class="toggler-close">
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
						<span>
							 THEME COLOR
						</span>
                        <ul>
                            <li class="color-black current color-default" data-style="default">
                            </li>
                            <li class="color-blue" data-style="blue">
                            </li>
                            <li class="color-brown" data-style="brown">
                            </li>
                            <li class="color-purple" data-style="purple">
                            </li>
                            <li class="color-grey" data-style="grey">
                            </li>
                            <li class="color-white color-light" data-style="light">
                            </li>
                        </ul>
                    </div>
                    <div class="theme-option">
						<span>
							 Layout
						</span>
                        <select class="layout-option form-control input-small">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							 Header
						</span>
                        <select class="header-option form-control input-small">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							 Sidebar
						</span>
                        <select class="sidebar-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							 Sidebar Position
						</span>
                        <select class="sidebar-pos-option form-control input-small">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							 Footer
						</span>
                        <select class="footer-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        Product Edit <small>create & edit product</small>
                    </h3>
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="btn-group">
                            <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Something else here
                                    </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">
                                        Separated link
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">
                                Home
                            </a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                E-Commerce
                            </a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                Product Edit
                            </a>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" action="#">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>Test Product
                                </div>
                                <div class="actions btn-set">
                                    <button type="button" name="back" class="btn default"><i class="fa fa-angle-left"></i> Back</button>
                                    <button class="btn default"><i class="fa fa-reply"></i> Reset</button>
                                    <button class="btn green"><i class="fa fa-check"></i> Save</button>
                                    <button class="btn green"><i class="fa fa-check-circle"></i> Save & Continue Edit</button>
                                    <div class="btn-group">
                                        <a class="btn yellow" href="#" data-toggle="dropdown">
                                            <i class="fa fa-share"></i> More <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="#">
                                                    Duplicate
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Delete
                                                </a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Print
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">
                                                General
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab_meta" data-toggle="tab">
                                                Meta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab_images" data-toggle="tab">
                                                Images
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab_reviews" data-toggle="tab">
                                                Reviews
                                                <span class="badge badge-success">
													 3
												</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab_history" data-toggle="tab">
                                                History
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-space">
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Name:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="product[name]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Description:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name="product[description]"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Short Description:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name="product[short_description]"></textarea>
                                                        <span class="help-block">
															 shown in product listing
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Categories:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <div class="form-control height-auto">
                                                            <div class="scroller" style="height:275px;" data-always-visible="1">
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <label><input type="checkbox" name="product[categories][]" value="1">Mens</label>
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Footwear</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Clothing</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Accessories</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Fashion Outlet</label>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <label><input type="checkbox" name="product[categories][]" value="1">Football Shirts</label>
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Premier League</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Football League</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Serie A</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Bundesliga</label>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <label><input type="checkbox" name="product[categories][]" value="1">Brands</label>
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Adidas</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Nike</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Airwalk</label>
                                                                            </li>
                                                                            <li>
                                                                                <label><input type="checkbox" name="product[categories][]" value="1">Kangol</label>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <span class="help-block">
															 select one or more categories
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Available Date:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                            <input type="text" class="form-control" name="product[available_from]">
                                                            <span class="input-group-addon">
																 to
															</span>
                                                            <input type="text" class="form-control" name="product[available_to]">
                                                        </div>
                                                        <span class="help-block">
															 availability daterange.
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">SKU:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="product[sku]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Price:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="product[price]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Tax Class:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <select class="table-group-action-input form-control input-medium" name="product[tax_class]">
                                                            <option value="">Select...</option>
                                                            <option value="1">None</option>
                                                            <option value="0">Taxable Goods</option>
                                                            <option value="0">Shipping</option>
                                                            <option value="0">USA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Status:
                                                        <span class="required">
														 *
													</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <select class="table-group-action-input form-control input-medium" name="product[status]">
                                                            <option value="">Select...</option>
                                                            <option value="1">Published</option>
                                                            <option value="0">Not Published</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_meta">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Meta Title:</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control maxlength-handler" name="product[meta_title]" maxlength="100" placeholder="">
                                                        <span class="help-block">
															 max 100 chars
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Meta Keywords:</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control maxlength-handler" rows="8" name="product[meta_keywords]" maxlength="1000"></textarea>
                                                        <span class="help-block">
															 max 1000 chars
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Meta Description:</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control maxlength-handler" rows="8" name="product[meta_description]" maxlength="255"></textarea>
                                                        <span class="help-block">
															 max 255 chars
														</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_images">
                                            <div class="alert alert-success margin-bottom-10">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.
                                            </div>
                                            <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                                <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Select Files
                                                </a>
                                                <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
                                                    <i class="fa fa-share"></i> Upload Files
                                                </a>
                                            </div>
                                            <div class="row">
                                                <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
                                                </div>
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr role="row" class="heading">
                                                    <th width="8%">
                                                        Image
                                                    </th>
                                                    <th width="25%">
                                                        Label
                                                    </th>
                                                    <th width="8%">
                                                        Sort Order
                                                    </th>
                                                    <th width="10%">
                                                        Base Image
                                                    </th>
                                                    <th width="10%">
                                                        Small Image
                                                    </th>
                                                    <th width="10%">
                                                        Thumbnail
                                                    </th>
                                                    <th width="10%">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="assets/img/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                            <img class="img-responsive" src="assets/img/works/img1.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][1][sort_order]" value="1">
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][1][image_type]" value="1">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][1][image_type]" value="2">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][1][image_type]" value="3" checked>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-sm">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="assets/img/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                            <img class="img-responsive" src="assets/img/works/img2.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][2][label]" value="Product image #1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][2][sort_order]" value="1">
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][2][image_type]" value="1">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][2][image_type]" value="2" checked>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][2][image_type]" value="3">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-sm">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="assets/img/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                            <img class="img-responsive" src="assets/img/works/img3.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][3][label]" value="Product image #2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][3][sort_order]" value="1">
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][3][image_type]" value="1" checked>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][3][image_type]" value="2">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][3][image_type]" value="3">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-sm">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab_reviews">
                                            <div class="table-container">
                                                <table class="table table-striped table-bordered table-hover" id="datatable_reviews">
                                                    <thead>
                                                    <tr role="row" class="heading">
                                                        <th width="5%">
                                                            Review&nbsp;#
                                                        </th>
                                                        <th width="10%">
                                                            Review&nbsp;Date
                                                        </th>
                                                        <th width="10%">
                                                            Customer
                                                        </th>
                                                        <th width="20%">
                                                            Review&nbsp;Content
                                                        </th>
                                                        <th width="10%">
                                                            Status
                                                        </th>
                                                        <th width="10%">
                                                            Actions
                                                        </th>
                                                    </tr>
                                                    <tr role="row" class="filter">
                                                        <td>
                                                            <input type="text" class="form-control form-filter input-sm" name="product_review_no">
                                                        </td>
                                                        <td>
                                                            <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                                <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_from" placeholder="From">
                                                                <span class="input-group-btn">
																<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                                                            </div>
                                                            <div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
                                                                <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_to" placeholder="To">
                                                                <span class="input-group-btn">
																<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-filter input-sm" name="product_review_customer">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-filter input-sm" name="product_review_content">
                                                        </td>
                                                        <td>
                                                            <select name="product_review_status" class="form-control form-filter input-sm">
                                                                <option value="">Select...</option>
                                                                <option value="pending">Pending</option>
                                                                <option value="approved">Approved</option>
                                                                <option value="rejected">Rejected</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <div class="margin-bottom-5">
                                                                <button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
                                                            </div>
                                                            <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_history">
                                            <div class="table-container">
                                                <table class="table table-striped table-bordered table-hover" id="datatable_history">
                                                    <thead>
                                                    <tr role="row" class="heading">
                                                        <th width="25%">
                                                            Datetime
                                                        </th>
                                                        <th width="55%">
                                                            Description
                                                        </th>
                                                        <th width="10%">
                                                            Notification
                                                        </th>
                                                        <th width="10%">
                                                            Actions
                                                        </th>
                                                    </tr>
                                                    <tr role="row" class="filter">
                                                        <td>
                                                            <div class="input-group date datetime-picker margin-bottom-5" data-date-format="dd/mm/yyyy hh:ii">
                                                                <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_from" placeholder="From">
                                                                <span class="input-group-btn">
																<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                                                            </div>
                                                            <div class="input-group date datetime-picker" data-date-format="dd/mm/yyyy hh:ii">
                                                                <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_to" placeholder="To">
                                                                <span class="input-group-btn">
																<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-filter input-sm" name="product_history_desc" placeholder="To"/>
                                                        </td>
                                                        <td>
                                                            <select name="product_history_notification" class="form-control form-filter input-sm">
                                                                <option value="">Select...</option>
                                                                <option value="pending">Pending</option>
                                                                <option value="notified">Notified</option>
                                                                <option value="failed">Failed</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <div class="margin-bottom-5">
                                                                <button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
                                                            </div>
                                                            <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="assets/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/core/datatable.js"></script>
<script src="assets/scripts/custom/ecommerce-products-edit.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init();
        EcommerceProductsEdit.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>