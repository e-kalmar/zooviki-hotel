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
    const URL   = queries.ajaxurl;
    const NONCE = document.querySelector('input[name="nonce"]').value;

    deleteFormBtn.classList.add('disabled');

    servicesTableRows.forEach(row => {
      if ( row.querySelector(".table-row-id").innerText == ID ) {
        row.remove();
        createFormBtn.style.display = 'inline-block';
        updateFormBtn.style.display = 'none';
        clearFormBtn.style.display  = 'none';
        deleteFormBtn.style.display = 'none';
      }
    })
    // FETCH
    let requestData = {
      action: "delete",
      id: ID,
      nonce: NONCE,
    };
      
    // Initiating AJAX request 
    return fetch(URL, {
      method:"post",
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams(requestData).toString(),
    })
  })
  
  updateFormBtn.addEventListener('click', async (e) => {
    const ID    = servicesForm.querySelector('input[name="url-id"]').value;
    const URL   = queries.ajaxurl;
    const NONCE = document.querySelector('input[name="nonce"]').value;

    updateFormBtn.classList.add('disabled');

    servicesTableRows.forEach(row => {
      if ( row.querySelector(".table-row-id").innerText == ID ) {
        row.querySelector('.table-row-service').innerText     = servicesForm.querySelector('#service').value;
        row.querySelector('.table-row-price').innerText       = servicesForm.querySelector('#price').value;
        row.querySelector('.table-row-description').innerText = servicesForm.querySelector('#description').value;
        row.querySelector('.table-row-category').innerText    = servicesForm.querySelector('#category').value;

        createFormBtn.style.display = 'inline-block';
        updateFormBtn.style.display = 'none';
        clearFormBtn.style.display  = 'none';
        deleteFormBtn.style.display = 'none';
      }
    })

    // FETCH
    let requestData = {
      action: "update",
      id: ID,
      service:      servicesForm.querySelector('#service').value,
      price:        servicesForm.querySelector('#price').value,
      description:  servicesForm.querySelector('#description').value,
      category:     servicesForm.querySelector('#category').value,
      nonce:        NONCE,
    };

    return fetch(URL, {
      method:"post",
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams(requestData).toString(),
    })
  })
})