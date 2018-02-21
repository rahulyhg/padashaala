@extends('layouts.app')

@section('title', 'Team')

@section('content')
	<section class="">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="text-center">Team Members</h3>
				<table class="table table-striped" id="teamsTable" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>SN</th>
							<th>Image</th>
							<th>Name</th>
							<th>Position</th>
							<th>Status</th>
							<th>Date</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody></tbody>
					<tfoot>
						<tr>
							<th>SN</th>
							<th>Image</th>
							<th>Name</th>
							<th>Position</th>
							<th>Status</th>
							<th>Date</th>
							<th>Actions</th>
						</tr>
					</tfoot>
				</table>	
			</div>
		</div>
	</section>
@endsection

@push('scripts')
<script>
	$(document).ready(function() {
		$('#teamsTable').DataTable({
			// columnDefs: [
   //                  {"width": "2%", "targets": 0},
   //                  {"width": "5%", "targets": 1},
   //                  {"width": "28%", "targets": 2}
   //              ],
   				aaSorting: [0,'desc'],
                processing: true,
                serverSide: true,
                columns: [
                    { 
                    	"data": "id",
	                   render: function (data, type, row, meta) {
	                       return meta.row + meta.settings._iDisplayStart + 1;
	                   }
	               	},
                    {data: 'image', 
		                orderable: false, 
		                render: function (data, type, row) {
		                    return '<img src="' + data + '" style="width:50%;height:auto;">';
		                }
		            },
                    {
                        data: 'name',
                        render: function (data, type, row) {
                            return '<a href="' + '/' + row.id + '/edit' + '">' + data + '</a>';
                        }
                    },
                    {data: 'position', name: 'position'},
                    {
                        data: 'status',
                        render: function (data, type, row) {
                            var intData = parseInt(data);
                            return intData !== 1 ? '<span class="label label-danger">Inactive</span>' : '<span class="label label-success">Active</span>';
                        }
                    },
                    {data: 'created_at',
                	},
                    {
                        data: 'id',
                        orderable: false,
                        render: function (data, type, row) {
                            var tempEditUrl = "{{ route('team.edit', ':id') }}";

                            tempEditUrl = tempEditUrl.replace(':id', data);

                            var actions = '';
                            actions += "<a href='" + tempEditUrl + "' class='btn btn-xs btn-default mr-5' style='margin-right:5px'><span class='lnr lnr-pencil'></span></a>";
                            actions += "<button type='submit' class='btn btn-xs btn-default btn-team-delete' data-id="+ row.id +"><span class='lnr lnr-trash'></span></button>";

                            return actions;
                        }
                    }
                ],
                ajax: '{{ route('teams.json') }}'
		});
	});
</script>
<script>
	$(document).on("click", ".btn-team-delete", function (e) {
        e.preventDefault();
       if (!confirm('Are you sure you want to delete?')) {
                return false;
            }
         var $this = $(this);
       
        var id = $this.attr('data-id');
     	var tempDeleteUrl = "{{ route('team.delete', ':id') }}";                               tempDeleteUrl = tempDeleteUrl.replace(':id', id);        
    
         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: tempDeleteUrl,
                data: id,
                beforeSend: function (data) {
                },
                success: function (data) {
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                	$('#teamsTable').DataTable().ajax.reload();
                }
            });
    });
</script>
@endpush