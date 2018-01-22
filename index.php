<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>David Stevens Bio</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css" /><!--google fonts link-->
  <link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet" type="text/css" /><!--google fonts link-->
  <meta name="viewport" content="width=device-width, initial-scale =1" />
  <!-- bootstrap meta tags -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" /><!--bootstrap cdn-->
  <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.min.css" type="text/css" />
  <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js" type="text/javascript"></script>
  <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js" type="text/javascript"></script>
  <script src="js/lazysizes.min.js" async="" type="text/javascript"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
  crossorigin="anonymous" type="text/css" />

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
  crossorigin="anonymous" type="text/javascript"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />

  <meta charset="UTF-8" /><!--charset-->
  <meta property="og:title" content="David P Stevens" />
  <meta property="og:url" content="http://davidpstevens.net/" />
  <meta property="og:image" content="http://davidpstevens.net/profileLI.jpg" />
  <meta property="og:description" content="David Stevens personal Bio. More about me, and contains links to some notable projects I have completed." />

  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <meta name="author" content="David Stevens" /><!--author-->
</head>

<body>
  <div class="container-fluid">
<div class="row fixed">
    <div id="myName-lg" class="col nopadd">
      david<a href="https://php.net"><img class="img-responsive textimage" src="phplogo.png" /></a>stevens
    </div>
</div>
<div class="row white">
  <a class="col" href="https://github.com/oldusername91"><span class="fa fa-github"></span></a>
  <a class="col" href="mailto:david@davidpstevens.net"><span class="fa fa-user-circle"></span></a>
  <a class="col" href="https://www.linkedin.com/in/david-stevens-aus"><span class="fa fa-linkedin"></span></a>
</div>
<div class="row jumbotron">
  <div class="col-xs-12"><h1>Hi!</h1></div>
  <p class="topp">I am a web developer with a load of skills, and I really love to solve problems in elegant ways! I am based in Sydney, I'm Dad to Eric my awesome son!</p>
  <p class="">Don't hold my love of PHP against me, modern PHP is a fantastic tool, and when used properly it is super powerful! That don't have problems with using other modern technologies, but PHP is my favourite!</p>
  <h2 class="">Below are some projects I've worked on during my time at Uni:</h2>

</div>
    <div class="row">
      <div class="card col-xs-12 col-md-4" >
        <img class="card-img-top" src="..." alt="">
        <div class="card-block">
          <h2 class="card-title">Simvest - ASX Investment Simulator</h2>
          <p class="card-text">Final semester project. With a development team of 5 students, we were tasked with completing a project of an ASX simulation web application.</p>
          <p class="card-text">My role was solution architect and involved producing technical specifications based on thorough analysis and research,</p>
          <p class="card-text botom">
            <?php
              foreach(['PHP', 'Code Igniter 3', 'Twitter Bootstrap', 'mySQL', 'AWS VM', 'APIs', 'Git','AJAX', 'CSS', 'HTML'] as $tag)
                echo '<span class="badge">'.$tag.'</span>';
            ?>
          </p>
         <a href="http://54.200.22.109/" class="btn btn-primary">Simvest<i class="fa fa-external-link"></i></a>
         </div>
      </div>

      <div class="card col-xs-12 col-md-4" >
        <img class="card-img-top" src="..." alt="">
        <div class="card-block">
          <h2 class="card-title">Conway's Game of Life</h2>
          <p class="card-text">Project completed with one other student. This project was part of the Web Technologies subject.</p>
          <p class="card-text">The web application is based on Conway's Game of Life which is a simluator inspired by cell life.</p>
          <p class="card-text botom">
            <?php
              foreach(['ASP.NET', 'C#', 'SQL Server', 'Git', 'AJAX', 'CSS', 'HTML' ] as $tag)
                echo '<span class="badge">'.$tag.'</span>';
            ?>
          </p>
         <a href="http://gol.gear.host" class="btn btn-primary">Game of Life<i class="fa fa-external-link"></i></a>
         </div>
      </div>

      <div class="card col-xs-12 col-md-4" >
        <img class="card-img-top" src="..." alt="">
        <div class="card-block">
          <h2 class="card-title">Silverado Cinema Bookings</h2>
          <p class="card-text">Project completed with one other student. Introduction to Web Programming.</p>
          <p class="card-text botom">
            <?php
              foreach(['PHP', 'mySQL', 'CSS', 'HTML', 'Git', 'Javascript'] as $tag)
                echo '<span class="badge">'.$tag.'</span>';
            ?>
          </p>
         <a href="http://titan.csit.rmit.edu.au/~s3409329/wp/a2/index.php" class="btn btn-primary">Silverado Cinema<i class="fa fa-external-link"></i></a>
         </div>
      </div>

      <div class="card col-xs-12 col-md-4" >
        <img class="card-img-top" src="..." alt="">
        <div class="card-block">
          <h2 class="card-title">Nat's Kitchen</h2>
          <p class="card-text botom">Solo project. Introduction to the wordpress framework and creating an online store.</p>
          <?php
            foreach(['PHP', 'mySQL', 'CSS', 'HTML', 'Wordpress', 'eCommerce'] as $tag)
              echo '<span class="badge">'.$tag.'</span>';
          ?>
        </p>
         <a href="http://davidpstevens.net/wordpress/" class="btn btn-primary">Nat's Kitchen<i class="fa fa-external-link"></i></a>
         </div>
      </div>

      <div class="card col-xs-12 col-md-4">
        <img class="card-img-top" src="..." alt="">
        <div class="card-block">
          <h2 class="card-title">Do you have what it takes to be PM?</h2>
          <p class="card-text botom">Solo project. An introudctory course to Javascript, Jquery and including jQuery plugins.</p>
          <?php
            foreach(['Javascript', 'jQuery', 'CSS', 'HTML'] as $tag)
              echo '<span class="badge">'.$tag.'</span>';
          ?>
          </p>
         <a href="http://davidpstevens.net/duhwitpm/" class="btn btn-primary">Do you have what it takes to be PM?<i class="fa fa-external-link"></i></a>
         </div>
      </div>

      <div class="card col-xs-12 col-md-4" >
        <img class="card-img-top" src="..." alt="">
        <div class="card-block">
          <h2 class="card-title">Illwarra's Explorer's Guide</h2>
          <p class="card-text">Solo project. Introduction to web design..</p>

         <p class="card-text botom">
         <?php
           foreach(['CSS', 'HTML'] as $tag)
             echo '<span class="badge">'.$tag.'</span>';
         ?>
       </p>
       <a href="http://davidpstevens.net/illawarraexplorers/" class="btn btn-primary">Illawarra Explorer's Guide<i class="fa fa-external-link"></i></a>
         </div>
      </div>
    </div>
  <footer class="row">&#169; David Stevens - <?php echo date('Y'); ?></footer>
  </div>
</body>
</html>
