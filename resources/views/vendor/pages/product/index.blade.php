@extends('vendor.layouts.app')

@section('title',"Product")

{{-- for_additional_stylesheet | only for this page --}}
@section('stylesheets')

@endsection

	{{-- main_content --}}
	
		@section('main-content')
			<section class="content__box content__box--shadow">
                <div class="  details-of-orders">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <section class="mini__box">
                                <ul class="liststyle--none">
                                    <li><a href="">all (<span>4</span>)</a></li>
                                    <li><a href="">pending (<span>4</span>)</a></li>
                                    <li><a href="">published (<span>4</span>)</a></li>
                                    <li><a href="">draft (<span>4</span>)</a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <span class=" btn-unlimited">Product limit:Unlimited</span>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="mini__box text-right">
                                <button class="btn btn-default" title="add new">New</button>
                                <button class="btn btn-default" title="stock manager"><span class="lnr lnr-database"></span></button>
                                <button class="btn btn-default" title="products import"><span class="lnr lnr-download"></span></button>
                                <button class="btn btn-default" title="products export"><span class="lnr lnr-upload"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content__box content__box--shadow">
                <table id="example" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Sn</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th><i class="fa fa-eye"></i>

                        </th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><span class="lnr lnr-picture"></span></td>
                        <td><a href="">System Architect</a></td>
                        <td><span class="label label-success">Published</span></td>
                        <td><span class="view--no">4</span></td>
                        <td>February 6, 2018</td>
                        <td>
                            <button class="btn btn-default btn-xs " title='edit'><span class="lnr lnr-pencil"></span></button>
                            <button class="btn btn-default btn-xs " title='featured'><span class="lnr lnr-star-empty"></span></button>
                            <button class="btn btn-default btn-xs " title='view'><i class="fa fa-eye"></i></button>
                            <button class="btn btn-default btn-xs " title='delete'><span class="lnr lnr-trash"></span></button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><span class="lnr lnr-picture"></span></td>
                        <td><a href="">System Architect</a></td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td><span class="view--no">8</span></td>
                        <td>February 6, 2018</td>
                        <td>
                            <button class="btn btn-default btn-xs " title='edit'><span class="lnr lnr-pencil"></span></button>
                            <button class="btn btn-default btn-xs " title='featured'><span class="lnr lnr-star-empty"></span></button>
                            <button class="btn btn-default btn-xs " title='view'><i class="fa fa-eye"></i></button>
                            <button class="btn btn-default btn-xs " title='delete'><span class="lnr lnr-trash"></span></button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td><span class="lnr lnr-picture"></span></td>
                        <td><a href="">System Architect</a></td>
                        <td><span class="label label-primary">Draft</span></td>
                        <td><span class="view--no">1</span></td>
                        <td>March 6, 2018</td>
                        <td>
                            <button class="btn btn-default btn-xs " title='edit'><span class="lnr lnr-pencil"></span></button>
                            <button class="btn btn-default btn-xs " title='featured'><span class="lnr lnr-star-empty"></span></button>
                            <button class="btn btn-default btn-xs " title='view'><i class="fa fa-eye"></i></button>
                            <button class="btn btn-default btn-xs " title='delete'><span class="lnr lnr-trash"></span></button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </section>
		@endsection

{{-- for_additional_scripts | only for this page --}}
@push('scripts')

@endpush