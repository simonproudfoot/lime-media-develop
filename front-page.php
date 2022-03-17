<?php
get_header(); ?>

<div class="container max-w-7xl py-16">
    <!-- limit to 20 -->
    <div class="w-full pb-5 sm:flex">
        <h1 class="font-bold text-2xl">Our Shows</h1>
        <a href="shows" class="inline-flex sm:ml-auto items-center border-0 py-1 md:px-3 focus:outline-none hover:bg-gray-200 rounded text-lime md:mt-0">See More Shows
            <span class="text-black">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </span>
        </a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4 border-b-1">
        <?php
        // shows
        $args_query = array(
            'post_type' => array('shows'),
            'post_status' => array('published'),
            'posts_per_page' => 20,
            'order' => 'DESC',
        );
        $query = new WP_Query($args_query);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                get_template_part('partials/showcard');
            }
        } else {
        }
        wp_reset_postdata();
        ?>
    </div>
</div>
<div class="container max-w-7xl py-16">
    <!-- limit to 3 -->
    <div class="w-full pb-5 sm:flex">
        <h1 class="font-bold text-2xl">Press packs</h1>
        <a href="presspack" class="inline-flex sm:ml-auto items-center border-0 py-1 md:px-3 focus:outline-none hover:bg-gray-200 rounded text-xs text-lime md:mt-0">See More Press Packs
            <span class="text-black">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </span>
        </a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-2 md:gap-4">
        <?php
        // shows
        $args_query = array(
            'post_type' => array('presspack'),
            'post_status' => array('published'),
            'posts_per_page' => 3,
            'order' => 'DESC',
        );
        $query = new WP_Query($args_query);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                get_template_part('partials/showcard');
            }
        } else {
        }
        wp_reset_postdata();
        ?>
    </div>
</div>
<div class="container max-w-7xl py-16">
    <!-- limit to 4 -->
    <div class="w-full pb-5 sm:flex">
        <h1 class="font-bold text-2xl">Latest Press Releases</h1>
        <a href="pressrelease" class="inline-flex sm:ml-auto items-center border-0 py-1 md:px-3 focus:outline-none hover:bg-gray-200 rounded text-xs text-lime md:mt-0">See More Releases
            <span class="text-black">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </span>
        </a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">
        <?php
        // shows
        $args_query = array(
            'post_type' => array('pressrelease'),
            'post_status' => array('published'),
            'posts_per_page' => 4,
            'order' => 'DESC',
        );
        $query = new WP_Query($args_query);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                get_template_part('partials/showcard');
            }
        } else {
        }
        wp_reset_postdata();
        ?>
    </div>
</div>
<?php
get_footer(); ?>