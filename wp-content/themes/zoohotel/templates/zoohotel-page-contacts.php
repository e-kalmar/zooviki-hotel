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
    <div class="content-wrap shadow p-3 mb-5 rounded p-4">
        <img src="<?php echo get_template_directory_uri() . "/assets/media/img/contact-us.png"; ?>"
            class="img-fluid z-depth-1 header-image" alt="Contact us image">

        <h3 class="text-center w-responsive mx-auto mb-5 text-fluid" style="font-family: cursive;">Имате въпрос?<br>Не се колебайте и веднага се
            свържете с нас.<br>Нашият екип ще се свърже с вас за да ви помогне.</h3>

        <form id="contact-form" name="contact-form needs-validation">
            <div class="form-group">
                <label for="name" class="form-label">Име</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <div class="invalid-feedback">Моля въведете вашето име.</div>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Имейл адрес</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <div class="invalid-feedback">Моля въведете валиден имейл адрес.</div>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Тема</label>
                <input type="text" id="subject" name="subject" class="form-control" required>
                <div class="invalid-feedback">Моля напишете кратко описание на вашия въпрос.</div>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Съобщение</label>
                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"
                    required></textarea>
                <div class="invalid-feedback">Моля задайте вашия въпрос.</div>
            </div>
            <br />
            <div class="text-center text-md-left">
                <button type="submit" id="submit-btn" class="btn btn-primary">Изпрати <span id="loader"
                        class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
                        hidden></span></button>
            </div>
            <br><br>
            <ul class="list-group">
                <li class="list-group-item active">
                <i class="fas fa-map-marker-alt fa-2x"></i><span class="float-end">Гр. Бургас, ж-к Ветрен</span>
                </li>
                <li class="list-group-item active">
                    <i class="fas fa-envelope fa-2x"></i><span class="float-end">support@pethotelviki.eu</span>
                </li>
                <li class="list-group-item active">
                <i class="fas fa-phone fa-2x"></i><span class="float-end">+359 887 654 321</span>
                </li>
            </ul>
            <div class="status"></div>
        </form>
        <!--Grid column-->
    </div>
</div>

<!-- Success Modal -->
<div class="modal" aria-hidden="true" tabindex="-1" role="dialog" id="success-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Успешно изпращане !</h5>
            </div>
            <div class="modal-body">
                <p>Вие успешно изпратихте вашето запитване.<br />
                    Наш служител ще се свърже с вас за да отговори на въпросите ви.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-btn">Затвори</button>
            </div>
        </div>
    </div>
</div>

<!--Section: Contact v.2-->
<?php get_footer();