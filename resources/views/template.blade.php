<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('/css/mdb.min.css')}}" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        main {
            margin-top: 3rem;
        }
        
        .lead {
            text-align: justify;
        }
        
        @media only screen and (max-width: 768px) {
            .post-title {
                margin-top: 1rem;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .read-more {
                text-align: center;
            }
        }
        
        .extra-margin {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
    </style>

</head>

<body>

    <header>
        <!--Navbar-->
        <nav class="navbar navbar-dark primary-color-dark">

            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

            <div class="container">

                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="/" >Blog | Laravel</a>
                    <!--Links-->
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                    </ul>
                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->
    </header>

    <main>
        <!--Main layout-->
        <div class="container">

            <!--Page heading-->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1-responsive">Blog Lavarel
                        <small class="text-muted">Projeto Fase 1 - School of Net</small>
                    </h1>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            @yield('content')
            
          
        </div>
        <!--/.Main layout-->
    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only primary-color-dark">
        
       

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="containter-fluid">
                Rafael William | https://github.com/rafaw940
            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>