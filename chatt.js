google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Population', 'Dead', 'Sick'],
          ['2019', 117584, 4610, 1452],
          ['2020', 116801, 4002, 1574],
          ['2021', 115931, 4577, 1902],
          ['2022', 115141, 5192, 1629]
        ]);

       var options = {
        chart: {
            title: "",
            subtitle: "",
        },
       };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }