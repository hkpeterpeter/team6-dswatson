<?php
  require_once 'core/init.php';

  $sql="SELECT distinct product_hier_lvl1 FROM product where 1=1"; //featured =1";
  $featured=$db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>ASW</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </script>
</head>
<body>
  <?php
    $sql = "SELECT distinct PRODUCT_HIER_LVL1 FROM PRODUCT";
    $pquery = $db -> query($sql);
  ?>
<div>
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
        <a href="/test/index.php" class="navbar-brand" id="text">ASW</a>

        <ul class="nav navbar-nav">

          <?php while ($parent=mysqli_fetch_assoc($pquery)):
                    # code...
                  ?>

                  <?php
                    $parent_id =$parent['PRODUCT_HIER_LVL1'];
                    $sql2="SELECT distinct PRODUCT_HIER_LVL2 FROM PRODUCT WHERE PRODUCT_HIER_LVL1='$parent_id'";
                    $cquery=$db->query($sql2);
                   ?>
              <!--Drop down menu  -->
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text"><?php echo $parent['PRODUCT_HIER_LVL1'] ?><span class="caret"> </span></a>
              <ul class="dropdown-menu" role="menu">

              <?php while($child=mysqli_fetch_assoc($cquery)): ?>
                    <li><a href="#"><?php echo $child['PRODUCT_HIER_LVL2']; ?></a></li>
                  <?php endwhile; ?>

                </ul>

                </li>
        <?php endwhile; ?>
        </ul>
      </div>
  </nav>
</div>
<!--Insertar imagenes -->

<!--<div id="background-image">
  <div id="image-1"> </div>
  <div id="image-2"> </div>


</div>
<div class="col-md-2"> </div>-->
<!--main content. productos -->
<div class="col-md-8">
  <div class="row">
    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
  </div>
</div>



<!--details modal -->

<?php
  include 'details-modal.php';
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false,
      }
    }
  });
</script>

</body>
</html>
