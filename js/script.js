'use strict';


const NAVBAR_HEADER_SELECTOR = '.navbar';
const NAVBAR_HEADER_COLLAPSED_CLASS = 'navbar__collapsed';
const NAVBAR_HEADER_INVERSED_CLASS = 'navbar__inversed';
const $navbarHandler = $(NAVBAR_HEADER_SELECTOR)[0];

$(document).ready(() => {
    smoothScrolling();

    $(window).on('scroll', (e) => {
        const isCollapsed = isNavbarCollapsed();
        changeNavbarState(isCollapsed);
    });
});

function changeNavbarState(isCollapsed) {
    if (isCollapsed) {
        $navbarHandler.classList.add(NAVBAR_HEADER_COLLAPSED_CLASS, NAVBAR_HEADER_INVERSED_CLASS);
    } else {
        $navbarHandler.classList.remove(NAVBAR_HEADER_COLLAPSED_CLASS, NAVBAR_HEADER_INVERSED_CLASS);
    }
}

function isNavbarCollapsed() {
    return (window.pageYOffset > 200);
}

function smoothScrolling() {
    $(`${NAVBAR_HEADER_SELECTOR} a.nav-link`).on('click', function (event) {
        if (this.hash !== "") {

            var hash = this.hash;
            const offset = $(hash).offset();

            if (!!offset) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 500, function () {
                    window.location.hash = hash;
                });
            }
        }
    });
}

function setCookie(cookieName, cookieValue, cookieExpireDays){
    var date = new Date();

    date.setTime(date.getTime() + (cookieExpireDays*24*60*60*1000));
    var expires = "expires="+date.toUTCString();
    document.cookie = cookieName+"="+cookieValue+";"+expires+";path=/";
}

function getCookie(cookieName){
    var cookieName = cookieName+"=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(";");
    for(var i = 0; i < cookieArray.length; i++){
        var cookie = cookieArray[i];
        while(cookie.charAt(0) == ' '){
            cookie = cookie.substring(1);
        }
        if(cookie.indexOf(cookieName) == 0){
            return cookie.substring(cookieName.length, cookie.length);
        }
    }
    return "";
}
