@extends('layouts.app')

@section('content')

    <div class="modal fade" id="quickViewModal" tabindex="-1"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<table id="myTable" class="table table-striped table-hover">
					<thead>
						<tr>
							<th>SN</th>
							<th>Name</th>
							<th>Image</th>
							<th>Company Name</th>
							<th class="sorting-false">Action</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
						<tr>
							<th>SN</th>
							<th>Name</th>
							<th>Image</th>
							<th>Company Name</th>
							<th class="sorting-false">Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
			@include('brand.form')
		</div>
	</div>

	@endsection

	@push('scripts')

<script>

	function sweetAlert(type, title, message) {
        swal({
            title: title,
            html: message,
            type: type,
            showConfirmButton: false,
            timer: 3000,
            showCancelButton: true
        }).catch(swal.noop);
    }

	$(document).ready(function(){
		$('#myTable').DataTable({
			aaSorting: [0,'desc'],
			processing: true,
            serverSide: true,
			columns: [
				{data: 'id', name: 'id'},
	    		{data: 'name', name: 'name'},
	    		{data: 'company_name', name: 'company_name'},
                {data: 'image', 
                orderable: false, 
                render: function (data, type, row) {
                    return '<img src="' + data + '" width="50">';
                }
            },
	    		{
                        data: 'id',
                        orderable: false,
                        render: function (data, type, row) {
                            var actions = '';
                      		actions += "<button type='submit' class='btn btn-xs btn-danger btn-edit' data-id=" + row.id + ">Edit</button>";
                            actions += "<button type='submit' class='btn btn-xs btn-danger btn-delete' data-id=" + row.id + ">Delete</button>";

                            return actions;
                        }
                    }
				
    		],
			ajax: '{{route('brands.json')}}'

		});
	});
</script>

<script>
	$(document).on("click", ".btn-add", function (e) {
        e.preventDefault();
            var params   = $('#brandSubmit').serializeArray();
            var formData = new FormData($('#brandSubmit')[0]);
                formData.append('image', $('input[type=file]')[0].files[0]);

            $.each(params, function(i, val) {
                formData.append(val.name, val.value);
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('brand.store')  }}",
                contentType: false,
                processData: false,
                cache: false,
                data: formData,
                beforeSend: function (data) {
                },
                success: function (data) {
                        sweetAlert('success', 'Success');
                    

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                	 $("#brandSubmit")[0].reset(),
                	$('#myTable').DataTable().ajax.reload();


                }
            });
        

    });
</script>
<script>
	$(document).on("click", ".btn-delete", function (e) {
        e.preventDefault();
       if (!confirm('Are you sure you want to delete?')) {
                return false;
            }
         var $this = $(this);
       
        var id = $this.attr('data-id');
     	var tempDeleteUrl = "{{ route('brands.delete', ':id') }}";                               tempDeleteUrl = tempDeleteUrl.replace(':id', id);        
         
    
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
                    
					// $('#myTable').DataTable().ajax.reload();

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                	$('#myTable').DataTable().ajax.reload();


                }
            });
        

    });
</script>

<script>
	        var $modal = $('#quickViewModal');
	$(document).on("click", ".btn-edit", function (e) {
        e.preventDefault();
          var $this = $(this);
        var id = $this.attr('data-id');
     	var tempDeleteUrl = "{{ route('brands.edit', ':id') }}";                               tempDeleteUrl = tempDeleteUrl.replace(':id', id);

     	$modal.load(tempDeleteUrl, function (response) {
            $modal.modal({show: true});

         });
        

    });
</script>

<script>
	$(document).on("click", ".btn-update", function (e) {
        e.preventDefault();
        var params   = $('#update').serializeArray();
            var formData = new FormData($('#update')[0]);
            if($('#image').val()) {
                formData.append('image', $('input[type=file]')[0].files[0]);
            }

            $.each(params, function(i, val) {
                formData.append(val.name, val.value);
            });
                    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('brands.update') }}",
                contentType: false,
                processData: false,
                cache: false,
                data: formData,
                beforeSend: function (data) {
                },
                success: function (data) {
                	$('#quickViewModal').modal('hide');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {

                	$('#myTable').DataTable().ajax.reload();


                }
            });
        

    });
</script>

@endpush