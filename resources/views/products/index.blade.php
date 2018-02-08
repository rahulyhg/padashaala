@extends('layouts.app')
@section('title', 'Products')
@section('content')
	<div class="container">
		<div class="row">
			@include('products.form')
			<div class="col-md-8">
				<table class="table table-striped table-hover" id="productTable">
					<thead>
						<tr>
							<th>Name</th>
							<th>Qty</th>
							<th>Price</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Qty</th>
							<th>Price</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
@endsection