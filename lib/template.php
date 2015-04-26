<?php
/***
 * @param $page_title
 */
function loadTop($page_title){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>HTML5 Samples</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/starter-template.css" rel="stylesheet">
        <link href="../css/jumbotron.css" rel="stylesheet">
        <link href="../css/theme.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">HTML5</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.html">Home</a></li>
                    <!--<li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>-->
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <style>
        .jumbotron {
            margin-bottom: .5em;
            padding: 1.8em 1.8em;
            background-color: #369;
            color: #fff;
        }

        .jumbotron p {
            font-size: 1.2em;
        }
    </style>
    <div class="jumbotron">
        <div class="container">
            <h1><?php echo $page_title; ?></h1>
            <p></p>
        </div>
    </div>
<?php
}
?>

<?php
function loadBottom(){
    ?>
<hr>

    <footer>
        <p>&nbsp;</p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

  </body>
</html>
<?php
}
?>