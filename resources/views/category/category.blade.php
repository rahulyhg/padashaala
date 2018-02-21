@if($category->children->isNotEmpty())
    <ul style="list-style: none;" class="content__box--shadow">
    @foreach($category->children as $child)
	        <li>
	            {{ $child->name }} 
    			@include('category.category', ['category' => $child])
	        </li>
    @endforeach
    </ul>
@endif