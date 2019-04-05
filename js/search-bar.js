const SEARCH_BAR_ID = 'search-bar';
const SEARCH_BUTTON_TOGGLER_ID = 'search-button-toggler';
const SEARCH_BUTTON_CLOSE_ID = 'search-bar-button-close';

const SEARCH_BAR_OPEN_CLASS = 'open';
const SEARCH_BAR_CLOSE_CLASS = 'close';

// Handlers
const SEARCH_BAR_HANDLER = $('#' + SEARCH_BAR_ID);
const SEARCH_BUTTON_TOGGLER_HANDLER = $('#' + SEARCH_BUTTON_TOGGLER_ID);
const SEARCH_BUTTON_CLOSE = $('#' + SEARCH_BUTTON_CLOSE_ID);

function toggleSearchBar() {
    if (SEARCH_BAR_HANDLER.hasClass(SEARCH_BAR_OPEN_CLASS)) {
        SEARCH_BAR_HANDLER.removeClass(SEARCH_BAR_OPEN_CLASS);
        SEARCH_BAR_HANDLER.addClass(SEARCH_BAR_CLOSE_CLASS);
    } else {
        SEARCH_BAR_HANDLER.removeClass(SEARCH_BAR_CLOSE_CLASS);
        SEARCH_BAR_HANDLER.addClass(SEARCH_BAR_OPEN_CLASS);
    }
}

function clickOutside(event) {
    const clickedInside = $.contains(SEARCH_BAR_HANDLER, event.target);
    if (!clickedInside) {
        toggleSearchBar();
    }
}

$(document).ready(() => {
    SEARCH_BUTTON_CLOSE.on('click', (e) => {
        e.preventDefault();
        this.toggleSearchBar();
    });

    SEARCH_BUTTON_TOGGLER_HANDLER.on('click', (e) => {
        e.preventDefault();
        toggleSearchBar();
    });
});

$(document).on('click', (e) => {
    clickOutside(e);
});
