

<!-- Search Widget -->
<div class="search-widget" x-data="{searchWidgetOpen: false}">
    <button id="search-title" class="fixed btn btn-accent shadow-md" style="right:1rem;bottom:1rem;z-index:99"
        @click="searchWidgetOpen=true">
        Tour Finder
    </button>

    <form action="" class="fixed bg-white text-primary" x-cloak x-show.transition="searchWidgetOpen"
        style="right:0;top:0;bottom:0;width:18rem;z-index:99" @click.away="searchWidgetOpen=false">
        <div class="search-widget-header flex items-center justify-between px-4" style="height:3rem">
            <h1 class="font-display text-lg uppercase">Tour Finder</h1>
            <button type="button" @click.prevent="searchWidgetOpen=false">
                <svg class="w-6 h-6">
                    <use xlink:href="img/sprite.svg#x" />
                </svg>
            </button>
        </div>

        <div class="search-widget-body p-4">
            <h2 class="mb-2">
                Destinations
            </h2>
            <div class="flex items-center flex-wrap mb-4">
                <input type="checkbox" id="nepal" name="destination" value="nepal" hidden checked>
                <label for="nepal" class="label-button flex items-center p-2">
                    <svg class="w-6 h-6 mr-2">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Nepal
                </label>
                <input type="checkbox" id="india" name="destination" value="india" hidden checked>
                <label for="india" class="label-button flex items-center p-2">
                    <svg class="w-6 h-6 mr-2">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    India
                </label>
                <input type="checkbox" id="tibet" name="destination" value="tibet" hidden checked>
                <label for="tibet" class="label-button flex items-center p-2">
                    <svg class="w-6 h-6 mr-2">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Tibet
                </label>
                <input type="checkbox" id="bhutan" name="destination" value="bhutan" hidden checked>
                <label for="bhutan" class="label-button flex items-center p-2">
                    <svg class="w-6 h-6 mr-2">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Bhutan
                </label>
                <input type="checkbox" id="maldives" name="destination" value="maldives" hidden checked>
                <label for="maldives" class="label-button flex items-center p-2">
                    <svg class="w-6 h-6 mr-2">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Maldives
                </label>
            </div>
            <h2 class="mb-2">
                Activities
            </h2>
            <div class="mb-4">
                <input type="checkbox" name="activities" id="act1" value="" hidden checked>
                <label class="custom-check flex p-1" for="act1">
                    <svg class="mr-2 w-4 h-4">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Adventure Sports
                </label>
                <input type="checkbox" name="activities" id="act2" value="" hidden checked>
                <label class="custom-check flex p-1" for="act2">
                    <svg class="mr-2 w-4 h-4">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Day & City Tours
                </label>
                <input type="checkbox" name="activities" id="act3" value="" hidden checked>
                <label class="custom-check flex p-1" for="act3">
                    <svg class="mr-2 w-4 h-4">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Mountain Flight
                </label>
                <input type="checkbox" name="activities" id="act4" value="" hidden checked>
                <label class="custom-check flex p-1" for="act4">
                    <svg class="mr-2 w-4 h-4">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Peak Climbing
                </label>
                <input type="checkbox" name="activities" id="act5" value="" hidden checked>
                <label class="custom-check flex p-1" for="act5">
                    <svg class="mr-2 w-4 h-4">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Pilgrimage
                </label>
                <input type="checkbox" name="activities" id="act6" value="" hidden checked>
                <label class="custom-check flex p-1" for="act6">
                    <svg class="mr-2 w-4 h-4">
                        <use xlink:href="img/sprite.svg#check" />
                    </svg>
                    Trekking & Hiking
                </label>
            </div>
            <h2 class="mb-2">
                Duration
            </h2>
            <div class="mb-4">
                <input type="radio" name="duration" id="dur1" value="any" hidden checked>
                <label class="flex p-1 custom-check" for="dur1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4">
                        <circle cx="10" cy="10" r="5" fill="none" stroke="currentColor" stroke-width="2">
                    </svg>
                    Any
                </label>
                <input type="radio" name="duration" id="dur2" value="1" hidden>
                <label class="flex p-1 custom-check" for="dur2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4">
                        <circle cx="10" cy="10" r="5" fill="none" stroke="currentColor" stroke-width="2">
                    </svg>
                    1 day
                </label>
                <input type="radio" name="duration" id="dur3" value="2-7" hidden>
                <label class="flex p-1 custom-check" for="dur3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4">
                        <circle cx="10" cy="10" r="5" fill="none" stroke="currentColor" stroke-width="2">
                    </svg>
                    2 - 7 days
                </label>
                <input type="radio" name="duration" id="dur4" value="8-30" hidden>
                <label class="flex p-1 custom-check" for="dur4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4">
                        <circle cx="10" cy="10" r="5" fill="none" stroke="currentColor" stroke-width="2">
                    </svg>
                    8 days - 1 month
                </label>
                <input type="radio" name="duration" id="dur5" value="30-365" hidden>
                <label class="flex p-1 custom-check" for="dur5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4">
                        <circle cx="10" cy="10" r="5" fill="none" stroke="currentColor" stroke-width="2">
                    </svg>
                    1 month - 1 year
                </label>
            </div>
        </div>

        <div class="search-widget-footer flex justify-center items-center" style="height:5rem">
            <button id="search-title" class="btn btn-primary" data-toggle="collapse"
                data-target="#search-widget-form">
                <h1>Find Tour
                    <svg class="w-6 h-4">
                        <use xlink:href="img/sprite.svg#arrownarrowright" />
                    </svg>
                </h1>
            </button>
        </div>
    </form>
</div>
<!-- Search Widget -->
