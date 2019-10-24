@extends('layouts.app')

@section('title', 'Show All Services')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>View All Services</h4>

                    </div>
                    <div class="col-sm-6">
                        <a href="/service/create" class="btn btn-sm btn-primary pull-right"><i
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

                @if(isset($services))
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Service Title</th>
                            {{--<th>Service Description</th>--}}
                            <th>Service Image</th>
                            <th>Maintenance Title</th>
                            {{--<th>Maintenance Description</th>--}}
                            <th>Maintenance Image</th>
                            <th>Consultant Title</th>
                           {{-- <th>Consultant Description</th>--}}
                            <th>Consultant Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($services as $ser)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$ser->serviceTitle}}</td>
                                {{--<td>{!! $ser->serviceDescription !!}</td>--}}
                                <td><img src="/images/services/{{$ser->serviceImage}}" class="img-rounded"
                                         alt="services image" width="150" height="80"></td>
                                <td>{{$ser->maintenanceTitle}}</td>
                                {{--<td>{!! $ser->maintenanceDescription !!}</td>--}}
                                <td><img src="/images/services/{{$ser->maintenanceImage}}" class="img-rounded"
                                         alt="services image" width="150" height="80"></td>
                                <td>{{$ser->consultantTitle}}</td>
                                {{--<td>{!! $ser->consultantDescription !!}</td>--}}
                                <td><img src="/images/services/{{$ser->consultantImage}}" class="img-rounded"
                                         alt="services image" width="150" height="80"></td>
                                <td>
                                    <button type="button"
                                            class="btn btn-sm btn-danger dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Action<span
                                                class="caret"></span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="/service/edit/{{$ser->serviceId}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        <a class="dropdown-item"
                                           href="/service/destroy/{{$ser->serviceId}}"><i
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