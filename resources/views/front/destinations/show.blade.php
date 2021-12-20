@extends('layouts.front')
@section('meta_og_title'){!! $seo->meta_title??'' !!}@stop
@section('meta_description'){!! $seo->meta_description??'' !!}@stop
@section('meta_keywords'){!! $seo->meta_keywords??'' !!}@stop
@section('meta_og_url'){!! $seo->canonical_url??'' !!}@stop
@section('meta_og_description'){!! $seo->meta_description??'' !!}@stop
@section('meta_og_image'){!! $seo->socialImageUrl??'' !!}@stop
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ $destination->imageUrl }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1 class="font-display upper">{{ $destination->name }}</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $destination->name }}</li>
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
                <select name="" id="select-destination" class="custom-select">
                  <option value="" selected>All Destinations</option>
                  @if($destinations)
                    @foreach($destinations as $dest)
                    <option value="{{ $dest->id }}">{{ $dest->name }}</option>
                    @endforeach
                  @endif
                </select>
            </div>
            <div class="form-group flex">
                <div class="flex items-center bg-primary p-2">
                    <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <select name="" id="select-activity" class="custom-select">
                  <option value="" selected>All activities</option>
                  @if($activities)
                    @foreach($activities as $act)
                    <option value="{{ $act->id }}">{{ $act->name }}</option>
                    @endforeach
                  @endif
                </select>
            </div>
            <div class="form-group flex">
                <div class="flex items-center bg-primary p-2">
                    <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4"></path></svg>
                </div>
                <select name="price" id="" class="custom-select">
                    <option value="">Price (low to high)</option>
                    <option value="">Price (high to low)</option>
                    <option value="">Ratings (low to high)</option>
                    <option value="" selected>Ratings (high to low)</option>
                </select>
            </div>
        </div>

        <div id="trips-block" class="grid gap-10">
        </div>
    </div>
</div> <!-- Popular right now -->
@endsection
@push('scripts')
<script type="text/javascript">
    let destination_id = "{!! $destination->id ?? ''  !!}";
    $(document).ajaxStart(function(){
    });

  /* Gets called when request is sent */
  $(document).ajaxSend(function(evt, req, set){
  });

  /* Gets called when request complete */
  $(document).ajaxComplete(function(event,request,settings){
  });

  filter();
  $(".custom-select").on('change', function(event) {
    filter();
  });

  function filter() {
    destination_id = $("#select-destination").val() == "" ? destination_id: $("#select-destination").val();
    var activity_id = $("#select-activity").val();
    var sortBy = $("#select-sort").val();
    var url = "{{ url('trips/filter') }}" + "?destination_id=" + destination_id + "&activity_id=" + activity_id + "&sortBy=" + sortBy;
    $.ajax({
      url: url,
      type: "GET",
      dataType: "json",
      //data: data,
      async: "false",
      beforeSend: function(xhr) {
        var spinner = '<button style="margin:0 auto;" class="btn btn-sm btn-primary text-white" type="button" disabled>\
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>\
                      Loading Trips...\
                    </button>';
        $("#trips-block").html(spinner);
      },
      success: function(res) {
        if (res.success) {
          $("#trips-block").html(res.data);
        }
      }
    }).done(function( data ) {
      // console.log('done');
    });
  }
</script>
@endpush
