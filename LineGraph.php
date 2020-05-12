<?php
$title = 'Student grades';

require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';

$result = $Student_Crud->getCurrentStudentScore($_SESSION['email']);

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.DataTable([
                ['end_time', 'scores'],
                <?php
                $date = $result['end_time'];
                $score = $result['score'];
                ?>
                ['<?php echo $date;?>', '<?php echo $score;?>']
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
<body>
<div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>

