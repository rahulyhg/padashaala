
@if($category->subCategory->isNotEmpty())
	@foreach($category->subCategory as $child)
		 <option value="{{ $child->id }}">
           &nbsp;&nbsp;{{seperator($loop->depth)}}&nbsp;&nbsp;{{ $child->name }}</option>
            @include('category.dropdown', ['category' => $child])
	@endforeach
@endif

{{-- @if($category->subCategory->isNotEmpty())
   @foreach($category->subCategory as $child)
       <option value="{{ $child->id }}" @if(isset($cat->parent) && $cat->parent->id == $child->id) selected="selected" @endif>
           &nbsp;&nbsp;{{ categorySeperator('-', $loop->depth) }} {{ $child->name }}</option>
       @include('backend.categories.category-dropdown', ['category' => $child])
   @endforeach
@endif --}}