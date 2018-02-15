<!DOCTYPE html>
<html lang="en">
<head>
	{{-- meta_head --}}
	@include('vendor.partials._meta_head')
</head>
<body>
	
	<div class="container-fluid">
		
		<nav class="navbar navbar-default navbar-static-top" style="background:#6C7A89;margin-bottom: 0;">
			
			{{-- header --}}
			@include('vendor.partials._header')

			{{-- sidebar --}}
			@include('vendor.partials._sidebar')
		
		</nav>

		<div class="containers">

            <div id="page-wrapper">

				{{-- main_section --}}
				@section('main-content')
					@show
				{{-- main_section_ends --}}

				{{-- footer --}}
				@include('vendor.partials._footer')

			</div>
			
		</div>

	</div>

	{{-- scripts --}}
	@include('vendor.partials._scripts')

</body>
</html>