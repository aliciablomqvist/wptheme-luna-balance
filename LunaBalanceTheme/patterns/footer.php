<?php

return array(
    'title' => 'Footer with Contact',
    'description' => 'Footer section with contact information',
    'categories' => array('featured'),
    'content' => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"2rem","left":"3rem","right":"3rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:3rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"6rem"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"50%","verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%">
            <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"0.9rem","fontWeight":"400","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"charcoal"} -->
            <h4 class="wp-block-heading has-charcoal-color has-text-color" style="margin-bottom:1rem;font-size:0.9rem;font-weight:400;letter-spacing:0.05em">CONTACT US</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.8"}},"textColor":"charcoal"} -->
            <p class="has-charcoal-color has-text-color" style="font-size:0.8rem;line-height:1.8">lunabalance@luna.com<br><br>Luna Balance<br>123 · Stockholm</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%">
            <!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"0.7rem"}},"textColor":"charcoal"} -->
            <p class="has-text-align-right has-charcoal-color has-text-color" style="font-size:0.7rem">© 2025 Luna Balance</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
    ',
);
