<?php
/**
 * Title: Hidden 404
 * Slug: iz-viola/hidden-404
 * Inserter: no
 */
?>
<!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"bottom":"var:preset|spacing|60"}}},"fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60);padding-top:0px;padding-bottom:0px">
        <strong><?php echo esc_html_x( 'Oops! Page not found', '404 page title', 'iz-viola' ); ?></strong>
    </h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size">
        <?php echo esc_html_x( 'Sorry but the page you are looking for could not be found.', '404 page sub-title', 'iz-viola' ); ?>
    </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">
        <?php echo esc_html_x( 'You can search the site below, or return to the front page.', '404 page user instructions', 'iz-viola' ); ?>
    </p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"iz-viola/hidden-search-field"} /-->