'use strict';
const NEWSLETTER_ID = 'newsletter';
const TIMEOUT = 3000;

let $newsletterHandle = $('#' + NEWSLETTER_ID);
let $newsletterCloseButtonHandle = $('#newsletter .newsletter--close');

const NEWSLETTER_COOKIE_KEY = 'newsletter';


$(document).ready(() => {
    if (getCookie(NEWSLETTER_COOKIE_KEY) == "") {
        setTimeout(() => {
            $newsletterHandle.fadeIn('fast');
        }, TIMEOUT);
    }

    $newsletterCloseButtonHandle.on('click', () => {
        setCookie(NEWSLETTER_COOKIE_KEY, "isSet", 1);
        $newsletterHandle.fadeOut('fast');
    });
});
