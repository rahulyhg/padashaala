@extends('vendor.layouts.app')

@section('title',"Setting")

{{-- for_additional_stylesheet | only for this page --}}
@section('stylesheets')

<style>
.tab-custome-style>li.active>a{
    border-top: 4px solid #f7ca18 !important;
}
</style>

@endsection

	{{-- main_content --}}
	
		@section('main-content')
			<div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10">
                    <h2>Setting</h2>
                    <ul class="nav nav-tabs tab-custome-style">
                        <li class="active"><a data-toggle="tab" href="#home">General</a></li>
                        <li><a data-toggle="tab" href="#menu1">Social Links</a></li>
                        <li><a data-toggle="tab" href="#menu2">SEO</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <legend>General</legend>
                            <form action="" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <fieldset>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Shop Name *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input type="text" name="shop_name" class="form-control" placeholder="@Your Shop" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Shop Address *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input type="text" name="shop_address" class="form-control" placeholder="@Your Address" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Primary Email *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input type="email" name="email1" class="form-control" placeholder="@Your Primary email" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Secondary Email *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input type="email" name="email2" class="form-control" placeholder="@Your Secondary email" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Primary Phone *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input type="tel" name="phone1" class="form-control" placeholder="@Your Primary Phone Number" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Secondary Phone *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input type="tel" name="phone2" class="form-control" placeholder="@Your Secondary Phone Number" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Shop Description *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-edit"></i></span>
                                            <textarea name="shop_description" cols="30" rows="10" class="form-control" placeholder="@Type here..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->
                                
                                </fieldset>
                            </form>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <legend>Social Links</legend>
                            <form action="" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <fieldset>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Facebook *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fab fa-facebook-f"></i></span>
                                            <input type="text" name="facebook" class="form-control" placeholder="@Your Facebook Page Link" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Google Plus Link*</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fab fa-google-plus-g"></i></span>
                                            <input type="text" name="google_plus" class="form-control" placeholder="@Your Google Plus Link" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Twitter Link*</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fab fa-twitter"></i></span>
                                            <input type="text" name="twitter" class="form-control" placeholder="@Your Twitter Link" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Instagram Link *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fab fa-instagram"></i></span>
                                            <input type="text" name="instagram" class="form-control" placeholder="@Your Instagram Page Link" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->
                                </fieldset>
                            </form>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <legend>Social Links</legend>
                            <form action="" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <fieldset>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Keywords *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                            <input type="text" name="keywords" class="form-control" placeholder="@page meta keywords" />
                                        </div>
                                    </div>
                                </div>

                                <!-- text input -->

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Description *</label>
                                    <div class="col-md-9 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-keyboard"></i></span>
                                            <textarea name="description" cols="30" rows="10" class="form-control" placeholder="@Meta description..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- text input -->

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		@endsection

{{-- for_additional_scripts | only for this page --}}
@push('scripts')

@endpush