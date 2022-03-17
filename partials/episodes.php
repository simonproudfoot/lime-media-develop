<div v-if="currentShow && currentShow.acf" class="w-full mt-10 sm:flex">
    <h1 class="font-bold text-2xl">Episodes</h1>
</div>

<!-- mobile -->
<div class="relative text-white md:hidden cursor-pointer my-5">
    <div :class="seasonDropdown ? 'bg-turqDark' : 'bg-turq'" class=" w-full px-5 py-4 relative rounded-lg" @click="seasonDropdown = !seasonDropdown">
        <span>Filter by</span> 
        <img src="<?php bloginfo('template_directory'); ?>/img/icon-arrow.svg" class="absolute  rotate-360 right-7 top-6">
    </div>
    <div v-if="seasonDropdown" class="rounded-lg bg-greentransparent text-white absolute w-full">
        <div v-for="season in currentShowSeasons" class="px-5 block  md:hidden cursor-pointer" @click="selectSeasonMobile(season)">
            <div class="w-full py-4 relative">
                {{season}}
                <div class="absolute border-2 p-1 h-6 w-6 rounded-full  right-1 top-3">
                    <img v-show="selectedSeason == season" src="<?php bloginfo('template_directory'); ?>/img/icon-tick.svg" class="mx-auto" style="padding-top: 1px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile END-->
<div v-if="currentShow && currentShow.acf" class="my-5 hidden md:flex">
    <button v-for="season in currentShowSeasons" :key="season" :class="selectedSeason == season ? 'bg-turq text-white hover:bg-turqDark' : 'hover:bg-gray-200'" class="px-5 py-2 mr-2 rounded-lg" @click="selectedSeason = season">{{season}}</button>
</div>
<div v-if="currentShow && currentShow.acf" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">
    <div v-for="show in currentShow.acf.epsodes" v-if="show.episode.series == selectedSeason">
        <!-- v-if="show.episode.series == currentShowSeasons" -->
        <div class="card">
            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img :src="show.episode.episode_image.sizes.medium_large" :alt="show.episode.episode_image.alt" class="w-full w-full object-cover h-40" />
            </div>
            <div class="card__title rounded-lg relative cardShadow mt-2 text-xl py-4 px-2">
                <svg class="-top-2 absolute" width="24px" height="11px" viewBox="0 0 24 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Content-/-Card-/-2-Column-/-On" transform="translate(-18.000000, -1.000000)" fill="#fff">
                            <path d="M31.7255721,1.78507459 L41.6,12 L41.6,12 L18.4,12 L28.2744279,1.78507459 C29.1956681,0.832067432 30.7150459,0.806315267 31.668053,1.72755552 C31.6875496,1.74640222 31.7067254,1.765578 31.7255721,1.78507459 Z" id="Triangle"></path>
                        </g>
                    </g>
                </svg>
                <div class="relative text-xs">
                    <p>Episode {{show.episode.episode_number}}</p>
                    <span class="text-turq absolute right-0 top-0 ">
                        <div class="inline-block leading-tight flex "><img height="10" width="12" class="inline-block mr-1" src="<?php bloginfo('template_directory'); ?>/img/icon-image.svg">12</div>
                    </span>
                </div>
                {{show.episode.episode_title}}
            </div>
        </div>
    </div>
</div>