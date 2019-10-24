@extends('layouts.app')

@section('title', 'Add Services')
@section('content')

    <style>
        .modal-footer{
            display: none;
        }
    </style>

    <form class="form-horizontal" method="POST" action="/service/store" enctype="multipart/form-data">
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
                                    <label>Service Title</label>
                                    <input type="text" class="form-control" name="serviceTitle" required>
                                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                                </div>
                                <div class="form-group row">
                                    <label>Service Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="serviceDescription"
                                                  rows="15" style="height: 200px;" required></textarea>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label>Maintenance Title</label>
                                    <input type="text" class="form-control" name="maintenanceTitle" required>
                                </div>
                                <div class="form-group row">
                                    <label>Maintenance Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="maintenanceDescription"
                                                  rows="15" style="height: 200px;" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label>Consultant Title</label>
                                    <input type="text" class="form-control" name="consultantTitle" required>
                                </div>
                                <div class="form-group row">
                                    <label>Consultant Description</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control summernote" name="consultantDescription"
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
                                    <label>Service Image</label>

                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="form-group row">
                                    <label>Maintenance Image</label>

                                    <input type="file" class="form-control" name="image2" required>
                                </div>
                                <div class="form-group row">
                                    <label>Consultant Image</label>

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










