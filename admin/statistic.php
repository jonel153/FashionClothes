<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles/global.css" />

<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalabe=0" />

<script src="scripts/jquery-1.11.3.min.js"></script>

<style>
#piechart {
padding-left: 250px;

}

</style>
<script type="text/javascript" src="scripts/general.js">


</script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var male = parseInt(document.getElementById("male").value);
        var female = parseInt(document.getElementById("female").value);

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Male',  male],
          ['Female', female]

         
        
        ]);

        var options = {
          title: 'Male and Female'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);


        var data = google.visualization.arrayToDataTable([
          ['Product', 'Quantity'],
          ['Male',  male],
          ['Female', female]
         
        
        ]);

        var inventory = new google.visualization.Piechart(document.getElementById('inventory'));

        var op = {
          title: 'inventory Statistics';
        }
        chart.draw()
      }
    </script>
  </head>
  <body>

  <?php
  $con = mysql_connect("localhost", "root", "");
  mysql_select_db("rent", $con);

  $result = mysql_query("SELECT * FROM user WHERE gender='Male'");
  $male = mysql_num_rows($result);

  $result = mysql_query("SELECT * FROM user WHERE gender='Male'");
  $female = mysql_num_rows($result);

  echo '<input type="hidden" name="male" id="male" value="'.$male.'">';
  echo '<input type="hidden" name="female" id="female" value="'.$female.'">';

  ?>
  <input type="hidden" id="male" name="male" value="<?php ?>">
  <input type="hidden" id="female" name="female"> 
    <?php include("sidebar.php");?>
    <div id="piechart" style="width: 900px; height: 500px;"></div>

    <div id="inventory" style="width: 900px; height: 500px;"></div>
  </body>
</html>
