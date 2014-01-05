// common way to initialize jQuery
$(function() {
    // simple demo to show create something via javascript on the page
    if ($('#javascript-header-demo-box').length != 0) {
        $('#javascript-header-demo-box').hide();
        $('#javascript-header-demo-box').text('Hello from JavaScript! This line has been added by public/js/application.js');
        $('#javascript-header-demo-box').css('color', 'green');
        $('#javascript-header-demo-box').fadeIn('slow');
    }
});
