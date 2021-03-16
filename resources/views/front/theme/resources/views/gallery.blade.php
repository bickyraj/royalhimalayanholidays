@extends ('layouts.app')

@section ('title', 'Gallery')

@section ('content')
    <!-- Hero -->
    <section class="hero hero-alt relative">
        <img src="{{ asset('img/hero.jpg') }}" alt="">
        <div class="overlay absolute">
            <div class="container ">
                <h1 class="font-display upper">Gallery</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-10">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-10">
                <div class="lg:col-span-2 xl:col-span-3">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @for ($i = 0; $i < 10; $i++)
                            <a href="{{ route('album') }}">
                                <div class="relative mb-2">
                                    <img class="block" src="{{ asset('img/hero.jpg') }}" alt="">
                                    <div class="flex absolute" style="left:0.5rem;bottom:-0.5rem;right:0.5rem">
                                        <div class="bg-primary shadow-md px-2 py-1 font-display text-lg text-white uppercase">
                                            Annapurna Base Camp Trek
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>
                </div>
                <aside>
                    @include('partials.enquiry')
                </aside>
            </div>
        </div>

    </section>
@endsection