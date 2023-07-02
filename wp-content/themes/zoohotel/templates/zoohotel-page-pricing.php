<?php
/** * Template Name: Pricing Page * *
 * @package WordPress
 * @subpackage zoohotel
 * @since zoohotel 1.0 */
wp_head();
get_header();
?>

<!-- PAGE TEMPLATE STARTS HERE -->
<div class="container">
  <div class="row">
    <h1 class="text-center" style="font-family: pattaya;">Ценоразпис:</h1>
    <div class="card p-3 m-5 col">
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-2-380x312.jpg" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#!" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#pricing-01">Show more</a>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="pricing-01" tabindex="-1" aria-labelledby="pricing-01Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pricing-01Label">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">...</div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

    <div class="card p-3 m-5 col">
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-2-380x312.jpg" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#!" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#pricing-02">Show more</a>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="pricing-02" tabindex="-1" aria-labelledby="pricing-02Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pricing-02Label">Modal title</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">...</div>
    <!--       <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <div class="card p-3 m-5 col">
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-2-380x312.jpg" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#!" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#pricing-03">Show more</a>
      </div>
    </div>
  </div>
    <!-- Modal -->
    <div class="modal fade" id="pricing-03" tabindex="-1" aria-labelledby="pricing-03Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pricing-03Label">Modal title</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">...</div>
    <!--       <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
</div>
<?php
get_footer();
?>