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
		{{--  <!-- main content start-->  --}}
	<div id="page-wrapper">
		<div class="main-page">
			<h2 class="title1">Blank Page</h2>
			<div class="blank-page widget-shadow scroll" id="style-2 div1">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.
				</p>
			</div>
		</div>
	</div>
    {{--  <script  src="js/index1.js"></script>  --}}
		
			</div>
		</div>
	@include("dashboard.inc.footer")