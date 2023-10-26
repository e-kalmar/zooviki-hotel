<?php
/** * Template Name: Contacts Page * *
 * @package WordPress
 * @subpackage zoohotel
 * @since zoohotel 1.0 */

get_header();
?>

<!-- PAGE TEMPLATE STARTS HERE -->
<!--Section: Contact v.2-->
<div class="container-fluid zoohotel-contacts-page">
    <div class="content-wrap shadow p-3 mb-5 rounded p-4">
        <h1 class="text-center w-responsive mx-auto mb-5 text-fluid">
            <span class="contact-us-header">СВЪРЖЕТЕ СЕ С НАС.</span>
        </h3>
        <h5 class="text-center w-responsive mx-auto mb-5 text-fluid">
                <br>Напишете ни съобщение чрез формата, или просто ни изпратете имейл директно на Zooviki.office@gmail.com
        </h5>
        <form id="contact-form" class="d-flex align-items-center flex-column" name="contact-form needs-validation">
            <div class="form-group col-md-6">
                <label for="name" class="form-label">Име</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <div class="invalid-feedback">Моля въведете вашето име.</div>
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="form-label">Имейл адрес</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <div class="invalid-feedback">Моля въведете валиден имейл адрес.</div>
            </div>
            <div class="form-group col-md-6">
                <label for="subject" class="form-label">Тема</label>
                <input type="text" id="subject" name="subject" class="form-control" required>
                <div class="invalid-feedback">Моля напишете кратко описание на вашия въпрос.</div>
            </div>
            <div class="form-group col-md-6">
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
            <ul class="list-group col-md-12 col-lg-6 col-sm-12">
                <li class="list-group-item active">
                    <i class="fas fa-map-marker-alt fa-2x"></i><span class="float-end badge bg-primary text-wrap p-2">кв. Ветрен улица 4-та, Стопански двор (Бившата кравеферма)</span>
                </li>
                <li class="list-group-item active">
                    <i class="fas fa-envelope fa-2x"></i><span class="float-end badge bg-primary text-wrap p-2">zooviki.office@gmail.com</span>
                </li>
                <li class="list-group-item active">
                    <i class="fas fa-phone fa-2x"></i><span class="float-end badge bg-primary text-wrap p-2">0898 42 83 35 / 0878 93 99 96</span>
                </li>
                <li class="list-group-item active">
                    <i class="fa-solid fa-clock fa-2x"></i><span class="float-end badge bg-primary text-wrap p-2">Всеки ден - 9:30 - 19:30</span>
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
                <h5 class="modal-title text-success">Успешно изпращане !</h5>
            </div>
            <div class="modal-body">
                <p>Вие успешно изпратихте вашето запитване.<br />
                    Наш служител ще се свърже с вас за да отговори на въпросите ви.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn action-button btn-secondary" data-bs-dismiss="modal" id="close-btn">Затвори</button>
            </div>
        </div>
    </div>
</div>
<link rel="preconnect" href="https://fonts.googleapis.com"> 

<link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
<!--Section: Contact v.2-->
<?php get_footer();