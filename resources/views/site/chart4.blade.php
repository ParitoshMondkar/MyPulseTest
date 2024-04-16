<!DOCTYPE html>
<html>
<head>
    <title>Chart4</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            width: 300px; 
            height: 300px; 
        }
    </style>
</head>
<body>
    <div class="chart-container">
        <canvas id="myChart" width="100%" height="100%"></canvas>
    </div>

    <script>
        
        var months = ["January", "February", "March", "April", "May", "June"];
        var data = [275, 200, 489, 400, 175, 100];

        
        var config = {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                    label: 'Data',
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', 
                    borderColor: 'rgba(54, 162, 235, 1)', 
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            max: 500
                        }
                    }]
                },
                tooltips: {
                    mode: 'index',
                    intersect: false
                }
            }
        };

        
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, config);
    </script>
</body>
</html>
