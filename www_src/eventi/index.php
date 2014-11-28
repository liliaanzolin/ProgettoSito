<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eventi - Informatica sarà lei!</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Navigation -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function () {
            $("#navigation_bar").load("../navigation_bar.html");
            $("#footer").load("../footer.html");
        });
    </script>
</head>
<body>
<div id="navigation_bar"></div>
<!--- Inserimento navbar ---->

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Eventi
                <small>Tutti gli eventi</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a>
                </li>
                <li class="active">Eventi</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    
    <?php
    require 'lib/connettore.php';
    if($connettore = new Connettore().connetti()) print "okokkkok !!";
    ?>
    
    
    <!-- Qui va messo il codice php che stampa con un ciclo tutti gli eventi -->
    <!-- Per il momento metto solo 4 item generici e statici -->
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-users"></i>Evento 1 a Pordenone</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="pull-left col-md-7 col-sm-8 col-xs-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque,
                            optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod?
                        </p>
                        </div>
                        <div class="pull-left col-md-5 col-sm-4 col-xs-12">
                            <img src="img/evento1.jpg" class="img-responsive customer-img" alt="Immagine Evento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-default text-center">Altre informazioni</a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-users"></i>Evento 2 a Mestre</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="pull-left col-md-7 col-sm-8 col-xs-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque,
                            optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod?
                        </p>
                        </div>
                        <div class="pull-left col-md-5 col-sm-4 col-xs-12">
                            <img src="img/evento2.jpg" class="img-responsive customer-img" alt="Immagine Evento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-default text-center">Altre informazioni</a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-users"></i>Evento 3 a Venezia</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="pull-left col-md-7 col-sm-8 col-xs-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque,
                            optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod?
                        </p>
                        </div>
                        <div class="pull-left col-md-5 col-sm-4 col-xs-12">
                            <img src="img/evento3.png" class="img-responsive customer-img" alt="Immagine Evento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-default text-center">Altre informazioni</a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-users"></i>Evento 4 a Venezia</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="pull-left col-md-7 col-sm-8 col-xs-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque,
                            optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod?
                        </p>
                        </div>
                        <div class="pull-left col-md-5 col-sm-4 col-xs-12">
                            <img src="img/evento3.png" class="img-responsive customer-img" alt="Immagine Evento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-default text-center">Altre informazioni</a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- /.row -->


<hr>

</div>
<!-- /.container -->

<!-- Footer -->
<div id="footer"></div>
<!--- Inserimento navbar ---->

<!-- End Footer -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

</body>

</html>
