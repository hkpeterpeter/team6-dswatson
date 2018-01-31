
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
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">A.S. Watson Group</a>



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
            <h1 class="h2">Welcome to DS Watson</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

            </div>
          </div>

          <!--<canvas class="my-4" id="myChart" width="900" height="380"></canvas>-->



          <!-- Graphs -->
           <p> Please select an item. Alternatively, type key words in the filter box to filter the list.</p>

           <img src="Capture.PNG" alt="icon view">
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
