<?php
return array(
    'title' => 'Header Navigation',
    'description' => 'Main navigation with logo and menu',
    'categories' => array('featured'),
    'content' => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"3rem","right":"3rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:1.5rem;padding-right:3rem;padding-bottom:1.5rem;padding-left:3rem">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group">
            <!-- wp:image {"width":"35px","height":"35px","sizeSlug":"thumbnail"} -->
            <figure class="wp-block-image size-thumbnail is-resized">
                <img src="http://lunabalance.local/wp-content/uploads/2026/02/mandala-1757304_1280.png" alt="Luna Balance Logo" style="width:35px;height:35px"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"0.9rem","fontWeight":"300","letterSpacing":"0.15em"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0.5rem"}}},"textColor":"charcoal"} -->
            <h1 class="wp-block-heading has-charcoal-color has-text-color" style="margin-top:0;margin-bottom:0;margin-left:0.5rem;font-size:0.9rem;font-weight:300;letter-spacing:0.15em">LUNA BALANCE</h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:navigation {"textColor":"charcoal","overlayMenu":"never","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"2rem"},"typography":{"fontSize":"0.85rem","fontWeight":"300"}},"className":"luna-main-nav"} -->
        <!-- wp:navigation-link {"label":"HOME","url":"#home"} /-->
        <!-- wp:navigation-link {"label":"ABOUT","url":"#about"} /-->
        <!-- wp:navigation-link {"label":"CLASSES","url":"#classes"} /-->
        <!-- wp:navigation-link {"label":"EVENTS","url":"#events"} /-->
        <!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
    ',
);
