'use strict';
const NEWSLETTER_ID = 'newsletter';
const TIMEOUT = 3000;

let $newsletterHandle = $('#' + NEWSLETTER_ID);
let $newsletterCloseButtonHandle = $('#newsletter .newsletter--close');

$newsletterCloseButtonHandle.on('click', () => {
    $newsletterHandle.fadeOut('fast');
});

$(document).ready(() => {
    setTimeout(() => {
        $newsletterHandle.fadeIn('fast');
    }, TIMEOUT)
});
