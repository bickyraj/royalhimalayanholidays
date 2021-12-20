@extends('layouts.front')
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ asset('assets/front/img/hero.jpg') }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1 class="font-display upper">Our Team</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                    </ol>
                </nav>
            </div>
        </div>
</section>

<section class="py-10">
    <div class="container" x-data="{active:'administration'}">
        <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="lg:col-span-2 xl:col-span-3">
                <button :class="{'btn':true,'btn-accent':active==='administration','btn-primary':active!=='administration'}" @click="active='administration'">Administration</button>
                <button :class="{'btn':true,'btn-accent':active==='representatives','btn-primary':active!=='representatives'}" @click="active='representatives'">Representatives</button>
                <button :class="{'btn':true,'btn-accent':active==='tourguides','btn-primary':active!=='tourguides'}" @click="active='tourguides'">Trek / Tour Guides</button>

                <div x-show="active==='administration'">
                    <div class="grid gap-2 lg:gap-3 pt-8">
                        @if($administrations)
                            @foreach($administrations as $item)
                                @include('front.elements.team_card')
                            @endforeach
                        @endif
                    </div>
                </div>
                <div x-show="active==='representatives'">
                    <div class="grid gap-2 lg:gap-3 pt-8">
                        @if($representatives)
                            @foreach($representatives as $item)
                                @include('front.elements.team_card')
                            @endforeach
                        @endif
                    </div>
                </div>
                <div x-show="active==='tourguides'">
                    <div class="grid gap-2 lg:gap-3 pt-8">
                        @if($tour_guides)
                            @foreach($tour_guides as $item)
                                @include('front.elements.team_card')
                            @endforeach
                        @endif
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
