<?php
include "../entities/livraison.php";
include "../core/livreurC.php";
$db=config::getConnexion();
$result=$db->query("SELECT * FROM livraison");
$result1=$db->query("SELECT * FROM livraison WHERE date  between '2019/12/12' and '2020/12/12'");
$result2=$db->query("SELECT * FROM livraison WHERE date  between '2018/12/12' and '2019/12/12'"); 
$result3=$db->query("SELECT * FROM livraison WHERE date between '2017/12/12' and '2018/12/12'");
$result4=$db->query("SELECT * FROM livraison WHERE date between '2016/12/12' and '2017/12/12'");
$produittotal=0;
$nombre1=0;
$nombre2=0;
$nombre3=0;
$nombre4=0;
while ($row = $result->fetch()) 
 {
 $produittotal++;
 }
 while ($row = $result1->fetch()) 
 {
 $nombre1++;
 }
  while ($row = $result2->fetch()) 
 {
 $nombre2++;
 }
  while ($row = $result3->fetch()) 
 {
 $nombre3++;
 }
  while ($row = $result4->fetch()) 
 {
 $nombre4++;
 }
  $pourcentage1=($nombre1*100)/$produittotal;
  $var1=100-$pourcentage1;

  $pourcentage2=($nombre2*100)/$produittotal;
  $var2=100-$pourcentage2;

  $pourcentage3=($nombre3*100)/$produittotal;
  $var3=100-$pourcentage3;

  $pourcentage4=($nombre4*100)/$produittotal;
  $var4=100-$pourcentage4;

  

  ?>

  <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endiff]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Statistiques Produits </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets\js\inscription.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['année 2020', <?php echo $nombre1 ?>],
          ['année 2019', <?php echo $nombre2 ?>],
          ['année 2018', <?php echo $nombre3 ?>],
          ['année 2017', <?php echo $nombre4 ?>]
        ]);

        var options = {
          title: 'date'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</head>

<body>
  
    
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        <br>
<table style="width:100%">
  <tr>
     <th>total </th>
    <th>année 2020 </th>
    <th>année 2019 </th>
    <th> année 2018 </th> 
    <th> année 2017 </th>
 </tr>
  <tr>
    <td> <?php  echo $produittotal;?></td>
    <td><?php  echo $nombre1;?></td>
    <td><?php  echo $nombre2;?></td>
    <td><?php  echo $nombre3;?></td>
    <td><?php  echo $nombre4;?></td> 
   </tr>
  <tr>
    <td> 100 %</td>
    <td> <?php echo $pourcentage1?> %</td> 
    <td> <?php echo $pourcentage2?> %</td> 
    <td> <?php echo $pourcentage3?> %</td> 
    <td> <?php echo $pourcentage4?> %</td> 
  
  </tr>

  </table>
                                                                                                       
</body>
</html>