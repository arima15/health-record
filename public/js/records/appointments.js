$(document).ready(function() {
    // Search functionality
    $('#search').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#appointmentTable tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

    // Delete confirmation
    $('.btn-danger').on('click', function(e) {
        if (!confirm('Are you sure you want to delete this appointment?')) {
            e.preventDefault();
        }
    });
});