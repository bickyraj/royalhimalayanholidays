@extends ('layouts.app')

@section ('title', 'Reviews')

@section ('content')
    <!-- Hero -->
    <section class="hero hero-alt relative">
        <img src="{{ asset('img/hero.jpg') }}" alt="">
        <div class="overlay absolute">
            <div class="container ">
                <h1 class="font-display upper">Reviews</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-10">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-10">
                <div class="lg:col-span-2 xl:col-span-3">
                    <div class="grid lg:grid-cols-2 gap-2 lg:gap-3">
                        @for ($i = 0; $i < 10; $i++)
                            
                        <div class="review p-2">
                            <div class="review__content">
                                <h2 class="mb-2 font-display text-2xl text-primary">Rewarding trek with best guides
                                </h2>
                                <p>{{ $faker->paragraph() }}</p>
                            </div>
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <img src="{{ asset('img/portrait1.jpg') }}" alt="">
                                </div>
                                <div>
                                    <div class="font-bold">{{ $faker->name() }}</div>
                                    <div class="text-sm text-gray">{{ $faker->country() }}</div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    
                </div>
                <aside>
                    <a href="{{ route('reviews.create') }}" class="mb-4 btn btn-accent">Write a review</a>
                    @include('partials.enquiry')
                </aside>
            </div>
        </div>

    </section>
@endsection