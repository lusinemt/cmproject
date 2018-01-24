$(document).ready(function () {
    var $filterByClient = $('input').attr('name', 'advertiser'),
        timer, delay = 1000;

    $filterByClient.bind('input', function () {
        var $that = $(this);
        window.clearTimeout(timer);
        timer = window.setTimeout(function () {
            console.log($that.val());
        }, delay);
    });
    
    // Select Campaign type
    $('.campaign-type-selectors li input').on('click', function () {
        console.log($(this).attr('data-campaigntype'));
        if($(this).attr('data-campaigntype') === 'web'){
            $('.mobile-settings').slideUp();
        }
        else{
            $('.mobile-settings').slideDown();
        }
    });

    // Date Range Picker
    var $startDate = $('#startDate'),
        $endDate = $('#endDate');
    $startDate.daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            },
            timePicker: true,
            timePicker24Hour: true
        },
        function (start, label) {
            console.log(start.format('MM/DD/YYYY, h:mm:ss'));
        });
    $startDate.on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY, h:mm:ss'));
    });

    $endDate.daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            },
            timePicker: true,
            timePicker24Hour: true
        },
        function(end, label) {
            console.log(end.format('MM/DD/YYYY, h:mm:ss'));
        });
    $endDate.on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.endDate.format('MM/DD/YYYY, h:mm:ss'));
    });

    $('.date-filter').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
});