@extends('layouts.app')

@section('title', 'Show All Features')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>View All Products</h4>

                    </div>
                    <div class="col-sm-6">
                        <a href="/feature/create" class="btn btn-sm btn-primary pull-right"><i
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

                @if(isset($feature))
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Feature Name</th>
                            {{--<th>Feature Description</th>--}}
                            <th>Feature Image</th>
                            <th>Feature Title 2</th>
                            {{--<th>Feature Description 2</th>--}}
                            <th>Feature Image 2</th>
                            <th>Feature Title 3</th>
                            {{--<th>Feature Description 3</th>--}}
                            <th>Feature Image 3</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($feature as $fea)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$fea->productTitle}}</td>
                                <td>{{$fea->featureTitle}}</td>
                                {{--<td>{!! $fea->featureDescription !!}</td>--}}
                                <td><img src="/images/feature/{{$fea->featureImage}}" class="img-rounded"
                                         alt="Feature image" width="150" height="80"></td>
                                <td>{{$fea->featureTitle2}}</td>
                                {{--<td>{!! $fea->featureDescription2 !!}</td>--}}
                                <td><img src="/images/feature/{{$fea->featureImage2}}" class="img-rounded"
                                         alt="Feature image" width="150" height="80"></td>
                                <td>{{$fea->featureTitle3}}</td>
                                {{--<td>{!! $fea->featureDescription3 !!}</td>--}}
                                <td><img src="/images/feature/{{$fea->featureImage3}}" class="img-rounded"
                                         alt="Feature image" width="150" height="80"></td>
                                <td>
                                    <button type="button"
                                            class="btn btn-sm btn-danger dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Action<span
                                                class="caret"></span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="/feature/edit/{{$fea->featureId}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        <a class="dropdown-item"
                                           href="/feature/destroy/{{$fea->featureId}}"><i
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