document.addEventListener('DOMContentLoaded', function() {
    let navDetails = document.querySelector('nav ul li details');
    let sectionDetails = document.querySelectorAll('section details');
    if (!navDetails || !sectionDetails) return;
    navDetails.onmouseover = function(event) {
        navDetails.open = true;
    }

    navDetails.onmouseout = function(event) {
        navDetails.open = false;
    }

    for (let i = 0; i < sectionDetails.length; i++) {
        sectionDetails[i].onmouseover = function(event) {
            sectionDetails[i].open = true;
        }

        sectionDetails[i].onmouseout = function(event) {
            sectionDetails[i].open = false;
        }
    }
});