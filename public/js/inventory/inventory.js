// public/js/inventory.js
$(document).ready(function() {
    // Initialize the modal
    $('#addStockModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // You can add more dynamic behavior here if needed
    });

    // Handle form submission
    $('#addStockModal form').on('submit', function(event) {
        event.preventDefault();
        // Add your form submission logic here
        alert('Form submitted!');
    });
});