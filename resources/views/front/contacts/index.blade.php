<?php
  if (session()->has('success_message')) {
    $session_success_message = session('success_message');
    session()->forget('success_message');
  }

  if (session()->has('error_message')) {
    $session_error_message = session('error_message');
    session()->forget('error_message');
  }
?>
@extends('layouts.front')
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ asset('assets/front/img/hero.jpg') }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1 class="font-display upper">Contact Us</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
</section>
<section class="py-10">
    <div class="container">
        <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="lg:col-span-2 xl:col-span-3">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo culpa necessitatibus commodi nisi ipsa quia velit, fuga rem accusantium odio quo et sit maxime magnam repellendus, eligendi laudantium dolore non?</p>
                <div class="mb-8">
                    <form id="captcha-form" action="{{ route('front.contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name" class="text-sm">Name</label>
                            {{-- <div class="flex">
                                <div class="flex justify-center items-center bg-primary px-2">
                                    <svg class="w-4 h-4 text-white">
                                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#users" />
                                    </svg>
                                </div> --}}
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            {{-- </div> --}}
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="text-sm">E-mail</label>
                            {{-- <div class="flex">
                                <div class="flex justify-center items-center bg-primary px-2">
                                    <svg class="w-4 h-4 text-white">
                                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#mail" />
                                    </svg>
                                </div> --}}
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            {{-- </div> --}}
                        </div>
                        <div class="form-group mb-4">
                            <label for="country" class="text-sm">Country</label>
                            {{-- <div class="flex">
                                <div class="flex justify-center items-center bg-primary px-2">
                                    <svg class="w-4 h-4 text-white">
                                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#flag" />
                                    </svg>
                                </div> --}}
                                @include('front.elements.country')
                            {{-- </div> --}}
                        </div>
                        <div class="form-group mb-4">
                            <label for="phone" class="text-sm">Phone Number</label>
                            {{-- <div class="flex">
                                <div class="flex justify-center items-center bg-primary px-2">
                                    <svg class="w-4 h-4 text-white">
                                        <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#phone" />
                                    </svg>
                                </div> --}}
                                <input type="tel" name="phone" class="form-control block" id="phone" placeholder="Phone No.">
                            {{-- </div> --}}
                        </div>
                        <div class="form-group mb-4">
                            <label for="" class="text-sm">Message</label>
                            <textarea class="form-control block" name="message" id="message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <input type="hidden" id="recaptcha" name="g-recaptcha-response">
                            @include('front.elements.recaptcha')
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <aside>
                <div class="experts-card bg-primary px-2 py-10 text-white">

                    <div class="experts-phone flex mb-2">
                        <a href="#" class="flex aic">
                            <svg class="w-6 h-6 mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#locationmarker" /></svg>
                            </svg>
                            {{ Setting::get('address') ?? '' }}
                        </a>
                    </div>
                    <div class="experts-phone flex mb-2">
                        <a href="tel:+977 01 4416 177" class="flex aic">
                            <svg class="w-6 h-6 mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#phone" />
                            </svg>
                            {{ Setting::get('mobile1') ?? '' }}
                        </a>
                    </div>
                    <div class="experts-phone flex mb-2">
                        <a href="tel:+977 9851 039 480" class="flex aic">
                            <svg class="w-6 h-6 mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#devicemobile" />
                            </svg>
                            {{ Setting::get('mobile2') ?? '' }}
                        </a>
                    </div>
                    <div class="experts-phone flex mb-3">
                        <a href="mailto:
                                info@royalhimalayanholidays.com" class="flex aic">
                            <svg class="w-6 h-6 mr-2">
                                <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#mail" />
                            </svg>
                            {{ Setting::get('email') ?? '' }}
                        </a>
                    </div>
                </div>
                <div class="mb-8 p-2 bg-light">
                    <a href="{{ Setting::get('facebook') ?? '' }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#facebookmessenger" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('viber') ?? '' }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#viber" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('whatsapp') ?? '' }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#whatsapp" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('skype') ?? '' }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#skype" />
                        </svg>
                    </a>
                    <a href="{{ Setting::get('weixin') ?? '' }}" class="text-primary hover:text-accent mr-1">
                        <svg class="w-6 h-6">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#weixin" />
                        </svg>
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript">
  $(function() {
    var session_success_message = '{{ $session_success_message ?? '' }}';
    var session_error_message = '{{ $session_error_message ?? '' }}';
    if (session_success_message) {
      toastr.success(session_success_message);
    }

    if (session_error_message) {
      toastr.error(session_error_message);
    }
  });
</script>
@endpush
