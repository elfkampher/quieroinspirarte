@extends('layoutct')

@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('content')

<div class="main main-raised">

    @if($post->photos->count() > 1)
      @include('posts.carousel')
    @endif
    
    <div class="profile-content">
        <div class="container">                                  
          
                  @if($post->photos->count() === 1)
                  <div class="profile">
                    <div class="avatar">
                      <figure><img src="{{ $post->photos->first()->url }}" alt="" class="img-raised rounded-circle img-fluid"></figure>    
                    </div>
                  </div>
                  @elseif($post->iframe)
                      <div class="video">
                          {!! $post->iframe !!}
                      </div>
                  @endif
                  <div class="content-post">
                    <header class="container-flex space-between">
                      <div class="date">
                        <span class="c-gris">{{ $post->published_at->format('M d') }}</span>
                      </div>
                      <div class="container-category">
                        <span class="category">{{ $post->category->name }}</span>
                      </div>
                    </header>
                    
                    <h1>{{ $post->title }}</h1>
                    <div class="divider"></div>
                    <div class="image-w-text">
                        {!! $post->body !!}
                    </div>

                    <footer class="container-flex space-between">
                    @include('partials.social-links', ['description' => $post->title])

                      <div class="tags container-flex">
                          @foreach($post->tags as $tag)
                            <span class="tag c-gris">#{{ $tag->name }}</span>
                          @endforeach
                      </div>
                    </footer>
                    <div class="comments">
                      <div class="divider"></div>
                        <div id="disqus_thread"></div>

                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                        @include('partials.disqus')                        
                    </div><!-- .comments -->
                  </div>
                
            
        </div>
    </div>
</div>
@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/twitter-bootstrap.css') }}">
@endpush

@push('scripts')

<script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
<script
  src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/twitter-bootstrap.js') }}"></script> 

@endpush