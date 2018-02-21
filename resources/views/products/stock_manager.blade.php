@extends('layouts.app')

@section('content')
	<section>
		{{-- <form action="{{ route('products.update') }}">
			{{ csrf_field() }} --}}
			<div class="row">
				<div class="col-md-3">
					<label for="product_name">Name</label>
				</div>
				<div class="col-md-3">
					<label for="stock_qty">Stock Quantity</label>
				</div>
				<div class="col-md-3">
					<label for="stock">Stock</label>
				</div>
				<div class="col-md-3">
					<h5>Action</h5>
				</div>
			</div>
			@foreach ($products as $product)
			<form action="{{ route('products.update') }}" id="stockform" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $product->id }}">
				<div class="row">
					<div class="col-md-3">
						<h5><a href="">{{ $product->product_name }}</a></h5>
					</div>
					<div class="col-md-3">
						<input type="text" name="stock_qty" id="stock_qty" class="form-control" value="{{ $product->stock_qty }}">
					</div>
					<div class="col-md-3">
						<select name="stock" id="" class="form-control">
							<option value="1">In Stock</option>
							<option value="0">Out Stock</option>
						</select>
					</div>
					<div class="col-md-3">
						<button type="submit" name="submit" class="btn btn-primary btn-sm btn-stock">Edit</button>
					</div>
				</div>
			</form>
			@endforeach
				<button type="submit" name="submit" class="btn btn-danger btn-sm pull-right" onclick="return submitForm();">Update</button>
		{{-- </form> --}}
		{{ $products->links() }}
	</section>
@endsection

@push('scripts')
<script>
// 	function submitForm(form){
//     var url = form.attr("action");
//     var formData = $(form).serializeArray();
//     $.post(url, formData).done(function (data) {
//         alert(data);
//     });
// }

// $(document).on('click','.btn-stock',function(e){
//     $.ajaxSetup({
//         header:$('meta[name="_token"]').attr('content')
//     })
//     e.preventDefault(e);
//      var $this = $(this);
//         var stock = $(this).('#stock_qty').val();
//         console.log(stock);
//                 var id = $this.in('data-id');
//         var stock_qty = $this.in('data-id');

//     // console.log(form);
// console.log(form);
//         $.ajax({

//         type:"POST",
//         url:'{{ route('products.update') }}',
//         data: form,
//         // dataType: 'json',
//         success: function(data){
//             // $('#stockform').ajax.load();
//         },
//         error: function(data){

//         }
//     })
//     });
</script>
@endpush