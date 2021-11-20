@extends('includes.head') <!-- calling head.blade.php di folder includes -->
@section('title', 'Dinas PUTR')

@section('content')

<div style="padding-left:0; padding-right:0;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="" data-slide-to="0" class="active"></li>
      <li data-target="" data-slide-to="1"></li>
      <li data-target="" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="{{asset('images/1.png')}}" alt="Los Angeles" style="max-height: 500px; min-height: 500px; max-width: 1400px; min-width: 1400px; object-fit: cover;">
        <!-- <div class="carousel-caption">
          <h3 style="color:#364878;">Teks</h3>
          <p style="color:#364878;">Teks</p>
        </div> -->
      </div>

      <div class="item">
        <img src="{{asset('images/2.png')}}" alt="Chicago" style="max-height: 500px; min-height: 500px; max-width: 1400px; min-width: 1400px; object-fit: cover;">
        <!-- <div class="carousel-caption">
          <h3 style="color:#ffc928;">Teks</h3>
          <p style="color:#ffc928;">Teks</p>
        </div> -->
      </div>
    
      <div class="item">
        <img src="{{asset('images/3.png')}}" alt="New York" style="max-height: 500px; min-height: 500px; max-width: 1400px; min-width: 1400px; object-fit: cover;">
        <!-- <div class="carousel-caption">
          <h3 style="color:#364878;">Teks</h3>
          <p style="color:#364878;">Teks</p>
        </div> -->
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

        <section class="wp-separator">
            <article class="section">
                <div class="container">
                    <div class="row text-center">
                        <p class="h1"><b>BIDANG BINA TEKNIK DAN PERENCANAAN</b></p>
                        <p class="lead"><b><h3>SEKSI TEKNIK DAN PERENCANAAN CIPTA KARYA</h3></b></p>
                    </div>
                </div>
            </article>
        </section>

        <br><br>
        <div class="col-md-10 col-md-offset-1">
            <div class="well well-sm">
                <fieldset>
                    <legend class="text-center">Visi : </legend>
                    <legend class="text-center"> 
                    “Sulawesi Selatan yang Inovatif, Produktif, Kompetitif, Inklusif dan Berkarakter”</legend>
                    <legend class="text-center">Misi : </legend>
                    <legend>
                    1. Meningkatkan Produktivitas dan Daya Saing Produk Sumberdaya Alam yang Berkelanjutan
	                <br> 2. Meningkatkan Pemerataan Infrastruktur Wilayah
	                <br> 3. Mewujudkan Pusat-Pusat Pertumbuhan Ekonomi Baru yang Produktif
	                <br> 4. Mewujudkan Kualitas Manusia yang Kompetitif, Inklusif dan Berkarakter
	                <br> 5. Meningkatkan Produktivitas dan Daya Saing Produk Sumberdaya Alam yang Berkelanjutan</legend>
                    

                </fieldset>
            </div>

        </div> 


<div class="container-fluid">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
      <div id="grid_post" class="row list-group">

      <div class="container-fluid">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <div class="text-center">
                      <h1><b>Artikel</b></h1>
                      </div>
                    </div> 
                </div> 
            </div> 
        </section>
      </div>

    @foreach($posts as $post)
         <div class="item col-xs-4 col-lg-4">
            <div class="thumbnail as">
               <img class="group list-group-image" src="{{asset('images/'.$post->image)}}" alt="">
                <div class="caption">
                    <div class="c_hr">
                    <h4 class="group inner list-group-item-heading"><a href="http://localhost:8000/posts/{{$post->slug}}">{{str_limit ($post->title,30)}}</a></h4>
                    <small>{{date('j F Y', strtotime($post->created_at))}}</small> | by <a href="#">Admin</a>
                    </div>
                    <p class="group inner list-group-item-text">{{str_limit ($post->content,50)}}</p>
                    <div class="row"></div>
                </div>
                
            </div>
        </div>
        
    @endforeach

    <div class="text-center">
        {!!$posts->links();!!}
    </div>
  
  </div><!-- end grid -->
<!-- </div>

    <div class="col-md-3">
           <div class="list-group" style="box-shadow: 0 0px 1px 0px rgba(0, 0, 0, 0.26);">
          <a href="#" class="list-group-item active">
          Total 10 Tags <small class="pull-right">Lihat Semua  <i class="fa fa-share "></i> </small></a>
          <a href="#" class="list-group-item">Laravel<span class="badge badge-primary">10 Posts</span></a>
          <a href="#" class="list-group-item">PHP<span class="badge badge-primary">10 Posts</span></a>
         
        </div>
        
         </div>
    </div> -->
    <!-- end row -->
</div>
        </section>

</div><!-- end con fluid -->

@endsection