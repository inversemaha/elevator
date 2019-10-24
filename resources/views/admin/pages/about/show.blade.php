@extends('layouts.app')

@section('title', 'Show About Info')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>View About Info</h4>

                    </div>
                    <div class="col-sm-6">
                        <a href="/about-info/create" class="btn btn-sm btn-primary pull-right"><i
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

                @if(isset($aboutIn))
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Vision Title</th>
                            <th>Vision Description</th>
                            <th>Vision Image</th>
                            <th>About Info Title</th>
                            <th>About Info Description</th>
                            <th>About Info</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($aboutIn as $abo)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$abo->visionTitle}}</td>
                                <td>{!! $abo->visionDescription !!}</td>
                                <td><img src="/images/aboutInfo/{{$abo->visionImage}}" class="img-rounded"
                                         alt="Vision image" width="150" height="80"></td>
                                <td>{{$abo->aboutTitle}}</td>
                                <td>{!! $abo->aboutDescription !!}</td>
                                <td><img src="/images/aboutInfo/{{$abo->aboutImage}}" class="img-rounded"
                                         alt="About Info image" width="150" height="80"></td>
                                <td>
                                    <button type="button"
                                            class="btn btn-sm btn-danger dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Action<span
                                                class="caret"></span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="/about-info/edit/{{$abo->aboutId}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        <a class="dropdown-item"
                                           href="/about-info/destroy/{{$abo->aboutId}}"><i
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