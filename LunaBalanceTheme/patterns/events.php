<?php

return array(
    'title' => 'Upcoming Events',
    'description' => 'Event carousel section with slider',
    'categories' => array('featured'),
    'content' => '
<!-- wp:group {"metadata":{"id":"events"},"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"3rem","right":"3rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-base-background-color has-background" id="events" style="padding-top:5rem;padding-right:3rem;padding-bottom:5rem;padding-left:3rem">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"300","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"4rem"}}},"textColor":"charcoal","fontFamily":"aboreto"} -->
    <h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-aboreto-font-family" style="margin-bottom:4rem;font-size:2.5rem;font-weight:300;letter-spacing:0.1em">UPCOMING EVENTS</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
                <img src="http://lunabalance.local/wp-content/uploads/2026/02/magic-bowls-tdP8CzIwmrs-unsplash-scaled.jpg" alt="Harmonic Reiki"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"},"spacing":{"margin":{"top":"2rem","bottom":"0.5rem"}}},"textColor":"charcoal"} -->
            <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:2rem;margin-bottom:0.5rem;font-size:1.5rem;font-weight:400">Harmonic Reiki</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
            <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.9rem">04 mars 12:00 - 13:30</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
            <div class="wp-block-buttons" style="margin-top:2.5rem">
                <!-- wp:button {"backgroundColor":"sage","textColor":"base","style":{"border":{"radius":"25px"},"typography":{"fontSize":"0.9rem","letterSpacing":"0.05em"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"0.7rem","bottom":"0.7rem"}}}} -->
                <div class="wp-block-button has-custom-font-size" style="font-size:0.9rem;letter-spacing:0.05em">
                    <a class="wp-block-button__link has-base-color has-sage-background-color has-text-color has-background wp-element-button" style="border-radius:25px;padding-top:0.7rem;padding-right:2.5rem;padding-bottom:0.7rem;padding-left:2.5rem">BOOK NOW</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"warm-clay","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-warm-clay-color has-alpha-channel-opacity has-warm-clay-background-color has-background is-style-wide" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->
    ',
);
