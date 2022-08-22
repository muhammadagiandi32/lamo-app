<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme 
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<title>Sistem Informasi Pembayaran</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	{{--
	<meta http-equiv="Content-Security-Policy"
		content="default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval' http://www.google.com">
	--}}
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	{{--
	<meta http-equiv="Content-Security-Policy"
		content="default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'"> --}}
	{{-- <script src="http://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
	--}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="{{ asset('assets/dist/assets/media/logos/favicon.ico')}}" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="{{ asset('assets/dist/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
		type="text/css" />
	<!-- begin::Page Siswa Vendor Stylesheet -->
	<link href="{{ asset('assets/dist/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
		type="text/css" />
	<link href="{{ asset('assets/dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet"
		type="text/css" />
	<!-- end::Page Siswa Vendor Stylesheet -->
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="{{ asset('assets/dist/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/dist/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

	<!--end::Global Stylesheets Bundle-->
	<!--Begin::Google Tag Manager -->
	{{-- <script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&amp;l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
	</script> --}}
	<!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
	style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
				data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
				data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
				data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<!--begin::Brand-->
				<div class="aside-logo flex-column-auto" id="kt_aside_logo">
					<!--begin::Logo-->
					{{-- <a href="/metronic8/demo1/../demo1/index.html"> --}}
						{{-- <img alt="Logo" src="{{ asset('assets/dist/assets/media/logos/logo-1-dark.svg')}}"
							class="h-25px logo" /> --}}
						<h1 class="text-hover-primary">{{ Auth::user()->name; }}</h1>
						{{--
					</a> --}}
					<!--end::Logo-->
					<!--begin::Aside toggler-->
					<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
						data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
						data-kt-toggle-name="aside-minimize">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
						<span class="svg-icon svg-icon-1 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<path opacity="0.5"
									d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
									fill="currentColor" />
								<path
									d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Aside toggler-->
				</div>
				<!--end::Brand-->
				<!--begin::Aside menu-->
				<div class="aside-menu flex-column-fluid">
					<!--begin::Aside Menu-->
					<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
						data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
						data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
						data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
						<!--begin::Menu-->
						<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
							id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
							<div class="menu-item">
								<div class="menu-content pb-2">
									<span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
								</div>
							</div>
							@can('ketua')
							<div class="menu-item">
								<a class="menu-link {{ request()->is('tata_usaha') ? 'active' : ''}}"
									href="{{url('tata_usaha')}}" data-bs-toggle="tooltip" data-bs-trigger="hover"
									data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
												<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
													fill="black" />
												<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
													fill="black" />
												<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Tambah Tata Usaha</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
										<i class="bi bi-graph-down fs-1x"></i>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Laporan</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="{{ url('/report') }}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Laporan SPP</span>
										</a>
									</div>
									{{-- <div class="menu-item">
										<a class="menu-link" href="/metronic8/demo1/../demo1/account/settings.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Laporan Pembayaran Buku</span>
										</a>
									</div> --}}
								</div>
							</div>
							@endcan
							@can('tu')
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
													fill="currentColor" />
												<path
													d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
													fill="currentColor" />
												<path opacity="0.3"
													d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Tata Usaha</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="{{ url('/siswas')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Siswa</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="/metronic8/demo1/../demo1/pages/contact.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Pembayaran SPP</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="/metronic8/demo1/../demo1/pages/team.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Pembayaran Buku</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
													fill="currentColor" />
												<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Ketua Yayasan</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="/metronic8/demo1/../demo1/account/overview.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Laporan Pembayaran SPP</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="/metronic8/demo1/../demo1/account/settings.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Laporan Pembayaran Buku</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
													fill="currentColor" />
												<path
													d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
													fill="currentColor" />
												<path opacity="0.3"
													d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Siswa</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="/metronic8/demo1/../demo1/pages/about.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tagihan SPP</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="{{ url('/getDatasiswa') }}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tagihan Buku</span>
										</a>
									</div>
								</div>
							</div>
							@endcan
							@can('siswa')
							<div class="menu-item">
								<a class="menu-link {{ request()->is('dashboard.siswa') ? 'active' : ''}}"
									href="{{url('dashboard.siswa')}}" data-bs-toggle="tooltip" data-bs-trigger="hover"
									data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
												<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
													fill="black" />
												<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
													fill="black" />
												<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Dashboard</span>
								</a>
							</div>

							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
													d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
													fill="black" />
												<path
													d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Tagihan</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link"
											href="{{ url('/showPayment').'/'.Crypt::encrypt(Auth::user()->id)}}">
											{{-- <a class="menu-link"
												href="{{ url('/showPayment').Crypt::encrypt(Auth::user()->id)}}"> --}}

												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tagihan SPP</span>
											</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="{{ url('/paymebtBuku') }}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tagihan Buku</span>
										</a>
									</div>
								</div>
							</div>
							@endcan
							<div class="menu-item">
								<div class="menu-content">
									<div class="separator mx-1 my-4"></div>
								</div>
							</div>
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside menu-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header align-items-stretch">
					<!--begin::Container-->
					<div class="container-fluid d-flex align-items-stretch justify-content-between">
						<!--begin::Aside mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
							<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
								id="kt_aside_mobile_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<path
											d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
											fill="currentColor" />
										<path opacity="0.3"
											d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
											fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!--end::Aside mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="/metronic8/demo1/../demo1/index.html" class="d-lg-none">
								<img alt="Logo" src="{{ asset('assets/dist/assets/media/logos/logo-2.svg')}}"
									class="h-30px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
							<!--begin::Navbar-->
							<div class="d-flex align-items-stretch" id="kt_header_nav">
								<!--begin::Menu wrapper-->
								<div class="header-menu align-items-stretch" data-kt-drawer="true"
									data-kt-drawer-name="header-menu"
									data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
									data-kt-drawer-width="{default:'200px', '300px': '250px'}"
									data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
									data-kt-swapper="true" data-kt-swapper-mode="prepend"
									data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
									<!--begin::Menu-->
									<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
										id="#kt_header_menu" data-kt-menu="true">
										<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
											data-kt-menu-placement="bottom-start"
											class="menu-item menu-lg-down-accordion me-lg-1">
											<span class="menu-link py-3">
												<span class="menu-title">SMP MA'ARIF</span>
												<span class="menu-arrow d-lg-none"></span>
											</span>
										</div>
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Menu wrapper-->
							</div>
							<!--end::Navbar-->
							<!--begin::Toolbar wrapper-->
							<div class="d-flex align-items-stretch flex-shrink-0">
								{{-- buat isi icon di samping user --}}
								<!--begin::User menu-->
								<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-30px symbol-md-40px"
										data-kt-menu-trigger="click" data-kt-menu-attach="parent"
										data-kt-menu-placement="bottom-end">
										<img src="{{ asset('assets/dist/assets/media/avatars/300-1.jpg')}}"
											alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo"
														src="{{ asset('assets/dist/assets/media/avatars/300-1.jpg')}}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bolder d-flex align-items-center fs-5">
														{{Auth::user()->name}}
													</div>
													<a href="#"
														class="fw-bold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="{{ route('siswa')}}" class="menu-link px-5">My Profile</a>
										</div>

										<div class="menu-item px-5">
											<a href="{{route('password.edit')}}" class="menu-link px-5">Ubah
												Password</a>
										</div>
										<!--end::Menu item-->

										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="hover"
											data-kt-menu-placement="left-start">

										</div>
										<!--end::Menu item-->

										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
												{{ __('Sign Out') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST"
												class="d-none">
												@csrf
											</form>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
								<!--begin::Header menu toggle-->
								<div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
									<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
										id="kt_header_menu_mobile_toggle">
										<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
													fill="currentColor" />
												<path opacity="0.3"
													d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Header menu toggle-->
							</div>
							<!--end::Toolbar wrapper-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Post-->
					<div class="post d-flex flex-column-fluid" id="kt_post">
						<!--begin::Container-->
						<div id="kt_content_container" class="container-xxl">
							<!--begin::Navbar-->
							@yield('content')
							<!--end::Navbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div
						class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted fw-bold me-1">2022©</span>
							<a href="https://keenthemes.com" target="_blank"
								class="text-gray-800 text-hover-primary">Keenthemes</a>
						</div>
						<!--end::Copyright-->
						<!--begin::Menu-->
						<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
							<li class="menu-item">
								<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
							</li>
							<li class="menu-item">
								<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
							</li>
							<li class="menu-item">
								<a href="https://1.envato.market/EA4JP" target="_blank"
									class="menu-link px-2">Purchase</a>
							</li>
						</ul>
						<!--end::Menu-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->


	<!--end::Engage drawers-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
					fill="currentColor" />
				<path
					d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
					fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->



	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "{{ asset('assets/dist/')}}assets/";
	</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="{{ asset('assets/dist/assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/scripts.bundle.js')}}"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="{{ asset('assets/dist/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="{{ asset('assets/dist/assets/js/custom/account/security/security-summary.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/account/security/license-usage.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/widgets.bundle.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/widgets.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/apps/chat/chat.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/intro.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-app.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/type.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/details.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/finance.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/complete.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/main.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/users-search.js')}}"></script>
	<!--end::Page Custom Javascript-->

	<!-- begin:: page SISWA JavaScript -->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="{{ asset('assets/dist/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="{{ asset('assets/dist/assets/js/widgets.bundle.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/widgets.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/apps/chat/chat.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/intro.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-app.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/new-target.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/complete.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/users-search.js')}}"></script>
	<!--end::Page Custom Javascript(used by this page)-->
	<!--end::Page Custom Javascript-->

	<!--end::Javascript-->

	{{-- pagination --}}


	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.11/dist/sweetalert2.all.min.js"></script>

	{{-- DeteTime Picker --}}
	{{-- <script
		src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js?v=7.2.9">
	</script> --}}
	{{--Payment Bills for Studnets JS --}}
	<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-S92WPmjAuJaARJin">
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#kt_daterangepicker_2').daterangepicker({
				buttonClasses: ' btn',
				applyClass: 'btn-primary',
				cancelClass: 'btn-secondary'
			}, function(start, end, label) {
				$('#kt_daterangepicker_2 .form-control').val(start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
			});


			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			const CallbackStatus = (resultNotifications) => {
				// var test = null;
				// var datanotif = resultNotifications;
				var callbackAjax = $.ajax({
					type: 'POST',
					url: '/statusPayment',
					headers: {
						'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					data: resultNotifications,
				});
				return callbackAjax;
			}
			$('#form_payment').on('submit', function(event) {
				event.preventDefault();
				var form = this;
				$.ajax({
					type: 'POST',
					url: '/snaptoken',
					headers: {
						'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					datatType: 'json',
					processData: false,
					contentType: false,
					data: new FormData(form),
					beforeSend: function() {
						$(document).find('span.text-danger').text('');

					},
					success: function(token) {
						// console.log(token);
						snap.pay(token.snaptoken, {
							// Optional
							onSuccess: function(result) {
								// /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
								// console.log(result);
								var notifications = {
									finish_redirect_url: result.finish_redirect_url,
									fraud_status: result.fraud_status,
									gross_amount: result.gross_amount,
									order_id: result.order_id,
									payment_type: result.payment_type,
									status_code: result.status_code,
									status_message: result.status_message,
									transaction_id: result.transaction_id,
									transaction_status: result.transaction_status,
									transaction_time: result.transaction_time
								}
								console.log(CallbackStatus(notifications));
								setTimeout(function() {
									location.reload();
								}, 100);

							},
							// Optional
							onPending: function(result) {
								// /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
								var notifications = {
									finish_redirect_url: result.finish_redirect_url,
									fraud_status: result.fraud_status,
									gross_amount: result.gross_amount,
									order_id: result.order_id,
									payment_type: result.payment_type,
									status_code: result.status_code,
									status_message: result.status_message,
									transaction_id: result.transaction_id,
									transaction_status: result.transaction_status,
									transaction_time: result.transaction_time
								}
								console.log(CallbackStatus(notifications));
								setTimeout(function() {
									location.reload();
								}, 100);

							},
							// Optional
							onError: function(result) {
								// /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
								var notifications = {
									finish_redirect_url: result.finish_redirect_url,
									fraud_status: result.fraud_status,
									gross_amount: result.gross_amount,
									order_id: result.order_id,
									payment_type: result.payment_type,
									status_code: result.status_code,
									status_message: result.status_message,
									transaction_id: result.transaction_id,
									transaction_status: result.transaction_status,
									transaction_time: result.transaction_time
								}
								console.log(CallbackStatus(notifications));
								setTimeout(function() {
									location.reload();
								}, 100);

							}
						});
					},
					error: function(xhr, ajaxOptions, thrownError) {
						console.log(xhr);
					},
				});
			});
		});
	</script>
	{{-- End Midtrans JS --}}
	{{-- modal url MyClass --}}
	<script>
		$(document).ready(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$('#form_myclass').on('submit', function(event) {
				event.preventDefault();
				var form = this;
				$.ajax({
					type: 'POST',
					url: '/myclass/insert',
					headers: {
						'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					datatType: 'json',
					processData: false,
					contentType: false,
					data: new FormData(form),
					beforeSend: function() {
						$(document).find('span.text-danger').text('');

					},
					success: function(data) {
						console.log(data);
					},
					error: function(xhr, ajaxOptions, thrownError) {
						console.log(xhr);
					},
				});
			});
		});


		$(document).ready(function() {
			var row = 1;
			$('#addDetailClass').on('click', function() {
				$('#details').append(`<div class="fv-row mb-10" id="details">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">Url Video ${++row}</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<textarea type="text" class="form-control form-control-lg form-control-solid" name="url[]" placeholder="" value="">
												</textarea>
												<!--end::Input-->
											</div>`);
			})
		});

		// checkbox Tagihan Buku SISWA
		$(document).ready(function() {

			$('#selectAll').click(function() {
				$('input[type="checkbox"]').prop('checked', this.checked);

				if ($('input[type="checkbox"]').is(':checked')) {

					$("#tagihanBuku").append(`
							<div class="card mt-5">
								
								<div class="card-header">
									<h3 class="card-title">
										Input Tagihan Buku
									</h3>
								</div>
								<!--begin::Form-->
									<div class="card-body py-3">
										<div class="form-group">
											<div class="alert alert-custom alert-default" role="alert">
												<div class="alert-icon"></div>
												<div class="alert-text">
													Input Nama Buku dan Jumlah Tagihan
												</div>
											</div>
										</div>` + console.log() + `
										<div class="form-group">
											<label>Nama Tagihan</label>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="la la-exclamation-triangle icon-lg"></i></span></div>
												<input required type="text" name="nama_tagihan" class="form-control" placeholder="Nama Tagihan" />
											</div>
											<span class="form-text text-muted">Some help content goes here</span>
										</div>
										<div class="form-group">
											<label>Jumlah Tagihan</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">Rp.</span>
												</div>
												<input required type="text" name="total" class="form-control" placeholder="0.00" aria-label="Amount (to the nearest rupiah)" />
												<div class="input-group-append">
													<span class="input-group-text"><i class="la la-registered"></i></span>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-primary mr-2">Submit</button>
									</div>
								
								<!--end::Form-->
							</div>`);
				} else {
					$("#tagihanBuku").html(``);
				}

			});
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$('#tagihan_buku').on('submit', function(event) {
				event.preventDefault();
				var form = this;
				// console.log('data');
				$.ajax({
					type: 'POST',
					url: '/tagihanBuku',
					headers: {
						'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					datatType: 'json',
					processData: false,
					contentType: false,
					data: new FormData(form),
					success: function(data) {
						if (data.respon == 'success') {
							Swal.fire("Menambahkan Tagihan Buku Berhasil", "Silahkan Klik OK!", "success");
							$('[type=checkbox]').prop("checked", false);
							$("#tagihanBuku").html(``);
						} else {
							Swal.fire("Good job!", "You clicked the button!", "error");
						}
					},
					error: function(xhr, ajaxOptions, thrownError) {
						console.log(xhr);
					},
				});
			});


		});
	</script>

	<script>
		$(document).ready(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$('#getDataReport').on('submit', function(event) {
				event.preventDefault();
				var form = this;
				// console.log('data');
				$.ajax({
					type: 'POST',
					url: '/getDataReport',
					headers: {
						'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					datatType: 'json',
					processData: false,
					contentType: false,
					data: new FormData(form),
					success: function(data) {
						console.log(data.data);
				$('#report').append('');

						$.each(data.data, function(index, value) {
							// console.log('The value at arr[' + index + '] is: ' + value['bulan_bayar']);

							$('#report').append(`<div class="row">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table id="example" class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
																<!--begin::Table head-->
																<thead>
																	<tr class="fw-bold text-muted">
																		<th class="min-w-100px">#</th>
																		<th class="min-w-150px">Nama</th>
																		<th class="min-w-140px">Bulan</th>
																		<th class="min-w-120px">Total</th>
																		<th class="min-w-120px">status</th>
																		{{-- <th class="min-w-100px text-end">Actions</th> --}}
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary fs-6"></a>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">`+value['nama_orangtua']+`</a>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">`+value['bulan_bayar']+`</a>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">`+value['total']+`</a>
																		</td>
																		<td class="text-dark fw-bold text-hover-primary fs-6">`+value['status']+`</td>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->

														</div>
														<!--end::Table container-->
													</div>
												</div>`);
							// alert('kntl');
						});

					},
					error: function(xhr, ajaxOptions, thrownError) {
						console.log(xhr);
					},
				});
			});
		})
	</script>

	<script>
		$(document).ready(function(){
			$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					const CallbackStatus = (resultNotifications) => {
						// var test = null;
						// var datanotif = resultNotifications;
						var callbackAjax = $.ajax({
							type: 'POST',
							url: '/statusPayment',
							headers: {
								'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							},
							data: resultNotifications,
						});
						return callbackAjax;
					}
					$('#form_payment_buku').on('submit', function(event) {
						event.preventDefault();
						var form = this;
						$.ajax({
							type: 'POST',
							url: '/snaptokenBuku',
							headers: {
								'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							},
							datatType: 'json',
							processData: false,
							contentType: false,
							data: new FormData(form),
							beforeSend: function() {
								$(document).find('span.text-danger').text('');
							},
							success: function(token) {
								// console.log(token);
								snap.pay(token.snaptoken, {
									// Optional
									onSuccess: function(result) {
										// /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
										// console.log(result);
									
										setTimeout(function() {
											location.reload();
										}, 100);

									},
									// Optional
									onPending: function(result) {
										// /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
								
										setTimeout(function() {
											location.reload();
										}, 100);

									},
									// Optional
									onError: function(result) {
										// /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
										var notifications = {
											finish_redirect_url: result.finish_redirect_url,
											fraud_status: result.fraud_status,
											gross_amount: result.gross_amount,
											order_id: result.order_id,
											payment_type: result.payment_type,
											status_code: result.status_code,
											status_message: result.status_message,
											transaction_id: result.transaction_id,
											transaction_status: result.transaction_status,
											transaction_time: result.transaction_time
										}
										console.log(CallbackStatus(notifications));
										setTimeout(function() {
											location.reload();
										}, 100);

									}
								});
							},
							error: function(xhr, ajaxOptions, thrownError) {
								console.log(xhr);
							},
						});
					});
				})

		
	</script>
</body>
<!--end::Body-->

</html>