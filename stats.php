<?php 
session_start();
if (isset($_SESSION['username'])) {
} else {
    header('Location: login.php');
}

$page_title = 'Stats';
$stats_page = true;
include("inc/header.php"); ?>

    <div class="container my-3">
        <div class="row">
            <div class="col">
                <h2>Top 10 Winings</h2>
                <canvas class="my-5" id="top10Chart"></canvas>
            </div>
            <div class="col">
                <h2>Your games</h2>
                <canvas class="my-5" id="myCharts"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/stats.js" ></script>
</body>
</html>