<!-- Search Widget -->
<div id="search-widget" class="search-widget" x-cloak x-show.transition="searchWidgetOpen" @click.away="searchWidgetOpen=false">

    <!-- <button id="search-title" class="btn btn-theme" data-bs-toggle="collapse" data-bs-target="#search-widget-form"> -->
    <h1 class="bold flex jcsb aic p-2 upper">
        <div>
            <svg class="icon mr-2">
                <use xlink:href=" img/sprite.svg#search" />
            </svg>
            Find tours
        </div>

        <button @click="searchWidgetOpen = false">
            <svg class="icon-md">
                <use xlink:href="img/sprite.svg#x" /></svg>
        </button>
    </h1>
    <!-- </button> -->

    <div class="p-2 scroll">
        <form action="">

            <h2>Destinations</h2>

            <div class="flex wrap mb-2">
                <div>
                    <input type="checkbox" name="nepal" id="nepal" class="visually-hidden" checked>
                    <label for="nepal" class="px-2 py-1">
                        Nepal
                    </label>
                </div>
                <div>
                    <input type="checkbox" name="bhutan" id="bhutan" class="visually-hidden" checked>
                    <label for="bhutan" class="px-2 py-1">
                        Bhutan
                    </label>
                </div>
                <div>
                    <input type="checkbox" name="tibet" id="tibet" class="visually-hidden" checked>
                    <label for="tibet" class="px-2 py-1">
                        Tibet
                    </label>
                </div>
            </div>

            <h2>Activities</h2>

            <div class="mb-2">
                <input type="checkbox" name="" value="" id="act1" class="visually-hidden" checked>
                <label class="clean" for="act1">Adventure Sports</label>
                <input type="checkbox" name="" value="" id="act2" class="visually-hidden" checked>
                <label class="clean" for="act2">Day & City Tours</label>
                <input type="checkbox" name="" value="" id="act3" class="visually-hidden" checked>
                <label class="clean" for="act3">Mountain Flight</label>
                <input type="checkbox" name="" value="" id="act4" class="visually-hidden" checked>
                <label class="clean" for="act4">Peak Climbing</label>
                <input type="checkbox" name="" value="" id="act5" class="visually-hidden" checked>
                <label class="clean" for="act5">Pilgrimage</label>
                <input type="checkbox" name="" value="" id="act6" class="visually-hidden" checked>
                <label class="clean" for="act6">Trekking & Hiking</label>
            </div>

            <h2>Duration</h2>

            <div class="mb-2">
                <input type="radio" name="duration" value="" id="dur1" class="visually-hidden" checked>
                <label class="clean" for="dur1">Any</label>
                <input type="radio" name="duration" value="" id="dur2" class="visually-hidden">
                <label class="clean" for="dur2">1 day</label>
                <input type="radio" name="duration" value="" id="dur3" class="visually-hidden">
                <label class="clean" for="dur3">2 -7 days</label>
                <input type="radio" name="duration" value="" id="dur4" class="visually-hidden">
                <label class="clean" for="dur4">8 days - 1 month</label>
                <input type="radio" name="duration" value="" id="dur5" class="visually-hidden">
                <label class="clean" for="dur5">1 month - 1 year</label>
            </div>

            <button class="btn btn-theme" data-toggle="collapse" data-target="#search-widget-form">
                Search
                <svg class="icon">
                    <use xlink:href="img/sprite.svg#arrownarrowright" />
                </svg>
            </button>
        </form>
    </div>

</div><!-- Search Widget -->
