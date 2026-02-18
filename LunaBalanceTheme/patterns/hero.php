<?php
return array(
    'title' => 'Hero – Find Your Inner Peace',
    'description' => 'Hero section with cover image and centered text',
    'categories' => array('featured'),
    'content' => '
<!-- wp:cover {"id":"home","dimRatio":20,"overlayColor":"base","minHeight":75,"minHeightUnit":"vh"} -->
<div class="wp-block-cover" id="home" style="min-height:75vh">
    <span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-20 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"5rem","fontWeight":"300","letterSpacing":"0.2em","lineHeight":"1.2"}},"textColor":"base","fontFamily":"aboreto"} -->
            <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-aboreto-font-family hero-title" style="font-size:5rem;font-weight:300;letter-spacing:0.2em;line-height:1.2">FIND YOUR<br>INNER<br>PEACE</h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->

<!-- wp:separator {"backgroundColor":"warm-clay","className":"is-style-wide"} -->
<hr class="wp-block-separator has-warm-clay-background-color has-background is-style-wide"/>
<!-- /wp:separator -->
    ',
);
