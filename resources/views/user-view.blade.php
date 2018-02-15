<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>show product</title>
	<!-- Latest compiled and minified CSS -->
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<div class="table-responsive">
		<table class="table-striped table-bordered table-hover" id="usertable">
			<thead>
				<tr>
					<th>ID</th>
					<th>First name</th>
					<th>Last Name</th>
					<th>User Name</th>
					<th>Phone</th>
					<th>Provider</th>
					<th>Email</th>
					<th>Created</th>
					<th>Updated</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>
	<script>
	$(document).ready(function(){
		$('#usertable').DataTable({
			processing: true,
            serverSide: true,
			columns: [
				{data: 'id', name: 'id'},
	    		{data: 'first_name', name: 'first_name'},
	    		{data: 'last_name', name: 'last_name'},
	    		{data: 'user_name', name: 'user_name'},
	    		{data: 'phone', name: 'phone'},
	    		{data: 'provider', name: 'provider'},
	    		{data: 'email', name: 'email'},
	    		{data: 'created_at', name: 'created_at'},
	    		{data: 'updated_at', name: 'updated_at'},
	    		{
                        data: 'id',
                        orderable: false,
                        render: function (data, type, row) {
                           
                            
                        var tempEditUrl = "{{ route('user.edit', ':id') }}"; tempEditUrl = tempEditUrl.replace(':id', data);

                            var actions = '';
                      
                            
                            actions += "<a href="+ tempEditUrl +" class='btn btn-xs btn-danger btn-edit' data-id=" + row.id + ">Edit</a>";
                            actions += "<button type='submit' class='btn btn-xs btn-danger btn-delete' data-id=" + row.id + ">Delete</button>";

                            return actions;
                        }
                    }
				
    		],
			ajax: '{{route('users.json')}}'

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
     	var tempDeleteUrl = "{{ route('user.delete', ':id') }}";                               tempDeleteUrl = tempDeleteUrl.replace(':id', id);        
         
    
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
                	$('#usertable').DataTable().ajax.reload();
                }
            });
        
    });
</script>
</body>
</html>