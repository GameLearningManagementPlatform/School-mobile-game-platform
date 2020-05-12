<?php
$title = 'Student Activity';

require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';
require_once 'includes/Teacher_Auth.php';
?>
<?php


$result = $Student_Crud->getAllScores();
?>



        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([

                    ['player_id', 'score'],
                    <?php
                        $player_id = $result['player_id'];
                        $score = $result['score'];

                    ?>
                    ['<?php echo $player_id?>',  <?php echo $score?>]

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




<?php include_once 'includes/footer.php' ?>