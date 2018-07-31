@extends('layout.master')
@section('content')

<h1 class="my-4">Hiero7 Project
    <small>&nbsp; All List</small>
</h1>

<div class="row">
    @foreach($arrProject as $project )
    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a href="{{$project['projectURL']}}">
                <img class="card-img-top" src="{{url($project['projectImgURL'])}}" alt="">
            </a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{{$project['projectURL']}}">{{$project['projectName']}}</a>
                </h4>
                @if($project['projectDescription'])
                    <p class="card-text">{{$project['projectDescription']}}</p>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
