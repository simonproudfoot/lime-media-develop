<?php get_template_part('partials/document-open'); ?>
<header class="text-gray-600 body-font">
    <div class="container md:max-w-7xl">
        <div class="max-w-7xl mx-auto flex justify-between align-center flex-wrap py-5 md:flex-row md:items-center">
            <a href="<?php echo get_site_url(); ?>/" class="flex font-medium md:items-center text-gray-900 mb-4 md:mb-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="lime pictures logo">
            </a>
            <nav class="mt-2.5 md:hidden">
                <button class="text-gray-500 z-50 w-8 h-8 relative  m-auto focus:outline-none" @click="toggleMenu()">
                    <div class="block w-8 absolute left-1/2  transform -translate-x-1/2 -translate-y-1/2 ">
                        <span aria-hidden="true" class="block absolute h-0.5 w-8 transform transition duration-500 ease-in-out" :class="{'rotate-45 bg-white': mobileMenuOpen,' -translate-y-2 bg-brandgrey': !mobileMenuOpen }"></span>
                        <span aria-hidden="true" class="block absolute h-0.5 w-8 transform transition duration-500 ease-in-out bg-brandgrey " :class="mobileMenuOpen && 'opacity-0'"></span>
                        <span aria-hidden="true" class="block absolute h-0.5 w-8 transform transition duration-500 ease-in-out" :class="{'-rotate-45 bg-white': mobileMenuOpen, ' translate-y-2 bg-brandgrey': !mobileMenuOpen}"></span>
                    </div>
                </button>
            </nav>
            <a href="" class="hidden rounded-md md:inline-flex md:ml-auto items-center border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 text-brandgrey mt-4 md:mt-0">Take me to Lime Pictures
                <span class="text-lime hidden md:block">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </span>
            </a>
        </div>
        <div ref="mainMenu" id="mainMenu" class="hidden md:flex mx-auto md:flex-wrap flex-col flex md:flex-row w-full left-0 top-0 h-screen md:h-auto overflow-hidden fixed md:relative py-24 md:py-0 z-40 md:z-10 text-white md:text-xs bg-brandgrey items-center md:rounded-lg ">
            <p class="lg:pl-10 py-4 px-5 items-center mb-4 md:mb-0 bg-right rounded-lg bg-no-repeat overflow-hidden" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/buttonshape.svg')">
                <span class="px-10 md:px-2 lg:px-3">Press</span>
            </p>
            <a href="<?php echo get_site_url(); ?>/" class="items-center w-  mb-4 py-4 font-bold md:mb-0 hover:text-accent ">
                <span class="md:px-2 md:px-3">Home</span>
            </a>
            <a href="<?php echo get_site_url(); ?>/shows" class="items-center mb-4 py-4 font-bold md:mb-0 hover:text-accent ">
                <span class="md:px-2 md:px-3">Shows</span>
            </a>
            <a href="<?php echo get_site_url(); ?>/press-releases" class=" items-center mb-4 py-4 font-bold md:mb-0 hover:text-accent ">
                <span class="md:px-2 md:px-3">Press releases</span>
            </a>
            <a href="<?php echo get_site_url(); ?>/press-packs" class="items-center mb-4 py-4 font-bold md:mb-0 hover:text-accent">
                <span class="md:px-2 md:px-3">Press packs</span>
            </a>
            <a class="items-center mb-4 py-4 font-bold md:mb-0 hover:text-accent">
                <span class="md:px-2 md:px-3">Search</span>
            </a>
            <a href="<?php echo get_site_url(); ?>/contact" class="items-center mb-4 py-4 font-bold md:mb-0 hover:text-accent">
                <span class="md:px-2 md:px-3">Contact</span>
            </a>
            <a href="tel:020 555 4444" class="md:hidden lg:flex pr-2 py-4 lg:pr-10 font-bold md:ml-auto items-center mb-4 md:mb-0">
                <img class="hidden lg:block" src="<?php bloginfo('template_directory'); ?>/img/icon-speech.svg" alt="contact">
                <span class="ml-2 font-bold"><span class="sm:inline md:hidden xl:inline">Press office:</span> 020 555 4444</span>
            </a>
        </div>
    </div>
    <div class="z-10  mx-auto  relative md:pl-0 md:pr-0 mt-2 px-4 ">
        <div class="container max-w-7xl flex md:flex-row items-center">
            <input type="text" class="px-5 h-14 md:h-10 md:text-xs placeholder:text-accent py-4 md:py-3 border rounded-lg mr-2 md:mr-5 w-4/5  text-accent" placeholder="Search the press site">
            <button class="w-1/5 py-3  h-14 md:h-10 btn-primary">
                <img src="<?php bloginfo('template_directory'); ?>/img/icon-search.svg" alt="Search" class="mx-auto -mt-1">
            </button>
        </div>
    </div>
    <?php if (is_front_page()) : ?>
        <div id="carousel" class="h-96 overflow-hidden relative rounded-lg bg-no-repeat bg-cover bg-gray-200 bg-center -mt-20 md:-mt-20 block relative z-0">
            <?php
            // shows
            $args_query = array(
                'post_type' => array('shows'),
                'post_status' => array('published'),
                'posts_per_page' => 5,
                'order' => 'DESC',
            );
            $query = new WP_Query($args_query);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <div class="relative z-10 h-96 border">
                        <img src="<?php the_post_thumbnail_url() ?>" class="absolute h-96 top-0 z-0  w-full object-cover left-0">
                        <div :style="'left:'+paddingLeft" class="text-white absolute bg-greentransparent w-5/6 md:w-80 p-4 mb:w-auto text-left rounded-lg bottom-5 hover:bg-turq">
                            <a href="<?php the_permalink() ?>">
                                <p>Just released</p>
                                <h1 class="text-3xl font-bold"><?php the_title() ?></h1>
                            </a>
                        </div>
                    </div>
            <?php  }
            }
            wp_reset_postdata();
            ?>
        </div>
    <?php endif; ?>
    <?php if (is_post_type_archive() == 'shows') : ?>
        <div class=" h-56 relative rounded-lg bg-no-repeat bg-cover bg-gray-200 bg-center -mt-20 md:-mt-20 block relative z-0" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/header.jpg')">
            <div :style="'left:'+paddingLeft" class="text-white absolute  w-5/6 md:w-80 p-4 mb:w-auto text-left rounded-lg bottom-5 ">
                <h1 class="text-3xl font-bold capitalize"><?php the_archive_title() ?></h1>
            </div>
        </div>
        <div class="container  max-w-7xl ">
            <ul class="bg-white bg-white w-full overflow-scroll md:overflow-hidden rounded-xl -mt-3 drop-shadow-xl z-5 relative box-shadow-xl border flex px-5 py-5">
                <li @click="showFilter.selected = option" v-for="(option, i) in showFilter.options" class="ease-out min-w-max duration-500 py-4 px-7 mr-2 text-sm rounded-xl cursor-pointer border" :class="showFilter.selected == option ? 'hover:bg-turqDark text-white bg-turq' : 'text-turq hover:bg-gray-200'">{{option}}</li>
            </ul>
        </div>
    <?php endif; ?>
    <?php if (get_post_type(get_the_ID()) == 'shows' && !is_post_type_archive()) : ?>
        <div class=" h-96 relative rounded-lg bg-no-repeat bg-cover bg-gray-200 bg-center -mt-20 md:-mt-20 block relative z-0" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
            <div class="container max-w-7xl">
                <h1 class="absolute pl-3 pl-0 bottom-5 text-4xl font-bold text-white"></h1>
            </div>
        </div>
    <?php endif; ?>
</header>