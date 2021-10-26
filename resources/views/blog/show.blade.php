@extends('includes.head')

@section('title',"$posts->title")

@section('content')

<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-item">
                    <div class="post-inner">
                        <div class="post-head clearfix">
                            <div class="col-md-12">
                                <div class="detail">
                                    <h2 class="handle">{{$posts->title}}</h2>
                                    <div class="post-meta">
                                    <div class="asker-meta">
                                        <span>{{date('j F Y', strtotime($posts->created_at))}}</span>
                                        <span>by</span>
                                        <span><a href="#">Admin</a></span>
                                    </div>
                                    <div class="share">
                                        <label>Share:</label>
                                            <i class="fa fa-facebook"></i>
                                            <i class="fa fa-twitter"></i>
                                            <i class="fa fa-reddit"></i>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12">
                                <div class="avatar_show"><a href="#"><img src="{{asset('images/'.$posts->image)}}"></a></div>
                            <br>
                            <div class="post-content">
                                <p>{!! $posts->content!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                            <!-- @include('includes.sidebar') -->
                        </div>
                    </div>

@endsection