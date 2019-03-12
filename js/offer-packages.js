'use strict';

const OFFER_PACKAGES_SELECTOR = '#offer-packages';
const OFFER_PACKAGE_SINGLE_ITEM_SELECTOR = '.offer__package-item';
const OFFER_PACKAGES_SWITCHER_SELECTOR = '#offer-packages-switcher';
const OFFER_PACKAGES_SWITCHER_ITEM_SELECTOR = '.switcher-item';

// DOM Elements
const $offerPackagesHandler = $(OFFER_PACKAGES_SELECTOR);
const $packageItemsHandlers = $offerPackagesHandler.find(OFFER_PACKAGE_SINGLE_ITEM_SELECTOR);

const $offerPackagesSwitcherHandler = $(OFFER_PACKAGES_SWITCHER_SELECTOR);
const $offerPackagesSwitcherItemHandlers = $offerPackagesSwitcherHandler.find(OFFER_PACKAGES_SWITCHER_ITEM_SELECTOR);

runSwitcher();

function initBackgrounds() {
    const BACKGROUND_URL_ATTRIBUTE = 'data-background-url';

    $packageItemsHandlers.each((key, value) => {
        const backgroundURI = value.getAttribute(BACKGROUND_URL_ATTRIBUTE);
        value.style.backgroundImage = `url(${backgroundURI})`;
    });
}

function runSwitcher() {
    initBackgrounds();
    initSwitcher();
}

function initSwitcher(){
    $offerPackagesSwitcherItemHandlers.each((key, value) => {
        value.addEventListener('click', (e) => {
            const hrefLink = getLinkAttribute(value);
            switchElement(hrefLink);
        });
    });
}

function getLinkAttribute(element) {
    return element.querySelector('a').getAttribute('href');
}

function switchElement(hrefLink) {
    const LINK_ATTRIBUTE = 'data-link';
    const ACTIVE_CLASS = 'active';

    $packageItemsHandlers.each((key, value) => {
        const linkAttribute = value.getAttribute(LINK_ATTRIBUTE);

        if (linkAttribute === hrefLink) {
            value.classList.add(ACTIVE_CLASS);
            return true;
        }

        value.classList.remove(ACTIVE_CLASS);
    });
}
