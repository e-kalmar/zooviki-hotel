(() => {
    "use strict";

    // ADD ACTIVE CLASS TO THE RESPECTIVE NAV ITEM CONSIDERING THE LOADED PAGE
    $('.nav-item a[href="' + location.origin + location.pathname + '"]').parent().addClass('active');
    $('.nav-item a[href="' + location.origin + location.pathname + '"]').addClass('active');

    // NAV ITEMS 'ACTIVE' CLASS HANDLER
    const navItems = [...document.querySelectorAll('.nav-item')];

    for ( let item in navItems ) {
        let navBtn = navItems[item];
        navBtn.addEventListener('click', (e) => {
            navBtn.classList.remove('active');

            // First remove all active classes
            let elements = document.getElementsByClassName('navbar-nav')[0].children;
            for (let i = 0; i < elements.length; ++i) {
                elements[i].children[0].classList.remove("active")
                elements[i].classList.remove("active");
            }

            //... then apply active class to the appropriate item
            if ( e.target && e.target.nodeName === "LI" ) {
                e.target.classList.add("active");
                e.target.children[0].classList.add("active");
            } else if ( e.target && e.target.nodeName === "A" ) {
                e.target.classList.add("active")
                e.target.parentElement.classList.add("active");
            }
        })
    }

    // BACK ON TOP FUNCTIONALITY
    let shiftToTop = document.getElementById("back-to-top-btn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = () => scrollToTopFunc();

    const scrollToTopFunc = () => {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        shiftToTop.style.display = "block";
      } else {
        shiftToTop.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    const topFunction = () => {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    shiftToTop.addEventListener('click', (e) => topFunction())

// END
})()