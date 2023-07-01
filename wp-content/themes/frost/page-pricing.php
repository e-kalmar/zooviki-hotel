<?php
/**
 * Title: Sample pricing page.
 * Slug: page-pricing
 * Categories: page
 */
?>
<?php get_header('default'); ?>
<?php wp_head(); ?>

<body>
  <div class="container">
    <h1 class="text-center mt-5">Нашите Стаи</h1>
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card">
        <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-2-380x312.jpg" class="card-img-top"/>
          <div class="card-header text-center">
            <h3>Малка стая</h3>
          </div>
          <div class="card-body">
            <h4 class="card-title text-center"></h4>
            <ul class="list-unstyled">
              <li>2 квадратни метра</li>
              <li>без двор</li>
            </ul>
            <a href="#" class="btn btn-primary btn-block">36 лв.</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
        <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-2-380x312.jpg" class="card-img-top"/>
          <div class="card-header text-center">
            <h3>Малка стая с двор</h3>
          </div>
          <div class="card-body">
            <h4 class="card-title text-center"></h4>
            <ul class="list-unstyled">
              <li>Feature 1</li>
              <li>Feature 2</li>
              <li>Feature 3</li>
              <li>Feature 4</li>
            </ul>
            <a href="#" class="btn btn-primary btn-block">48 лв.</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
            <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-2-380x312.jpg" class="card-img-top"/>
          <div class="card-header text-center">
            <h3>VIP Апартамент</h3>
          </div>
          <div class="card-body">
            <h4 class="card-title text-center"></h4>
            <ul class="list-unstyled">
              <li>Feature 1</li>
              <li>Feature 2</li>
              <li>Feature 3</li>
              <li>Feature 4</li>
              <li>Feature 5</li>
            </ul>
            <a href="#" class="btn btn-primary btn-block">78 лв.</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer('default'); ?>
</body>