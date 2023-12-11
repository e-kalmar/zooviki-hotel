document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  const servicesForm        = document.getElementById('services-form');
  const servicesTable       = document.getElementById('services-table');
  const servicesTableRows   = servicesTable.querySelectorAll('tbody tr');
  const servicesFormButtons = servicesForm.querySelector('.form-buttons');
  const updateFormBtn       = servicesFormButtons.querySelector('.update');
  const createFormBtn       = servicesFormButtons.querySelector('.create');
  const clearFormBtn        = servicesFormButtons.querySelector('.clear');
  const deleteFormBtn       = servicesFormButtons.querySelector('.delete');
  const formInputList       = servicesForm.querySelectorAll('input,textarea');

  servicesTableRows.forEach(row => {
    row.addEventListener('click', (e) => {
      const target       = e.currentTarget;
      const serviceId    = target.querySelector('.table-row-id').innerText;
      const serviceName  = target.querySelector('.table-row-service').innerText;
      const servicePrice = target.querySelector('.table-row-price').innerText;
      const serviceDescr = target.querySelector('.table-row-description').innerText;

      // Store ID
      servicesForm.querySelector('input[name="url-id"]').value = serviceId

      // Manage front end controls
      createFormBtn.style.display = 'none';
      updateFormBtn.style.display = 'inline-block';
      clearFormBtn.style.display  = 'inline-block';
      deleteFormBtn.style.display = 'inline-block';

      // Populate form fields on click
      servicesForm.querySelector('#service').value = serviceName;
      servicesForm.querySelector('#price').value = servicePrice;
      servicesForm.querySelector('#description').value = serviceDescr;

      // Scroll to up to form view
      document.body.scrollTop = document.documentElement.scrollTop = 0;
    })
  });

  clearFormBtn.addEventListener('click', () => {
    servicesForm.reset();
    createFormBtn.style.display = 'inline-block';
    updateFormBtn.style.display = 'none';
    clearFormBtn.style.display  = 'none';
    deleteFormBtn.style.display = 'none';
  })

  formInputList.forEach( input => {
    input.addEventListener('keyup', (e) => {
      const data        = Object.fromEntries(new FormData(servicesForm).entries());
      const result      = data.service + data.price + data.description;
      const isNameEmpty = data.service == '';

      if ( (result == '' && createFormBtn.style.display == 'none') || isNameEmpty ) {
        createFormBtn.style.display = 'inline-block';
        updateFormBtn.style.display = 'none';
        clearFormBtn.style.display  = 'none';
        deleteFormBtn.style.display = 'none';
      }
    })
  })

  deleteFormBtn.addEventListener('click', async (e) => {
    const ID    = servicesForm.querySelector('input[name="url-id"]').value;
    const URL   = document.getElementsByName("delete-service-url")[0].value;
    const NONCE = document.querySelector('input[name="nonce"]').value;
    console.log(NONCE);return;
    // FETCH
    // const response = await fetch(URL, {
    //   method: "POST",
    //   headers: new Headers({
    //     'Content-Type': 'application/json;charset=UTF-8',
    //     'X-WP-Nonce' : NONCE,
    //   }),
    //   body: JSON.stringify({
    //     id: ID,
    //   }),
    // });
    // const result = await response.json();

    // AJAX
    $.ajax({
      type: "post",
      url: URL,
      headers: {
          'X-WP-Nonce': NONCE,
      },
      data: {
        id: ID,
      },
      success: function (response) {
        console.log(response)
      }
    });
  })
})