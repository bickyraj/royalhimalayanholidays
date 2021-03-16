@extends ('layouts.app')

@section ('title', 'Our Team')

@section ('content')
    <!-- Hero -->
    <section class="hero hero-alt relative">
        <img src="{{ asset('img/hero.jpg') }}" alt="">
        <div class="overlay absolute">
            <div class="container ">
                <h1 class="font-display upper">Our Team</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                    <button :class="{'btn':true,'btn-accent':active==='tourguides','btn-primary':active!=='tourguides'}" @click="active='tourguides'">Tour Guides</button>

                    <div x-show="active==='administration'">
                        <div class="grid gap-2 lg:gap-3 pt-8">
                            @for ($i = 0; $i < 8; $i++) 
                            @php
                                $name = $faker->name()
                            @endphp
                            <div class="p-2">
                                <div class="md:flex items-start">
                                    <div class="mb-4 md:mr-4 flex-shrink-0">
                                        <img src="{{ asset('img/portrait1.jpg') }}" width="160" class="alt="">
                                    </div>
                                    <div>
                                        <h2 class="mb-1 font-display text-2xl text-primary">{{ $name }}</h2>
                                        <div class="mb-2 text-gray">{{ $faker->jobTitle() }}</div>
                                        <p class="mb-4">{{ $faker->text() }}..</p>
                                        <a href="{{ route('team.show', Str::slug($name)) }}" class="btn btn-sm btn-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div x-show="active==='representatives'">
                        <div class="grid gap-2 lg:gap-3 pt-8">
                            @for ($i = 0; $i < 8; $i++)  
                            <div class="p-2">
                                <div class="md:flex items-start">
                                    <div class="mb-4 md:mr-4 flex-shrink-0">
                                        <img src="{{ asset('img/portrait1.jpg') }}" width="160" class="alt="">
                                    </div>
                                    <div>
                                        <h2 class="mb-1 font-display text-2xl text-primary">{{ $faker->name() }}</h2>
                                        <div class="mb-2 text-gray">{{ $faker->jobTitle() }}</div>
                                        <p class="mb-4">{{ $faker->text() }}..</p>
                                        <a href="" class="btn btn-sm btn-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div x-show="active==='tourguides'">
                        <div class="grid gap-2 lg:gap-3 pt-8">
                            @for ($i = 0; $i < 8; $i++)  
                            <div class="p-2">
                                <div class="md:flex items-start">
                                    <div class="mb-4 md:mr-4 flex-shrink-0">
                                        <img src="{{ asset('img/portrait2.jpg') }}" width="160" class="alt="">
                                    </div>
                                    <div>
                                        <h2 class="mb-1 font-display text-2xl text-primary">{{ $faker->name() }}</h2>
                                        <div class="mb-2 text-gray">{{ $faker->jobTitle() }}</div>
                                        <p class="mb-4">{{ $faker->text() }}..</p>
                                        <a href="" class="btn btn-sm btn-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
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