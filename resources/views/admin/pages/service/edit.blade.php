@extends('layouts.app')

@section('title', 'Edit Services')
@section('content')



    <form class="form-horizontal" method="POST" action="/service/update" enctype="multipart/form-data">
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
                                    <label>Service Title</label>
                                    <input type="text" class="form-control" name="serviceTitle" value="{{$services->serviceTitle}}">
                                    <input type="hidden" class="form-control" name="serviceId" value="{{$services->serviceId}}">
                                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                                </div>

                                <div class="form-group row">
                                    <label>Service Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="serviceDescription" rows="15">{{$services->serviceDescription}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label>Maintenance Title </label>
                                    <input type="text" class="form-control" name="maintenanceTitle" value="{{$services->maintenanceTitle}}">
                                </div>

                                <div class="form-group row">
                                    <label>Maintenance Description </label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="maintenanceDescription" rows="15">{{$services->maintenanceDescription}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label>Consultant Title </label>
                                    <input type="text" class="form-control" name="consultantTitle" value="{{$services->consultantTitle}}">
                                </div>

                                <div class="form-group row">
                                    <label>Consultant Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="consultantDescription" rows="15">{{$services->consultantDescription}}</textarea>
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
                                    <label>Service Image</label>

                                    <input type="file" class="form-control" name="image">
                                    <input type="text" class="form-control" value="{{$services->serviceImage}}" name="image">
                                </div>

                                <div class="form-group row">
                                    <label>Maintenance Image</label>

                                    <input type="file" class="form-control" name="image2">
                                    <input type="text" class="form-control" value="{{$services->maintenanceImage}}" name="image2">
                                </div>

                                <div class="form-group row">
                                    <label>Consultant Image</label>

                                    <input type="file" class="form-control" name="image3">
                                    <input type="text" class="form-control" value="{{$services->consultantImage}}" name="image3">
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