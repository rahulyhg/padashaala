@extends('layouts.app')

@section('content')
            <section class="admin__breadcrumb display--none">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
            </section>

            <section class="content__box content__box--shadow">
                <div class="  details-of-orders">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <section class="mini__box">
                                <ul class="liststyle--none">
                                    <li><a href="" class="allProducts">All (<span>{{ $all }}</span>)</a></li>
                                    <li><a href="" class="pendingProducts">Pending (<span>{{ $pending }}</span>)</a></li>
                                    <li><a href="" class="approvedProducts">Approved (<span>{{ $approved }}</span>)</a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <span class=" btn-unlimited">Product limit:Unlimited</span>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="mini__box text-right">
                                <a href="{{ route('products.index') }}" class="btn btn-default" title="add new">New</a>
                                <a href="{{ route('products.stock') }}" class="btn btn-default" title="stock manager"><span class="lnr lnr-database"></span></a>
                                <button class="btn btn-default" title="products import"><span class="lnr lnr-download"></span></button>
                                <button class="btn btn-default" title="products export"><span class="lnr lnr-upload"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content__box content__box--shadow">
                <table id="productTable" class="table table-striped example" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Sn</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Sale Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </section>
@endsection

@push('scripts')
<script>
    $(document).ready(function($) {
        $("#productTable").DataTable({
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
                {data: 'product_name',
                    render: function (data, type, row) {
                            var productViewUrl = "{{ route('products.edit', ':id') }}";

                            productViewUrl = productViewUrl.replace(':id', row.id);

                            return '<a href="' + productViewUrl + '">' + data + '</a>';
                        }
                },
                {data: 'slug', name: 'slug'},
                {data: 'product_price', name: 'product_price'},
                {data: 'discount_percentage', name: 'discount_percentage'},
                {data: 'sale_price',
                    render: function(data, type, row) {
                        var price = parseInt(row.product_price);
                        var discount = parseInt(row.discount_percentage);
                        var sale_price = (price - ((discount / 100) * price)).toFixed(2);
                        return sale_price;
                    }
                },
                {data: 'approved', name: 'approved',
                    render: function(data, type, row) {
                        return data === '1' ? '<span class="label label-success">Approved</span>' : '<span class="label label-danger">Pending</span>';
                    }
                },
                {
                    data: 'id',
                    orderable: false,
                    render: function (data, type, row) {
                        var tempEditUrl = "{{ route('products.edit', ':id') }}"
                        tempEditUrl = tempEditUrl.replace(':id', data);
                        var actions = '';
                        actions += "<a href=" + tempEditUrl + " class='btn btn-xs btn-default btn-products-edit' data-id=" + row.id + " style='margin-right:5px'><span class='lnr lnr-pencil'></span></a>";
                        actions += "<button type='submit' class='btn btn-xs btn-default btn-products-delete' data-id=" + row.id + "><span class='lnr lnr-trash'></span></button>";

                        return actions;
                    }
                },
                {data: 'created_at', name: 'created_at',
                    // render: function(data, type, row) {
                    //     var $created_at = data;
                    //     var date = \Carbon\Carbon::parse($created_at)->format('F j, Y g:i a' );
                    //     return  date;
                    // }
                }
            ],
            ajax: '{{route('products.json')}}'
        });
    });
</script>
<script>
    $(document).on("click", ".pending", function(e) {
        e.preventDefault();
        var table = $('#productTable').DataTable( {
            ajax: "products2.json"
        } );
 
        table.ajax.url( 'products2.json' ).load();
    });
</script>
<script>
    $(document).on("click", ".btn-products-add", function(e) {
        e.preventDefault();
            var params   = $('#products').serialize();
            // var formData = new FormData($('#vendorDetails')[0]);
            //     formData.append('image', $('input[type=file]')[0].files[0]);

            // $.each(params, function(i, val) {
            //     formData.append(val.name, val.value);
            // });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('products.store')  }}",
                // contentType: false,
                // processData: false,
                // cache: false,
                data: params,
                beforeSend: function (data) {
                },
                success: function (data) {
                        sweetAlert('success', 'Success');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                     $("#products")[0].reset(),
                    $('#productTable').DataTable().ajax.reload();
                }
            });
        });
</script>
<script>
    $(document).on("click", ".btn-products-delete", function (e) {
        e.preventDefault();
       if (!confirm('Are you sure you want to delete?')) {
                return false;
            }
        var $this = $(this);
        var id = $this.attr('data-id');
        var tempDeleteUrl = "{{ route('products.delete', ':id') }}";
        tempDeleteUrl = tempDeleteUrl.replace(':id', id);        
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
                    sweetAlert('success', 'Success');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {
                    $('#productTable').DataTable().ajax.reload();
                }
            });
    });
</script>
<script>
    $(document).on("click", ".btn-update-product", function (e) {
        e.preventDefault();
        var params = $('#updateProducts').serialize();
        console.log(params);
            // var formData = new FormData($('#updateVendorDetails')[0]);
            // if($('#image').val()) {
            //     formData.append('image', $('input[type=file]')[0].files[0]);
            // }

            // $.each(params, function(i, val) {
            //     formData.append(val.name, val.value);
            // });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "{{ route('products.update') }}",
                // contentType: false,
                // processData: false,
                // cache: false,
                data: params,
                beforeSend: function (data) {
                },
                success: function (data) {
                    sweetAlert('success', 'Success');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                },
                complete: function () {

                    $('#productTable').DataTable().ajax.reload();
                }
            });
    });
</script>
@endpush

