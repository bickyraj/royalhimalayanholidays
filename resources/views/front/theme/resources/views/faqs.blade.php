@extends ('layouts.app')

@section ('title', 'Frequently Asked Questions')

@section ('content')
    <!-- Hero -->
    <section class="hero hero-alt relative">
        <img src="{{ asset('img/hero.jpg') }}" alt="">
        <div class="overlay absolute">
            <div class="container ">
                <h1 class="font-display upper">Frequently Asked Questions</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Frequently Asked Questions</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-10">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-10">
                <div class="lg:col-span-2 xl:col-span-3">
                    @for ($j = 0; $j < 3; $j++)
                        
                    <div class="mb-8" x-data="{active: 'none'}">
                        <h2 class="mb-2 text-2xl font-display text-primary uppercase">Heading {{ $j + 1 }}</h2>
                        @for ($i = 0; $i < 6; $i++)
                            <div class="mb-1 border-light">
                                <button class="flex justify-between items-center w-full p-2 text-left" @click="active = (active === {{ $i }} ? 'none' : {{ $i }})">
                                    <h3 class="font-display text-xl text-primary">{{ $faker->sentence() }}</h3>
                                    
                                    <svg class="w-6 h-6 flex-shrink-0 text-primary" x-show="active!=={{ $i }}">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#plus" />
                                    </svg>
                                    <svg class="w-6 h-6 flex-shrink-0 text-primary" x-show="active==={{ $i }}">
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#minus" />
                                    </svg>
                                </button>
                                <div class="p-4" x-cloak x-show.transition="active==={{ $i }}">
                                    <p class="mb-0">
                                        {{ $faker->paragraph() }}
                                    </p>
                                </div>
                            </div>
                        @endfor
                    </div>
                    
                    @endfor
                    
                </div>
                <aside>
                    @include('partials.enquiry')
                </aside>
            </div>
        </div>

    </section>
@endsection