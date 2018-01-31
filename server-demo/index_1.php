
<?php
  require_once 'core/init.php';

  $sql="SELECT distinct PRODUCT_HIER_LVL1 FROM product where 1=1";
  $PRODUCT_HIER_LVL1=$db->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="icon" href="../../../../favicon.ico">-->

    <title>ASW</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
            document.test.submit();
        }
    }

</script>
<style>

body, p {
        font-family: "Lato", sans-serif;
        font-size: 16px;
        text-transform: capitalize;
        }


</style>

  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">ASW</a>


      <input class="form-control form-control-dark w-100" type="text" placeholder="Type Here to Search" aria-label="Search">

<!-- <form  name="test" action="#" method="POST"><input class="form-control form-control-dark w-100"  type="text" placeholder="Search"  name="search" aria-label="Search" /></form> -->

      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                     <!--<span data-feather="home"></span>Products<span class="sr-only">(current)</span>-->
                </a>
              </li>

              <!--Loop and display level one menu-->
              <ul class="nav navbar-nav">

<a href="#" class="nav-link" data-toggle="dropdown" > <span>   - </span></a>


                <?php while($parent=mysqli_fetch_assoc($PRODUCT_HIER_LVL1)): ?>

                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> <?php echo $parent['PRODUCT_HIER_LVL1'] ?></a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->
                      <?php
                      $child =$parent['PRODUCT_HIER_LVL1'];
                        $sql2="SELECT distinct PRODUCT_HIER_LVL2 FROM product where PRODUCT_HIER_LVL1='$child'";
                        $PRODUCT_HIER_LVL2=$db->query($sql2);
                      ?>

                          <?php while($child=mysqli_fetch_assoc($PRODUCT_HIER_LVL2)): ?>

                            <a href="#" class="nav-link" data-toggle="dropdown" ><?php echo $child['PRODUCT_HIER_LVL2'] ?></a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->
                              <?php
                              $child2 =$child['PRODUCT_HIER_LVL2'];
                                $sql3="SELECT distinct PRODUCT_HIER_LVL3 FROM product where PRODUCT_HIER_LVL2='$child2'";
                                $PRODUCT_HIER_LVL3=$db->query($sql3);
                              ?>

                                <?php while($child2=mysqli_fetch_assoc($PRODUCT_HIER_LVL3)): ?>
                                  <?php
                                  $item =$child2['PRODUCT_HIER_LVL3'];
                                  ?>

                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            <?php echo $child2['PRODUCT_HIER_LVL3']; ?>
                                          </a>
                                        </li>


                                    <?php endwhile; ?>
                                </ul>
                              <?php endwhile; ?>
                          </ul>
                        </li>
                      <?php endwhile; ?>
                  </ul>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Product - Profit/Price</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

            </div>
          </div>

          <!--<canvas class="my-4" id="myChart" width="900" height="380"></canvas>-->



          <!-- Graphs -->
          <div position="top">
              <svg width="900" height="380" position="top"></svg>
                  <script src="assets/js/d3.v4.min.js"></script>
                  <script>

                  //d3.select("body").transition()
                    //  .style("background-color", "black");

                  var svg = d3.select("svg"),
                      margin = {top: 20, right: 20, bottom: 30, left: 50},
                      width = +svg.attr("width") - margin.left - margin.right,
                      height = +svg.attr("height") - margin.top - margin.bottom;


                  /*let points = d3.range(1, 10).map(function(i) {
                      return [i * width / 10, 50 + Math.random() * (height - 100)];
                  });
                  */

                  let points = [
                    [0,100],
                    [1,200],
                    [2,500],
                    [3,300]
                  ];

                  // Movable points
                  let point = [2.5, 400];
                  let point2 = [2, 500];
                  let point3 = [3, 300];


                  function mapToY(points, xx) {

                    var yy = -1;
                    for (var i=0; i<points.length; i++) {
                      if ( points[i][0] > xx ) {

                        var x0 = points[i-1][0];
                        var y0 = points[i-1][1];
                        var x1 = points[i][0];
                        var y1 = points[i][1];

                        var yy = y0 + (xx-x0)*(y1-y0)/(x1-x0);

                        //var rangeY = point[i][1] - point[i-1][1];
                        //var rangeX = point[i][0] - point[i-1][0];
                        //var dx1 = inputX - point[i-1][0];
                        //var dx2 = point[i][0] - inputX;

                        console.log(" i: " + i + " x: " + xx + " y: " +  yy);
                        break;

                      }
                    }
                    return yy;
                  }


                  var x = d3.scaleLinear()
                      .rangeRound([0, width]);

                  var y = d3.scaleLinear()
                      .rangeRound([height, 0]);

                  var xAxis = d3.axisBottom(x),
                      yAxis = d3.axisLeft(y);

                  var line = d3.line()
                      .x(function(d) { return x(d[0]); })
                      .y(function(d) { return y(d[1]); });

                  let drag = d3.drag()
                          .on('start', dragstarted)
                          .on('drag', dragged)
                          .on('end', dragended);

                  svg.append('rect')
                      .attr('class', 'zoom')
                      .attr('cursor', 'move')
                      .attr('fill', 'none')
                      .attr('pointer-events', 'all')
                      .attr('width', width)
                      .attr('height', height)
                      .attr('transform', 'translate(' + margin.left + ',' + margin.top + ')')

                   var focus = svg.append("g")
                                  .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

                  x.domain(d3.extent(points, function(d) { return d[0]; }));
                  y.domain(d3.extent(points, function(d) { return d[1]; }));

                  focus.append("path")
                      .datum(points)
                      .attr("fill", "none")
                      .attr("stroke", "steelblue")
                      .attr("stroke-linejoin", "round")
                      .attr("stroke-linecap", "round")
                      .attr("stroke-width", 1.5)
                      .attr("d", line);

                  /*focus.append("path")
                    .datum([points[0], points[3]])
                    .attr("fill", "none")
                    .attr("stroke", "steelblue")
                    .attr("stroke-linejoin", "round")
                    .attr("stroke-linecap", "round")
                    .attr("stroke-width", 1.5)
                    .attr("d", line);*/

                    // Point 1: control line 1
                    focus.append("path")
                        .datum( [  [0, point[1]], point ] )
                        .attr("id","controlLineY")
                        .attr("fill", "none")
                        .attr("stroke", "red")
                        .attr("stroke-linejoin", "round")
                        .attr("stroke-linecap", "round")
                        .attr("stroke-width", 1.5)
                        .attr("stroke-dasharray", "5,5")
                        .attr("d", line);

                    // Point 1: control line 2
                    focus.append("path")
                            .datum( [  [point[0], 0] , point ] )
                            .attr("id","controlLineX")
                            .attr("fill", "none")
                            .attr("stroke", "red")
                            .attr("stroke-linejoin", "round")
                            .attr("stroke-linecap", "round")
                            .attr("stroke-width", 1.5)
                            .attr("stroke-dasharray", "5,5")
                            .attr("d", line);


                  // Movable circles
                  focus.selectAll('circle')
                      .data([point, point2, point3])
                      .enter()
                      .append('circle')
                      .attr('r', 5.0)
                      .attr('cx', function(d) { return x(d[0]);  })
                      .attr('cy', function(d) { return y(d[1]); })
                      .style('cursor', 'pointer')
                      .style('fill', 'steelblue');
                  focus.selectAll('circle').call(drag);




                  focus.append('g')
                      .attr('class', 'axis axis--x')
                      .attr('transform', 'translate(0,' + height + ')')
                      .call(xAxis);

                  focus.append('g')
                      .attr('class', 'axis axis--y')
                      .call(yAxis);

                  function dragstarted(d) {
                      d3.select(this).raise().classed('active', true);
                  }

                  function dragged(d) {
                      d[0] = x.invert(d3.event.x);
                      //d[1] = y.invert(d3.event.y);
                      d[1] = mapToY(points, d[0]);


                      d3.select(this)
                          .attr('cx', x(d[0]))
                          .attr('cy', y(d[1]))
                      focus.select('path').attr('d', line);


                      focus.select('path#controlLineY').remove();
                      focus.append("path")
                          .datum( [  [0, point[1]], point ] )
                          .attr("id","controlLineY")
                          .attr("fill", "none")
                          .attr("stroke", "red")
                          .attr("stroke-linejoin", "round")
                          .attr("stroke-linecap", "round")
                          .attr("stroke-width", 1.5)
                          .attr("stroke-dasharray", "5,5")
                          .attr("d", line);

                  focus.select('path#controlLineX').remove();
                          focus.append("path")
                                  .datum( [  [point[0], 0] , point ] )
                                  .attr("id","controlLineX")
                                  .attr("fill", "none")
                                  .attr("stroke", "red")
                                  .attr("stroke-linejoin", "round")
                                  .attr("stroke-linecap", "round")
                                  .attr("stroke-width", 1.5)
                                  .attr("stroke-dasharray", "5,5")
                                  .attr("d", line);

                  }

                  function dragended(d) {
                      d3.select(this).classed('active', false);
                  }

          </script>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <!--<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>-->


  </body>
</html>
