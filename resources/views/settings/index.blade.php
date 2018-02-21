@extends('layouts.app')
@section('title', 'Settings')

@section('content')
	<!-- Content Header (Page header) -->
    {{-- <section class="content-header">
        <h3>Configuration</h3>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Settings</li>
        </ol>
    </section> --}}

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">

                <form action="{{ route('settings.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Settings</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                                    <li><a href="#home" data-toggle="tab">Home</a></li>
                                    <li><a href="#about" data-toggle="tab">About</a></li>
                                    <li><a href="#social" data-toggle="tab">Social</a></li>
                                    <li><a href="#tax" data-toggle="tab">Tax</a></li>
                                    <li><a href="#footer" data-toggle="tab">Footer</a></li>
                                    <li><a href="#seo" data-toggle="tab">SEO</a></li>
                                </ul>
                                <div class="tab-content" style="margin-top: 15px;">
                                    @include('settings.general')
                                    {{-- @include('settings.home') --}}
                                    @include('settings.about')
                                    @include('settings.social')
                                    @include('settings.tax')
                                    @include('settings.footer')
                                    @include('settings.seo')
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-danger pull-right">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection