@extends('layouts.master')
@section('title')
    <title>Home | E-Shopper</title>
@endsection
@section('css')
    <link href="{{asset('Eshopper/home/home.css')}}" rel="stylesheet">
@endsection

@section('content')
    <!--/slider-->
    <section id="advertisement">
        <div class="container">
            <img src="{{asset('Eshopper/images/shop/advertisement.jpg')}}" alt="" />
        </div>
    </section>
    <!--/slider-->
    <section>
        <div class="container">
            <div class="row">
                @include('components.sidebar')
                <div class="col-sm-9 padding-right">
                    <!--features_items-->
                    <div class="features_items">
                        <h2 class="title text-center">Features Items</h2>

                        <div class="col-sm-4">
                            @foreach($productsInCategorys as $productsInCategory)
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{config('app.base_url').$productsInCategory->feature_image_path}}" alt="" />
                                        <h2>{{number_format($productsInCategory->price)}}VNĐ</h2>
                                        <p>{{$productsInCategory->name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{number_format($productsInCategory->price)}}VNĐ</h2>
                                            <p>{{$productsInCategory->name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>

                       <div class="col-sm-4">
                           {{$productsInCategorys->links()}}
                       </div>
                    </div>
                    <!--features_items-->
                </div>
            </div>
        </div>
    </section>
@endsection