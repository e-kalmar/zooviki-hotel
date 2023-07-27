<?php
/** * Template Name: Pricing Page * *
 * @package WordPress
 * @subpackage zoohotel
 * @since zoohotel 1.0 */

get_header();
?>

<!-- PAGE TEMPLATE STARTS HERE -->


<div class="container zoo-hotel-pricing-page">
  <h2 class="h1-responsive font-weight-bold text-center my-4">Ценоразпис</h2>
  <div class="row justify-content-center">
    <div class="card col-md-3 m-4 p-2">
      <img src="https://fakeimg.pl/640x360" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title text-success"><i class="fas fa-house"></i> Малка стая</h5>
        <ul class="list-group list-group-light">
          <li class="list-group-item px-3">Площ: 3 m²</li>
          <li class="list-group-item px-3">Цена: <b>24 лв.</b></li>
        </ul>
        <button class="btn btn-primary">Резервирай</button>
        <input type="hidden" name="card-room-type" value="1">
      </div>
    </div>

    <div class="card col-md-3 m-4 p-2">
      <img src="https://fakeimg.pl/640x360" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title text-success"><i class="fas fa-house"></i> Стандартна стая</h5>
        <ul class="list-group list-group-light">
          <li class="list-group-item px-3">Площ: 5 m²</li>
          <li class="list-group-item px-3">Цена: <b>36 лв.</b></li>
        </ul>
        <button class="btn btn-primary">Резервирай</button>
        <input type="hidden" name="card-room-type" value="2">
      </div>
    </div>

    <div class="card col-md-3 m-4 p-2">
      <img src="https://fakeimg.pl/640x360" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title text-success"><i class="fas fa-house"></i> Двойна стая</h5>
        <ul class="list-group list-group-light">
          <li class="list-group-item px-3">Площ: 9 m²</li>
          <li class="list-group-item px-3">Цена: <b>48 лв.</b></li>
        </ul>
        <button class="btn btn-primary">Резервирай</button>
        <input type="hidden" name="card-room-type" value="3">
      </div>
    </div>

    <div class="card col-md-3 m-4 p-2">
      <img src="https://fakeimg.pl/640x360" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title text-success"><i class="fas fa-house"></i> VIP стая</h5>
        <ul class="list-group list-group-light">
          <li class="list-group-item px-3">Видеонаблюдение</li>
          <li class="list-group-item px-3">Площ: 3 m²</li>
          <li class="list-group-item px-3">Собствен двор: 5 m²</li>
          <li class="list-group-item px-3">Цена: <b>35 лв.</b></li>
        </ul>
        <button class="btn btn-primary">Резервирай</button>
        <input type="hidden" name="card-room-type" value="4">
      </div>
    </div>

    <div class="card col-md-3 m-4 p-2">
      <img src="https://fakeimg.pl/640x360" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title text-success"><i class="fas fa-house"></i> VIP стая</h5>
        <ul class="list-group list-group-light">
          <li class="list-group-item px-3">Видеонаблюдение</li>
          <li class="list-group-item px-3">Площ: 4 m²</li>
          <li class="list-group-item px-3">Собствен двор: 5 m²</li>
          <li class="list-group-item px-3">Цена: <b>40 лв.</b></li>
        </ul>
        <button class="btn btn-primary">Резервирай</button>
        <input type="hidden" name="card-room-type" value="5">
      </div>
    </div>

    <div class="card col-md-3 m-4 p-2">
      <img src="https://fakeimg.pl/640x360" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title text-success"><i class="fas fa-house"></i> VIP стая</h5>
        <ul class="list-group list-group-light">
          <li class="list-group-item px-3">Видеонаблюдение</li>
          <li class="list-group-item px-3">Площ: 9 m²</li>
          <li class="list-group-item px-3">Собствен двор: 5 m²</li>
          <li class="list-group-item px-3">Цена: <b>48 лв.</b></li>
        </ul>
        <button class="btn btn-primary">Резервирай</button>
        <input type="hidden" name="card-room-type" value="6">
      </div>
    </div>
  </div> <!-- end of row -->
</div>

<!-- Success Modal -->
<div class="modal" aria-hidden="true" tabindex="-1" role="dialog" id="success-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success">Успешна резервация !</h5>
      </div>
      <div class="modal-body">
        <p>Вие успешно резервирахте стая за вашето куче за избрания период.<br/>
      Наш служител ще се свърже с вас за потвърждние.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal" id="close-btn">Затвори</button>
      </div>
    </div>
  </div>
</div>

<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3 modal-wrapper reservation-modal container-fluid">
        <form id="booking-handler-form" class="class-booking-handler-form">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Резервация</li>
                <li>Информация за гостите</li>
                <li>Преглед на вашата резервация</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <span class="close-modal"><ion-icon name="close-outline"></ion-icon></span>
                <h2 class="fs-title"><span class="roomtype-placeholder text-success"></span> Генерална информация</h2>
                <h3 class="fs-subtitle">Моля въведете нужните данни за вашата резервация</h3>
                <p class="validate-text text-danger validate-dates-discrepancy">Датата ви на напускане не може да бъде преди датата на пристигане.</p>
                <p class="validate-text text-danger validate-dates-equal">Датата ви на напускане не може да бъде същата като датата на пристигане.</p>
                <p class="validate-text text-danger validate-dates-empty">Моля въведете дати и в двете полета.</p>

                <div class="form-group row">
                  <label for="pricing-form-date-1" class="col-form-label">Дата на пристигане</label>
                  <input type="text" name="checkin-date" class="date" id="pricing-form-date-1" >
                  <div class="invalid-feedback">Моля въведете дата на настаняване.</div>
                </div>

                <div class="form-group row">
                  <label for="pricing-form-date-2" class="col-form-label">Дата на напускане</label>
                  <input type="text" name="checkout-date" class="date" id="pricing-form-date-2">
                  <div class="invalid-feedback">Моля въведете дата напускане.</div>
                </div>

                <input type="button" name="next" class="next-btn action-button" value="Напред"/>
            </fieldset>
            <fieldset>
                <span class="close-modal"><ion-icon name="close-outline"></ion-icon></span>
                <h2 class="fs-title"><span class="roomtype-placeholder text-success"></span> Информация за гостите</h2>
                <h3 class="fs-subtitle">Моля попълнете вашите данни.</h3>
                <p class="validate-text text-danger validate-regex">Информацията въведена в някое от полетеата може би е невярна, моля прегледайте.</p>
                <p class="validate-text text-danger validate-first-name">Моля въведете вашето име.</p>
                <input type="text" id="first-name" name="first-name" placeholder="Име"/>

                <p class="validate-text text-danger validate-last-name">Моля въведете вашата фамилия.</p>
                <input type="text" id="last-name" name="last-name" placeholder="Фамилия"/>

                <p class="validate-text text-danger validate-phone-regex">Моля въведете валиден телефонен номер.</p>
                <p class="validate-text text-danger validate-phone-empty">Моля въведете телефонен номер.</p>
                <input type="tel" id="client-phone" name="client-phone" placeholder="Телефон"/>

                <p class="validate-text text-danger validate-address-empty">Моля въведете вашият адрес.</p>
                <input type="text" id="client-address" name="client-address" placeholder="Адрес"/>

                <p class="validate-text text-danger validate-pet-name-empty">Моля въведете име на вашият домашен любимец.</p>
                <input type="text" id="pet-name" name="pet-name" placeholder="Име на вашият домашен любимец"/>

                <p class="validate-text text-danger validate-pet-type-empty">Моля въведете порода на вашият домашен любимец.</p>
                <input type="text" id="pet-type" name="pet-type" placeholder="Порода"/>

                <p class="validate-text text-danger validate-pet-age-empty">Моля въведете възраста на вашият домашен любимец.</p>
                <p class="validate-text text-danger validate-pet-age-regex">Моля въведете валидна възраст на вашия домашел любимец.</p>
                <input type="number" id="pet-age" name="pet-age" placeholder="Възраст"/>

                <input type="button" name="previous" class="previous-btn action-button-previous" value="Назад"/>
                <input type="button" name="next" class="next-btn action-button" value="Напред"/>
            </fieldset>
            <fieldset>
                <span class="close-modal"><ion-icon name="close-outline"></ion-icon></span>
                <h2 class="fs-title"><span class="roomtype-placeholder text-success"></span> Детайли</h2>
                <p class="text-fluid text-center pt-5">Вашата информация</p>
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">Име</th>
                      <th scope="col">Фамилия</th>
                      <th scope="col">Телефон</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="client-name"></span></td>
                      <td><span class="client-family-name"></span></td>
                      <td><span class="client-phone"></span></td>
                    </tr>
                  </tbody>
                </table>

                <p class="text-fluid text-center pt-5">Информация за вашият домашен любимец</p>
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">Име</th>
                      <th scope="col">Порода</th>
                      <th scope="col">Години</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="pet-name"></span></td>
                      <td><span class="pet-type"></span></td>
                      <td><span class="pet-age"></span></td>
                    </tr>
                  </tbody>
                </table>

                <input type="button" name="previous" class="previous-btn action-button-previous" value="Назад"/>
                <input type="submit" class="action-button" value="Резервирай"><span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span></input>
            </fieldset>
            <input type="hidden" name="room-type">
        </form>
    </div>
</div>
<!-- /.MultiStep Form -->


<?php get_footer();