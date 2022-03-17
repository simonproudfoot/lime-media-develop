<a href="<?php the_permalink(); ?>" class="card">
    <div class="card__imageWrap rounded-lg overflow-hidden bg-grey  bg-brandgrey">
        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption(  )?>" class="w-full object-cover aspect-video"/>
    </div>
    <div class="card__title rounded-lg relative cardShadow mt-2 text-xl py-2 px-2">
        <svg class="-top-2 absolute" width="24px" height="11px" viewBox="0 0 24 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Content-/-Card-/-2-Column-/-On" transform="translate(-18.000000, -1.000000)" fill="#fff">
                    <path d="M31.7255721,1.78507459 L41.6,12 L41.6,12 L18.4,12 L28.2744279,1.78507459 C29.1956681,0.832067432 30.7150459,0.806315267 31.668053,1.72755552 C31.6875496,1.74640222 31.7067254,1.765578 31.7255721,1.78507459 Z" id="Triangle"></path>
                </g>
            </g>
        </svg>
        <?php the_title(); ?>
    </div>
</a>