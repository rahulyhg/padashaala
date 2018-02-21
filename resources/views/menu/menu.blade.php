@if($menu->childrens->isNotEmpty())
    {{-- <div class="col-xs-6"> --}}
	    <ul style="list-style: none;" class="content__box--shadow">
    @foreach($menu->childrens as $child)
	        <li>
	             {{ $child->label }} 
	             {{-- @if(!empty($child['menu']))
	             <span class="fa fa-arrow-circle-right pull-right" style="font-size: 10px;margin-top: 5px;"></span>
	             @endif --}}
	        	{{-- <div child="sub-child-list"> --}}
	    			@include('menu.menu', ['menu' => $child])
		        {{-- </div> --}}
	        </li>
    @endforeach
	    </ul>
	{{-- </div> --}}
@endif