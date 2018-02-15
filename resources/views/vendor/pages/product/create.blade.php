@extends('vendor.layouts.app')
@section('title',"Add Product")
{{-- for_additional_stylesheet | only for this page --}}
@section('stylesheets')
@endsection
{{-- main_content --}}
@section('main-content')
<section class="content__box content__box--shadow">
    <div class="  details-of-orders">
        <span class="title">add products</span>
        <button class="btn btn-default pull-right">add new</button>
        <div class="clearfix"></div>
    </div>
</section>
<form action="{{Route('products.store')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <section class="content__box content__box--shadow">
        <div class="row">
            <div class="col-md-9">
                <section class="add-product__form--left">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#simple" aria-controls="simple" role="tab"
                            data-toggle="tab">simple product</a></li>
                            <li role="presentation"><a href="#group" aria-controls="group" role="tab" data-toggle="tab">group
                            product</a></li>
                            <li role="presentation"><a href="#variable" aria-controls="variable" role="tab"
                            data-toggle="tab">variable product</a></li>
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
                                        <input type="text" class="form-control" name="product_name" placeholder="Product title">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 sale--inline">
                                            <label class="col-sm-4 control-label">Price</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rs</span>
                                                    <input id="msg" type="text" class="form-control" name="product_price" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 sale--inline">
                                            <label class="col-sm-4 control-label">Sale Price</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rs</span>
                                                    <input id="msg" type="text" class="form-control" name="discount_percentage">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section class="description">
                                        <div class="title">short description</div>
                                        <textarea class="shortdescrip" name="short_description"></textarea>
                                    </section>
                                    <section class="description">
                                        <div class="title">long description</div>
                                        <textarea class="longdescrip" name="long_description"></textarea>
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
                <li><a data-toggle="tab" href="#specification">Specifiction</a></li>
                <li><a data-toggle="tab" href="#feature">Features</a></li>
                <li><a data-toggle="tab" href="#faqs">FAQS</a></li>
                <li><a data-toggle="tab" href="#seo">SEO</a></li>
                <li><a data-toggle="tab" href="#attributes">Attributes</a></li>
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
                                    <input min="0" class="form-control" name="stock_quantity" type="number">
                                </div>
                            </div>
                            <div class="form-group pad-20">
                                <label class="col-sm-3 control-label" for="stock_availability_status">Stock Availability</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="out_of_stock">
                                        <option value="1">In Stock</option>
                                        <option value="0">Out of Stock</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="specification" class="tab-pane fade">
                    
                    <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-specifications">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($product->specifications))
                                        @foreach($product->specifications as $specification)
                                            <tr data-row="{{ $loop->iteration }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="specifications[title][{{ $specification->id }}]"
                                                               value="{{ $specification->title }}"
                                                               class="form-control" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                    <input type="text" name="specifications[description][{{ $specification->id }}]"
                                                               value="{{ $specification->description }}"
                                                               class="form-control" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-xs btn-delete-specification"
                                                            data-specification="{{ $specification->id }}"><i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <button class="btn btn-danger btn-sm btn-add-specification">Add New</button>
                                        </th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                </div>
                <div id="feature" class="tab-pane fade">
                    <h3>Product Feature</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-features">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Features</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($product->features))
                                        @foreach($product->features as $feature)
                                            <tr data-row="{{ $loop->iteration }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="specifications[title][{{ $feature->id }}]"
                                                               value="{{ $feature->title }}"
                                                               class="form-control" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-xs btn-delete-feature"
                                                            data-specification="{{ $feature->id }}"><i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <button class="btn btn-danger btn-sm btn-add-feature">Add New</button>
                                        </th>
                                    </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="faqs" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-faqs">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-add-faq">Add New</a>
                                    </th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="seo" class="tab-pane fade">
                    <h3>Meta Keywords</h3>
                    <div class="tag--input">
                            <textarea value="" data-role="tagsinput" class="form-control" style="width: 100%;"></textarea>
                            <h6 class="help-block">write tags and press ',' to add it</h6>
                        </div>
                    <h3>Meta Content</h3>
                    <textarea class="longdescrip" name="editordata"></textarea>
                </div>
                <div id="attributes" class="tab-pane fade">
                    <div class="form-group pad-20">
                                <label class="col-sm-3 control-label" for="inputManageStock">Enable Color</label>
                                <div class="col-sm-9">
                                    <label class="flex">
                                        <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false">
                                            <input id="chkcolor" name="track_stock" type="checkbox" value="1">
                                        </div>
                                    </label>
                                </div>
                            </div>
                    <div class="product-color" id="colordiv" style="display: none;">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-colors">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Color Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-add-color">Add New</a>
                                        </th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-group pad-20">
                                <label class="col-sm-3 control-label" for="inputManageStock">Enable Size</label>
                                <div class="col-sm-9">
                                    <label class="flex">
                                        <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false">
                                            <input id="chksize" name="track_stock" type="checkbox" value="1">
                                        </div>
                                    </label>
                                </div>
                            </div>
                    <div class="product-size" id="sizediv" style="display: none;">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-sizes">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Product Size</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-add-size">Add New</a>
                                        </th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-group pad-20">
                                <label class="col-sm-3 control-label" for="inputManageStock">Enable Gender</label>
                                <div class="col-sm-9">
                                    <label class="flex">
                                        <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false">
                                            <input id="chkgender" name="track_stock" type="checkbox" value="1">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="simple__box--inline" id="genderdiv" style="display: none;">
                                        <label class="checkbox-inline"><input type="checkbox" value="">Male</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="">Female</label>
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
<script>
/**
* Generate random integer
*
* @returns {number}
*/
function generateRandomInteger() {
return Math.floor(Math.random() * 90000) + 10000;
}

jQuery(document).on('click', '.btn-delete-specification', function (e) {
e.preventDefault();
var $this = $(this);
$this.closest("tr").remove();
});
jQuery(document).on('click', '.btn-add-specification', function (e) {
e.preventDefault();
console.log('tgd');
var lastRow = $('table.table-specifications > tbody > tr').last().attr('data-row');
var counter = lastRow ? parseInt(lastRow) + 1 : 1;
var randomInteger = generateRandomInteger();
var newRow = jQuery('<tr data-row="' + counter + '">' +
    '<td>' + counter + '</td>' +
    '<td><input type="text" name="specifications[title][' + randomInteger + ']" class="form-control" required/></td>' +
    '<td><input type="text" name="specifications[description][' + randomInteger + ']" class="form-control" required/></td>' +
    '<td><button type="button" class="btn btn-danger btn-xs btn-delete-specification" data-specification=""><i class="fa fa-trash"></i></button></td>' +
'</tr>');
jQuery('table.table-specifications').append(newRow);
});

// Add feature
/**
* Generate random integer
*
* @returns {number}
*/
function generateRandomInteger() {
return Math.floor(Math.random() * 90000) + 10000;
}

jQuery(document).on('click', '.btn-delete-feature', function (e) {
e.preventDefault();
var $this = $(this);
$this.closest("tr").remove();
});
jQuery(document).on('click', '.btn-add-feature', function (e) {
e.preventDefault();
console.log('tgd');
var lastRow = $('table.table-features > tbody > tr').last().attr('data-row');
var counter = lastRow ? parseInt(lastRow) + 1 : 1;
var randomInteger = generateRandomInteger();
var newRow = jQuery('<tr data-row="' + counter + '">' +
    '<td>' + counter + '</td>' +
    '<td><input type="text" name="features[title][' + randomInteger + ']" class="form-control" required/></td>'  +
    '<td><button type="button" class="btn btn-danger btn-xs btn-delete-feature" data-feature=""><i class="fa fa-trash"></i></button></td>' +
'</tr>');
jQuery('table.table-features').append(newRow);
});


// Add FAQS
/**
* Generate random integer
*
* @returns {number}
*/
function generateRandomInteger() {
return Math.floor(Math.random() * 90000) + 10000;
}

jQuery(document).on('click', '.btn-delete-faq', function (e) {
e.preventDefault();
var $this = $(this);
$this.closest("tr").remove();
});
jQuery(document).on('click', '.btn-add-faq', function (e) {
e.preventDefault();
console.log('tgd');
var lastRow = $('table.table-faqs > tbody > tr').last().attr('data-row');
var counter = lastRow ? parseInt(lastRow) + 1 : 1;
var randomInteger = generateRandomInteger();
var newRow = jQuery('<tr data-row="' + counter + '">' +
    '<td>' + counter + '</td>' +
    '<td><input type="text" name="faqs[question][' + randomInteger + ']" class="form-control" required/></td>' +
    '<td><input type="text" name="faqs[answer][' + randomInteger + ']" class="form-control" required/></td>' +
    '<td><button type="button" class="btn btn-danger btn-xs btn-delete-faq" data-faq=""><i class="fa fa-trash"></i></button></td>' +
'</tr>');
jQuery('table.table-faqs').append(newRow);
});

// Add Size
/**
* Generate random integer
*
* @returns {number}
*/
function generateRandomInteger() {
return Math.floor(Math.random() * 90000) + 10000;
}

jQuery(document).on('click', '.btn-delete-size', function (e) {
e.preventDefault();
var $this = $(this);
$this.closest("tr").remove();
});
jQuery(document).on('click', '.btn-add-size', function (e) {
e.preventDefault();
console.log('tgd');
var lastRow = $('table.table-sizes > tbody > tr').last().attr('data-row');
var counter = lastRow ? parseInt(lastRow) + 1 : 1;
var randomInteger = generateRandomInteger();
var newRow = jQuery('<tr data-row="' + counter + '">' +
    '<td>' + counter + '</td>' +
    '<td><input type="text" name="sizes[title][' + randomInteger + ']" class="form-control" required/></td>'  +
    '<td><button type="button" class="btn btn-danger btn-xs btn-delete-size" data-size=""><i class="fa fa-trash"></i></button></td>' +
'</tr>');
jQuery('table.table-sizes').append(newRow);
});

// Add color
/**
* Generate random integer
*
* @returns {number}
*/
function generateRandomInteger() {
return Math.floor(Math.random() * 90000) + 10000;
}

jQuery(document).on('click', '.btn-delete-color', function (e) {
e.preventDefault();
var $this = $(this);
$this.closest("tr").remove();
});
jQuery(document).on('click', '.btn-add-color', function (e) {
e.preventDefault();
console.log('tgd');
var lastRow = $('table.table-colors > tbody > tr').last().attr('data-row');
var counter = lastRow ? parseInt(lastRow) + 1 : 1;
var randomInteger = generateRandomInteger();
var newRow = jQuery('<tr data-row="' + counter + '">' +
    '<td>' + counter + '</td>' +
    '<td><input type="text" name="colors[title][' + randomInteger + ']" class="form-control" required/></td>'  +
    '<td><button type="button" class="btn btn-danger btn-xs btn-delete-color" data-color=""><i class="fa fa-trash"></i></button></td>' +
'</tr>');
jQuery('table.table-colors').append(newRow);
});

$(function () {
        $("#chkcolor").click(function () {
            if ($(this).is(":checked")) {
                $("#colordiv").show();
            } else {
                $("#colordiv").hide();
            }
        });
        $("#chksize").click(function () {
            if ($(this).is(":checked")) {
                $("#sizediv").show();
            } else {
                $("#sizediv").hide();
            }
        });
        $("#chkgender").click(function () {
            if ($(this).is(":checked")) {
                $("#genderdiv").show();
            } else {
                $("#genderdiv").hide();
            }
        });
    });

</script>
@endpush