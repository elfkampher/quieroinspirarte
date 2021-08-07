@extends('layoutct')
@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)
@include('partials.header')
@section('content')

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">                            
            @foreach($posts as $post)
            <div class="row">
            <article class="post col-md-12">            
                @if($post->photos->count() === 1)
                    <figure><img src="{{ $post->photos->first()->url }}" alt="" class="img-responsive"></figure>
                @elseif($post->photos->count() > 1)

                    <div class="gallery-photos" data-masonry='{"itemSelector": ".grid-item", "columnWdith": 464}'>
                        @foreach($post->photos->take(4) as $photo)
                            <figure class="grid-item grid-item--height2">
                                @if($loop->iteration === 4)
                                    <div class="overlay">{{ $post->photos->count() }} Fotos</div>
                                @endif
                                <img src="{{ url($photo->url) }}" class="img-responsive" alt="">
                            </figure>
                        @endforeach
                    </div>
                @elseif($post->iframe)
                    @include($posts->iframe)
                @endif                    

                <div class="content-post">

                    @include('posts.header');
                    <h1>{{ $post->title }}</h1>
                    <div class="divider"></div>
                    <p>{{ $post->excerpt }}</p>
                    <footer class="container-flex space-between">
                        <div class="read-more">
                            <a href="{{ route('posts.show', $post) }}" class="text-uppercase c-green">Leer más</a>
                        </div>

                        @include('posts.tags')
                        
                    </footer>
                </div>
            </article>
            </div>
            @endforeach
        
        
    </div>
</div>
        


                
          

    {{ $posts->links('vendor.pagination.default') }}
   
@stop


    