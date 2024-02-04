$(document).ready(function () {
    $('.dropdown-item-logout').on('click', function () {
        var form = $('<form action="/logout" method="post"></form>');
        form.appendTo('body').submit();
    });

    const imageUrls = [
        '/img/dog2.jpg',
        '/img/cat2.jpg',
        '/img/bird2.jpg',
        'img/fish2.jpg'
        // Add more image URLs as needed
    ];

    function changeImage() {
        const randomIndex = Math.floor(Math.random() * imageUrls.length);
        const imageUrl = imageUrls[randomIndex];

        // Set opacity to 0 before changing the image
        $('#changingImage').css('opacity', 0);

        // Change the image source
        $('#changingImage').attr('src', imageUrl);

        // Set a timeout to wait for the image to load before setting opacity to 1
        setTimeout(function () {
            $('#changingImage').css('opacity', 1);
        }, 100);
    }

    // Change the image every 5 seconds (5000 milliseconds)
    setInterval(changeImage, 3000);

    // Add a class 'loaded' to the changing-image element when it is loaded
    $('#changingImage').on('load', function () {
        $(this).addClass('loaded');
    });
});
