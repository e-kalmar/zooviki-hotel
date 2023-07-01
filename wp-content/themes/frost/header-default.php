<?php
/**
 * Title: Header with site title, navigation.
 * Slug: frost/header-default
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:30px;padding-bottom:30px">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">


    <div class="nav">
        <a href="/" class="logo">
            <img src="https://zooviki.eu/wp-content/uploads/2020/05/logo-zoo.png" alt="Logo">
        </a>
        <div class="logo-text-container">
            <span class="logo-title">Хотел Вики</span>
            <span class="logo-title-description">Зоохотел</span>
        </div>

        <ul>
            <li><a href="<?php echo site_url() . '/home' ?>">Хотел</a></li>
            <li><a href="<?php echo site_url() . '/pricing' ?>">Цени</a></li>
            <li><a href="<?php echo site_url() . '/faq' ?>">Често Задавани Въпроси</a></li>
            <li><a href="<?php echo site_url() . '/gallery' ?>">Галерия</a></li>
            <li><a href="<?php echo site_url() . '/contacts' ?>">Контакти</a></li>
        </ul>
    </div>

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
