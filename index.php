<!DOCTYPE html>
<html>
<?php
include_once("config.php");

    $result = mysqli_query($conn,"SELECT * FROM jumlahpasien ORDER BY kelas DESC");

    $kelas ="";
    $april="";
    $mei="";
    $juni="";
    
    while ($res = mysqli_fetch_array($result)) {
        $kelas = $kelas."".$res['kelas'].",";
        $april = $april."".$res['april'].",";
        $mei = $mei."".$res['mei'].",";
        $juni = $juni."".$res['juni'].",";
    }
    echo "<script class='code-js' id='code-js'>
    var data = {
        categories: [$april],
        series: [
            {
                name: 'April',
                data: [$april]
            },
            {
                name: 'Mei',
                data: [$mei]
            },
            {
                name: 'Juni',
                data: [$juni]
            }
        ]
    };
    </script>";
?>
<head lang="kr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <title>PASIEN RAWAT INAP BERDASARKAN KELAS TRIWULAN II TAHUN 2018               
</title>
    <link rel="stylesheet" type="text/css" href="./dist/tui-chart.css" />
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/codemirror.css'/>
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/lint.css'/>
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/theme/neo.css'/>
    <link rel="stylesheet" type="text/css" href="./css/example.css" />
</head>
<body>
<div class='wrap'>
    <div class='code-html' id='code-html'>
        <div id='chart-area'></div>
    </div>
</div>
<script type='text/javascript' src='https://uicdn.toast.com/tui.chart/latest/raphael.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/core-js/2.5.7/core.js'></script>
<script src='./dist/tui-chart.js'></script>
<script class='code-js' id='code-js'>
var container = document.getElementById('chart-area');
var options = {
    chart: {
        width: 1160,
        height: 650,
        title: 'Grafik Pasien Rawat Inap berdasarkan kelas Triwulan II Tahun 2018',
    },
    yAxis: {
        title: 'Kelas'
    },
    xAxis: {
        title: 'Bulan',
        min: 0,
    },
     series: {
         showLabel: true
     }
};
var theme = {
    series: {
        colors: [
            '#cc6699', '#458a3f', '#295ba0', '#2a4175', '#cc6699',
            '#6666ff', '#617178', '#8a9a9a', '#516f7d', '#dddddd'
        ]
    }
};

// For apply theme

// tui.chart.registerTheme('myTheme', theme);
// options.theme = 'myTheme';

tui.chart.lineChart(container, data, options);
</script>

<!--For tutorial page-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/codemirror.js'></script>
<script src='//ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/edit/matchbrackets.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/selection/active-line.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/mode/javascript/javascript.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/lint.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/javascript-lint.js'></script>
<script src='./js/example.js'></script>
</body>
</html>
