(() => {
	"use strict";

	// INITIALIZE DATEPICKERS
	let dateToday = new Date();
	let dates = $(".date").datepicker({
		changeMonth: true,
		minDate: dateToday,
	});

	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches

	// HELPER FUNCTIONS
	// Where node is the DOM element you'd like to test for visibility
	const isHidden = (node) => {
		return (node.offsetParent === null)
	}

	const nodeCheck = (node) => {
		return node instanceof Element;
	}

	const checkTrue = (bool) => {
		return typeof bool === 'function' ? bool() == true : new Error('Argument bool is not a function');
	}

	const scrollToTopIfScrollable = (node) => {
		// Check if the modal content height is greater than the modal container height
		if (node.scrollHeight > node.clientHeight) {
			// Scroll to the top of the modal
			node.scrollTo({ top: 0, behavior: 'smooth' });
		}
	}

	const isValidPhoneNumber = (phoneNumber) => {
		const phoneRegex = /^(?:(?:\+|00)359[-.\s]?)?(?:\(\d{1,4}\)|\d{1,4}|0)?[-.\s]?\d{3}[-.\s]?\d{3}$/;
		return phoneRegex.test(phoneNumber);
	}

	// VALIDATIONS
	const reservationDateValidate = (boolCheck = true) => {
		const checkinDate = new Date(document.getElementsByName('checkin-date')[0].value);
		const checkoutDate = new Date(document.getElementsByName('checkout-date')[0].value);
		$(".validate-text").hide();

		if (document.getElementsByName('checkin-date')[0].value == '' || document.getElementsByName('checkout-date')[0].value == '') {
			$('.validate-dates-empty').fadeIn();
			boolCheck = false;
		} else $('.validate-dates-empty').fadeOut();

		if (checkoutDate < checkinDate) {
			$('.validate-dates-discrepancy').fadeIn();
			boolCheck = false;
		} else $('.validate-dates-discrepancy').fadeOut();

		if (checkinDate.toISOString() === checkoutDate.toISOString()) {
			$('.validate-dates-equal').fadeIn();
			boolCheck = false;
		} else $('.validate-dates-equal').fadeOut();

		return boolCheck;
	}

	const validateUserNames = (boolCheck = true) => {
		let userName = document.getElementById('first-name').value;
		let userFamilyName = document.getElementById('last-name').value;
		$(".validate-text").hide();

		if (userName == '') {
			$('.validate-first-name').fadeIn();
			boolCheck = false;
		} else $('.validate-first-name').fadeOut();

		if (userFamilyName == '') {
			$('.validate-last-name').fadeIn();
			boolCheck = false;
		} else $('.validate-last-name').fadeOut();

		return boolCheck;
	}

	const validatePhone = (boolCheck = true) => {
		const phoneNum = document.getElementById('client-phone').value;
		$(".validate-text").hide();

		if ( phoneNum.toString() == '' ) {
			$('.validate-phone-empty').fadeIn();
			boolCheck = false
		} else $('.validate-phone-empty').fadeOut();

		if ( !isValidPhoneNumber( phoneNum.toString() ) ) {
			$('.validate-phone-regex').fadeIn();
			boolCheck = false;
		} else $('.validate-phone-regex').fadeOut();

		return boolCheck;
	}

	const validatePetAge = (boolCheck = true) => {
		const petAge = document.getElementById('pet-age').value;
		$(".validate-text").hide();

		if ( !(/^\d{1,2}$/).test(petAge) ) {
			$('.validate-pet-age-regex').fadeIn();
			boolCheck = false
		} else $('.validate-pet-age-regex').fadeOut();

		if ( petAge == '' ) {
			$('.validate-pet-age-empty').fadeIn();
			boolCheck = false
		} else $('.validate-pet-age-empty').fadeOut();

		return boolCheck
	}

	const validatePetName = (boolCheck = true) => {
		const petName = document.getElementById('pet-name').value;
		$(".validate-text").hide();

		if ( petName == '' ) {
			$('.validate-pet-name-empty').fadeIn();
			boolCheck = false
		} else $('.validate-pet-name-empty').fadeOut();

		return boolCheck
	}

	const validatePetType = (boolCheck = true) => {
		const petType = document.getElementById('pet-type').value;
		$(".validate-text").hide();

		if ( petType == '' ) {
			$('.validate-pet-type-empty').fadeIn();
			boolCheck = false
		} else $('.validate-pet-type-empty').fadeOut();

		return boolCheck
	}

	const validateAddress = (boolCheck = true) => {
		const address = document.getElementById('client-address').value;
		$(".validate-text").hide();

		if ( address == '' ) {
			$('.validate-address-empty').fadeIn();
			boolCheck = false
		} else $('.validate-address-empty').fadeOut();

		return boolCheck
	}

	// global validations object
	var validationsObj = {
		// PAGE 1
		0: [reservationDateValidate],

		// PAGE 2
		1: [validateUserNames, validatePhone, validateAddress, validatePetName, validatePetType, validatePetAge],

		// PAGE 3
		2: [],
	}

	$(".next-btn").click(function (event) {
		let activePageIndex = $($('#progressbar li.active')[$('#progressbar li.active').length - 1]).index();
		var isPageValid = validationsObj[activePageIndex].every(checkTrue);

		if (!isPageValid) {
			scrollToTopIfScrollable($(event.target).parent('fieldset'));
			return false;
		}

		if (animating) return false;
		animating = true;
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({ opacity: 0 }, {
			step: function (now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50) + "%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
					'transform': 'scale(' + scale + ')',
					'position': 'absolute'
				});
				next_fs.css({ 'left': left, 'opacity': opacity });
			},
			duration: 800,
			complete: function () {
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".previous-btn").click(function () {
		if (animating) return false;
		animating = true;

		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({ opacity: 0 }, {
			step: function (now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1 - now) * 50) + "%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({ 'left': left });
				previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
			},
			duration: 800,
			complete: function () {
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});


	const closeModalBtn = document.querySelectorAll("fieldset .close-modal ion-icon");
	const modalWrapper = document.querySelector("div .modal-wrapper");
	const cardBtn = document.querySelectorAll(".card  .card-body .btn");
	const backToTopBtn = document.getElementById("back-to-top-btn");

	for (let i in [...cardBtn]) {
		cardBtn[i].addEventListener('click', (e) => {
			$(modalWrapper).fadeIn();
			document.getElementsByTagName('html')[0].style.overflow = 'hidden';
			$(backToTopBtn).fadeOut();

			let roomType = e.target.nextElementSibling.value;
			document.getElementsByName('room-type')[0].value = roomType;

			// Добави тип стая към заглавието на модалният прозорец.
			[...document.querySelectorAll('.roomtype-placeholder')].filter(element => element.innerHTML = e.target.parentElement.firstElementChild.innerText.toUpperCase());
		});
	}

	for (let i in [...closeModalBtn]) {
		closeModalBtn[i].addEventListener('click', (e) => {
			$(modalWrapper).fadeOut();
			document.getElementsByTagName('html')[0].style.overflow = 'auto';

			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) $(backToTopBtn).fadeIn();
			else $(backToTopBtn).fadeOut();
		});
	}

	// END
})()