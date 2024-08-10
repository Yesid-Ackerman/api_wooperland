const ctx = document.getElementById('myChart').getContext('2d');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        datasets: [{
            label: '# of Votes',
            data: [4, 0, 2, 0, 0, 0],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        min: 0,
                        max: 5,
                    }
            }
        }
    }
});
