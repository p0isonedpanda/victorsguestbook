var picCount = 38;
var prevPic = 0;

function switchImage() {
    $.when($('#slideshow').fadeOut(500)).done(() => {
        var num = Math.floor((Math.random() * picCount) + 1);
        while (num == prevPic) { // so we don't repeat pictures
            num = Math.floor((Math.random() * picCount) + 1);
        }
        prevPic = num;

        $('#slideshow').attr('src', './images/image' + num + '.jpg');
        $('#slideshow').fadeIn(500);
    });
}

$(document).ready(() => {
    $('#slideshow').attr('src', './images/image1.jpg');
    setInterval(switchImage, 5000);
});