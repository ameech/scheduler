$(function() {

    // Add a time picker
    $("#time").timepicker({
        'step': 5,
        'scrollDefaultNow': true
    });

    // Add a date picker
    $("#date").datepicker();
});