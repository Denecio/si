const input = document.querySelector('input[type="file"]');
const div = document.querySelector('.add-album-image');

input.addEventListener('change', function (e) {
    //reomve the previous image
    const prevImage = div.querySelector('img');
    if (prevImage) {
        prevImage.remove();
    }
    //add image to div
    const curFiles = input.files;
    const image = document.createElement("img");
    image.src = URL.createObjectURL(curFiles[0]);
    div.appendChild(image);

}, false);

//trigger the input though the div
div.addEventListener('click', function (e) {
    input.click();
}, false);