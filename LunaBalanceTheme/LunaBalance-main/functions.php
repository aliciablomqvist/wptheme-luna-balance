<?php

function luna_register_all_patterns() {
register_block_pattern(
    'luna/header-navigation',
    array(
        'title'       => 'Header Navigation',
        'description' => 'Main navigation with logo and menu',
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"3rem","right":"3rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:1.5rem;padding-right:3rem;padding-bottom:1.5rem;padding-left:3rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"35px","height":"35px","sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="http://lunabalance.local/wp-content/uploads/2026/02/mandala-1757304_1280.png" alt="Luna Balance Logo" style="width:35px;height:35px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"0.9rem","fontWeight":"300","letterSpacing":"0.15em"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0.5rem"}}},"textColor":"charcoal"} -->
<h1 class="wp-block-heading has-charcoal-color has-text-color" style="margin-top:0;margin-bottom:0;margin-left:0.5rem;font-size:0.9rem;font-weight:300;letter-spacing:0.15em">LUNA BALANCE</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"charcoal","overlayMenu":"never","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"2rem"},"typography":{"fontSize":"0.85rem","fontWeight":"300"}},"className":"luna-main-nav"} -->
<!-- wp:navigation-link {"label":"HOME","url":"#home"} /-->
<!-- wp:navigation-link {"label":"ABOUT","url":"#about"} /-->
<!-- wp:navigation-link {"label":"CLASSES","url":"#classes"} /-->
<!-- wp:navigation-link {"label":"EVENTS","url":"#events"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
        'categories'  => array('featured'),
    )
);
    
    register_block_pattern(
        'luna/hero',
        array(
            'title'       => 'Hero – Find Your Inner Peace',
            'description' => 'Hero section with cover image and centered text',
            'content'     => '<!-- wp:cover {"url":"","id":"home","dimRatio":20,"overlayColor":"base","minHeight":75,"minHeightUnit":"vh","contentPosition":"center center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover" id="home" style="min-height:75vh;padding-top:0;padding-bottom:0"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"5rem","fontWeight":"300","letterSpacing":"0.2em","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"base","fontFamily":"aboreto"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-aboreto-font-family hero-title" style="margin-bottom:0;font-size:5rem;font-weight:300;letter-spacing:0.2em;line-height:1.2">FIND YOUR<br>INNER<br>PEACE</h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"warm-clay","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-warm-clay-color has-alpha-channel-opacity has-warm-clay-background-color has-background is-style-wide" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->',
            'categories'  => array('featured'),
        )
    );

    register_block_pattern(
        'luna/philosophy-section',
        array(
            'title'       => 'The Luna Philosophy',
            'description' => 'Philosophy section with text and image',
            'content'     => '<!-- wp:group {"metadata":{"id":"about"},"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"3rem","right":"3rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-base-background-color has-background" id="about" style="padding-top:5rem;padding-right:3rem;padding-bottom:5rem;padding-left:3rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"300","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"charcoal","fontFamily":"aboreto"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-aboreto-font-family" style="margin-bottom:2rem;font-size:2.5rem;font-weight:300;letter-spacing:0.1em">THE LUNA PHILOSOPHY</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:1rem;font-size:1rem;line-height:1.8">Luna Balance is a calm and modern wellness studio.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:3rem;font-size:1rem;line-height:1.8">Designed for people seeking peace, balance and beauty from within.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
<figure class="wp-block-image aligncenter size-large has-custom-border"><img src="http://lunabalance.local/wp-content/uploads/2026/02/chelsea-shapouri-MRHavETWyv4-unsplash-1-scaled.jpg" alt="Luna Balance yoga session" style="border-radius:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"warm-clay","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-warm-clay-color has-alpha-channel-opacity has-warm-clay-background-color has-background is-style-wide" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->',
            'categories'  => array('featured'),
        )
    );

register_block_pattern(
    'luna/classes-section',
    array(
        'title'       => 'Our Classes',
        'description' => 'Classes grid with 6 cards in 3x2 layout',
        'content'     => '<!-- wp:group {"metadata":{"id":"classes"},"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"3rem","right":"3rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1200px"},"className":"classes-grid-wrapper"} -->
<div class="wp-block-group has-base-background-color has-background classes-grid-wrapper" id="classes" style="padding-top:5rem;padding-right:3rem;padding-bottom:5rem;padding-left:3rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"300","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"charcoal","fontFamily":"aboreto"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-aboreto-font-family" style="margin-bottom:2rem;font-size:2.5rem;font-weight:300;letter-spacing:0.1em">OUR CLASSES</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"4rem"}}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:4rem;font-size:0.95rem;line-height:1.8">Our classes are designed to support balance, strength, and mindfulness<br>at every stage of your journey. Each session focuses on calm movement,<br>breath awareness, and presence.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"classes-grid"} -->
<div class="wp-block-group classes-grid">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"2.5rem"},"margin":{"bottom":"2.5rem"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:2.5rem">
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Morning Flow"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Morning Flow</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">60 min · Beginner</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Deep Meditative Focus"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Deep Meditative Focus</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">90 min · Intermediate</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Kundalini Yoga"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Kundalini Yoga</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">120 min · Advanced</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"2.5rem"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Beginner Yoga Class"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Beginner Yoga Class</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">60 min · Beginner</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Classic Reiki Cleanse"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Classic Reiki Cleanse</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">45 min · Intermediate</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Advanced Asana"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Advanced Asana</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">60 min · Advanced</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:columns {"className":"extra-classes","style":{"spacing":{"blockGap":{"left":"2.5rem"},"margin":{"top":"2.5rem"}}}} -->
    <div class="wp-block-columns extra-classes" style="margin-top:2.5rem">
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Prenatal Yoga"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Prenatal Yoga</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">60 min · Beginner</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Yin Yoga"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Yin Yoga</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">75 min · Intermediate</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="" alt="Power Vinyasa"/></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"400"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.3rem"}}},"textColor":"charcoal"} -->
        <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:1.5rem;margin-bottom:0.3rem;font-size:1.1rem;font-weight:400">Power Vinyasa</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"charcoal"} -->
        <p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.85rem">90 min · Advanced</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"3.5rem"}}},"className":"more-classes-toggle"} -->
<div class="wp-block-buttons more-classes-toggle" style="margin-top:3.5rem"><!-- wp:button {"backgroundColor":"off-white","textColor":"charcoal","style":{"border":{"radius":"25px"},"typography":{"fontSize":"0.9rem","letterSpacing":"0.05em"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"0.7rem","bottom":"0.7rem"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:0.9rem;letter-spacing:0.05em"><a class="wp-block-button__link has-charcoal-color has-off-white-background-color has-text-color has-background wp-element-button" href="javascript:void(0);" style="border-radius:25px;padding-top:0.7rem;padding-right:2.5rem;padding-bottom:0.7rem;padding-left:2.5rem"><span class="show-more-text">MORE CLASSES →</span><span class="show-less-text" style="display:none;">SHOW LESS ↑</span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"warm-clay","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-warm-clay-color has-alpha-channel-opacity has-warm-clay-background-color has-background is-style-wide" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->',
        'categories'  => array('featured'),
    )
);

register_block_pattern(
    'luna/events-section',
    array(
        'title'       => 'Upcoming Events',
        'description' => 'Event carousel section with slider',
        'content'     => '<!-- wp:group {"metadata":{"id":"events"},"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"3rem","right":"3rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-base-background-color has-background" id="events" style="padding-top:5rem;padding-right:3rem;padding-bottom:5rem;padding-left:3rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"300","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"4rem"}}},"textColor":"charcoal","fontFamily":"aboreto"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-aboreto-font-family" style="margin-bottom:4rem;font-size:2.5rem;font-weight:300;letter-spacing:0.1em">UPCOMING EVENTS</h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="http://lunabalance.local/wp-content/uploads/2026/02/magic-bowls-tdP8CzIwmrs-unsplash-scaled.jpg" alt="Harmonic Reiki"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"},"spacing":{"margin":{"top":"2rem","bottom":"0.5rem"}}},"textColor":"charcoal"} -->
<h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-top:2rem;margin-bottom:0.5rem;font-size:1.5rem;font-weight:400">Harmonic Reiki</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="font-size:0.9rem">04 mars 12:00 - 13:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<p class="has-text-align-center has-warm-clay-color has-text-color" style="margin-top:1.5rem;font-size:1.5remdisplay:none!important;">● ○ ○</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2.5rem"><!-- wp:button {"backgroundColor":"sage","textColor":"base","style":{"border":{"radius":"25px"},"typography":{"fontSize":"0.9rem","letterSpacing":"0.05em"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"0.7rem","bottom":"0.7rem"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:0.9rem;letter-spacing:0.05em"><a class="wp-block-button__link has-base-color has-sage-background-color has-text-color has-background wp-element-button" style="border-radius:25px;padding-top:0.7rem;padding-right:2.5rem;padding-bottom:0.7rem;padding-left:2.5rem">BOOK NOW</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"warm-clay","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-warm-clay-color has-alpha-channel-opacity has-warm-clay-background-color has-background is-style-wide" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->',
        'categories'  => array('featured'),
    )
);
register_block_pattern(
    'luna/social-links',
    array(
        'title'       => 'Social Media Links',
        'description' => 'Footer social media links',
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"2rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:3rem;padding-bottom:2rem"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"6rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"0.75rem","fontWeight":"400","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"charcoal"} -->
<h4 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:0.5rem;font-size:0.75rem;font-weight:400;letter-spacing:0.1em">INSTAGRAM</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"0.75rem","fontWeight":"400","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"charcoal"} -->
<h4 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:0.5rem;font-size:0.75rem;font-weight:400;letter-spacing:0.1em">FACEBOOK</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"0.75rem","fontWeight":"400","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"charcoal"} -->
<h4 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:0.5rem;font-size:0.75rem;font-weight:400;letter-spacing:0.1em">LINKEDIN</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"0.75rem","fontWeight":"400","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"charcoal"} -->
<h4 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:0.5rem;font-size:0.75rem;font-weight:400;letter-spacing:0.1em">YOUTUBE</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"warm-clay","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-warm-clay-color has-alpha-channel-opacity has-warm-clay-background-color has-background is-style-wide" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->',
        'categories'  => array('featured'),
    )
);

register_block_pattern(
    'luna/footer',
    array(
        'title'       => 'Footer with Contact',
        'description' => 'Footer section with contact information',
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"2rem","left":"3rem","right":"3rem"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:3rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"6rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"0.9rem","fontWeight":"400","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"charcoal"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color" style="margin-bottom:1rem;font-size:0.9rem;font-weight:400;letter-spacing:0.05em">CONTACT US</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.8"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.8rem;line-height:1.8">lunabalance@luna.com<br><br>Luna Balance<br>123 · Stockholm</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"0.7rem"}},"textColor":"charcoal"} -->
<p class="has-text-align-right has-charcoal-color has-text-color" style="font-size:0.7rem">© 2025 Luna Balance</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
        'categories'  => array('featured'),
    )
);


}

add_filter('jpeg_quality', function() { return 100; });
add_filter('wp_editor_set_quality', function() { return 100; });

function luna_enqueue_mobile_styles() {
    wp_enqueue_style(
        'luna-mobile-overrides',
        get_template_directory_uri() . '/assets/css/mobile.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'luna_enqueue_mobile_styles');
add_action('init', 'luna_register_all_patterns');


function luna_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'luna'),
    ));
}
add_action('after_setup_theme', 'luna_register_menus');

function luna_enqueue_animations() {
    wp_enqueue_style('luna-animations', get_template_directory_uri() . '/assets/css/animations.css', array(), '1.0.0');
    wp_enqueue_script('luna-animations-js', get_template_directory_uri() . '/assets/js/animations.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'luna_enqueue_animations');

add_action('wp_enqueue_scripts', function () {
    wp_add_inline_script(
        'wp-blocks',
        'document.documentElement.style.scrollBehavior = "smooth";'
    );
});


add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => __('Primary Menu', 'lunabalance'),
    ]);
});