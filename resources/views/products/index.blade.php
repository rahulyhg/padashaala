@extends('layouts.app')
@section('title', 'Products')
@section('content')

            {{-- <section class="content__box content__box--shadow">
    <table id="productTable" class="table table-striped productTable" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Sn</th>
            <th>Name</th>
            <th>Status</th>
            <th><i class="fa fa-eye"></i></th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</section> --}}
	@include('products.form')
@endsection

@push('scripts')
<script>
	$(document).ready(function($) {
		$(".productTable").DataTable({
			aaSorting: [0,'desc'],
			processing: true,
            serverSide: true,
			columns: [
				{data: 'id', name: 'id'},
	    		{data: 'product_name', name: 'product_name'},
	    		{data: 'discount_percentage', name: 'discount_percentage'},
                {data: 'product_price', name: 'product_price'},
				{
                    data: 'id',
                    orderable: false,
                    render: function (data, type, row) {
                    	var tempEditUrl = "{{ route('products.edit', ':id') }}"
                    	tempEditUrl = tempEditUrl.replace(':id', data);
                        var actions = '';
                  		actions += "<a href=" + tempEditUrl + " class='btn btn-xs btn-danger btn-products-edit' data-id=" + row.id + ">Edit</a>";
                        actions += "<button type='submit' class='btn btn-xs btn-danger btn-products-delete' data-id=" + row.id + ">Delete</button>";

                        return actions;
                    }
                }
    		],
			ajax: '{{route('products.json')}}'
		});
	});
</script>
<script>
	$(document).on("click", ".btn-products-add", function(e) {
		e.preventDefault();
            var params   = $('#products').serialize();
            console.log(params);
            // var formData = new FormData($('#vendorDetails')[0]);
            //     formData.append('image', $('input[type=file]')[0].files[0]);

            // $.each(params, function(i, val) {
            //     formData.append(val.name, val.value);
            // });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('products.store')  }}",
                // contentType: false,
                // processData: false,
                // cache: false,
                data: params,
                beforeSend: function (data) {
                },
                success: function (data) {
                        sweetAlert('success', 'Success');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                	 $("#products")[0].reset(),
                	$('#productTable').DataTable().ajax.reload();
                }
            });
        });
</script>
<script>
	$(document).on("click", ".btn-products-delete", function (e) {
        e.preventDefault();
       if (!confirm('Are you sure you want to delete?')) {
                return false;
            }
        var $this = $(this);
        var id = $this.attr('data-id');
     	var tempDeleteUrl = "{{ route('products.delete', ':id') }}";
     	tempDeleteUrl = tempDeleteUrl.replace(':id', id);        
     	$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: tempDeleteUrl,
                data: id,
                beforeSend: function (data) {
                },
                success: function (data) {
                    sweetAlert('success', 'Success');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                	$('#productTable').DataTable().ajax.reload();
                }
            });
    });
</script>
<script>
    $(document).on("click", ".btn-update-product", function (e) {
        e.preventDefault();
        var params = $('#updateProducts').serialize();
        console.log(params);
            // var formData = new FormData($('#updateVendorDetails')[0]);
            // if($('#image').val()) {
            //     formData.append('image', $('input[type=file]')[0].files[0]);
            // }

            // $.each(params, function(i, val) {
            //     formData.append(val.name, val.value);
            // });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "{{ route('products.update') }}",
                // contentType: false,
                // processData: false,
                // cache: false,
                data: params,
                beforeSend: function (data) {
                },
                success: function (data) {
                    sweetAlert('success', 'Success');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {

                    $('#productTable').DataTable().ajax.reload();
                }
            });
    });
</script>
@endpush