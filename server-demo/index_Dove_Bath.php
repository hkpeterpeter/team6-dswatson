
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="icon" href="../../../../favicon.ico">-->

    <title>A.S. Watson Group</title>

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

    .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</script>
<!-- Search Script -->
<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>
<!-- End Search Script -->




<style>

body, p {
        font-family: "Lato", sans-serif;
        font-size: 16px;
        }

        fs {
            visibility: hidden;
            font-size: 0;
        }



</style>

  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">A.S. Watson Group</a>



      <input class="form-control form-control-dark w-100" id="myInput" onkeyup="myFunction()" type="text" title="Type in a name" placeholder="Type to filter" aria-label="Search">

        <!--<ul id="myUL">
          <li><a href="#">Unliver - Dove - Hair</a></li>
          <li><a href="#">Unliver - Dove - Bath</a></li>

          <li><a href="#">Colage - Toothbrush</a></li>
          <li><a href="#">Colage - Toothbrush</a></li>

          <li><a href="#">Shiseido - Za - Fundation</a></li>
        </ul>-->
      </div>

    </div>


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
            <ul class="nav flex-column" id="myUL">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                     <!--<span data-feather="home"></span>Products<span class="sr-only">(current)</span>-->
                </a>
              </li>

              <!--Loop and display level one menu-->
              <ul class="nav navbar-nav">

<a href="#" class="nav-link" data-toggle="dropdown" > <span>  <fs> - </fs></span></a>



                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> Unilever<fs>Dove

                    2030970 - BM BATH 1L X 2 + PP
2321210 - BEAUTY NOURISHING TP+INTEN SH.
2023041 - DOVE 1L MEGA PACK
2039593 - TRAVEL SET
2702795 - BODY WASH - BEAUTY NOURISHING

</fs></a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Dove <fs> Unilever</fs> </a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="index_Dove_Bath.php">
                                            <span data-feather="file"></span>
                                            2030970 - BM BATH 1L X 2 + PP    <fs>Dove Unilever</fs> </a>
                                        </li>



                                        <li class="nav-item">
                                          <a class="nav-link" href="index_Dove_Bath.php">
                                            <span data-feather="file"></span>
                                            2321210 - BEAUTY NOURISHING TP+INTEN SH.                           <fs>Dove Unilever</fs>                </a>
                                        </li>

                                        <li class="nav-item">
                                          <a class="nav-link" href="index_Dove_Bath.php">
                                            <span data-feather="file"></span>
                                            2023041 - DOVE 1L MEGA PACK                          <fs>Dove Unilever</fs>                </a>
                                        </li>

                                        <li class="nav-item">
                                          <a class="nav-link" href="index_Dove_Bath.php">
                                            <span data-feather="file"></span>
                                            2039593 - TRAVEL SET                        <fs>Dove Unilever</fs>                </a>
                                        </li>

                                        <li class="nav-item">
                                          <a class="nav-link" href="index_Dove_Bath.php">
                                            <span data-feather="file"></span>
                                            2702795 - BODY WASH - BEAUTY NOURISHING                    <fs>Dove Unilever</fs>                </a>
                                        </li>

                                        <li class="nav-item">
                                          <a class="nav-link" href="index_Dove_Bath.php">
                                            <span data-feather="file"></span>
                                            2664841 - OXYGEN MOISTURE 1L TP + REBAL	 1,079,792                  <fs>Dove Unilever</fs>                </a>
                                        </li>


                                    </ul>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Axe/Lynx<fs>Unilever</fs>                </a>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Blue Band<fs>Unilever</fs>                </a>
                                                    </li>


                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Dermalogica<fs>Unilever</fs>                </a>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Flora / Becel<fs>Unilever</fs>                </a>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Heartbrand<fs>Unilever</fs>                </a>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Knorr<fs>Unilever</fs>                </a>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Lipton<fs>Unilever</fs>                </a>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Lux<fs>Unilever</fs>                </a>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Magnum<fs>Unilever</fs>                </a>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a class="nav-link" href="index_Dove_Bath.php">
                                                        <span data-feather="file"></span>
                                                        Surf<fs>Unilever</fs>                </a>
                                                    </li>








                              </ul>
                        </li>

                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-paint-brush" aria-hidden="true"></i> </span> Colgate</a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Toothpaste</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Toothpaste                                          </a>
                                        </li>


                                                                    </ul>

                            <a href="#" class="nav-link" data-toggle="dropdown" >Toothbrush</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Toothbrush                                          </a>
                                        </li>


                                                                    </ul>
                                                        </ul>
                        </li>

                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> Shiseido</a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Za</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Fundation                                          </a>
                                        </li>


                                                                    </ul>
                                                        </ul>
                        </li>

                        <li class="dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-bath" aria-hidden="true"></i> </span> Kao</a>
                          <ul class="dropdown-menu" role="menu">

                            <!--Loop and display level two menu-->


                                  <a href="#" class="nav-link" data-toggle="dropdown" >Za</a>
                                  <ul class="dropdown-menu" role="menu">

                                    <!--Loop and display level three menu-->


                                              <li class="nav-item">
                                                <a class="nav-link" href="#">
                                                  <span data-feather="file"></span>
                                                  Fundation                                          </a>
                                              </li>


                                                                          </ul>
                                                              </ul>
                              </li>

                              <li class="dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-hand-paper-o" aria-hidden="true"></i> </span> Kimberly-Clark</a>
                                <ul class="dropdown-menu" role="menu">

                                  <!--Loop and display level two menu-->


                                        <a href="#" class="nav-link" data-toggle="dropdown" >Za</a>
                                        <ul class="dropdown-menu" role="menu">

                                          <!--Loop and display level three menu-->


                                                    <li class="nav-item">
                                                      <a class="nav-link" href="#">
                                                        <span data-feather="file"></span>
                                                        Fundation                                          </a>
                                                    </li>


                                                                                </ul>
                                                                    </ul>
                                    </li>


                                    <li class="dropdown">
                                      <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart-o" aria-hidden="true"></i> </span> Biore</a>
                                      <ul class="dropdown-menu" role="menu">

                                        <!--Loop and display level two menu-->


                                              <a href="#" class="nav-link" data-toggle="dropdown" >Za</a>
                                              <ul class="dropdown-menu" role="menu">

                                                <!--Loop and display level three menu-->


                                                          <li class="nav-item">
                                                            <a class="nav-link" href="#">
                                                              <span data-feather="file"></span>
                                                              Fundation                                          </a>
                                                          </li>


                                                                                      </ul>
                                                                          </ul>
                                          </li>

                                          <li class="dropdown">
                                            <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-sun-o" aria-hidden="true"></i> </span> P&G</a>
                                            <ul class="dropdown-menu" role="menu">

                                              <!--Loop and display level two menu-->


                                                    <a href="#" class="nav-link" data-toggle="dropdown" >Za</a>
                                                    <ul class="dropdown-menu" role="menu">

                                                      <!--Loop and display level three menu-->


                                                                <li class="nav-item">
                                                                  <a class="nav-link" href="#">
                                                                    <span data-feather="file"></span>
                                                                    Fundation                                          </a>
                                                                </li>


                                                                                            </ul>
                                                                                </ul>
                                                </li>

                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> L'Oreal</a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Coca Cola</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Coca Cola                                          </a>
                                        </li>


                                                                    </ul>
                                                        </ul>
                        </li>

                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-apple" aria-hidden="true"></i> </span> GSK</a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Apple</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Apple                                          </a>
                                        </li>


                                                                    </ul>
                                                        </ul>
                        </li>


                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-apple" aria-hidden="true"></i> </span> Tru Niagen</a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Microsoft</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Microsoft                                          </a>
                                        </li>


                                                                    </ul>
                                                        </ul>
                        </li>

                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-mobile" aria-hidden="true"></i> </span> Johnson's</a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Samsung</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Samsung                                          </a>
                                        </li>


                                                                    </ul>
                                                        </ul>
                        </li>

                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-book" aria-hidden="true"></i> </span> Dettol</a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Amazon</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Amazon                                          </a>
                                        </li>


                                                                    </ul>
                                                        </ul>
                        </li>

                  <li class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> Laurier</a>
                    <ul class="dropdown-menu" role="menu">

                      <!--Loop and display level two menu-->


                            <a href="#" class="nav-link" data-toggle="dropdown" >Disney</a>
                            <ul class="dropdown-menu" role="menu">

                              <!--Loop and display level three menu-->


                                        <li class="nav-item">
                                          <a class="nav-link" href="#">
                                            <span data-feather="file"></span>
                                            Disney                                          </a>
                                        </li>


                                                                    </ul>
                                                        </ul>
                        </li>







                        <!-- start append extra menu-->

                        <li class="dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> Timotei</a>
                          <ul class="dropdown-menu" role="menu">  </ul>
                        </li>


                        <li class="dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> Essie</a>
                          <ul class="dropdown-menu" role="menu">  </ul>
                        </li>


                        <li class="dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> MAC Cosmetics</a>
                          <ul class="dropdown-menu" role="menu">  </ul>
                        </li>


                        <li class="dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown" > <span>    <i class="fa fa-heart" aria-hidden="true"></i> </span> Aveenos</a>
                          <ul class="dropdown-menu" role="menu">  </ul>
                        </li>
                        <!-- stop append extra menu-->

                                        </ul>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">2030970 - BM BATH 1L X 2 + PP </h1>
            <div class="btn-toolbar mb-2 mb-md-0">

              <button class="btn btn-sm btn-outline-secondary">Share</button>
              <button class="btn btn-sm btn-outline-secondary">Export</button>

            </div>
          </div>

          <!--<canvas class="my-4" id="myChart" width="900" height="380"></canvas>-->


          Period From: <input class="btn txt-sm txt-inline-secondary" id="date" data-format="DD-MM-YYYY" data-template="D MMM YYYY" name="date" value="01-01-2015" type="text" width="50px">
&nbsp Period To: <input class="btn txt-sm txt-inline-secondary"  id="date" data-format="DD-MM-YYYY" data-template="D MMM YYYY" name="date" value="31-12-2016" type="text" width="50px">
<span></span>
              <button onclick="window.location.href='index_Dove_Bath.php'"class="btn btn-sm btn-outline-secondary">Refresh</button>
          <script>
          $(function(){
              $('#date').combodate();
          });
          </script>


          <br></br>


          <!-- Graphs -->
          <img id="upImg" src="price_elastic.png" style="width:700px;" />

          <table id="bottomVis">
            <tr>
              <td>
            <h3>Demand Curve: Quantity(x-axis)  |  Profit(y-axis) </h3>
          </td>
          </tr>
            <tr>
              <td>

                    <svg width="500" height="350"></svg>
<br><button type="button" onclick="window.location.href='index_Dove_Bath_2.php'">Zoom</button></br>
              </td>
              <td>
                <h4 style="border: 1px solid; padding:20px;">
                  Gross margin:
                  <span id="labelGrossMargin">&nbsp;</span>
                  <button id="btnGrossMarginIncrease">-</button>
                  <button id="btnGrossMarginDecrease">+</button>
                </h4>
                <h3>Target:</h3>
                <h4>
                  <span style="color:red;" id="labelPCurrent">P:</span>
                  <span style="color:red;" id="labelQCurrent">Q:</span>
                  <span style="color:red;" id="labelRCurrent">R:</span>
                  <span style="color:red;" id="labelProfitCurrent">Profit:</span>

                </h4>
                <h3>Optimal:</h3>
                <h4>
                  <span style="color:green;" id="labelPOptimal">P:</span>
                  <span style="color:green;" id="labelQOptimal">Q:</span>

                  <span style="color:green;" id="labelROptimal">R:</span>
                  <span style="color:green;" id="labelProfitOptimal">Profit:</span>

                </h4>
                <h3>Current:</h3>
                <h4>
                  <span style="color:purple;" id="labelPTarget">P:</span>
                  <span style="color:purple;" id="labelQTarget">Q:</span>

                  <span style="color:purple;" id="labelRTarget">R:</span>
                  <span style="color:purple;" id="labelProfitTarget">Profit:</span>

                </h4>
              </td>
            </tr>
          </table>
          <script src="d3.v4.min.js"></script>
          <script src="jquery-3.3.1.min.js"></script>
          <script>

          $("#bottomVis").hide();
          $("#upImg").on("click", function(){
            $("#bottomVis").show();
          });

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


          function revenue(p,q) {
            return p*q;
          }

          function profit( p, q) {
            let cost = 71.0438343;
            return (p-cost)*q;
          }


          function mapMarginToText(m) {
             return "" + parseInt( (1.0 - m)*100 ) + "%";
          }

          let minGrossMargin = 0.8;
          let grossMargin = 0.89;
          let maxGrossMargin = 1.0;

          //$("#labelGrossMargin").text(""+parseFloat(grossMargin).toFixed(2));

          $("#labelGrossMargin").text(mapMarginToText(grossMargin));

          $("#btnGrossMarginIncrease").on("click", function(){

            if ( grossMargin < maxGrossMargin ) {
                grossMargin += 0.01;
                // $("#labelGrossMargin").text(""+parseFloat(grossMargin).toFixed(2));
                $("#labelGrossMargin").text(mapMarginToText(grossMargin));

                // Point 1: Extended control line 1
                focus.select('path#controlExtendedLineY').remove();
                      focus.append("path")
                          .datum( [  [minX, point[1]*grossMargin], [point[0], point[1]*grossMargin] ] )
                          .attr("id","controlExtendedLineY")
                          .attr("fill", "none")
                          .attr("stroke", "red")
                          .attr("stroke-linejoin", "round")
                          .attr("stroke-linecap", "round")
                          .attr("stroke-width", 1.5)
                          .attr("stroke-dasharray", "5,5")
                          .attr("d", line);
            }

          });

          $("#btnGrossMarginDecrease").on("click", function(){

            if ( grossMargin > minGrossMargin ) {
                grossMargin -= 0.01;
                //$("#labelGrossMargin").text(""+parseFloat(grossMargin).toFixed(2));
                $("#labelGrossMargin").text(mapMarginToText(grossMargin));

                // Point 1: Extended control line 1
                focus.select('path#controlExtendedLineY').remove();
                      focus.append("path")
                          .datum( [  [minX, point[1]*grossMargin], [point[0], point[1]*grossMargin] ] )
                          .attr("id","controlExtendedLineY")
                          .attr("fill", "none")
                          .attr("stroke", "red")
                          .attr("stroke-linejoin", "round")
                          .attr("stroke-linecap", "round")
                          .attr("stroke-width", 1.5)
                          .attr("stroke-dasharray", "5,5")
                          .attr("d", line);
            }

          });



          // prices - version 1
          /*
          let ps = [ 51.06181607,  51.41371691,  51.76561776,  52.11751861,
                  52.46941946,  52.8213203 ,  53.17322115,  53.525122  ,
                  53.87702285,  54.2289237 ,  54.58082454,  54.93272539,
                  55.28462624,  55.63652709,  55.98842793,  56.34032878,
                  56.69222963,  57.04413048,  57.39603133,  57.74793217,
                  58.09983302,  58.45173387,  58.80363472,  59.15553557,
                  59.50743641,  59.85933726,  60.21123811,  60.56313896,
                  60.9150398 ,  61.26694065,  61.6188415 ,  61.97074235,
                  62.3226432 ,  62.67454404,  63.02644489,  63.37834574,
                  63.73024659,  64.08214743,  64.43404828,  64.78594913,
                  65.13784998,  65.48975083,  65.84165167,  66.19355252,
                  66.54545337,  66.89735422,  67.24925507,  67.60115591,
                  67.95305676,  68.30495761,  68.65685846,  69.0087593 ,
                  69.36066015,  69.712561  ,  70.06446185,  70.4163627 ,
                  70.76826354,  71.12016439,  71.47206524,  71.82396609,
                  72.17586693,  72.52776778,  72.87966863,  73.23156948,
                  73.58347033,  73.93537117,  74.28727202,  74.63917287,
                  74.99107372,  75.34297457,  75.69487541,  76.04677626,
                  76.39867711,  76.75057796,  77.1024788 ,  77.45437965,
                  77.8062805 ,  78.15818135,  78.5100822 ,  78.86198304,
                  79.21388389,  79.56578474,  79.91768559,  80.26958643,
                  80.62148728,  80.97338813,  81.32528898,  81.67718983,
                  82.02909067,  82.38099152,  82.73289237,  83.08479322,
                  83.43669407,  83.78859491,  84.14049576,  84.49239661,
                  84.84429746,  85.1961983 ,  85.54809915,  85.9       ];*/

          // prices - version 2 (57, 85.9)

          let ps = [ 57.96376767,  58.24595183,  58.528136  ,  58.81032016,
                 59.09250433,  59.37468849,  59.65687266,  59.93905682,
                 60.22124099,  60.50342515,  60.78560932,  61.06779348,
                 61.34997765,  61.63216181,  61.91434598,  62.19653014,
                 62.47871431,  62.76089847,  63.04308264,  63.3252668 ,
                 63.60745097,  63.88963513,  64.1718193 ,  64.45400346,
                 64.73618763,  65.01837179,  65.30055596,  65.58274012,
                 65.86492429,  66.14710845,  66.42929262,  66.71147678,
                 66.99366095,  67.27584511,  67.55802928,  67.84021344,
                 68.12239761,  68.40458177,  68.68676594,  68.9689501 ,
                 69.25113427,  69.53331843,  69.8155026 ,  70.09768676,
                 70.37987093,  70.66205509,  70.94423926,  71.22642342,
                 71.50860759,  71.79079175,  72.07297592,  72.35516008,
                 72.63734425,  72.91952841,  73.20171258,  73.48389674,
                 73.76608091,  74.04826507,  74.33044924,  74.6126334 ,
                 74.89481757,  75.17700173,  75.4591859 ,  75.74137006,
                 76.02355423,  76.30573839,  76.58792256,  76.87010672,
                 77.15229089,  77.43447505,  77.71665922,  77.99884338,
                 78.28102755,  78.56321171,  78.84539588,  79.12758004,
                 79.40976421,  79.69194837,  79.97413254,  80.2563167 ,
                 80.53850087,  80.82068503,  81.1028692 ,  81.38505336,
                 81.66723753,  81.94942169,  82.23160586,  82.51379002,
                 82.79597419,  83.07815835,  83.36034252,  83.64252668,
                 83.92471085,  84.20689501,  84.48907918,  84.77126334,
                 85.05344751,  85.33563167,  85.61781584,  85.9       ];

          // prices - version 3 (70,80)
          /*
          let ps = [ 70.        ,  70.1010101 ,  70.2020202 ,  70.3030303 ,
                 70.4040404 ,  70.50505051,  70.60606061,  70.70707071,
                 70.80808081,  70.90909091,  71.01010101,  71.11111111,
                 71.21212121,  71.31313131,  71.41414141,  71.51515152,
                 71.61616162,  71.71717172,  71.81818182,  71.91919192,
                 72.02020202,  72.12121212,  72.22222222,  72.32323232,
                 72.42424242,  72.52525253,  72.62626263,  72.72727273,
                 72.82828283,  72.92929293,  73.03030303,  73.13131313,
                 73.23232323,  73.33333333,  73.43434343,  73.53535354,
                 73.63636364,  73.73737374,  73.83838384,  73.93939394,
                 74.04040404,  74.14141414,  74.24242424,  74.34343434,
                 74.44444444,  74.54545455,  74.64646465,  74.74747475,
                 74.84848485,  74.94949495,  75.05050505,  75.15151515,
                 75.25252525,  75.35353535,  75.45454545,  75.55555556,
                 75.65656566,  75.75757576,  75.85858586,  75.95959596,
                 76.06060606,  76.16161616,  76.26262626,  76.36363636,
                 76.46464646,  76.56565657,  76.66666667,  76.76767677,
                 76.86868687,  76.96969697,  77.07070707,  77.17171717,
                 77.27272727,  77.37373737,  77.47474747,  77.57575758,
                 77.67676768,  77.77777778,  77.87878788,  77.97979798,
                 78.08080808,  78.18181818,  78.28282828,  78.38383838,
                 78.48484848,  78.58585859,  78.68686869,  78.78787879,
                 78.88888889,  78.98989899,  79.09090909,  79.19191919,
                 79.29292929,  79.39393939,  79.49494949,  79.5959596 ,
                 79.6969697 ,  79.7979798 ,  79.8989899 ,  80.        ];*/

          // q - version 1: log scale
          /*
          let qs = [ 1884.22687466,  1821.41613126,  1760.69918535,  1702.00624013,
                 1645.26982551,  1590.42472049,  1537.40787822,  1486.15835353,
                 1436.61723285,  1388.7275665 ,  1342.4343032 ,  1297.68422682,
                 1254.42589521,  1212.60958101,  1172.18721455,  1133.11232854,
                 1095.34000469,  1058.82682208,  1023.53080719,   989.41138572,
                  956.42933589,   924.54674341,   893.72695783,   863.93455047,
                  835.13527365,   807.29602134,   780.3847911 ,   754.3706473 ,
                  729.22368555,   704.91499831,   681.41664168,   658.70160327,
                  636.74377116,   615.51790385,   594.99960128,   575.16527678,
                  555.99212991,   537.4581203 ,   519.5419423 ,   502.22300047,
                  485.48138595,   469.29785351,   453.65379947,   438.5312403 ,
                  423.91279198,   409.78164994,   396.12156982,   382.91684877,
                  370.15230738,   357.81327225,   345.88555913,   334.35545657,
                  323.20971024,   312.4355076 ,   302.02046323,   291.95260459,
                  282.22035824,   272.81253653,   263.71832475,   254.92726872,
                  246.42926274,   238.21453796,   230.27365122,   222.5974741 ,
                  215.17718251,   208.00424651,   201.07042048,   194.36773368,
                  187.8884811 ,   181.62521454,   175.57073411,   169.71807991,
                  164.06052407,   158.59156297,   153.30490981,   148.19448734,
                  143.25442092,   138.47903171,   133.86283021,   129.40050989,
                  125.08694111,   120.91716524,   116.88638893,   112.98997864,
                  109.22345527,   105.58248904,   102.0628945 ,    98.66062572,
                   95.37177164,    92.19255158,    89.11931089,    86.14851674,
                   83.27675408,    80.5007217 ,    77.81722841,    75.22318942,
                   72.71562279,    70.29164594,    67.94847241,    65.68340862];*/

          // q - version 2

          let qs = [ 5356.20911743,  5069.00499428,  4797.2009809 ,  4539.97131136,
                 4296.53449793,  4066.15095688,  3848.12076154,  3641.78151584,
                 3446.50634192,  3261.7019756 ,  3086.80696397,  2921.28995969,
                 2764.64810667,  2616.40551235,  2476.11180191,  2343.34074998,
                 2217.68898572,  2098.77476736,  1986.23682242,  1879.73325013,
                 1778.9404827 ,  1683.55230232,  1593.27891079,  1507.84604914,
                 1426.99416437,  1350.47762091,  1278.06395437,  1209.53316528,
                 1144.67705071,  1083.29857175,  1025.21125485,   970.23862532,
                  918.21367119,   868.9783358 ,   822.38303762,   778.28621577,
                  736.55390002,   697.05930368,   659.68243849,   624.30975005,
                  590.83377285,   559.15280372,   529.17059295,   500.79605178,
                  473.9429757 ,   448.52978257,   424.47926473,   401.71835448,
                  380.17790204,   359.79246551,   340.50011204,   322.24222965,
                  304.9633492 ,   288.61097583,   273.13542952,   258.48969411,
                  244.62927449,   231.51206142,   219.09820357,   207.34998649,
                  196.231718  ,   185.70961976,   175.75172467,   166.3277797 ,
                  157.40915403,   148.96875204,   140.98093102,   133.4214232 ,
                  126.26726211,   119.49671274,   113.08920552,   107.02527384,
                  101.28649493,    95.85543384,    90.71559048,    85.85134955,
                   81.24793303,    76.8913553 ,    72.76838067,    68.86648317,
                   65.17380847,    61.67913787,    58.37185425,    55.24190976,
                   52.27979534,    49.47651181,    46.82354254,    44.31282756,
                   41.93673908,    39.68805832,    37.55995359,    35.54595949,
                   33.63995733,    31.83615651,    30.12907689,    28.51353221,
                   26.98461431,    25.53767818,    24.1683279 ,    22.87240325];


            // q - version 3 (70, 80)
            /*
          let qs =  [ 510.44231313,  500.47110833,  490.69468544,  481.1092395 ,
                 471.71103988,  462.49642882,  453.46182004,  444.60369727,
                 435.91861298,  427.40318694,  419.05410499,  410.86811767,
                 402.84203904,  394.97274536,  387.25717392,  379.69232185,
                 372.27524493,  365.00305646,  357.87292611,  350.88207887,
                 344.02779392,  337.30740358,  330.71829231,  324.25789564,
                 317.9236992 ,  311.71323774,  305.62409417,  299.65389861,
                 293.80032747,  288.06110257,  282.43399022,  276.91680035,
                 271.5073857 ,  266.20364094,  261.00350186,  255.90494458,
                 250.90598477,  246.00467684,  241.19911322,  236.48742359,
                 231.86777417,  227.33836703,  222.89743931,  218.54326264,
                 214.27414236,  210.08841696,  205.98445736,  201.96066632,
                 198.01547778,  194.14735629,  190.35479639,  186.63632202,
                 182.99048596,  179.41586928,  175.91108073,  172.47475626,
                 169.10555846,  165.80217606,  162.56332338,  159.38773988,
                 156.27418962,  153.22146082,  150.22836537,  147.29373837,
                 144.41643766,  141.59534341,  138.82935765,  136.11740388,
                 133.45842661,  130.85139096,  128.29528231,  125.7891058 ,
                 123.33188604,  120.9226667 ,  118.56051011,  116.24449693,
                 113.97372577,  111.74731285,  109.56439166,  107.42411261,
                 105.32564272,  103.26816526,  101.25087947,   99.27300023,
                  97.33375775,   95.43239729,   93.56817884,   91.74037686,
                  89.94827996,   88.19119067,   86.46842514,   84.77931287,
                  83.12319646,   81.49943136,   79.9073856 ,   78.34643956,
                  76.81598573,   75.31542846,   73.84418373,   72.40167895] ;*/


          function findMin(arr) {
            let i = 0;
            let currMin = arr[i];
            for (i=0;i<arr.length;i++)
              if ( arr[i] < currMin )
                currMin = arr[i];
            return currMin;
          }

          let minX = findMin(qs);
          let minY = findMin(ps);

          function generatePointsFromPQ(ps, qs) {
            let len = ps.length;
            let i = 0;
            let ret = [];
            for (i=0; i<len; i++) {
              ret.push( [ qs[i], ps[i] ] );
            }
            return ret;
          }

          /*let points = [
          	[0,100],
          	[1,200],
          	[2,500],
          	[3,300]
          	,[4,600]
          	,[5,200]
          ];*/

          let points = generatePointsFromPQ(ps, qs);

          // Movable points
          // let point = [2.5, 400];
          //let point2 = [2, 500];
          //let point3 = [3, 300];


          let num = ps.length;
          let point = [ qs[num/2] , ps[num/2] ];
          //let point2 = [ qs[num/4], ps[num/4] ];
          let point3 = [ qs[num/4*3], ps[num/4*3] ];

          //let point = [ 85.8513, 79.224811];
          let point2 = [153.221461, 76.161616];
          //let point3 = [,];


          function mapToY(points, xx) {

            var yy = -1;
          	for (var i=1; i<points.length; i++) {
          		if ( points[i][0] > xx ) {

          			var x0 = points[i-1][0];
          			var y0 = points[i-1][1];
          			var x1 = points[i][0];
          			var y1 = points[i][1];

          			yy = y0 + (xx-x0)*(y1-y0)/(x1-x0);

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

          function mapToY_v2(points, xx) {

            var yy = points[0][1];
          	for (var i=1; i<points.length; i++) {
          		if ( points[i][0] < xx ) {

                var x0 = points[i-1][0];
          			var y0 = points[i-1][1];
          			var x1 = points[i][0];
          			var y1 = points[i][1];

          			yy = y0 + (xx-x0)*(y1-y0)/(x1-x0);

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
          			.datum( [  [minX, point[1]], point ] )
          			.attr("id","controlLineY")
          			.attr("fill", "none")
          			.attr("stroke", "red")
          			.attr("stroke-linejoin", "round")
          			.attr("stroke-linecap", "round")
          			.attr("stroke-width", 1.5)
          			.attr("stroke-dasharray", "5,5")
          			.attr("d", line);


          // text labels
              $("#labelPCurrent").text("P: " + parseFloat(point[1]).toFixed(2) + "");
              $("#labelQCurrent").text("Q: " + parseFloat(point[0]).toFixed(2) + "");
              $("#labelRCurrent").text("R: " + parseFloat( revenue(point[1],point[0]) ).toFixed(2) + "");
              $("#labelProfitCurrent").text("Profit: " + parseFloat( profit(point[1],point[0]) ).toFixed(2) + "");


              $("#labelPOptimal").text("P: " + parseFloat(point2[1]).toFixed(2) + "");
              $("#labelQOptimal").text("Q: " + parseFloat(point2[0]).toFixed(2) + "");

              $("#labelROptimal").text("R: " + parseFloat( revenue(point2[1],point2[0]) ).toFixed(2) + "");
              $("#labelProfitOptimal").text("Profit: " + parseFloat( profit(point2[1],point2[0]) ).toFixed(2) + "");

              $("#labelPTarget").text("P: " + parseFloat(point3[1]).toFixed(2) + "");
              $("#labelQTarget").text("Q: " + parseFloat(point3[0]).toFixed(2) + "");

              $("#labelRTarget").text("R: " + parseFloat( revenue(point3[1],point3[0]) ).toFixed(2) + "");
              $("#labelProfitTarget").text("Profit: " + parseFloat( profit(point3[1],point3[0]) ).toFixed(2) + "");



          // Point 1: Extended control line 1
                focus.append("path")
              			.datum( [  [minX, point[1]*grossMargin], [point[0], point[1]*grossMargin] ] )
              			.attr("id","controlExtendedLineY")
              			.attr("fill", "none")
              			.attr("stroke", "red")
              			.attr("stroke-linejoin", "round")
              			.attr("stroke-linecap", "round")
              			.attr("stroke-width", 1.5)
              			.attr("stroke-dasharray", "5,5")
              			.attr("d", line);



            // Point 1: control line 2
          	focus.append("path")
          					.datum( [  [point[0], minY] , point ] )
          					.attr("id","controlLineX")
          					.attr("fill", "none")
          					.attr("stroke", "red")
          					.attr("stroke-linejoin", "round")
          					.attr("stroke-linecap", "round")
          					.attr("stroke-width", 1.5)
          					.attr("stroke-dasharray", "5,5")
          					.attr("d", line);





            // Point 2: control line 1
            focus.append("path")
                  	.datum( [  [minX, point2[1]], point2 ] )
                  	.attr("id","control2LineY")
                  	.attr("fill", "none")
                  	.attr("stroke", "green")
                  	.attr("stroke-linejoin", "round")
                  	.attr("stroke-linecap", "round")
                  	.attr("stroke-width", 1.5)
                  	.attr("stroke-dasharray", "5,15")
                  	.attr("d", line);

             // Point 2: control line 2
            focus.append("path")
                  					.datum( [  [point2[0], minY] , point2 ] )
                  					.attr("id","control2LineX")
                  					.attr("fill", "none")
                  					.attr("stroke", "green")
                  					.attr("stroke-linejoin", "round")
                  					.attr("stroke-linecap", "round")
                  					.attr("stroke-width", 1.5)
                  					.attr("stroke-dasharray", "5,15")
                  					.attr("d", line);

            // Point 2: control line 1
            focus.append("path")
                    .datum( [  [minX, point3[1]], point3 ] )
                    .attr("id","control3LineY")
                    .attr("fill", "none")
                                  	.attr("stroke", "purple")
                                  	.attr("stroke-linejoin", "round")
                                  	.attr("stroke-linecap", "round")
                                  	.attr("stroke-width", 1.5)
                                  	.attr("stroke-dasharray", "5,15")
                                  	.attr("d", line);

            // Point 2: control line 2
                            focus.append("path")
                                  					.datum( [  [point3[0], minY] , point3 ] )
                                  					.attr("id","control3LineX")
                                  					.attr("fill", "none")
                                  					.attr("stroke", "purple")
                                  					.attr("stroke-linejoin", "round")
                                  					.attr("stroke-linecap", "round")
                                  					.attr("stroke-width", 1.5)
                                  					.attr("stroke-dasharray", "5,15")
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
          		d[1] = mapToY_v2(points, d[0]);


              d3.select(this)
                  .attr('cx', x(d[0]))
                  .attr('cy', y(d[1]))
              focus.select('path').attr('d', line);


              // update labels
              $("#labelPCurrent").text("P: " + parseFloat(d[1]).toFixed(2) + "");
              $("#labelQCurrent").text("Q: " + parseFloat(d[0]).toFixed(2) + "");
              $("#labelRCurrent").text("R: " + parseFloat( revenue(d[1],d[0]) ).toFixed(2) + "");
              $("#labelProfitCurrent").text("Profit: " + parseFloat( profit(d[1],d[0]) ).toFixed(2) + "");


          		focus.select('path#controlLineY').remove();
          		focus.append("path")
          				.datum( [  [minX, point[1]], point ] )
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
          								.datum( [  [point[0], minY] , point ] )
          								.attr("id","controlLineX")
          								.attr("fill", "none")
          								.attr("stroke", "red")
          								.attr("stroke-linejoin", "round")
          								.attr("stroke-linecap", "round")
          								.attr("stroke-width", 1.5)
          								.attr("stroke-dasharray", "5,5")
          								.attr("d", line);


                          // Point 1: Extended control line 1
                          focus.select('path#controlExtendedLineY').remove();
                                focus.append("path")
                              			.datum( [  [minX, point[1]*grossMargin], [point[0], point[1]*grossMargin] ] )
                              			.attr("id","controlExtendedLineY")
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


           <!-- end graphs-->


<br></br>



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
