@extends('layoutct')
@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)
@include('partials.header')
@section('content')

<div class="main main-raised">
    @if($post->photos->count() > 1)
      @include('posts.carousel')
    @endif
    
    <div class="profile-content">
        <div class="container post">                                  
          
                  @if($post->photos->count() === 1)
                  <div class="profile">
                    <div class="avatar">
                      <figure><img src="{{ asset($post->photos->first()->url) }}" alt="" class="img-raised rounded-circle img-fluid"></figure>    
                    </div>
                  </div>
                  @elseif($post->iframe)
                      @include('posts.iframe')
                  @endif
                  <div class="content-post">
                    @include('posts.header')
                    
                    <h1>{{ $post->title }}</h1>
                    <div class="divider"></div>
                    <div class="image-w-text">
                        {!! $post->body !!}
                    </div>

                    <footer class="container-flex space-between">
                    @include('partials.social-links', ['description' => $post->title])

                      @include('posts.tags')
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