<!doctype html>
<?php use Illuminate\Support\Str; ?>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Usuarios de {{ $level->name }}</title>
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap-4.1.3-dist/css/bootstrap.css') }}">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow">
                    <h1>Contenido nivel {{ $level->name }}</h1>
                    <hr>
                    <h3>Posts</h3>
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-6">
                            <div class="card mb-3">
                            <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset($post->image->url) }}" alt="card-imagen" class="card-img">
                            </div><!--col -->
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"> {{$post->name}} </h5>
                                    <h6 class="card-subtitle text-muted"> 
                                        {{ $post->category->name }} |
                                        {{ $post->comments_count }}
                                        {{ Str::plural('comentario',$post->comments_count) }} 
                                    </h6>
                                    <p>
                                      @foreach($post->tags as $tag)
                                        <span class="badge badge-light">
                                            #{{ $tag->name }}
                                        </span>
                                      @endforeach  
                                    </p>
                                </div><!--car-body -->
                            </div><!--col -->
                            </div><!--row -->
                            </div><!--card -->
                        </div>
                        @endforeach
                    </div>

                    <h3>Videos</h3>
                    <div class="row">
                        @foreach ($videos as $video)
                        <div class="col-6">
                            <div class="card mb-3">
                            <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset($video->image->url) }}" alt="card-imagen" class="card-img">
                            </div><!--col -->
                            <div class="col-md-8">
                               <div class="card-body"> 
                                    <h5 class="card-title"> {{$video->name}} </h5>
                                    <h6 class="card-subtitle text-muted"> 
                                        {{ $video->category->name }} |
                                        {{ $video->comments_count }}
                                        {{ Str::plural('comentario',$video->comments_count) }} 
                                    </h6>
                                    <p>
                                      @foreach($video->tags as $tag)
                                        <span class="badge badge-light">
                                            #{{ $tag->name }}
                                        </span>
                                      @endforeach  
                                    </p>
                                </div><!--car-body -->
                            </div><!--col -->
                            </div><!--row -->
                            </div><!--card -->
                        </div>
                        @endforeach
                    </div>


                </div><!--col -->
            </div><!--row -->
        </div><!--container-->
        <script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.1.4.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/bootstrap-4.1.3-dist/js/bootstrap.js') }}"></script>
        
    </body>
</html>
