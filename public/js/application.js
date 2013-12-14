// common way to initialize jQuery
$(function() {
    // does this element exist ?
    if ($('#javascript-header-demo-box').length != 0) {
        $('#javascript-header-demo-box').hide();
        $('#javascript-header-demo-box').text('Hello from JavaScript! This line has been added by public/js/application.js');
        $('#javascript-header-demo-box').css('color', 'green');
        $('#javascript-header-demo-box').fadeIn('slow');
    }
});