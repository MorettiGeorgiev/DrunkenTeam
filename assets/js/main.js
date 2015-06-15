$('.carousel').carousel({
  interval: false
}) 

Dropzone.options.myAwesomeDropzone = {
	acceptedFiles: 'image/*'
}

$("#scroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#start").offset().top
    }, 500);
});

$("#sendSignal").click(function() {
    $('html, body').animate({
        scrollTop: $("#start").offset().top
    }, 500);
});