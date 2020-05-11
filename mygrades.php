<?php
$title = 'Student grades';

require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';

$result = $Student_Crud->getCurrentStudentScore($_SESSION['email']);

?>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result['firstname'] . "\t" . $result['secondname']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Email:<?php echo $result['email']; ?></h6>
                    <p class="card-text">School Name:<?php echo $result['schoolname']; ?></p>
                    <p class="card-text">Play Mode:<?php echo $result['play_mode']; ?></p>

                    <p class="card-text">Game Name:<?php echo $result['game_name']; ?></p>
                    <p class="card-text">Score:<?php echo $result['score']; ?></p>
                    <p class="card-text">Start Time:<?php echo $result['start_time']; ?></p>
                    <p class="card-text">End Time:<?php echo $result['end_time']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <!--Here we will populate a simple bar graph or line graph using ajax and php -->


            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['date', 'scores'],
                        <?php
                        $date = $result['end_time'];
                        $score = $result['score'];
                        ?>
                        ['<?php echo $date?>', '<?php echo $score?>']
                    ]);

                    var options = {
                        title: 'Student Performance',
                        curveType: 'function',
                        legend: { position: 'bottom' }
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                    chart.draw(data, options);
                }
            </script>
            </head>
            <body>
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
            </body>


        </div>

    </div>
</div>




<?php
include_once 'includes/footer.php' ?>


