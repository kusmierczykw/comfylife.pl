const COOKIE_POLICY_NAME = 'cookiePolicy';
const COOKIE_POLICY_BAR_CLOSE_BUTTON = 'cookie__close-button';
const COOKIE_POLICY_CONTAINER_CLASS_NAME = 'cookies';

$(document).ready(() => {
    if (getCookie(COOKIE_POLICY_NAME) === '') {
        $(`.${COOKIE_POLICY_CONTAINER_CLASS_NAME}`).show();
    }

    $(`.${COOKIE_POLICY_BAR_CLOSE_BUTTON}`).click(function () {
        $(`.${COOKIE_POLICY_CONTAINER_CLASS_NAME}`).hide();
        setCookie(COOKIE_POLICY_NAME, "isSet", 7);
    });
});
