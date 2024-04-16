<!DOCTYPE html>
<html>
<head>
    <title>Chart2</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            width: 300px; 
            height: 300px; 
        }

        .carousel-indicators {
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .carousel-indicators li {
            border: 2px solid #007bff;
            background-color: transparent;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .carousel-indicators li.active {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="chart-container">
        <canvas id="myChart" width="100%" height="100%"></canvas>
    </div>

    <ul id="chartControls" class="carousel-indicators">
        <li onclick="showChart('1')" class="active"></li>
        <li onclick="showChart('2')"></li>
        <li onclick="showChart('3')"></li>
    </ul>

    <script>
        var chart1Data = {
            labels: ['Completed', 'Remaining'],
            datasets: [{
                data: [76, 24],
                backgroundColor: ['#007bff', '#f0f0f0'],
            }]
        };

        var chart2Data = {
            labels: ['Completed', 'Remaining'],
            datasets: [{
                data: [50, 50],
                backgroundColor: ['#007bff', '#f0f0f0'],
            }]
        };

        var chart3Data = {
            labels: ['Completed', 'Remaining'],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#007bff', '#f0f0f0'],
            }]
        };

        var chartOptions = {
            responsive: true,
            legend: {
                display: false
            },
            plugins: {
                datalabels: {
                    color: '#fff',
                    formatter: function(value, context) {
                        return value + '%';
                    }
                }
            }
        };

        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart;

        function showChart(chartType) {
            var chartData;
            if (chartType === '1') {
                chartData = chart1Data;
            } 
            else if (chartType === '2') {
                chartData = chart2Data;
            }
            else if (chartType === '3') {
                chartData = chart3Data;
            }

            if (myChart) {
                myChart.destroy();
            }

            myChart = new Chart(ctx, {
                type: 'doughnut',
                data: chartData,
                options: chartOptions
            });

            
            var indicators = document.querySelectorAll('.carousel-indicators li');
            indicators.forEach(function(indicator) {
                indicator.classList.remove('active');
            });
            var activeIndicator = document.querySelector('.carousel-indicators li:nth-child(' + chartType + ')');
            activeIndicator.classList.add('active');
        }

        
        showChart('1');
    </script>
</body>
</html>