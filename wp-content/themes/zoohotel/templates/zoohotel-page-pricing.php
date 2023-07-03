<?php
/** * Template Name: Pricing Page * *
 * @package WordPress
 * @subpackage zoohotel
 * @since zoohotel 1.0 */

get_header();
?>

<!-- PAGE TEMPLATE STARTS HERE -->
<div class="container">
  <h1 class="text-center" style="font-family: pattaya;">Ценоразпис:</h1>
  <div class="row justify-content-center">
    <div class="card col-md-3 m-4 p-2">
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-2-380x312.jpg" class="card-img-top img-fluid">
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
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-1-380x312.jpg" class="card-img-top img-fluid">
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
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/двойна-стая-380x312.jpg" class="card-img-top img-fluid">
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
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-2-380x312.jpg" class="card-img-top img-fluid">
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
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/малка-стая-1-380x312.jpg" class="card-img-top img-fluid">
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
      <img src="https://doghotel.bg/wp-content/uploads/2018/01/двойна-стая-380x312.jpg" class="card-img-top img-fluid">
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

<!-- Modal -->
<div class="modal fade" id="pricing-1" tabindex="-1" aria-labelledby="pricing-label-1" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pricing-label-1">Modal title</h5>
        </div>
        <form id="pricing-form-1" class="hotel-pricing-form">
          <div class="modal-body">
              <div class="form-group row">
                <label for="pricing-form-1-date-1" class="col-form-label">Пристигане</label>
                <input type="date" name="pricing-form-1-date-1" class="form-control" id="pricing-form-1-date-1">
              </div>
              <div class="form-group row">
                <label for="pricing-form-1-date-2" class="col-form-label">Заминаване</label>
                <input type="date" name="pricing-form-1-date-2" class="form-control" id="pricing-form-1-date-2">
              </div>
              <div class="form-group row">
              <label for="dogs-count" class="col-form-label">Изберете брой кучета</label>
              <select class="form-control" aria-label="Default select example" name="dogs-count"> 
                <option selected value="1">1</option>
              </select>
              <input type="number" name="room-type" value="1" hidden>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>

<!-- Modal -->
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
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>

<!-- Modal -->
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
              </select>
              <input type="number" name="room-type" value="3" hidden>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>


<?php get_footer();