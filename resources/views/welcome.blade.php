<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
    	<script src="{{ asset('js/app.js') }}" defer></script>
		
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{ asset('css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		
		<!--begin::Global Theme Styles -->
		<link href="{{ asset('css/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('css/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		  
		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="assets/demo/media/img/logo/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header      Mandatory -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="assets/demo/media/img/logo/logo_default_dark.png" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
								
							</div>

							<!-- END: Horizontal Menu -->

							<!-- BEGIN: Topbar -->
							

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="index.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a></li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Components</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Base</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Base</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">State Colors</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/typography.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typography</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/stack.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Stack</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/tables.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tables</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/progress.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Progress</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/modal.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Modal</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/alerts.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Alerts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/popover.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Popover</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/tooltip.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tooltip</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/blockui.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Block UI</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/spinners.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Spinners</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/scrollable.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/dropdown.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropdown</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Tabs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="components/base/tabs/bootstrap.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap Tabs</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/base/tabs/line.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Line Tabs</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/accordions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Accordions</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/navs.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Navs</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/lists.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lists</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/treeview.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tree View</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/bootstrap-notify.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap Notify</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/toastr.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Toastr</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/sweetalert2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">SweetAlert2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">Icons</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item " aria-haspopup="true"><a href="components/icons/flaticon.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/icons/fontawesome5.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome 5</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/icons/lineawesome.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/icons/socicons.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Socicons</span></a></li>
									</ul>
								</div>
							</li>
							
							
							
							
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">Dashboard</h3>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">

						<!--Begin::Section-->
						<div class="row">
						<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 979px;">
									<thead>
										<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 132.25px;" aria-sort="ascending" aria-label="Agent: activate to sort column descending">Agent</th><th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 213.25px;" aria-label="Company Email: activate to sort column ascending">Company Email</th><th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 92.25px;" aria-label="Company Agent: activate to sort column ascending">Company Agent</th><th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 121.25px;" aria-label="Company Name: activate to sort column ascending">Company Name</th><th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 54.25px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 32.25px;" aria-label="Type: activate to sort column ascending">Type</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 69.5px;" aria-label="Actions">Actions</th></tr>
									</thead>
									<tbody>
									<tr role="row" class="odd">
											<td class="sorting_1" tabindex="0">
											<div class="m-card-user m-card-user--sm">
												<div class="m-card-user__pic">
													<img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_11.jpg" class="m--img-rounded m--marginless" alt="photo">
												</div>
												<div class="m-card-user__details">
													<span class="m-card-user__name">Alden Dingate</span>
													<a href="" class="m-card-user__email m-link">Heidenreich Inc</a>
												</div>
											</div></td>
											<td><a class="m-link" href="mailto:adingate15@furl.net">adingate15@furl.net</a></td>
											<td>Alden Dingate</td>
											<td>Heidenreich Inc</td>
											<td><span class="m-badge  m-badge--info m-badge--wide">Info</span></td>
											<td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></td>
											<td nowrap="">
											<span class="dropdown">
												<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
												<i class="la la-ellipsis-h"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
													<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
													<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
												</div>
											</span>
											<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
											<i class="la la-edit"></i>
											</a></td>
										</tr><tr role="row" class="even">
											<td class="sorting_1" tabindex="0">
                                <div class="m-card-user m-card-user--sm">
                                    <div class="m-card-user__pic">
                                        <img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_11.jpg" class="m--img-rounded m--marginless" alt="photo">
                                    </div>
                                    <div class="m-card-user__details">
                                        <span class="m-card-user__name">Alfonse Lawrance</span>
                                        <a href="" class="m-card-user__email m-link">Schuppe-Harber</a>
                                    </div>
                                </div></td>
											<td><a class="m-link" href="mailto:alawrance11@un.org">alawrance11@un.org</a></td>
											<td>Alfonse Lawrance</td>
											<td>Schuppe-Harber</td>
											<td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
											<td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-accent">Direct</span></td>
											<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr><tr role="row" class="odd">
													<td class="sorting_1" tabindex="0">
										<div class="m-card-user m-card-user--sm">
											<div class="m-card-user__pic">
												<div class="m-card-user__no-photo m--bg-fill-brand"><span>B</span></div>
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name">Bryn Peascod</span>
												<a href="" class="m-card-user__email m-link">Larkin and Sons</a>
											</div>
										</div></td>
													<td><a class="m-link" href="mailto:bpeascodm@devhub.com">bpeascodm@devhub.com</a></td>
													<td>Bryn Peascod</td>
													<td>Larkin and Sons</td>
													<td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></td>
													<td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></td>
													<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr><tr role="row" class="even">
													<td class="sorting_1" tabindex="0">
										<div class="m-card-user m-card-user--sm">
											<div class="m-card-user__pic">
												<img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_9.jpg" class="m--img-rounded m--marginless" alt="photo">
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name">Christa Jacmar</span>
												<a href="" class="m-card-user__email m-link">Brakus-Hansen</a>
											</div>
										</div></td>
													<td><a class="m-link" href="mailto:cjacmare@google.pl">cjacmare@google.pl</a></td>
													<td>Christa Jacmar</td>
													<td>Brakus-Hansen</td>
													<td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
													<td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
													<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr><tr role="row" class="odd">
													<td class="sorting_1" tabindex="0">
										<div class="m-card-user m-card-user--sm">
											<div class="m-card-user__pic">
												<div class="m-card-user__no-photo m--bg-fill-metal"><span>D</span></div>
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name">Devi Iglesias</span>
												<a href="" class="m-card-user__email m-link">Ullrich-Dibbert</a>
											</div>
										</div></td>
													<td><a class="m-link" href="mailto:diglesias1c@usa.gov">diglesias1c@usa.gov</a></td>
													<td>Devi Iglesias</td>
													<td>Ullrich-Dibbert</td>
													<td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
													<td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></td>
													<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr><tr role="row" class="even">
													<td class="sorting_1" tabindex="0">
										<div class="m-card-user m-card-user--sm">
											<div class="m-card-user__pic">
												<div class="m-card-user__no-photo m--bg-fill-accent"><span>F</span></div>
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name">Freda Arnall</span>
												<a href="" class="m-card-user__email m-link">Dicki, Morar and Stiedemann</a>
											</div>
										</div></td>
													<td><a class="m-link" href="mailto:farnallv@vistaprint.com">farnallv@vistaprint.com</a></td>
													<td>Freda Arnall</td>
													<td>Dicki, Morar and Stiedemann</td>
													<td><span class="m-badge  m-badge--primary m-badge--wide">Canceled</span></td>
													<td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-accent">Direct</span></td>
													<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr><tr role="row" class="odd">
													<td tabindex="0" class="sorting_1">
										<div class="m-card-user m-card-user--sm">
											<div class="m-card-user__pic">
												<div class="m-card-user__no-photo m--bg-fill-warning"><span>H</span></div>
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name">Hazlett Kite</span>
												<a href="" class="m-card-user__email m-link">Streich LLC</a>
											</div>
										</div></td>
													<td><a class="m-link" href="mailto:hkite7@epa.gov">hkite7@epa.gov</a></td>
													<td>Hazlett Kite</td>
													<td>Streich LLC</td>
													<td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></td>
													<td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></td>
													<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr><tr role="row" class="even">
													<td class="sorting_1" tabindex="0">
										<div class="m-card-user m-card-user--sm">
											<div class="m-card-user__pic">
												<img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_13.jpg" class="m--img-rounded m--marginless" alt="photo">
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name">Heddi Castelli</span>
												<a href="" class="m-card-user__email m-link">Kessler and Sons</a>
											</div>
										</div></td>
													<td><a class="m-link" href="mailto:hcastellir@nationalgeographic.com">hcastellir@nationalgeographic.com</a></td>
													<td>Heddi Castelli</td>
													<td>Kessler and Sons</td>
													<td><span class="m-badge  m-badge--info m-badge--wide">Info</span></td>
													<td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></td>
													<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr><tr role="row" class="odd">
													<td class="sorting_1" tabindex="0">
										<div class="m-card-user m-card-user--sm">
											<div class="m-card-user__pic">
												<img src="https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/assets/app/media/img/users/100_14.jpg" class="m--img-rounded m--marginless" alt="photo">
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name">Hubey Passby</span>
												<a href="" class="m-card-user__email m-link">Lemke-Hermiston</a>
											</div>
										</div></td>
													<td><a class="m-link" href="mailto:hpassbyz@wikimedia.org">hpassbyz@wikimedia.org</a></td>
													<td>Hubey Passby</td>
													<td>Lemke-Hermiston</td>
													<td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></td>
													<td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-accent">Direct</span></td>
													<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr><tr role="row" class="even">
													<td class="sorting_1" tabindex="0">
										<div class="m-card-user m-card-user--sm">
											<div class="m-card-user__pic">
												<div class="m-card-user__no-photo m--bg-fill-info"><span>K</span></div>
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name">Kessiah Chettoe</span>
												<a href="" class="m-card-user__email m-link">Mraz LLC</a>
											</div>
										</div></td>
													<td><a class="m-link" href="mailto:kchettoe12@zdnet.com">kchettoe12@zdnet.com</a></td>
													<td>Kessiah Chettoe</td>
													<td>Mraz LLC</td>
													<td><span class="m-badge  m-badge--info m-badge--wide">Info</span></td>
													<td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></td>
													<td nowrap="">
								<span class="dropdown">
									<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
										<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
										<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
									</div>
								</span>
								<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
								<i class="la la-edit"></i>
								</a></td>
												</tr></tbody>
						</table>
						</div>

						<!--End::Section-->

					</div>
				</div>


				
				
			</div>

			
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		<!-- <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			<div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
				<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">Messages</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">Settings</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">Logs</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
						<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
							<div class="m-messenger__messages m-scrollable">
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Hi Bob. What time will be the meeting ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Hi Megan. It's at 2.30PM
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Will the development team be joining ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes sure. I invited them as well
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">2:30PM</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. For the Coca-Cola Mobile App project as well ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes, sure.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Please also prepare the quotation for the Loop CRM project as well.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">3:15PM</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-no-pic m--bg-fill-danger">
											<span>M</span>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. I will prepare it.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Thanks Megan. I will see you later.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Sure. See you in the meeting soon.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__seperator"></div>
							<div class="m-messenger__form">
								<div class="m-messenger__form-controls">
									<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
								</div>
								<div class="m-messenger__form-tools">
									<a href="" class="m-messenger__form-attachment">
										<i class="la la-paperclip"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="m_quick_sidebar_tabs_settings" role="tabpanel">
						<div class="m-list-settings m-scrollable">
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">General Settings</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Email Notifications</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Site Tracking</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">SMS Alerts</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Backup Storage</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Audit Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">System Settings</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">System Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Error Reporting</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Applications Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Backup Servers</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Audit Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="m_quick_sidebar_tabs_logs" role="tabpanel">
						<div class="m-list-timeline m-scrollable">
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									System Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered <span class="m-badge m-badge--warning m-badge--wide">important</span></a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoice received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89% <span class="m-badge m-badge--success m-badge--wide">resolved</span></a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error</a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down <span class="m-badge m-badge--danger m-badge--wide">pending</span></a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Applications Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--info m-badge--wide">urgent</span></a>
										<span class="m-list-timeline__time">7 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered</a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoices received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89%</a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error <span class="m-badge m-badge--info m-badge--wide">pending</span></a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down</a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Server Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received</a>
										<span class="m-list-timeline__time">7 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered</a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoice received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89%</a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error</a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down</a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received</a>
										<span class="m-list-timeline__time">1117 hrs</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		  
		<!-- end::Scroll Top -->

		
		
		<script src="{{asset('js/vendors.bundle.js')}}" type="text/javascript"></script>
		<!-- <script src="{{asset('js/perfect-scrollbar.js')}}" type="text/javascript"></script> -->
		
		<script src="{{asset('js/scripts.bundle.js')}}" type="text/javascript"></script>
		  
		<script src="{{asset('js/datatables.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/column-rendering.js')}}" type="text/javascript"></script>
		  

		<!-- <script src="{{asset('js/perfect-scrollbar.js')}}" type="text/javascript"></script> -->




		
		  
		  
	</body>

	<!-- end::Body -->
</html>