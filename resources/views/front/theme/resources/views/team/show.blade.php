@extends ('layouts.app')

@php
    $name = $faker->name();
@endphp

@section ('title', $name)

@section ('content')
    <!-- Hero -->
    <section class="hero hero-alt relative">
        <img src="{{ asset('img/hero.jpg') }}" alt="">
        <div class="overlay absolute">
            <div class="container ">
                <h1 class="font-display upper">{{ $name}}</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Our Team</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="py-10">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-10">
                <div class="lg:col-span-2 xl:col-span-3">
                    <div class="md:flex items-start">
                        <div class="mb-4 md:mr-4 flex-shrink-0">
                            <img src="{{ asset('img/portrait1.jpg') }}" width="160" class="alt="">
                        </div>
                        <div>
                            <h2 class="mb-1 font-display text-2xl text-primary">{{ $faker->name() }}</h2>
                            <div class="mb-2 text-gray">{{ $faker->jobTitle() }}</div>
                            @for ($i = 0; $i < 6; $i++)
                            <p class="mb-4">{{ $faker->paragraph() }}</p>
                            @endfor
                        </div>
                    </div>
                    
                </div>
                <aside>
                    @include('partials.enquiry')
                </aside>
            </div>
        </div>

    </section>
@endsection