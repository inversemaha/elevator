@extends('layouts.app')

@section('title', 'Edit Feature')
@section('content')



    <form class="form-horizontal" method="POST" action="/feature/update" enctype="multipart/form-data">
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
                                    <label>Feature Title</label>
                                    <input type="text" class="form-control" name="featureTitle" value="{{$feature->featureTitle}}">
                                    <input type="hidden" class="form-control" name="featureId" value="{{$feature->featureId}}">
                                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                                </div>

                                <div class="form-group row">
                                    <label>Feature Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="featureDescription" rows="15">{{$feature->featureDescription}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label>Feature Title </label>
                                    <input type="text" class="form-control" name="featureTitle2" value="{{$feature->featureTitle2}}">
                                </div>

                                <div class="form-group row">
                                    <label>Feature Description </label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="featureDescription2" rows="15">{{$feature->featureDescription2}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label>Feature Title </label>
                                    <input type="text" class="form-control" name="featureTitle3" value="{{$feature->featureTitle3}}">
                                </div>

                                <div class="form-group row">
                                    <label>Feature Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="featureDescription3" rows="15">{{$feature->featureDescription3}}</textarea>
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
                                    <label>Product Name</label>

                                    <select class="form-control" name="productId">
                                        @foreach($product as $pro)
                                            <option value="{{$pro->productId}}">{{$pro->productTitle}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label>Feature Image</label>

                                    <input type="file" class="form-control" name="image">
                                    <input type="text" class="form-control" value="{{$feature->featureImage}}" name="image">
                                </div>

                                <div class="form-group row">
                                    <label>Feature File</label>

                                    <input type="file" class="form-control" name="image2">
                                    <input type="text" class="form-control" value="{{$feature->featureFile}}" name="image2">
                                </div>

                                <div class="form-group row">
                                    <label>Feature Image</label>

                                    <input type="file" class="form-control" name="image3">
                                    <input type="text" class="form-control" value="{{$feature->featureImage2}}" name="image3">
                                </div>

                                <div class="form-group row">
                                    <label>Feature File</label>

                                    <input type="file" class="form-control" name="image4">
                                    <input type="text" class="form-control" value="{{$feature->featureFile2}}" name="image4">
                                </div>

                                <div class="form-group row">
                                    <label>Feature Image</label>

                                    <input type="file" class="form-control" name="image5">
                                    <input type="text" class="form-control" value="{{$feature->featureImage3}}" name="image5">
                                </div>

                                <div class="form-group row">
                                    <label>Feature File</label>

                                    <input type="file" class="form-control" name="image6">
                                    <input type="text" class="form-control" value="{{$feature->featureFile3}}" name="image6">
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