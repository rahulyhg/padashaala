@extends('layouts.app')

@section('title', 'Team')

@section('content')
	<section>
		<div class="row">
			<h3 class="text-center">Add New Member</h3>
			{!! Form::open(['files' => true, 'class' => '', 'id' => 'teamSubmit']) !!}
            @include('team.form', ['submitButtonText' => 'Submit'])
            {!! Form::close() !!}
		</div>
	</section>
@endsection

@push('scripts')
<script>
	$(document).on("click", ".btn-team-add", function (e) {
        e.preventDefault();
            var params   = $('#teamSubmit').serializeArray();
            var formData = new FormData($('#teamSubmit')[0]);
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
                url: "{{ route('team.store')  }}",
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
                	 $("#teamSubmit")[0].reset(),
                	$('#teamsTable').DataTable().ajax.reload();
                }
            });
    });
</script>
@endpush