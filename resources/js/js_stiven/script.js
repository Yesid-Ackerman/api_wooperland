const ctx = document.getElementById('myChart').getContext('2d');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [' nivel 1', 'nivel 2', 'nivel 3'],
        datasets: [{
            label: 'Puntuacion de niveles',
            data: [1, 0, 3],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        callback: function(value) {
                            if (value === 0) return '0';
                            if (value === 1) return '⭐';
                            if (value === 2) return '⭐⭐';
                            if (value === 3) return '⭐⭐⭐';
                    }
            }
        }
    }
}
});
