const REALIZATIONS_ID = 'realizations';
const SINGLE_REALIZATION_SELECTOR = '.realization__item';
const realizationHandler = document.getElementById(REALIZATIONS_ID);
const items = realizationHandler.querySelectorAll(SINGLE_REALIZATION_SELECTOR);

items.forEach((element) => {
    element.addEventListener('click', () => {
        var dataAttributes = $(element).data('photos');
        var photos = [];

        dataAttributes.forEach((element) => {
            const photoObject = {};
            photoObject['src'] = element.url;
            photoObject['w'] = element.width;
            photoObject['h'] = element.height;

            photos.push(photoObject);
        });

        var options = {
            index: 0,
            showHideOpacity: true,
            closeOnScroll: false,
            history: false
        };


        if (photos.length !== 0) {
            var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, photos, options);
            gallery.init();
        }
    });
});

var pswpElement = document.querySelectorAll('.pswp')[0];
var options = {
    index: 0,
    closeOnScroll: false,
};
