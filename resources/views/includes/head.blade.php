@section('head')
	<meta charset="utf-8" />
	<title>intelipag @yield('title')</title>
	<meta name="description" content="@yield('page_description')">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link rel="icon" href="/images/favicon.png">

	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="{{ 	url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--begin::Page Vendors Styles(used by this page) -->
	<link href="{{ url('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ url('assets/css/style.bundle.back.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('css/additional.css?ver=1.0') }}" rel="stylesheet" type="text/css"/>

	<!--end::Global Theme Styles -->

	<link href="{{ url('assets/css/styles.css') }}" rel="stylesheet" />
 
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

@show


<!--end::Layout Skins -->
<!-- <link rel="shortcut icon" href="assets/media/logos/favicon.ico" /> -->

