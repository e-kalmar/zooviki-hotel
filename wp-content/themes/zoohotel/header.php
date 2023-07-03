<?php wp_head(); ?>

<header>
   <nav class="navbar navbar-expand-lg mb-5 p-3 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <div class="logo-text-container zoo-hotel-logo-container">
                    <img src="https://zooviki.eu/wp-content/uploads/2020/05/logo-zoo.png" alt="Logo">
                    <span class="logo-title">Зоохотел Вики</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo site_url() . '/' ?>">Хотел</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() . '/pricing/' ?>">Цени</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() . '/faq/' ?>">Въпроси</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() . '/gallery/' ?>">Галерия</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() . '/contacts/' ?>">Контакти</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<button id="back-to-top-btn"><i class="fas fa-angle-up"></i></button>

<input type="hidden" name="url" value="<?php echo get_rest_url(null,'zoohotel-plugin/submit-booking-form') ?>">
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("wp_rest")?>">