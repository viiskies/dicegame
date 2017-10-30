var ctx = document.getElementById('top10Chart').getContext('2d');
var ctx1 = document.getElementById('myCharts').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [],
        datasets: [{
            label: "Winings in EUR",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [],
        }]
    },

    // Configuration options go here
    options: {}
});

var chartLast = new Chart(ctx1, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [],
        datasets: [{
            label: "Winings in EUR",
            backgroundColor: 'rgb(255, 99, 25)',
            borderColor: 'rgb(255, 99, 132)',
            data: [],
        }]
    },

    // Configuration options go here
    options: {}
});

$.getJSON("game.php?top=10", function(result){
    $.each(result['games'], function(i, field){
        addData(chart,  field['username'], field['winings']);
    });
});

let username = $("#username").text();

$.getJSON("game.php?username=" + username, function(result){
    $.each(result['games'], function(i, field){
        addData(chartLast,  field['username'], field['winings']);
    });
});

function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}