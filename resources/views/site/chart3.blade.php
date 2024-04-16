<!DOCTYPE html>
<html>
<head>
    <title>Chart3</title>
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
       
        var days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        var data = [300, 400, 202, 250, 350, 450, 500];

        
        var config = {
            type: 'line',
            data: {
                labels: days,
                datasets: [{
                    label: 'Data',
                    data: data,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', 
                    borderColor: 'rgba(255, 99, 132, 1)',
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
