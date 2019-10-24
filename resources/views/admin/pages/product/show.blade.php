@extends('layouts.app')

@section('title', 'Show All Products')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>View All Products</h4>

                    </div>
                    <div class="col-sm-6">
                        <a href="/product/create" class="btn btn-sm btn-primary pull-right"><i
                                    class="md md-add"></i> Add New</a>
                    </div>
                </div>

                <hr>

                @if(session('success'))
                    <div class="alert alert-success">
                        <strong></strong> {{session('success')}}
                    </div>
                @endif
                @if(session('decline'))
                    <div class="alert alert-danger">
                        <strong></strong> {{session('failed')}}
                    </div>
                @endif

                @if(isset($product))
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Product Title</th>
                            <th>Product Description</th>
                            <th>Product Image</th>
                            <th>Product Title 2</th>
                            <th>Product Description 2</th>
                            <th>Product Image 2</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($product as $prod)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$prod->categoryName}}</td>
                                <td>{{$prod->productTitle}}</td>
                                <td>{!! $prod->productDescription !!}</td>
                                <td><img src="/images/product/{{$prod->productImage}}" class="img-rounded"
                                         alt="Product image" width="150" height="80"></td>
                                <td>{{$prod->productTitle2}}</td>
                                <td>{!! $prod->productDescription2 !!}</td>
                                <td><img src="/images/product/{{$prod->productImage2}}" class="img-rounded"
                                         alt="Product image" width="150" height="80"></td>
                                <td>
                                    <button type="button"
                                            class="btn btn-sm btn-danger dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Action<span
                                                class="caret"></span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="/product/edit/{{$prod->productId}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        <a class="dropdown-item"
                                           href="/product/destroy/{{$prod->productId}}"><i
                                                    class="fa fa-remove"></i> Delete</a>
                                        {{--<a class="dropdown-item"
                                           href="/mp/details/{{$mp->mp_id}}"><i
                                                    class="fa  fa-expand"></i> Details</a>--}}
                                    </div>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>


                @endif
            </div>
            <!-- end row -->


        </div> <!-- end card-box -->
    </div><!-- end col -->
    <!-- end row -->

@endsection