<?php
    global $wpdb;
    $table_name = $wpdb->prefix . "zoohotel_services";
    $results = $wpdb->get_results( "SELECT * FROM {$table_name} ORDER BY id DESC", OBJECT );

    $categories = array(
      1 => __('Престой'),
      2 => __('Къпане'),
    );
?>
<input type='hidden' name='delete-service-url' value="<?php echo get_rest_url(null, 'zoohotel-services/delete') ?>"/>
<input name="nonce" value="<?php echo wp_create_nonce("zoo-nonce")?>" type="hidden">

<div class="container zoohotel-services-page">
  <h1 class="text-center mb-5"><u>Управление на вашите услуги</u></h1>
  <!-- Form content -->
  <div class="row mb-5">
    <form action="<?php echo admin_url('admin-ajax.php'); ?>" id="services-form" method="post" class="shadow rounded p-5">
      <h4 class="text-center text-primary">Действия</h4>
      <!-- Name -->
      <div class="form-group p-2">
        <label for="service" class="form-label text-primary">Име</label>
        <input type="text" required minlength="1" maxlength="250" id="service" name="service" class="form-control" aria-describedby="serviceHelpBlock">
        <div id="serviceHelpBlock" class="form-text">
          Въведете име на вашата услуга в рамките на 1-250 символа.
        </div>
      </div>

      <!-- Price -->
      <div class="form-group p-2">
        <label for="price" class="form-label text-primary">Цена</label>
        <input type="number" step=".01" required maxlength="99" id="price" name="price" class="form-control" aria-describedby="serviceHelpBlock">
        <div id="priceHelpBlock" class="form-text">
          Въведете цена за вашата услуга.
        </div>
      </div>

      <!-- Description -->
      <div class="form-group p-2">
        <label for="description" class="form-label text-primary">Описание (По избор)</label>
        <textarea type="text" optional maxlength="150" id="description" name="description" class="form-control" aria-describedby="serviceHelpBlock"></textarea>
        <div id="descriptionHelpBlock" class="form-text">
          Въведете описание за вашата услуга в рамките на 250 символа.
        </div>
      </div>

      <!-- Category -->
      <div class="form-group p-2">
        <div class="d-flex flex-column">
          <label for="category" class="form-label text-primary">Категория</label>
          <select id="category" name="category" aria-describedby="categoryHelpBlock">
            <option selected value="1">Престой</option>
            <option value="2">Къпане</option>
          </select>
          <div id="categoryHelpBlock" class="form-text">
            Изберете категоря на вашата услуга.
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="form-group p-2 form-buttons d-flex justify-content-between">
        <div>
          <button type="button" class="btn btn-primary update">Обнови</button>
          <button type="button" class="btn btn-warning clear">Изчисти</button>
          <button type="submit" class="btn btn-primary create">Добави</button>
        </div>

        <div>
          <button type="button" class="btn btn-danger delete">Изтрий</button>
        </div>
      </div>
      <!-- Service ID -->
      <input name="url-id" value="" type="hidden">

      <!-- Action Name -->
      <input name="action" value="add_service" type="hidden">
    </form>
  </div>

  <!-- Table content -->
  <div class="row">
    <h4 class="text-center text-primary">Услуги</h4>
    <table class="table table-bordered table-hover shadow rounded" id="services-table">
      <thead>
        <tr>
          <th scope="col" class="text-center">id</th>
          <th scope="col" class="text-center">Услуга</th>
          <th scope="col" class="text-center">Цена (лв.)</th>
          <th scope="col" class="text-center">Описание</th>
          <th scope="col" class="text-center">Категория</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($results)): ?>
          <?php foreach ($results as $service) { ?>
            <tr>
              <th scope="row" class="text-center table-row-id"><?= $service->id ?></th>
              <td class="table-row-service text-center"><?= $service->service ?></td>
              <td class="table-row-price text-center"><?= $service->price ?></td>
              <td class="table-row-description text-center"><?= $service->description ?></td>
              <td class="table-row-category text-center">
                <?php switch ($service->category) {
                    case 1: // Престой
                      echo "<h6><span class='badge badge-primary'>{$categories[$service->category]}</span></h6>";
                      break;
                    case 2: // Къпане
                      echo "<h6><span class='badge badge-secondary'>{$categories[$service->category]}</span></h6>";
                      break;
                  } ?>
              </td>
            </tr>
          <?php } ?>
        <?php else: ?>
          <tr>
            <td colspan="5">
              <h4 class="text-primary text-center">Упс, таблицата ви е празна, все още нямате въведени услуги... &#128511;</h4>
              <br><hr>
              <h6 class="text-secondary text-center">Моля, ползвайте формата по-горе за да добавите нова услуга.</h6>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>