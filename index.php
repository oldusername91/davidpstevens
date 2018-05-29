<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>David Stevens Bio</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css" /><!--google fonts link-->
  <link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet" type="text/css" /><!--google fonts link-->
  <meta name="viewport" content="width=device-width, initial-scale =1" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
  crossorigin="anonymous" type="text/css" />

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
  crossorigin="anonymous" type="text/javascript"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />

  <meta charset="UTF-8" /><!--charset-->
  <meta property="og:title" content="David P Stevens" />
  <meta property="og:url" content="http://davidpstevens.net/" />
  <meta property="og:image" content="http://davidpstevens.net/profileLI.jpg" />
  <meta property="og:description" content="David Stevens personal Bio. More about me, and contains links to some projects I have completed." />

  <link rel="stylesheet" href="css/style.css?1_2" type="text/css" />
  <meta name="author" content="David Stevens" /><!--author-->
</head>

<body>
  <div class="container">
<div class="row fixed">
    <div id="myName-lg" class="col nopadd">
      David Stevens
    </div>
</div>
<div class="row white">
  <a class="col" href="https://github.com/oldusername91"><span class="fa fa-github"></span></a>
  <a class="col" href="mailto:david@davidpstevens.net"><span class="fa fa-user-circle"></span></a>
  <a class="col" href="https://www.linkedin.com/in/david-stevens-aus"><span class="fa fa-linkedin"></span></a>
</div>
    <div class="row">
      <div class="card col-xs-12 col-md-4" >
        <div class="card-block">
          <h2 class="card-title"><a href="http://54.200.22.109/">Simvest<i class="fa fa-external-link"></i></a></h2>
          <p class="card-text">Final semester project. With a development team of 5 students, we were tasked with completing a project of an ASX simulation web application.</p>
          <p class="card-text">My role was solution architect and involved producing technical specifications based on thorough analysis and research,</p>
          <p class="card-text botom">
          	<?php foreach(['PHP', 'Code Igniter 3', 'Twitter Bootstrap', 'mySQL', 'AWS VM', 'APIs', 'Git','AJAX', 'CSS', 'HTML'] as $tag): ?>
                	<span class="badge"><?=$tag?></span>
            <?php endforeach; ?>
          </p>

         </div>
      </div>

      <div class="card col-xs-12 col-md-4" >
        <div class="card-block">
          <h2 class="card-title"><a href="http://gol.gear.host">Game of Life<i class="fa fa-external-link"></i></a></h2>
          <p class="card-text">Project completed with one other student. This project was part of the Web Technologies subject.</p>
          <p class="card-text">The web application is based on Conway's Game of Life which is a simluator inspired by cell life.</p>
          <p class="card-text botom">
          <?php foreach(['ASP.NET', 'C#', 'SQL Server', 'Git', 'AJAX', 'CSS', 'HTML' ] as $tag): ?>
                  <span class="badge"><?=$tag?></span>
          <?php endforeach; ?>
          </p>

         </div>
      </div>

      <div class="card col-xs-12 col-md-4" >
        <div class="card-block">
          <a href="https://addons.mozilla.org/en-US/firefox/addon/element-hider/" ><h2 class="card-title">Hide-Element <i class="fa fa-external-link"></i></h2></a>
          <p class="card-text">Firefox add-on. For hiding and unhiding elements.</p>
          <p class="card-text botom">
          <?php foreach(['Javascript', 'Git'] as $tag): ?>
              <span class="badge"><?=$tag?></span>
          <?php endforeach; ?>
          </p>

         </div>
      </div>

      <div class="card col-xs-12 col-md-4" >
        <div class="card-block">
          <h2 class="card-title"><a href="http://davidpstevens.net/wordpress/">Nat's Kitchen<i class="fa fa-external-link"></i></a></h2>
          <p class="card-text botom">Solo project. Introduction to the wordpress framework and creating an online store.</p>
          <?php foreach(['PHP', 'mySQL', 'CSS', 'HTML', 'Wordpress', 'eCommerce'] as $tag): ?>
            <span class="badge"><?=$tag?></span>
          <?php endforeach; ?>
        </p>

         </div>
      </div>

      <div class="card col-xs-12 col-md-4">
        <div class="card-block">
          <h2 class="card-title"><a href="http://davidpstevens.net/duhwitpm/">Do you have what it takes to be PM?<i class="fa fa-external-link"></i></a></h2>
          <p class="card-text botom">Solo project. An introudctory course to Javascript, Jquery and including jQuery plugins.</p>
          <?php foreach(['Javascript', 'jQuery', 'CSS', 'HTML'] as $tag): ?>
            <span class="badge"><?=$tag?></span>
          <?php endforeach; ?>
          </p>

         </div>
      </div>

      <div class="card col-xs-12 col-md-4" >
        <div class="card-block">
          <h2 class="card-title"><a href="http://davidpstevens.net/illawarraexplorers/">Illwarra's Explorer's Guide<i class="fa fa-external-link"></i></a></h2>
          <p class="card-text">Solo project. Introduction to web design..</p>

         <p class="card-text botom">
         <?php foreach(['CSS', 'HTML'] as $tag): ?>
           <span class="badge"><?=$tag?></span>
         <?php endforeach; ?>
       </p>

         </div>
      </div>
    </div>
  <footer class="row">&#169; David Stevens - <?php echo date('Y'); ?></footer>
  </div>
</body>
</html>
