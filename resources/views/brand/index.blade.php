@extends('layouts.app')

@section('content')

	<div class="container" ng-controller="maincontroller">
		<div class="row">
			<div class="col-md-8">
				<table id="myTable" class="table table-striped table-hover">
					<thead>
						<tr>
{{-- 							<th>SN</th>
 --}}							<th>Name</th>
							{{-- <th>Image</th>
							<th>Company Name</th>
							<th class="sorting-false">Action</th> --}}
						</tr>
					</thead>
					<tbody>
						{{-- @foreach($brandProducts as $brandProduct)
						<tr>
							<td>{{$brandProduct->id}}</td>
							<td>{{$brandProduct->name}}</td>
							<td><img src="#"></td>
							<td>{{$brandProduct->company_name}}</td>
							<td>
								<a href="" class="btn btn-danger btn-sm">Edit</a>
								<form action="{{route('brand.destroy',[$brandProduct->id])}}" method="post">
									{{csrf_field()}}
									{{method_field('DELETE')}}
									
								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
							</form>
							</td>
						</tr>
						@endforeach --}}
					</tbody>
					<tfoot>
						<tr>
							{{-- <th>SN</th> --}}
							<th>Name</th>
							{{-- <th>Image</th>
							<th>Company Name</th>
							<th class="sorting-false">Action</th> --}}
						</tr>
					</tfoot>
				</table>
				{{-- <table class="datatable">
					<thead>
						<tr>
							<th>SN</th>
							<th>Name</th>
							<th>Image</th>
							<th>Company Name</th>
						</tr>
					</thead>
					<tbody></tbody>
					<tfoot>
						<tr>
							<th>SN</th>
							<th>Name</th>
							<th>Image</th>
							<th>Company Name</th>
						</tr>
					</tfoot>
				</table> --}}
			</div>
			@include('brand.form')
		</div>
	</div>

	@endsection

	@push('scripts')

<script>
	$(document).ready(function(){
		myTable = $('#myTable').DataTable({
  columns: [
                    {data: 'name', name: 'name'},
                                 ],



		});
		ajax: '{{route('brands.json')}}'
	});
</script>

<script>
	$(document).on("click", ".btn-add", function (e) {
        e.preventDefault();
console.log($("#registerSubmit").serialize());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('brand.store')  }}",
                data: $("#registerSubmit").serialize(),
                beforeSend: function (data) {
                },
                success: function (data) {
                    
					// $('#myTable').DataTable().ajax.reload();

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                	// $('#myTable').DataTable().ajax.reload();


                }
            });
        

    });
</script>

@endpush