const CARD_HEADER_ICON_SELECTOR = '.card-header__icon i';
const CARD_HEADER_SELECTOR = '.card-header';
const FAQ_COLLAPSE_SELECTOR = '.faq .accordion .collapse';
const MINUS_ICON_CLASS = 'fa-minus';
const PLUS_ICON_CLASS = 'fa-plus';
const ACTIVE_CLASS = 'active';

$(FAQ_COLLAPSE_SELECTOR).on('hide.bs.collapse', function (e) {
    toggleElement(e);
});

$(FAQ_COLLAPSE_SELECTOR).on('show.bs.collapse', function (e) {
    toggleElement(e);
});

function toggleElement(e){
    const cardHeaderHandler = $(e.target).siblings(CARD_HEADER_SELECTOR)[0];
    const cardHandler = $(e.target).parent()[0];
    const iconHandler = cardHeaderHandler.querySelectorAll(CARD_HEADER_ICON_SELECTOR)[0];

    toggleClass(iconHandler, MINUS_ICON_CLASS);
    toggleClass(iconHandler, PLUS_ICON_CLASS);
    toggleClass(cardHandler, ACTIVE_CLASS);
}

function toggleClass(nodeElement, className) {
    nodeElement.classList.toggle(className);
}
