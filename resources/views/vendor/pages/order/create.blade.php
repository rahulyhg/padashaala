@extends('vendor.layouts.app')
@section('title',"Add Order")
{{-- for_additional_stylesheet | only for this page --}}
@section('stylesheets')
@endsection
{{-- main_content --}}

@section('main-content')
<section class="content__box content__box--shadow">
    <div class="  details-of-orders">
        <span class="title">add order</span>
        <button class="btn btn-default pull-right">add new</button>
        <div class="clearfix"></div>
    </div>
</section>
<form action="add-product__form">
    <section class="content__box content__box--shadow">
        <div class="row">
            <div class="col-md-9">
                <section class="add-product__form--left">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#simple" aria-controls="simple" role="tab"
                            data-toggle="tab">simple order</a></li>
                            <li role="presentation"><a href="#group" aria-controls="group" role="tab" data-toggle="tab">group
                            order</a></li>
                            <li role="presentation"><a href="#variable" aria-controls="variable" role="tab"
                            data-toggle="tab">variable order</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="simple">
                                <section class="simple__box">
                                    <div class="simple__box--inline">
                                        <label class="checkbox-inline"><input type="checkbox" value="">virtual</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="">catelog</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="">downloadable</label>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Product title">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 sale--inline">
                                            <label class="col-sm-4 control-label">Price</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rs</span>
                                                    <input id="msg" type="text" class="form-control" name="msg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 sale--inline">
                                            <label class="col-sm-4 control-label">Sale Price</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rs</span>
                                                    <input id="msg" type="text" class="form-control" name="msg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section class="description">
                                        <div class="title">short description</div>
                                        <textarea class="shortdescrip" name="editordata"></textarea>
                                    </section>
                                    <section class="description">
                                        <div class="title">long description</div>
                                        <textarea class="longdescrip" name="editordata"></textarea>
                                    </section>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="group">
                                <section class="simple__box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Product title">
                                    </div>
                                    <div class="row">
                                        <section class="description">
                                            <div class="title">short description</div>
                                            <textarea class="shortdescrip" name="editordata"></textarea>
                                        </section>
                                        <section class="description">
                                            <div class="title">long description</div>
                                            <textarea class="longdescrip" name="editordata"></textarea>
                                        </section>
                                    </div>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="variable">
                                <section class="simple__box">
                                    <div class="simple__box--inline">
                                        <label class="checkbox-inline"><input type="checkbox" value="">catelog</label>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Product title">
                                    </div>
                                    <div class="row">
                                        <section class="description">
                                            <div class="title">short description</div>
                                            <textarea class="shortdescrip" name="editordata"></textarea>
                                        </section>
                                        <section class="description">
                                            <div class="title">long description</div>
                                            <textarea class="longdescrip" name="editordata"></textarea>
                                        </section>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-3">
                <section class="add-product__form--right">
                    <div class="category__box">
                        <div class="title">category</div>
                        <div class="simple__box">
                            <div class="checkbox">
                                <label><input type="checkbox" value="">uncategorized</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">catelog</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">downloadable</label>
                            </div>
                        </div>
                        <div class="add_more">
                            <a href="javascript:void(0)">
                                <i class="fa fa-plus-circle " style="margin-right: 5px;"></i>add more category
                            </a>
                            <div class="form-group add_more-category display--none ">
                                <input type="text" class="form-control margin__bottom" >
                                <select  class="form-control margin__bottom ">
                                    <option value="0" selected="selected">— Parent category —</option>
                                    <option class="level-0" value="23">Food</option>
                                    <option class="level-1" value="27">&nbsp;&nbsp;&nbsp;sdfsdfsdf</option>
                                    <option class="level-0" value="24">Travel</option>
                                    <option class="level-0" value="26">Uncategorized</option>
                                </select>
                                <button type="button" class="btn btn-primary ">Add</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tag__box">
                        <div class="title">tags</div>
                        <div class="tag--input">
                            <input type="text" value="" data-role="tagsinput" class="form-control"/>
                            <h6 class="help-block">write tags and press ',' to add it</h6>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="content__box content__box--shadow">
        <div class="product--info">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#inventory">inventory</a></li>
                <li><a data-toggle="tab" href="#attributes">attributes</a></li>
                <li><a data-toggle="tab" href="#linked">linked</a></li>
                <li><a data-toggle="tab" href="#advanced">advanced</a></li>
                <li><a data-toggle="tab" href="#address">address</a></li>
                <li><a data-toggle="tab" href="#wholesale">wholesale price</a></li>
            </ul>
            <div class="tab-content">
                <div id="inventory" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">SKU</span>
                                <input id="sku" type="number" class="form-control" name="sku" placeholder="Additional Info">
                            </div>
                            <div class="form-group pad-20">
                                <label class="col-sm-3 control-label" for="inputManageStock">Manage Stock</label>
                                <div class="col-sm-9">
                                    <label class="flex">
                                        <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false" >
                                            <input class="track-stock minimal-red" name="track_stock" type="checkbox" value="1" >
                                        </div>
                                        Enable stock management
                                    </label>
                                </div>
                            </div>
                            <div class="form-group stock-qty pad-20" style="display:none">
                                <label class="col-sm-3 control-label" for="qty">Stock Qty</label>
                                <div class="col-sm-9">
                                    <input min="0" class="form-control" name="stock_qty" type="number">
                                </div>
                            </div>
                            <div class="form-group pad-20">
                                <label class="col-sm-3 control-label" for="stock_availability_status">Stock Availability</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="in_stock">
                                        <option value="1">In Stock</option>
                                        <option value="0">Out of Stock</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="attributes" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                </div>
                <div id="linked" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="advanced" class="tab-pane fade">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Disable product</label>
                            </div>
                            <div class="col-md-9 flex">
                                <input type="checkbox">
                                <span>Disable product price</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Featured product</label>
                            </div>
                            <div class="col-md-9 flex">
                                <input type="checkbox">
                                <span>Enable as featured product</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="address" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="wholesale" class="tab-pane fade">
                    <h3>Wholesale prices</h3>
                    <div class="input-group">
                        <span class="input-group-addon">wholesale price</span>
                        <input id="msg" type="number" class="form-control" name="msg" placeholder="Additional Info">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content__box content__box--shadow submit__box">
        <button type="submit" class="btn btn-primary pull-right">submit</button>
        <div class="clearfix"></div>
    </section>
</form>
@endsection
{{-- for_additional_scripts | only for this page --}}
@push('scripts')
@endpush