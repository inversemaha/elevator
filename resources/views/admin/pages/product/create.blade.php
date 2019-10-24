@extends('layouts.app')

@section('title', 'Add Product')
@section('content')

    <style>
        .modal-footer{
            display: none;
        }
    </style>

    <form class="form-horizontal" method="POST" action="/product/store" enctype="multipart/form-data">
        {{--@if(session('success') || session('failed') || $errors->any())--}}
        <div class="row">
            <div class="col-12">

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
                                    <input type="text" class="form-control" name="productTitle" required>
                                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                                </div>
                                <div class="form-group row">
                                    <label>Product Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="productDescription"
                                                  rows="15" style="height: 200px;" required></textarea>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label>Product Title </label>
                                    <input type="text" class="form-control" name="productTitle2" required>
                                </div>
                                <div class="form-group row">
                                    <label>Product Description </label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="productDescription2"
                                                  rows="15" style="height: 200px;" required></textarea>
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
                    <div class="form-group row">
                        <button type="submit" class="btn btn-block w-sm btn-success waves-effect waves-light">Publish
                        </button>
                    </div>
                    <hr style="margin-bottom: 0px">

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">
                                <div class="form-group row">
                                    <label>Category</label>
                                    @if(isset($Category))

                                        @if(count($Category)<=0)
                                            <a href="/category/create" class="btn btn-sm btn-primary pull-right"><i
                                                        class="md md-add"></i> Add New</a>
                                        @else
                                            <select name="categoryId" class="form-control" id="categoryId"
                                                    required="true">
                                                <option>Select A Category First</option>
                                                @foreach( $Category as $Cat)
                                                    <option value="{{ $Cat->categoryId}}">
                                                        {{ $Cat->categoryName }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        @endif

                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label>Product Image</label>

                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="form-group row">
                                    <label>Product Image</label>

                                    <input type="file" class="form-control" name="image2" required>
                                </div>
                                <div class="form-group row">
                                    <label>Product File</label>

                                    <input type="file" class="form-control" name="image3" required>
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
                <div class="text-center p-20">
                </div>
            </div>
        </div>
    </form>
    <!-- end row -->

@endsection










