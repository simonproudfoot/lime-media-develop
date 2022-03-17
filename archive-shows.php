<?php
get_header(); ?>
<div class="container max-w-7xl py-16">
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 md:gap-4 border-b-1">
        <div v-for="(show, i) in visibleShows" :key="i">
            <?php get_template_part('partials/showcard-api'); ?>
        </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4 border-b-1 mt-5">
    </div>
</div>
<?php
get_footer(); ?>