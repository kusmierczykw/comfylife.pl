const SEARCH_BAR_ID = 'search-bar';
const SEARCH_BUTTON_TOGGLER_ID = 'search-button-toggler';
const SEARCH_BUTTON_CLOSE_ID = 'search-bar-button-close';
const SEARCH_FORM_CONTROL_CLASS = 'form-control';

// Handlers
const SEARCH_BAR_HANDLER = $('#' + SEARCH_BAR_ID);
const SEARCH_FORM_CONTROL_HANDLER = $('#' + SEARCH_BAR_ID + ' .' + SEARCH_FORM_CONTROL_CLASS);
const SEARCH_BUTTON_TOGGLER_HANDLER = $('#' + SEARCH_BUTTON_TOGGLER_ID);
const SEARCH_BUTTON_CLOSE = $('#' + SEARCH_BUTTON_CLOSE_ID);

function clickOutside(event) {
    const clickedInside = $.contains(SEARCH_BAR_HANDLER[0], event.target);
    if (!clickedInside) {
        SEARCH_BAR_HANDLER.slideUp(400);
    }
}

$(document).ready(() => {
    SEARCH_BUTTON_CLOSE.on('click', (e) => {
        e.preventDefault();
        SEARCH_BAR_HANDLER.slideToggle(400);
    });

    SEARCH_BUTTON_TOGGLER_HANDLER.on('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        SEARCH_BAR_HANDLER.slideToggle(400);
        SEARCH_FORM_CONTROL_HANDLER.focus();
    });
});

$(document).on('click', (e) => {
    clickOutside(e);
});
