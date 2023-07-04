<?php get_header(); ?>

<div class="container">

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(141).webp" alt="First slide">
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).webp" alt="Second slide">
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).webp" alt="Third slide">
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

  <h1 class="title h1 my-4">The responsive-font-size mixin</h1>
  <article class="article">
    <h2 class="article__title">Automated font-size rescaling with SCSS</h2>
    <div class="article__date">2017/12/21</div>
    <div class="article__content">This text automatically rescales thanks to the <a href="https://github.com/MartijnCuppens/postcss-rfs">RFS
        mixin</a>. It uses the RFS algorithm to automatically calculate the appropriate font size based on the dimensions
      of the monitor or device.
    </div>
  </article>
  <article class="article">
    <h2 class="article__title">PostCSS alternative</h2>
    <div class="article__content">A <a href="https://github.com/MartijnCuppens/postcss-rfs" target="_blank">PostCSS
        plugin</a> is available which uses the "responsive-font-size" property.</div>
  </article>
  <article class="article">
    <h2 class="article__title">RFS in Bootstrap?</h2>
    <div class="article__content">Currenty there is an open feature-request to put RFS in Bootstrap: <a href="https://github.com/twbs/bootstrap/issues/23053">Responsive
        font sizes</a>. The result of RFS in Bootstrap is shown on <a href="http://martijncuppens.github.io/rfs/">the
        bootstrap RFS demo site</a>.</div>
  </article>
</div>

<?php get_footer();