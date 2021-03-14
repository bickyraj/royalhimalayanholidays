<!-- Hero -->
<div class="hero relative">
    <!-- Slider -->
    <div id="banner-slider" class="hero-slider">
        @forelse ($banners as $banner)
           <div class="slide">
               <img data-img="{{ $banner->imageUrl }}" src="{{ $banner->thumbImageUrl }}" alt="">
               <div class="hero__text">
                   <div class="container">
                       <h1><span>{{ $banner->caption }}</span></h1>
                       <a href="{{ $banner->btn_link }}" class="btn hero__button" style="display: inline-flex;">
                           Find a tour
                           <svg>
                               <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                           </svg>
                       </a>
                   </div>
               </div>
           </div>
        @empty
        @endforelse
    </div><!-- Slider -->

    <div class="absolute search-widget-toggle">
        <button class="hero__button" @click="searchWidgetOpen = true">
            Find tour
            <svg>
                <use xlink:href="{{ asset('assets/front/img/sprite.svg#search') }}" />
            </svg>
        </button>
    </div>
</div><!-- Hero -->
