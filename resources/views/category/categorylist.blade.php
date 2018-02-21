@extends('layouts.app')
@section('title', 'Category List')

<style>	
	.all-categories ul.parent-list li:hover > ul
	{
		display: block !important;
	}

	.all-categories ul li.parent
	{
		position: relative;
		border-bottom: 1px solid #ccc; 
		font-size: 15px;
		padding: 5px 20px;
	}

	.all-categories ul>li>ul
	{
		width: 200px;
		position: absolute;
		left: 100%;
		top: 0;
		display: none;
		z-index: 999;
		padding: 0;
		margin: 0;
	}

	.all-categories
	{
		padding: 0 !important;
	}

	.all-categories ul.parent-list
	{
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.all-categories ul>li>ul>li
	{
		font-size: 13px;
		padding: 5px 20px;
		border-bottom: 1px solid #ccc;
	}
</style>

@section('content')
	<section>
		<div class="row">
			<h3>All Categories</h3>
			<div class="col-xs-3">
				<div class="content__box content__box--shadow all-categories">
					<ul class="parent-list">
						@foreach ($categories as $category)
							<li class="parent">{{ $category->name }}
								@include('category.category', ['category' => $category])
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection