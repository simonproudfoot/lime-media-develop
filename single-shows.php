<?php get_header(); ?>
<main class="-mt-52 pb-32 z-30 relative">
    <div class="container max-w-7xl">
        <div class="lg:flex">
            <div class="w-full lg:w-1/3">
                <a href="<?php site_url() ?>/">
                    <button class="px-5 py-3 rounded-lg bg-lime text-white hidden lg:flex">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icon-arrow.svg" alt="" class="mx-auto mr-10 rotate-90">
                        Back
                    </button>
                </a>
                <div class="block lg:hidden w-2/3">
                    <?php include get_template_directory() . '/partials/show-title.php'; ?>
                </div>
                <div class="w-full bg-accent rounded-xl px-5 py-6 mt-2">
                    <p class="text-xs text-white">Press contacts</p>
                    <div class="flex mb-4">
                        <p class="text-yellow text-sm lg:text-base">Person name</p>
                        <span class="ml-5">
                            <?php include get_template_directory() . '/img/icon-envelope.svg'; ?>
                        </span>
                    </div>
                    <div class="grid leading-tight grid-cols-12 grid-rows-3">
                        <p class="text-xs text-white col-span-4 h-3" style="line-height: 12px">Press</p>
                        <p class="text-xxs text-white text-center col-span-3 h-3" style="line-height: 12px;">Download</p>
                        <p class="text-xxs text-center text-white col-span-2 h-3" style="line-height: 12px;">View</p>
                        <p class="text-xxs text-center text-white col-span-3 h-3 " style="line-height: 12px;">Add to cart</p>
                        <p class="text-yellow col-span-4 h-3 text-sm lg:text-base">Press pack</p>
                        <p class="text-xs text-white text-center h-3  mx-auto col-span-3 pb-2">
                            <?php include get_template_directory() . '/img/icon-download.svg'; ?>
                        </p>
                        <p class="text-xs text-white text-center h-3  mx-auto col-span-2">
                            <?php include get_template_directory() . '/img/icon-preview.svg'; ?>
                        </p>
                        <p class="text-xs text-white text-center h-3  mx-auto col-span-3">
                            <?php include get_template_directory() . '/img/icon-check.svg'; ?>
                        </p>
                        <p class="text-yellow col-span-4 pb-2 text-sm lg:text-base">Press release</p>
                        <p class="text-xs text-white text-center h-3  mx-auto col-span-3">
                            <?php include get_template_directory() . '/img/icon-download.svg'; ?>
                        </p>
                        <p class="text-xs text-white text-center h-3  mx-auto col-span-2">
                            <?php include get_template_directory() . '/img/icon-preview.svg'; ?>
                        </p>
                        <p class="text-xs text-white text-center h-3   mx-auto col-span-3 ">
                            <?php include get_template_directory() . '/img/icon-check.svg'; ?>
                        </p>
                    </div>
                </div>
                <div class="mt-10 text-gray-500 px-3 leading-relaxed text-sm">
                    <b class="font-bold">Release Date:</b> 15th March, 2021 <br>
                    <b class="font-bold">Episodes:</b> 10 x 30 minutes<br>
                    <b class="font-bold"> Location:</b> Sheffield, UK<br>
                    <b class="font-bold">Production Company:</b> A Lime Pictures Production for Netflix<br>
                    <b class="font-bold">Created By:</b> Kirstie Falkous & John Regier<br>
                    <b class="font-bold">Head of Writing Team:</b> Adam Usden<br>
                    <b class="font-bold"> Executive Producer:</b> Angelo Abela & Tim Compton<br><br>

                    <b class="font-bold">Starring:</b> Dakota Benjamin Taylot, Greece Beedle, Jad Ma, Doug Rao, Sarah Jane Potts, Jeremias Amoore, Oscar Skagerberg, Anastasia Chocolata, Leonardo Fontes, Stan Steinbicher, Christina Tam, Tanja Ribic, Jerry Kwarteng, Kenneth Tynan, Brett Houghton, Aymi Roux, Calin Bleau
                </div>
            </div>
            <div class="w-full lg:w-2/3">
                <div class="md:pl-5 mt-20">
                    <div class="hidden lg:block">
                        <?php include get_template_directory() . '/partials/show-title.php'; ?>
                    </div>
                    <div class="rounded-lg mt-2 overflow-hidden ">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="cardShadow rounded-lg -mt-5 lg:mt-2 p-4 z-10 relative bg-white text-sm leading-relaxed">
                        Amet dolor cupidatat deserunt et laboris labore anim adipisicing irure voluptate. Tempor veniam reprehenderit eu non reprehenderit officia. Dolor adipisicing ex cillum ipsum exercitation. Consectetur consectetur elit cupidatat do fugiat mollit eiusmod exercitation ea dolor incididunt esse anim minim.
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full py-10 sm:flex">
            <h1 class="font-bold text-2xl">Images</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">
            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>" class="w-full w-full object-cover h-40">
            </div>

            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>" class="w-full w-full object-cover h-40">
            </div>

            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>" class="w-full w-full object-cover h-40">
            </div>

            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>" class="w-full w-full object-cover h-40">
            </div>
            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>" class="w-full w-full object-cover h-40">
            </div>

            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>" class="w-full w-full object-cover h-40">
            </div>

            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>" class="w-full w-full object-cover h-40">
            </div>

            <div class="card__imageWrap rounded-lg overflow-hidden bg-grey bg-brandgrey">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>" class="w-full w-full object-cover h-40">
            </div>
        </div>
      

        <?php get_template_part('partials/episodes'); ?>
    </div>
</main>
<?php get_footer(); ?>
</svg>