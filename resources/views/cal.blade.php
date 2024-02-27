<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .highcharts-credits{
            visibility: hidden;
        }
        #container{
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>

<div id="container"></div>
<button type="button" id="pdf">PDF</button>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/gantt/modules/exporting.js"></script>
<script src="https://code.highcharts.com/gantt/modules/accessibility.js"></script>
<script>
    // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
    Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'UEFA CL top scorers by season'
        },
        xAxis: {
            categories: ['2020/21', '2019/20', '2018/19', '2017/18', '2016/17']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Goals'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
            name: 'Cristiano Ronaldo',
            data: [4, 4, 6, 15, 12]
        }, {
            name: 'Lionel Messi',
            data: [5, 3, 12, 6, 11]
        }, {
            name: 'Robert Lewandowski',
            data: [5, 15, 8, 5, 8]
        }]
    });


    document.getElementById('pdf').addEventListener('click', function () {
        Highcharts.charts[0].exportChart({
            type: 'application/pdf'
        });
    });

</script>



</body>
</html>
