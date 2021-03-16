<!-- Newsletter -->
<div class="bg-light py-8">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-4">
            <div>
                <h1 class="mb-2 font-display uppercase text-2xl text-primary">Join our Newsletter</h1>
                <div>Sign up to stay updated with latest offers, news and more.</div>
            </div>
            <div>
                <form class="flex flex-wrap" id="email-subscribe-form">
                    <label for="emailsub" class="sr-only">Email</label>
                    <input type="email" id="emailsub" name="email" class="text-xl p-4 mb-1 lg:mb-0 lg:mr-2" placeholder="Your email" required>
                    <button type="submit" class="btn btn-accent">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- Newsletter -->

<!-- Footer -->
<footer class="bg-primary text-white">
    <div class="container fs-sm">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            <div class="mb-4">
                <h1>Destinations</h1>
                <ul>
                    @if($footer1)
                    @foreach($footer1 as $menu)
                      <li class="">
                        <a href="{!! ($menu->link)?$menu->link:'javascript:;' !!}" class="text-sm">{{ $menu->name }}</a>
                      </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="mb-4">
                <h1>Activities</h1>
                <ul>
                    @if($footer2)
                    @foreach($footer2 as $menu)
                      <li class="">
                        <a href="{!! ($menu->link)?$menu->link:'javascript:;' !!}" class="text-sm">{{ $menu->name }}</a>
                      </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="mb-4">
                <h1>About</h1>
                <ul>
                    @if($footer3)
                    @foreach($footer3 as $menu)
                      <li class="">
                        <a href="{!! ($menu->link)?$menu->link:'javascript:;' !!}" class="text-sm">{{ $menu->name }}</a>
                      </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-span-2 lg:col-span-1">
                <h1 class="font-display text-2xl text-white">{{ Setting::get('site_name') ?? '' }}</h1>
                <ul class="icon-list">
                    <li class="flex">
                        <svg class="flex-shrink-0 mr-1">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#locationmarker" /></svg>
                        <span class="text-sm">{{ Setting::get('address') ?? '' }}</span></li>
                    <li class="flex">
                        <svg class="flex-shrink-0 mr-1">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#phone" /></svg>
                        <a class="text-sm" href="tel:{{ Setting::get('mobile1') ?? '' }}">{{ Setting::get('mobile1') ?? '' }}</a></li>
                    <li class="flex">
                        <svg class="flex-shrink-0 mr-1">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#devicemobile" /></svg>
                        <a class="text-sm" href="tel:{{ Setting::get('mobile2') ?? '' }}">{{ Setting::get('mobile2') ?? '' }}</a></li>
                    <li class="flex">
                        <svg class="flex-shrink-0 mr-1">
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#mail" /></svg>
                        <a class="text-sm" href="mailto:{{ Setting::get('email') ?? '' }}">{{ Setting::get('email') ?? '' }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <ul class="social-links flex-wrap mb-4">
                <li class="mb-1">
                    <a href="{{ Setting::get('facebook') }}">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#facebook" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ Setting::get('twitter') }}">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#twitter" />
                        </svg>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ Setting::get('instagram') }}">
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
                <li class="mb-1">
                    <a href="{{ Setting::get('weixin') }}">
                        <svg>
                            <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#weixin" />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="mb-2 affiliations">
                <div class="mb-2 text-xs">We are affiliated to</div>
                <ul>
                    <li class="mr-1 p-2"><a href="#"><img src="{{ asset('assets/front/img/ng.svg') }}"
                                alt="Nepal Government Ministry of Culture, Tourism & Civil Aviation"></a></li>
                    <li class="mr-1 p-2"><a href="#"><img src="{{ asset('assets/front/img/ntb.svg') }}" alt="Nepal Tourism Board"></a></li>
                    <li class="mr-1 p-2"><a href="https://www.taan.org.np/"><img src="{{ asset('assets/front/img/taan.svg') }}"
                                alt="Trekking Agencies' Association of Nepal"></a></li>
                    <li class="p-2"><a href="#"><img src="{{ asset('assets/front/img/nma.svg') }}" alt="Nepal Mountaineering Association"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-primary text-xs text-center pb-20">
        <div class="container md:flex justify-between">
            <div class="mb-2">
                &copy; {{ date('Y') }}. All right Reserved.
            </div>
            <div class="mb-4">
                Powered by
                <a href="https://thirdeyesystem.com">Third Eye Systems</a>
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
