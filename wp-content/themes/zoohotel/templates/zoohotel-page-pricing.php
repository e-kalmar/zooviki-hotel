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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricing-1">Резервирай</button>
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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricing-2">Резервирай</button>
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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricing-3">Резервирай</button>
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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricing-4">Резервирай</button>
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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricing-5">Резервирай</button>
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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricing-6">Резервирай</button>
      </div>
    </div>
  </div> <!-- end of row -->
</div>

<!-- Success Modal -->
<div class="modal" aria-hidden="true" tabindex="-1" role="dialog" id="success-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Успешна резервация !</h5>
      </div>
      <div class="modal-body">
        <p>Вие успешно резервирахте стая за вашето куче за избрания период.<br/>
      Наш служител ще се свърже с вас за потвърждние.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-btn">Затвори</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 1 -->
<div class="modal fade" id="pricing-1" tabindex="-1" aria-labelledby="pricing-label-1" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pricing-label-1">Modal title</h5>
        </div>
        <form id="pricing-form-1" class="hotel-pricing-form needs-validation" novalidate>
          <div class="modal-body">
              <div class="form-group row">
                <label for="pricing-form-1-date-1" class="col-form-label">Пристигане</label>
                <input type="date" name="pricing-form-1-date-1" class="form-control" id="pricing-form-1-date-1" required >
                <div class="invalid-feedback">Моля въведете дата.</div>

              </div>
              <div class="form-group row">
                <label for="pricing-form-1-date-2" class="col-form-label">Заминаване</label>
                <input required type="date" name="pricing-form-1-date-2" class="form-control" id="pricing-form-1-date-2">
                <div class="invalid-feedback">Моля въведете дата.</div>
              </div>
              <div class="form-group row">
              <label for="dogs-count" class="col-form-label">Изберете брой кучета</label>
              <select required class="form-control" aria-label="Default select example" name="dogs-count"> 
                <option selected value="1">1</option>
              </select>
              <input type="number" name="room-type" value="1" hidden>
              </div>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
            <button type="submit" class="btn btn-primary" id="submit-btn">Submit <span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span>
            </button>
          </div>
        </form>
      </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="pricing-2" tabindex="-1" aria-labelledby="pricing-label-2" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pricing-label-2">Modal title</h5>
        </div>
        <form id="pricing-form-2" class="hotel-pricing-form">
          <div class="modal-body">
              <div class="form-group row">
                <label for="pricing-form-2-date-1" class="col-form-label">Пристигане</label>
                <input type="date" name="pricing-form-2-date-1" class="form-control" id="pricing-form-2-date-1">
              </div>
              <div class="form-group row">
                <label for="pricing-form-2-date-2" class="col-form-label">Заминаване</label>
                <input type="date" name="pricing-form-2-date-2" class="form-control" id="pricing-form-2-date-2">
              </div>
              <div class="form-group row">
              <label for="dogs-count" class="col-form-label">Изберете брой кучета</label>
              <select class="form-control" aria-label="Default select example" name="dogs-count"> 
                <option selected value="1">1</option>
              </select>
              <input type="number" name="room-type" value="2" hidden>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
            <button type="submit" class="btn btn-primary">Submit <span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span></button>
          </div>
        </form>
      </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="pricing-3" tabindex="-1" aria-labelledby="pricing-label-3" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pricing-label-3">Modal title</h5>
        </div>
        <form id="pricing-form-3" class="hotel-pricing-form">
          <div class="modal-body">
              <div class="form-group row">
                <label for="pricing-form-3-date-1" class="col-form-label">Пристигане</label>
                <input type="date" name="pricing-form-3-date-1" class="form-control" id="pricing-form-3-date-1">
              </div>
              <div class="form-group row">
                <label for="pricing-form-3-date-2" class="col-form-label">Заминаване</label>
                <input type="date" name="pricing-form-3-date-2" class="form-control" id="pricing-form-3-date-2">
              </div>
              <div class="form-group row">
              <label for="dogs-count" class="col-form-label">Изберете брой кучета</label>
              <select class="form-control" aria-label="Default select example" name="dogs-count"> 
                <option selected value="1">1</option>
                <option value="2">2</option>
              </select>
              <input type="number" name="room-type" value="3" hidden>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
            <button type="submit" class="btn btn-primary">Submit <span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span></button>
          </div>
        </form>
      </div>
  </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="pricing-4" tabindex="-1" aria-labelledby="pricing-label-4" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pricing-label-4">Modal title</h5>
        </div>
        <form id="pricing-form-4" class="hotel-pricing-form">
          <div class="modal-body">
              <div class="form-group row">
                <label for="pricing-form-4-date-1" class="col-form-label">Пристигане</label>
                <input type="date" name="pricing-form-4-date-1" class="form-control" id="pricing-form-4-date-1">
              </div>
              <div class="form-group row">
                <label for="pricing-form-4-date-2" class="col-form-label">Заминаване</label>
                <input type="date" name="pricing-form-4-date-2" class="form-control" id="pricing-form-4-date-2">
              </div>
              <div class="form-group row">
              <label for="dogs-count" class="col-form-label">Изберете брой кучета</label>
              <select class="form-control" aria-label="Default select example" name="dogs-count"> 
                <option selected value="1">1</option>
              </select>
              <input type="number" name="room-type" value="4" hidden>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
            <button type="submit" class="btn btn-primary">Submit <span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span></button>
          </div>
        </form>
      </div>
  </div>
</div>

<!-- Modal 5 -->
<div class="modal fade" id="pricing-5" tabindex="-1" aria-labelledby="pricing-label-5" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pricing-label-5">Modal title</h5>
        </div>
        <form id="pricing-form-5" class="hotel-pricing-form">
          <div class="modal-body">
              <div class="form-group row">
                <label for="pricing-form-5-date-1" class="col-form-label">Пристигане</label>
                <input type="date" name="pricing-form-5-date-1" class="form-control" id="pricing-form-5-date-1">
              </div>
              <div class="form-group row">
                <label for="pricing-form-5-date-2" class="col-form-label">Заминаване</label>
                <input type="date" name="pricing-form-5-date-2" class="form-control" id="pricing-form-5-date-2">
              </div>
              <div class="form-group row">
              <label for="dogs-count" class="col-form-label">Изберете брой кучета</label>
              <select class="form-control" aria-label="Default select example" name="dogs-count"> 
                <option selected value="1">1</option>
              </select>
              <input type="number" name="room-type" value="5" hidden>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
            <button type="submit" class="btn btn-primary">Submit <span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span></button>
          </div>
        </form>
      </div>
  </div>
</div>

<!-- Modal 5 -->
<div class="modal fade" id="pricing-6" tabindex="-1" aria-labelledby="pricing-label-5" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pricing-label-6">Modal title</h5>
        </div>
        <form id="pricing-form-6" class="hotel-pricing-form">
          <div class="modal-body">
              <div class="form-group row">
                <label for="pricing-form-6-date-1" class="col-form-label">Пристигане</label>
                <input type="date" name="pricing-form-6-date-1" class="form-control" id="pricing-form-6-date-1">
              </div>
              <div class="form-group row">
                <label for="pricing-form-6-date-2" class="col-form-label">Заминаване</label>
                <input type="date" name="pricing-form-6-date-2" class="form-control" id="pricing-form-6-date-2">
              </div>
              <div class="form-group row">
              <label for="dogs-count" class="col-form-label">Изберете брой кучета</label>
              <select class="form-control" aria-label="Default select example" name="dogs-count"> 
                <option selected value="1">1</option>
                <option value="2">2</option>
              </select>
              <input type="number" name="room-type" value="6" hidden>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
            <button type="submit" class="btn btn-primary">Submit <span id="loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span></button>
          </div>
        </form>
      </div>
  </div>
</div>

<?php get_footer();