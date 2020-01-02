{{--  header  --}}
@include('dashboard.inc.header');
<body class="cbp-spmenu-push">
	<div class="main-content">

{{--   Sidebar  --}}
@include('dashboard.inc.sidebar')
		
{{--  Menu Top   --}}
@include('dashboard.inc.menu')

	{{--  <!-- main content start-->  --}}
	@yield('main_content')
		
    {{--  <script  src="js/index1.js"></script>  --}}
		
			</div>
		</div>
	@include("dashboard.inc.footer")