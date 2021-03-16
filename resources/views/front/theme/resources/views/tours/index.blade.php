@extends ('layouts.app')

@section ('title', 'Tours Listing')

@section('content')
    <!-- Hero -->
    <section class="hero hero-alt relative">
        <img src="{{ asset('img/hero.jpg') }}" alt="">
        <div class="overlay absolute">
            <div class="container ">
                <h1 class="font-display upper">Tour Listing</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tours</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section> 
    <!-- Popular right now -->
    <div class="featured mb-4 py-20 bg-light">
        <div class="container">

            <div class="mb-8 grid lg:grid-cols-3 gap-4">
                <div class="form-group flex">
                    <div class="flex items-center bg-primary p-2">
                        <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <select name="" id="">
                        <option value="">Destinations</option>
                    </select>
                </div>
                <div class="form-group flex">
                    <div class="flex items-center bg-primary p-2">
                        <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <select name="" id="">
                        <option value="">Activities</option>
                    </select>
                </div>
                <div class="form-group flex">
                    <div class="flex items-center bg-primary p-2">
                        <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4"></path></svg>
                    </div>
                    <select name="" id="">
                        <option value="">Sort By</option>
                    </select>
                </div>
            </div>

            <div class="grid gap-10">

                @foreach ($tours as $tour) 
                    @include ('partials.packagebox') 
                @endforeach
            </div>
        </div>
    </div> <!-- Popular right now -->
@endsection