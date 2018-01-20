<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--bootstrap cdn-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <!--bootstrap cdn-->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> <!--google fonts link-->
    <link href='https://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'> <!--google fonts link-->
    <link href='https://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'><!--google fonts link-->
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'><!--google fonts link-->
    <meta name = "viewport" content = "width=device-width, initial-scale =1"> <!-- bootstrap meta tags -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"><!--font awesome link-->
    <link rel='stylesheet' href="css/style.css">
    <?php
    $name = basename($_SERVER['PHP_SELF']);
    if($name==='index.php'){
        echo <<<END
<!-- Steven Wanderski, bxSlider image carousel, http://bxslider.com/-->
<!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet"/>
    
END;
    }
    ?>
<meta charset = "UTF-8"> <!--charset-->
    
</head>
