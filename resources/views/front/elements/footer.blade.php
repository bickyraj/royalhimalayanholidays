<!-- Why Choose Us -->
<div class="bg-light py-4">
    <div class="container">
        <h1 class="mb-3 font-display fs-2xl text-primary upper center">Why Choose Us</h1>
        <ul style="columns: 18rem 3">
            @forelse ($footer_why_choose_us as $item)
                <li class="flex mb-1" style="break-inside:avoid-column">
                    <svg class="icon-md shrink-0 mr-1 text-accent">
                        <use xlink:href="{{ asset('assets/front/img/sprite.svg#check') }}" />
                    </svg>
                    {{ $item->title }}
                </li>
            @empty
            @endforelse
        </ul>
    </div>
</div>

<!-- Newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="grid">
            <div class="col-1">
                <h1>Join our Newsletter</h1>
                <p>Sign up to stay updated with latest offers, news and more.</p>
            </div>
            <div>
                <form id="email-subscribe-form">
                    <label for="emailsub" class="sr-only">Email</label>
                    <input type="email" name="email" id="emailsub" placeholder="Your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- Newsletter -->

<!-- Footer -->
<footer>
    <div class="container fs-sm">
        <div class="grid">
            <div class="col">
                <h1>Destinations</h1>
                <ul>
                    @if($footer1)
                    @foreach($footer1 as $menu)
                      <li class="">
                        <a href="{!! ($menu->link)?$menu->link:'javascript:;' !!}">{{ $menu->name }}</a>
                      </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="col">
                <h1>Activities</h1>
                <ul>
                    @if($footer2)
                    @foreach($footer2 as $menu)
                      <li class="">
                        <a href="{!! ($menu->link)?$menu->link:'javascript:;' !!}">{{ $menu->name }}</a>
                      </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="col">
                <h1>About</h1>
                <ul>
                    @if($footer3)
                    @foreach($footer3 as $menu)
                      <li class="">
                        <a href="{!! ($menu->link)?$menu->link:'javascript:;' !!}">{{ $menu->name }}</a>
                      </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="col">
                <h1>{{ Setting::get('site_name') ?? '' }}</h1>
                <ul class="icon-list">
                    <li><svg class="text-primary">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#locationmarker" /></svg>
                       {{ Setting::get('address') ?? '' }}</li>
                    <li><svg class="text-primary">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#phone" /></svg><a href="tel:+977-9851191053">+977 {{ Setting::get('mobile1') ?? '' }}</a></li>
                    <li><svg class="text-primary">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#phone" /></svg> <a href="tel:+977-9804196924">+977 {{ Setting::get('mobile2') ?? '' }}</a></li>
                    <li><svg class="text-primary">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#mail" /></svg> <a href="mailto:{{ Setting::get('email') ?? '' }}">{{ Setting::get('email') ?? '' }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <ul class="social-links wrap">
                <li class="mb-1">
                    <a href="{{ Setting::get('facebook') }}" target="_blank">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#facebook" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ Setting::get('twitter') }}" target="_blank">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#twitter" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ Setting::get('instagram') }}" target="_blank">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#instagram" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ Setting::get('whatsapp') }}">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#whatsapp" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ Setting::get('viber') }}">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#viber" />
                        </svg>
                    </a>
                </li>
                {{-- <li class="mb-1">
                    <a href="#">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#weixin" />
                        </svg>
                    </a>
                </li> --}}
            </ul>
            <div class="col-end">
                &copy; {{ date('Y') }}. All right Reserved.
            </div>
            <div class="col-end">
                Powered by
                <a href="https://thirdeyesystem.com">Third Eye Systems</a>
            </div>
        </div>
    </div>
    <div class="ap bg-light">
        <div class="container">

            <div class="affiliations">
                <div class="fs-xs">We are affiliated to</div>
                <ul>
                    <li><a href="#"><img src="{{ asset('assets/front/img/ng.svg') }}" alt="Nepal Government Ministry of Culture, Tourism & Civil Aviation"></a></li>
                    <li><a href="#"><img src="{{ asset('assets/front/img/ntb.svg') }}" alt="Nepal Tourism Board"></a></li>
                    <li><a href="https://www.taan.org.np/"><img src="{{ asset('assets/front/img/taan.svg') }}" alt="Trekking Agencies' Association of Nepal"></a></li>
                    <li><a href="#"><img src="{{ asset('assets/front/img/nma.svg') }}" alt="Nepal Mountaineering Association"></a></li>
                </ul>
            </div>

            <div class="payments">
                <img src="{{ asset('assets/front/img/payment.svg') }}" alt="">
            </div>
        </div>
    </div>
</footer><!-- Footer -->
@push('scripts')
<script type="text/javascript">
  $(function() {

    $('#email-subscribe-form').on('submit', function(event) {
      event.preventDefault();
      var form = $(this);
      var formData = form.serialize();

      $.ajax({
        url: "{{ route('front.email-subscribers.store') }}",
        type: "POST",
        data: formData,
        dataType: "json",
        async: "false",
        success: function(res) {
          if (res.status == 1) {
            toastr.success(res.message);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          var status = jqXHR.status;
          if (status == 404) {
              toastr.warning("Element not found.");
          } else if (status == 422) {
              toastr.info(jqXHR.responseJSON.errors.email[0]);
          }
        }
      });

    });
  });
</script>
@endpush
