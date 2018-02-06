@foreach($cat->subCategory as $sub)
	<ul>
		<li>{{ $sub->name }}</li>
		@include('category.menu',['cat' => $sub])
	</ul>
@endforeach