@extends('layouts.front')
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ asset('assets/front/img/hero.jpg') }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1 class="font-display upper">{{ $team->name }}</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('front.teams.index') }}">Our Team</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $team->name }}</li>
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
                        <img src="{{ $team->imageUrl }}" width="160" class="alt="">
                    </div>
                    <div>
                        <h2 class="mb-1 font-display text-2xl text-primary">{{ $team->name }}</h2>
                        <div class="mb-2 text-gray">{{ $team->position }}</div>
                        <?= $team->description; ?>
                    </div>
                </div>

            </div>
            <aside>
                @include('front.elements.enquiry')
            </aside>
        </div>
    </div>
</section>
@endsection
