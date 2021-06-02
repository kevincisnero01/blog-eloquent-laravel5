<!doctype html>
<?php use Illuminate\Support\Str; ?>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ $user->name }}</title>
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap-4.1.3-dist/css/bootstrap.css') }}">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow">

                    <img src="{{ asset($user->image->url)}}" class="float-left ronded-circle mr-2">

                    <h1>{{ $user->name}} </h1>
                    <h3>{{ $user->email}} </h3>
                    <ul>
                        <li><strong>Instagram</strong>: {{ $user->profile->instagram }}</li>
                        <li><strong>GitHub</strong>: {{ $user->profile->github }}</li>
                        <li><strong>Web</strong>: {{ $user->profile->web }}</li>
                    </ul>
                    <p>
                        <strong>Localizacion: </strong> 
                        {{ $user->profile->location->country }}
                    </p>
                    <p>
                        <strong>Level: </strong>
                        @if ($user->level) 
                            <a href="#">{{$user->level->name}}</a>
                        @else
                            <em>No posee</em>
                        @endif
                    </p>

                    <hr>

                    <p>
                        <strong>Grupos: </strong>
                        @forelse($user->groups as $group)
                            <a href="#" class="badge badge-primary">{{ $group->name }}</a>
                        @empty
                            <em>No pertenece a ningun grupo</em>
                        @endforelse
                    </p>

                    <hr>
                    
                    <h3>Posts</h3>
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-6">
                            <div class="card mb-3">
                            <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($post->image->url) }}" alt="card-imagen" class="card-img">
                            </div><!--col -->
                            <div class="col-md-8">
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
                            <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($video->image->url) }}" alt="card-imagen" class="card-img">
                            </div><!--col -->
                            <div class="col-md-8">
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
