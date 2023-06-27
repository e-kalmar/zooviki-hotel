<?php
/**
 * Title: Footer with text, links.
 * Slug: frost/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p> © ЗооВики 2020 - <?php echo esc_html( gmdate( 'Y' ) ); ?>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="https://www.facebook.com/ZooViki" target="_blank">Facebook</a> · <a href="https://www.instagram.com/zooviki.eu/" target="_blank">Instagram</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
