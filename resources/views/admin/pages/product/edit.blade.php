@extends('layouts.app')

@section('title', 'Edit Product')
@section('content')



    <form class="form-horizontal" method="POST" action="/product/update" enctype="multipart/form-data">
        {{--@if(session('success') || session('failed') || $errors->any())--}}
        <div class="row">
            <div class="col-12">

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('success')}}!</strong>
                    </div>
                @endif
                @if(session('failed'))
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('failed')}}!</strong>
                    </div>
                @endif
            </div>
        </div>
        {{--@endif--}}
        <div class="row">
            <div class="col-9">
                <div class="card-box">

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">

                                <div class="form-group row">
                                    <label>Product Title</label>
                                    <input type="text" class="form-control" name="productTitle" value="{{$product->productTitle}}">
                                    <input type="hidden" class="form-control" name="productId" value="{{$product->productId}}">
                                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                                </div>

                                <div class="form-group row">
                                    <label>Product Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="productDescription" rows="15">{{$product->productDescription}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label>Product Title</label>
                                    <input type="text" class="form-control" name="productTitle2" value="{{$product->productTitle2}}">
                                </div>

                                <div class="form-group row">
                                    <label>Product Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="productDescription2" rows="15">{{$product->productDescription2}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->

            <div class="col-3">
                <div class="card-box">
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">
                                <div class="form-group row">
                                    <label>Category</label>

                                    <select class="form-control" name="categoryId">
                                        @foreach($category as $cat)
                                            <option value="{{$cat->categoryId}}">{{$cat->categoryName}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label>Product Image</label>

                                    <input type="file" class="form-control" name="image">
                                    <input type="text" class="form-control" value="{{$product->productImage}}" name="image">
                                </div>

                                <div class="form-group row">
                                    <label>Product Image2</label>

                                    <input type="file" class="form-control" name="image2">
                                    <input type="text" class="form-control" value="{{$product->productImage2}}" name="image2">
                                </div>

                                <div class="form-group row">
                                    <label>Product File</label>

                                    <input type="file" class="form-control" name="image3">
                                    <input type="text" class="form-control" value="{{$product->productFile}}" name="image3">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->

        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <div class="text-center p-20">
                    <button type="submit" class="btn w-sm btn-white waves-effect">Cancel</button>
                    <button type="submit" class="btn w-sm btn-default waves-effect waves-light">Save</button>
                    <button type="submit" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </form>
    <!-- end row -->


@endsection