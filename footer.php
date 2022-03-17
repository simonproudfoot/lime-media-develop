<!-- Site footer markup goes here -->
<footer class="text-white bg-dark border-t-1">
    <div class="container md:max-w-7xl py-16 mx-auto">
        <div class="flex flex-wrap md:text-left  -mb-10 -mx-4">
            <div class="lg:block md:w-full mb-10 lg:w-1/6 md:w-full w-full px-4">
                <img class="mx-auto mb-10 lg:mx-0" src="<?php bloginfo('template_directory'); ?>/img/logo_large.png" alt="lime pictures logo">
            </div>


            <div class="lg:w-1/6 md:w-1/2 w-full px-4 text-sm md:text-xs" @click="footerSlide('liverpool')">
                <div class="relative">
                    <h3 class="mb-5 font-black">Liverpool</h3>
                    <img ref="arrow-liverpool" src="<?php bloginfo('template_directory'); ?>/img/icon-arrow.svg" class="absolute md:hidden rotate-360 right-2 bottom-2" alt="Search" class="mx-auto -mt-1">
                </div>
                <div ref="liverpool" class="hidden  md:block mb-4">
                    <p>Lime Pictures Limited</p>
                    <p>Campus Manor</p>
                    <p>Liverpool</p>
                    <p>L16 0JP</p>
                    <p>&nbsp;</p>
                    <p class="mt-7"><a href="tel:+441517229122">T: <span class="text-lime">+44 151 722 9122</span></a></p>
                </div>

                <div style="height: 1px;" class="bg-white w-full mt-5 block md:hidden"></div>

            </div>


            <div class="lg:w-1/6 md:w-1/2 w-full px-4 text-sm md:text-xs">
                <div class=" w-full border-white my-4 md:mb-4 md:mt-0 text-sm md:text-xs" @click="footerSlide('london')">
                    <div class="relative">
                        <h3 class="font-bold">London</h3>
                        <img  ref="arrow-london" src="<?php bloginfo('template_directory'); ?>/img/icon-arrow.svg" class="absolute md:hidden rotate-360 right-2 bottom-2" alt="Search" class="mx-auto -mt-1">
                    </div>
                </div>

                <div ref="london" class="hidden md:block mb-4">
                    <p>Lime Pictures Limited</p>
                    <p>8 Alfred Mews</p>
                    <p>London</p>
                    <p>W1T 7AA</p>
                    <p>&nbsp;</p>
                    <p class="mt-7 "><a href="tel:+442030402700">T:<span class="text-lime"> +44 203 040 2700</span></a></p>
                </div>
                <div style="height: 1px;" class="bg-white w-full mt-5 block md:hidden"></div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 w-full px-4 text-sm md:text-xs">
                <div class="w-full border-white my-4 md:mb-4 md:mt-0" @click="footerSlide('la')">
                    <div class="relative">
                        <h3 class="font-bold">Los Angeles</h3>
                        <img  ref="arrow-la" src="<?php bloginfo('template_directory'); ?>/img/icon-arrow.svg" class="absolute md:hidden rotate-360 right-2 bottom-2" alt="Search" class="mx-auto -mt-1">
                    </div>
                </div>
                <div ref="la" class="hidden md:block mb-4">
                    <p>Lime Pictures Limited</p>
                    <p>6060 Center Drive</p>
                    <p>Los Angeles, CA</p>
                    <p>90045</p>
                    <p>&nbsp;</p>
                    <p class="mt-7"><a href="tel:+14247326600">T:<span class="text-lime">+1 424 732 6600</span></a></p>
                </div>
                <div style="height: 1px;" class="bg-white w-full mt-5 block md:hidden"></div>
            </div>
            <div class="lg:w-1/6 md:w-1/2 w-full px-4 text-sm md:text-xs">
                <div class=" w-full border-white my-4 md:mb-4 md:mt-0" @click="footerSlide('leeds')">
                    <div class="relative">
                        <h3 class="font-bold">Leeds</h3>
                        <img  ref="arrow-leeds" src="<?php bloginfo('template_directory'); ?>/img/icon-arrow.svg" class="absolute md:hidden rotate-360 right-2 bottom-2" alt="Search" class="mx-auto -mt-1">
                    </div>
                </div>
                <div ref="leeds" class="hidden md:block mb-4">
                    <p>Wise Owl Films</p>
                    <p>Prime Studios</p>
                    <p>96 Kirkstall Road</p>
                    <p>Leeds</p>
                    <p>LS3 1HD</p>
                    <p class="mt-7"><a href="tel:+441517229122">T: <span class="text-lime">+44 151 722 9122</span></a></p>
                </div>
            </div>

            <div class="grid grid-cols-2 lg:block lg:w-1/6 w-full pl-4 text-centre mt-10 md:mt-12 lg:mt-0">
                <img class="mb-4  lg:mx-auto h-auto" src="<?php bloginfo('template_directory'); ?>/img/employer_small-white.png" alt="" width="200">
                <img class="mb-4 mt-2 mx-auto" src="<?php bloginfo('template_directory'); ?>/img/All3Media_Logo_Landscape.svg" alt="">
            </div>

        </div>
    </div>
    <div class="container md:max-w-7xl ">
    <div class=" border-t border-gray-600   py-5 flex flex-wrap mx-auto items">
        <div class="md:w-1/2 w-full text-xs md:text-left text-center">
            <p class="mb-5">
                © Lime Pictures Limited 2022.
            </p>
            <img class="mb-5 md:mb-0 mx-auto md:mx-0" src="<?php bloginfo('template_directory'); ?>/img/greenwichlogo.svg" alt="Greenwich design logo">

        </div>
        <div class="md:w-1/2 w-full text-xs md:text-right text-center">
            <p class="mb-5">To make sure that we are inclusive and accessible to all, please let us know if you require any reasonable adjustments or assistance if you are coming to see us at Lime Pictures London. Any visitor requiring assistance please note this will be via 22 Torrington Place London WC1E 7HJ with access to the Lime offices through the third floor.</p>
            <a class="text-lime" href="">Terms & Conditions</a> | <a class="text-lime" href="">Website Privacy Policy</a> | <a class="text-lime" href="">Corporate Notices Commitment to Fairness & Integrity</a> | <a class="text-lime" href="">Unsolicited Material</a>
        </div>
  
    </div>
    </div>
</footer>


<?php get_template_part('partials/document-close');

