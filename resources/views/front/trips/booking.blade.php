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
    <img src="{{ $trip->image_url }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1 class="font-display upper">Book {{ $trip->name }}</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('front.trips.show', $trip->slug) }}">{{ $trip->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Book</li>
                    </ol>
                </nav>
            </div>
        </div>
</section>

<section class="py-10">
    <div class="container">
        <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-3">
            <div class="lg:col-span-2 xl:col-span-3">
                <form id="captcha-form" action="{{ route('front.trips.booking.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $trip->id }}">
                    <h2 class="fs-lg bold text-primary mb-2">Personal details</h2>
                    <div class="grid lg:grid-cols-3 gap-4 mb-2">
                        <div class="form-group">
                            <label for="">First name *</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Middle name</label>
                            <input type="text" class="form-control" name="middle_name" placeholder="Middle name">
                        </div>
                        <div class="form-group">
                            <label for="">Last name *</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Gender *</label>
                            <select name="gender" id="" class="form-control" required>
                                <option value="" selected disabled>Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Country *</label>
                            @include('front.elements.country')
                        </div>

                        <div class="form-group">
                            <label for="">Email *</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-4">
                              <label for="inputState">Country Code *</label>
                              @include('front.elements.country-code')
                            </div>

                        <div class="form-group">
                            <label for="">Contact no. *</label>
                            <input type="tel" name="contact_no" class="form-control" placeholder="Contact no." required>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-3 gap-4 mb-2">

                        <?php /* ?><div class="form-group">
                            <label for="">Date of birth *</label>
                            <input type="date" name="dob" id="" class="form-control" max="<?php echo date('Y-m-d'); ?>">
                        </div><?php */ ?>
                    </div>
                    <br>
                    <hr class="mb-2">

                    <h2 class="fs-lg bold text-primary mb-2">Trip details</h3>
                      <?php /* ?>  <div class="grid lg:grid-cols-3 gap-4 mb-2">
                            <div class="form-group">
                                <label for="">Passport no. *</label>
                                <input type="number" name="passport_no" class="form-control" placeholder="Passport No." required>
                            </div>
                            <div class="form-group">
                                <label for="">Place of issue *</label>
                                <input type="number" name="place_of_issue" class="form-control" placeholder="Place of issue" required>
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-3 gap-4 mb-2">
                            <div class="form-group">
                                <label for="">Issue date *</label>
                                <input type="date" name="issue_date" class="form-control" max="<?php echo date('Y-m-d');?>" placeholder="Issue date" required>
                            </div>
                            <div class="form-group">
                                <label for="">Expiry date *</label>
                                <input type="date" name="expiry_date" class="form-control" min="<?php echo date('Y-m-d');?>" placeholder="Expiry date" required>
                            </div>
                        </div><?php */ ?>
                        <div class="grid lg:grid-cols-3 gap-4 mb-2">
                            <div class="form-group">
                                <label for="">No. of Adults *</label>
                                <input type="number" name="no_of_travellers" class="form-control" min="<?php echo date('Y-m-d');?>"
                                placeholder="No. of Adults" required>
                            </div>
                            <div class="form-group">
                                <label for="">No. of Children</label>
                                <input type="number" name="no_of_travellers" class="form-control" min="<?php echo date('Y-m-d');?>"
                                placeholder="No. of Children">
                            </div>
                            <div class="form-group">
                                <label for="">Preferred departure date*</label>
                                <input type="date" name="preferred_departure_date" name="" id="" class="form-control" min="<?php echo date('Y-m-d');?>">
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-3 gap-4 mb-2">
                            <div class="form-group">
                                <label for="">Remarks *</label>
                                <textarea name="emergency_contact" id="" cols="30" rows="3" class="form-control"
                                placeholder="Remarks"></textarea>
                            </div>
                        </div>
                        @include('front.elements.recaptcha')
                        <button class="btn btn-accent">Submit</button>
                </form>
            </div>

            <aside>
                <div class="border-light p-2">
                    <h2 class="fs-lg text-primary bold">{{ $trip->name }}</h2>
                    <div class="card-body">
                        <p>{{ $trip->duration }} days</p>
                        {{-- <div>Earliest Fixed Depature Date</div> --}}
                        {{-- <p>1 Jan 2020</p> --}}
                        @if($trip->offer_price)
                        <b>USD {{ $trip->offer_price }}</b> per person
                        @endif
                    </div>
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
      toastr.danger(session_error_message);
    }
  });
</script>
@endpush
