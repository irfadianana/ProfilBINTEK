<!-- untuk memanggil head.blade.php ke dalam page create.blade.php -->
@extends('includes.head')
@section('title','Create Post')
@section('content')

<br>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Tambahkan Artikel Baru</a></li>
    <li><a data-toggle="tab" href="#menu1"><i class="fa fa-list"></i>Semua Artikel</a></li>
  </ul>

  <div class="tab-content">
      
    <div id="home" class="tab-pane fade in active"> <br>
    <div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
            <!-- sesuaikan routenya dengan yang ada di php artisan route:list -->
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                <div class="text-center"><h4>Buat Artikel</h4></div>
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Judul :</label>
                    <input type="text" name="title" class="form-control" placeholder="Input Title...">
                </div>

                <div class="form-group">
                    <label for="image">Pilih Gambar</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">Konten :</label>
                    <textarea type="" name="content" class="form-control" placeholder="Input Content..."></textarea>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <br>
        <div class="text-center"><h4>Semua Artikel</h4></div>
        <br>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="info">
                    <!-- <th>No.</th> -->
                    <th>Judul Artikel</th>
                    <th>Edit Artikel</th>
                    <th>Hapus Artikel</th>
                    <th>Waktu Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <!-- <td>{{$post->id}}</td> -->
                    <td>{{$post->title}}</td>
                    <td><a href="{{route('posts.edit',$post->id)}}"><i class="btn btn-success">Edit</i></a></td>
                    <td><a href="#{{$post->id}}-delete" data-toggle="modal"><i class="btn btn-danger">Hapus</i></a></td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>

        @foreach($posts as $post)
        <div class="modal fade" id="{{$post->id}}-delete">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden='true'>
                                    &times;
                                </button>
                                <h4 class="modal-title">Konfirmasi Hapus Artikel</h4>
                            </div>
                            <div class="modal-body">
                                <p>Title:</p>
                                    <h2>{{$post->title}}</h2>
                                <form action="{{route('posts.destroy',$post->id)}}" method="post" role="form">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <br>
                                <button type="submit" class="btn btn-danger btn-block">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach

    </div> 
    <!-- end tab menu1 -->

  </div>
  <!-- end tab content -->
</div>
<!-- end container -->


@endsection

@section('js')
<script>
            CKEDITOR.replace( 'content' );
            // CKEDITOR.config.autoParagraph = false;
</script>
@endsection