@extends('includes.head')
@section('title','Posts Index')
@section('content')

<br>
<div class="container" style="margin-bottom: 120px;"> <hr>
    <div class="row">
            <div class="col-md-9">
                @foreach($posts as $post)
                <div class="post-item">
                    <div class="post-iner">
                        <div class="post-head clearfix">
                            <div class="col-md-4">
                                <a href=""><img src="{{asset('images/'. $post->image)}}" style="width: 100%; height:auto;"></a>
                            </div>
                            <div class="col-md-8">
                                <div class="detail">
                                    <h3 class="handle"><a href="posts/{{$post->slug}}">{{$post->title}}</a></h3>
                                </div>
                                <div class="post-meta">
                                    <div>
                                <span>{{date('j F Y',strtotime($post->created_at))}}</span> |
                                <span>by</span>
                                <span><a href="">Admin</a></span>
                                    </div>
                                </div>
                                
                                <div class="content" style="margin-top: 12px;">
                                    {!!str_limit($post->content,150)!!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- @include('includes.sidebar')          -->
            
    </div>

</div>

@endsection