@extends('layouts.app')

@section('content')
	<section>
		<div class="row">
			<h3 class="text-center">Add New Testimonial</h3>
			<div class="col-xs-12">
				{!! Form::open([ 'files' => true, 'id' => 'testimonialSubmit']) !!}
				@include('testimonials.form', ['submitButtonText' => 'Submit'])
				{!! Form::close() !!}
			</div>
		</div>
	</section>
@endsection

@push('scripts')
<script>
	$(document).on("click", ".btn-testimonial-add", function (e) {
        e.preventDefault();
            var params   = $('#testimonialSubmit').serializeArray();
            var formData = new FormData($('#testimonialSubmit')[0]);
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
                url: "{{ route('testimonials.store')  }}",
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
                	 $("#testimonialSubmit")[0].reset(),
                	$('#testimonialsTable').DataTable().ajax.reload();
                }
            });
    });
</script>
@endpush