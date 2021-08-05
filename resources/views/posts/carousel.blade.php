
<!--         carousel  -->
<div class="section" id="carousel">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mr-auto ml-auto">
        <!-- Carousel Card -->
        <div class="card card-raised card-carousel">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
              @foreach($post->photos as $photo)
              <li data-target="#carouselExampleIndicators" 
                data-slide-to="{{ $loop->index }}" 
                class="{{ $loop->first ? 'active': '' }}">                
              </li>
              @endforeach                                
            </ol>
            <div class="carousel-inner">

              @foreach($post->photos as $photo)
              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ url($photo->url) }}" alt="{{ $loop->index }}">
                <div class="carousel-caption d-none d-md-block">        
                </div>
              </div>
              @endforeach
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="material-icons">keyboard_arrow_left</i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <i class="material-icons">keyboard_arrow_right</i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!-- End Carousel Card -->
      </div>
    </div>
  </div>
</div>
<!--         end carousel -->