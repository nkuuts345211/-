function play() {
    let iframe = document.getElementById("music");
    iframe.src += "&autoplay=1";
}
const images = ['/img/menu1.jpg', '/img/menu2.jpg', '/img/menu3.jpg', '/img/menu4.jpg', '/img/menu5.jpg'];

let currentIndex = 0;

function updateImage() {
    document
        .getElementById('myimg')
        .src = images[currentIndex];
}

document
    .getElementById('prevButton')
    .addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateImage();
    });

document
    .getElementById('nextButton')
    .addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % images.length;
        updateImage();
    });
