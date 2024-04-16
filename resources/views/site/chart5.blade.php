<!DOCTYPE html>
<html>
<head>
    <title>Chart5</title>
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
        
        var data = {
            labels: ["15 APRIL", "16 APRIL", "17 APRIL", "18 APRIL", "21 APRIL"],
            datasets: [{
                label: 'Data 1',
                data: [12, 19, 3, 5, 2],
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderWidth: 1,
                fill: true,
                hidden: false 
            }, {
                label: 'Data 2',
                data: [7, 11, 5, 8, 3],
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 1,
                fill: true,
                hidden: false
            }]
        };

        
        var options = {
            responsive: true,
            onClick: function(evt, element) {
                if (element.length > 0) {
                    var index = element[0]._index;
                    var datasetIndex = element[0]._datasetIndex;
                    var chart = this.chart;

                    
                    chart.data.datasets[datasetIndex].hidden = !chart.data.datasets[datasetIndex].hidden;

                    
                    chart.update();
                }
            }
        };

        
        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>
</body>
</html>