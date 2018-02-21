@extends('layouts.app')

@section('content')
	<section>
		<div class="row">
			<div class="col-xs-12" id="test">
				<h3>Edit Testimonial</h3>
				{!! Form::model($testimonials, ['method' => 'POST', 'files' => true, 'id' => 'testimonialUpdate']) !!}
				@include('testimonials.form', ['submitButtonText' => 'Update'])
				{!! Form::close() !!}
			</div>
		</div>
	</section>
@endsection

@push('scripts')
<script>
	$(document).on("click", ".btn-testimonial-update", function (e) {
        e.preventDefault();
        var params   = $('#testimonialUpdate').serializeArray();
        console.log(params);
            var formData = new FormData($('#testimonialUpdate')[0]);
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
                url: "{{ route('testimonials.update', $testimonials->id) }}",
                contentType: false,
                processData: false,
                cache: false,
                data: formData,
                beforeSend: function (data) {
                },
                success: function (data) {
                	window.location.href = "{{ route('testimonials.index') }}";
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                	
                }
            });
    });
</script>
@endpush