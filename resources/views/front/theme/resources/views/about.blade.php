@extends ('layouts.app')

@section ('title', 'About Us')

@section ('content')
    <!-- Hero -->
    <section class="hero hero-alt relative">
        <img src="{{ asset('img/hero.jpg') }}" alt="">
        <div class="overlay absolute">
            <div class="container ">
                <h1 class="font-display upper">About Us</h1>
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fs-sm wrap">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </section>

    <section class="about-page py-10">
        <div class="container">
            <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-1">
                <div class="lg:col-span-2 xl:col-span-3">
                    <div class="tour-details-section lim">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptas expedita aspernatur voluptates
                            laudantium natus deleniti nobis. Quos quibusdam hic perferendis incidunt dolorem inventore odit officiis
                            impedit
                            optio, distinctio rerum praesentium quod fugiat ab a maiores similique eius, quia placeat? Vel sequi quo
                            omnis?
                            Velit deleniti natus odio similique eius.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet harum nostrum reprehenderit delectus suscipit
                            exercitationem quisquam, vel quidem autem nobis mollitia adipisci inventore totam, eos consequatur eius
                            cupiditate modi id at sit. Quasi ex omnis reiciendis laudantium doloremque, voluptatum, molestias, delectus
                            quibusdam obcaecati minima magni laboriosam perspiciatis voluptatem. Consectetur similique sunt possimus qui
                            animi dolorem at temporibus harum necessitatibus molestiae?
                        </p>
                    </div>
                </div>
                <aside>
                    @include('partials.enquiry')
                </aside>
            </div>
        </div>

    </section>
@endsection