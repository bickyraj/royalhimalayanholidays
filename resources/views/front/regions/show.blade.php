@extends('layouts.front_inner')
@section('meta_og_title'){!! $seo->meta_title??'' !!}@stop
@section('meta_description'){!! $seo->meta_description??'' !!}@stop
@section('meta_keywords'){!! $seo->meta_keywords??'' !!}@stop
@section('meta_og_url'){!! $seo->canonical_url??'' !!}@stop
@section('meta_og_description'){!! $seo->meta_description??'' !!}@stop
@section('meta_og_image'){!! $seo->socialImageUrl??'' !!}@stop
@section('content')
<!-- Hero -->
<section class="hero hero-alt relative">
    <img src="{{ $region->imageUrl }}" alt="">
    <div class="overlay absolute">
        <div class="container ">
            <h1>{{ $region->name }}</h1>
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-sm wrap">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $region->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="lim mb-4">
            @if((strip_tags($region->description) != ""))
            <div class="tour-details-section">
              <?= $region->description; ?>
            </div>
            @endif
        </div>
        <div class="mb-4" id="searchDiv">
            <div class="grid lg:grid-cols-3 gap-2">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Destinations</label>
                        <select name="" id="select-destination" class="custom-select">
                          <option value="" selected>All Destinations</option>
                          @if($destinations)
                            @foreach($destinations as $dest)
                            <option value="{{ $dest->id }}">{{ $dest->name }}</option>
                            @endforeach
                          @endif
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Activities</label>
                        <select name="" id="select-activity" class="custom-select">
                          <option value="" selected>All activities</option>
                          @if($activities)
                            @foreach($activities as $activity)
                            <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                            @endforeach
                          @endif
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Sort by</label>
                        <select name="" id="" class="custom-select">
                            <option value="">Price (low to high)</option>
                            <option value="">Price (high to low)</option>
                            <option value="">Ratings (low to high)</option>
                            <option value="" selected>Ratings (high to low)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Results -->
    </div>
    <div class="bg-light">
        <div class="container py-4">
            <div id="tirps-block" class="grid gap-10">
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript">
    // let destination_id = "{!! $region->id ?? ''  !!}";
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
    var destination_id = $("#select-destination").val();
    var activity_id = $("#select-activity").val();
    var sortBy = $("#select-sort").val();
    let region_id = "{!! $region->id !!}";
    var url = "{{ url('trips/filter') }}" + "?region=" + region_id + "&destination_id=" + destination_id + "&activity_id=" + activity_id + "&sortBy=" + sortBy;
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
        $("#tirps-block").html(spinner);
      },
      success: function(res) {
        if (res.success) {
          $("#tirps-block").html(res.data);
        }
      }
    }).done(function( data ) {
      // console.log('done');
    });
  }
</script>
@endpush
