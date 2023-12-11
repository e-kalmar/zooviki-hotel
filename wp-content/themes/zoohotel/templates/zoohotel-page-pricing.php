<?php
/** * Template Name: Pricing Page * *
 * @package WordPress
 * @subpackage zoohotel
 * @since zoohotel 1.0
*/

  global $wpdb;
  $table_name = $wpdb->prefix . "zoohotel_services";
  $results = $wpdb->get_results( "SELECT * FROM {$table_name} ORDER BY id DESC", OBJECT );

  $categories = array(
    1 => __('Престой'),
    2 => __('Къпане'),
  );

  get_header();
?>

<!-- PAGE TEMPLATE STARTS HERE -->
<div class="container-fluid zoohotel-faq-page">
  <div class="content-wrap shadow p-3 mb-5 rounded">
    <!--Section: FAQ-->
    <section>
      <div class="faq-wrapper"> 
        <div class="row">
          <div class="row mb-4">
            <h1 class="text-center mb-4 pb-2 fw-bold primary-header">Ценоразпис</h1>
            <h6 class="mb-3 question-header">ПРЕСТОЙ</h6>
            <ul>
            <?php foreach ($results as $service) { ?>
              <?php if ($service->category == 1 ): ?>
                <li>
                  <?php
                    $format = "%s - %dлв %s";
                    $description = $service->description != '' ? '| ' . $service->description . ' |' : '';
                    echo sprintf($format, $service->service, intval($service->price), $description );
                  ?>
                </li>
              <?php endif; ?>
            <?php } ?>
            </ul>
            <p>Цената включва пристигане (след 8:00) в Ден 1, нощувка и напускане. Ако кучето трябва да остане след 13:00ч., има допълнителна такса, както следва</p><br/>
            <p>При напускане на хотела след <b>13:00ч</b> се заплаща <b>100%</b> от цената на нощувка</p><br/>
            <p>Хотелът предлага отстъпки по договаряне при престой на две или повече кучета от едно домакинство, както и при престой, по-дълъг от две седмици</p>
          </div>

          <div class="row mb-4">
            <h6 class="mb-3 question-header">КЪПАНЕ</h6>
            <p>Включва: разресване, премахване на сплитания, изкъпване с професионални шампоан и балсам, подходящи за съответната козина, подсушаване със сешоар, почистване на уши.</p>
            <ul>
              <?php foreach ($results as $service) { ?>
                <?php if ($service->category == 2 ): ?>
                  <li>
                    <?php
                      $format = "%s - %dлв %s";
                      $description = $service->description != '' ? '| ' . $service->description . ' |' : '';
                      echo sprintf($format, $service->service, intval($service->price), $description );
                    ?>
                  </li>
                <?php endif; ?>
              <?php } ?>
            </ul>
          </div>
          <div class="row mb-4">
            <p>Хотел „Viki” приема възрастни и несоциални кучета, като заплащането се договаря допълнително.</p><br/>
            <p>В хотела не се приемат разгонени кучета. Ако Вашето куче се разгони по време на престоя си, препоръчително е да има човек, на когото да бъде върнато. Ако няма такава възможност, цената на нощувка е двойна за периода, в който кучето е разгонено.</p>
          </div>
        </div>
      </div>
    </section>
    <!--Section: FAQ-->
  </div>
</div>

<!-- /.MultiStep Form -->
<?php get_footer();

