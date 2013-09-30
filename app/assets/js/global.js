$(function() {

    // Add a time picker
    $("#time").timepicker({
        'step': 5,
        'scrollDefaultNow': true
    });

    // Add a date picker
    $("#date").datepicker();

    // Confirms that you want to delete a reminder
    $('.delete-reminder').click(function(e) {
        var confirmation = confirm("Delete this reminder?");
        if (!confirmation) {
            return false;
        }
    });
});
