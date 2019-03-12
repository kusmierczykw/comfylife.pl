'use strict';

const NAVBAR_HEADER_SELECTOR = '.navbar';
const NAVBAR_HEADER_COLLAPSED_CLASS = 'navbar__collapsed';
const NAVBAR_HEADER_INVERSED_CLASS = 'navbar__inversed';

const $navbarHandler = $(NAVBAR_HEADER_SELECTOR)[0];

$(document).ready(() => {
    changeNavbarClass();

    $(window).on('scroll', (e) => {
        changeNavbarClass();
    });

});

function changeNavbarClass(){
    if(window.pageYOffset > 200){
        $navbarHandler.classList.add(NAVBAR_HEADER_COLLAPSED_CLASS, NAVBAR_HEADER_INVERSED_CLASS);
    }else{
        $navbarHandler.classList.remove(NAVBAR_HEADER_COLLAPSED_CLASS, NAVBAR_HEADER_INVERSED_CLASS);
    }
}
