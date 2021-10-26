@extends('includes.head')
@section('title','Hasil Pencarian')

@section('content') <br>

@if(count($posts)> 0)
<div class="container" style="margin-bottom: 12%;">
    <div class="text-center"><h1>Hasil Pencarian</h1></div>

    @foreach($posts->all() as $post)
                <div class="post-item">
                    <div class="post-inner">
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
                                    {!!str_limit($post->content,250)!!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    @endforeach

</div>

@else

    <div class="container" style="margin-bottom: 17%;">
    <div class="text-center"><h1>Hasil Pencarian</h1></div>
    <hr>
        <div class="post-item">
            <div class="post-inner">    
                <div class="text-center"><b>no result found</b></div>
            </div>
        </div>
    </div>

@endif


@endsection
