<div v-if="selectedEpisode.title" class="fixed h-screen w-screen bg-blacktransparent   top-0 left-0 z-40">
    <div class="container  max-w-5xl">
        <div class="text-right text-white" @click="selectEpisode('',[], null)">
            X
        </div>
        <div class="mt-10">
            <div class="md:grid grid-cols-7 gap-3">
                <div class="bg-turq p-4 rounded-lg text-white col-span-4 mb-2 md:mb-0">
                    <h5 class="text-sm">Show: title</h5>
                    <h3 class="text-2xl">Episode {{selectedEpisode.number}}: {{selectedEpisode.title}}</h3>

                </div>
                <div class="bg-accent p-4 rounded-lg text-white col-span-3">
                    <div class="flex pt-1">
                        <div class="w-1/2">
                            <h5 class="text-sm">Gallery</h5>
                            <h3 class="text-yellow">Episode: title</h3>
                        </div>
                        <div>
                            <button class="h-10 w-10 bg-white relative rounded-t-lg rounded-br-lg">
                                <span class="hidden absolute  p-3 bg-white text-accent min-w-max text-xs rounded-lg -left-6 right-0 mx-auto -bottom-12">Add to cart</span>
                            </button>
                            <button class="h-10 w-10 bg-white relative rounded-t-lg rounded-br-lg">
                                <span class="hidden absolute p-3 bg-white text-accent min-w-max text-xs rounded-lg -left-6 right-0 mx-auto -bottom-12">Add to cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white mt-2 rounded-lg">
            <div class="p-4">
                <div id="imagescarousel" class="h-96 overflow-hidden  rounded-lg bg-no-repeat bg-gray-200 block z-0">
                    <div v-for="thumb in selectedEpisode.images">
                        <img :src="thumb.sizes.large" alt="">
                    </div>
                    <!--     <div v-for="thumb in selectedEpisode.images" class="">
                        <img :src="thumb.sizes.large" alt="">
                    </div>-->
                </div>

                <div class="text-sm">
                    all available embargoed
                </div>
                <div class="md:grid grid-cols-6 gap-3">
                    <div v-for="(thumb, i) in selectedEpisode.images" v-bind:key="i" class="bg-gray-200 h-20 rounded-md overflow-hidden">
                  
                        <img :src="thumb.sizes.thumbnail" @click="selectImage('<?php the_title(); ?>', thumb.id)">
                    </div>
                </div>

                <pre>{{selectedItems.images}}</pre>
            </div>
        </div>
    </div>
</div>