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
        <div class="row ">
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
    <!-- jQuery first, then Tether, then Bootstrap JS. -->

<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/stats.js" ></script>
</body>
</html>