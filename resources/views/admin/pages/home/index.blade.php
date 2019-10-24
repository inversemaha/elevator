@extends('layouts.app')

@section('title', 'Dashborad')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Dashborad</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dashborad</a></li>
            </ol>

        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-view-list text-info"></i>
                <h2 class="m-0 text-dark counter font-600">{{$category_count}}</h2>
                <div class="text-muted m-t-5">Category</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-local-grocery-store text-info"></i>
                <h2 class="m-0 text-dark counter font-600">{{$product_count}}</h2>
                <div class="text-muted m-t-5">Product</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-store-mall-directory text-primary"></i>
                <h2 class="m-0 text-dark counter font-600">{{$feature_count}}</h2>
                <div class="text-muted m-t-5">Feature</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-local-laundry-service text-info"></i>
                <h2 class="m-0 text-dark counter font-600">{{$service_count}}</h2>
                <div class="text-muted m-t-5">Service</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-account-child text-custom"></i>
                <h2 class="m-0 text-dark counter font-600">{{$user_count}}</h2>
                <div class="text-muted m-t-5">Users</div>
            </div>
        </div>
    </div>

@endsection
