<!-- untuk memanggil head.blade.php ke dalam page create.blade.php -->
@extends('includes.head')

@section('content')

<br>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
            <!-- sesuaikan routenya dengan yang ada di php artisan route:list -->
            <form action="{{route('posts.update', $posts->id)}}" method="post" enctype="multipart/form-data">
                <div class="text-center"><h4>Buat Post</h4></div>
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{$posts->title}}" class="form-control" placeholder="Input Title...">
                </div>

                <div class="form-group">
                    <label for="image">Pilih Gambar</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <img src="{{asset('images/'.$posts->image)}}" style="width: 100%" height="350px;">
                </div>

                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea type="" name="content" class="form-control" placeholder="Input Content...">{{$posts->content}}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>


@endsection

@section('js')
<script type="text/javascript">
CKEDITOR.replace( 'content' );
</script>

@endsection