@extends('layout.master')
@section('content')

<h1 class="my-4">Hiero7 Project
    <small>&nbsp; All List</small>
</h1>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a href="./Ｈ7CDN.html"><img class="card-img-top" src='{{url("/img/H7CDN_Login.png")}}' alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="./Ｈ7CDN.html">H7CDN</a>
                </h4>
                <!-- <p class="card-text">給客戶操H7CDN產品</p> -->
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a href="./CDNBest.html"><img class="card-img-top" src='{{url("/img/CDNBest_Login.png")}}' alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="./CDNBest.html">CDNBest</a>
                </h4>
                <!-- <p class="card-text">原有CDNBest產品</p> -->
            </div>
        </div>
    </div>
</div>
@endsection
