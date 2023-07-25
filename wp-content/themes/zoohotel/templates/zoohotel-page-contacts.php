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
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Имате въпрос ? Не се колебайте и веднага се свържете с нас. Нашият екип ще се свърже с вас за да ви помогне</p>
    
      <div class="row">
    
          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form needs-validation" novalidate>

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <label for="name" class="form-label">Име</label>
                              <input type="text" id="name" name="name" class="form-control" required>
                              <div class="invalid-feedback">Моля въведете вашето име.</div>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <label for="email" class="form-label">Имейл адрес</label>
                              <input type="email" id="email" name="email" class="form-control" required>
                              <div class="invalid-feedback">Моля въведете валиден имейл адрес.</div>
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <br/>

                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <label for="subject" class="form-label">Тема</label>
                              <input type="text" id="subject" name="subject" class="form-control" required>
                              <div class="invalid-feedback">Моля напишете кратко описание на вашия въпрос.</div>
                          </div>
                      </div>
                  </div>
                  <br/>

                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <div class="md-form">
                              <label for="message" class="form-label">Съобщение</label>
                              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                              <div class="invalid-feedback">Моля задайте вашия въпрос.</div>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->
                          <br/>
              <div class="text-center text-md-left">
                  <button type="submit" id="submit-btn" class="btn btn-primary">Изпрати <span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span></button>
              </div>
              </form>


              <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>Гр. Бургас Ж.К. Ветрен</p>
                  </li>

                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+359 887 654 321</p>
                  </li>

                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>support@pethotelviki.eu</p>
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