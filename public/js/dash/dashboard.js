document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('statisticsChart').getContext('2d');

    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [
                {
                    label: 'Done',
                    data: [3, 2, 4, 5, 3, 2, 5, 6, 4, 3, 2, 3],
                    borderColor: '#ffa726',
                    backgroundColor: 'rgba(255, 167, 38, 0.5)',
                    fill: true,
                },
                {
                    label: 'Undone',
                    data: [2, 3, 1, 2, 4, 5, 3, 2, 4, 6, 5, 3],
                    borderColor: '#66bb6a',
                    backgroundColor: 'rgba(102, 187, 106, 0.5)',
                    fill: true,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        },
    });
});
