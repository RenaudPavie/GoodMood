$(document).ready(function() {
    $('#openMenu').on('click', function() {
        $('.navLink').toggleClass('show');
    });
    $('#closeMenu').on('click', function() {
        $('.navLink').removeClass('show');
    });
});