$(document).ready(function () {
    $('.platform-header li.dropdown').hover( function () {
        $(this).toggleClass('open');
    });

    $('input[name="datePicker"]').daterangepicker();
});