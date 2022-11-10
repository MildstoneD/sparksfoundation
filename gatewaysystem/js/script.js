var i = 0;
var images = [
    './images/join.jpg',
    './images/volk.jpg',
    './images/smile.jpg'
];
var slideTimer = 7000;
var backimg = document.querySelector('header');

function changePicture() {

    backimg.style.background = 'url(' + images[i] + ')';
    backimg.style.width = '100%';
    backimg.style.height = '768px';
    backimg.style.backgroundSize = 'cover';
    backimg.style.backgroundRepeat = 'no-repeat';
    backimg.style.backgroundPosition = 'center';
    backimg.style.backgroundAttachment = 'fixed';

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(changePicture, slideTimer);

}

window.onload = changePicture;