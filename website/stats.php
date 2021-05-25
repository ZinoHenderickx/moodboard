<?php
include "website/header_moodboard.php";
include "database/dbmoodboard.php";
?>
<html>
<script>

    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Label', 'Value'],
    ['GasPeil', <?php echo $value?>],
    ]);

    var options = {
    width: 900, height: 600,
    redFrom: 0, redTo: <?php echo $warning;?>,
    yellowFrom:<?php echo $warning;?>, yellowTo: <?php echo ($warning + 10);?>,
    minorTicks: 5
    };
    var chart = new google.visualization.Gauge(document.getElementById('gauge-chart'));
    chart.draw(data, options);
    }
</script>

</body>
</html>