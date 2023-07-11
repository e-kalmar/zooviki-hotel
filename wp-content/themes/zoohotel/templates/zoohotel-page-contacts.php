<?php
/** * Template Name: Contacts Page * *
 * @package WordPress
 * @subpackage zoohotel
 * @since zoohotel 1.0 */

get_header();
?>

<!-- PAGE TEMPLATE STARTS HERE -->
<!--Section: Contact v.2-->
<div class="container zoohotel-contacts-page">
  <img src="<?php echo get_template_directory_uri() . "/assets/media/img/contact-us.png"; ?>" class="img-fluid z-depth-1 header-image" alt="Contact us image">
  <section class="mb-4">
      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Контакти</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
          a matter of hours to help you.</p>
    
      <div class="row">

          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form">

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="name" name="name" class="form-control">
                              <label for="name" class="form-label">Your name</label>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="email" name="email" class="form-control">
                              <label for="email" class="form-label">Your email</label>
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="form-label">Subject</label>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <div class="md-form">
                              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                              <label for="message" class="form-label">Your message</label>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->
              <div class="text-center text-md-left">
                  <button type="submit" id="submit-btn" class="btn btn-primary">Send <span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span></button>
              </div>
              </form>


              <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>San Francisco, CA 94126, USA</p>
                  </li>

                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+ 01 234 567 89</p>
                  </li>

                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>contact@mdbootstrap.com</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->

      </div>
<!-- Success Modal -->
<div class="modal" aria-hidden="true" tabindex="-1" role="dialog" id="success-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Успешно изпращане !</h5>
      </div>
      <div class="modal-body">
        <p>Вие успешно изпратихте вашето запитване.<br/>
      Наш служител ще се свърже с вас за да отговори на въпросите ви.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-btn">Затвори</button>
      </div>
    </div>
  </div>
</div>
  </section>
</div>
<!--Section: Contact v.2-->
<?php get_footer();