<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title><?php echo $title; #Aqui eu estou imprimindo o valor de uma variavel ?></title>
    <!-- Favicons-->
    <link rel="stylesheet" href="../css/<?php echo $bodyId; ?>.css">
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="../images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="../css/prism.css" rel="stylesheet">
    <link href="../css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body id="<?php echo $bodyId; ?>">
    <header>
      <div class="container">
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle ">
          <i class="mdi-navigation-menu"></i>
        </a>
      </div>
      <ul id="nav-mobile" class="side-nav fixed colection">
        <li class="logo">
          <a id="logo-container" href="../inicio" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="../res/materialize.svg">Your browser does not support SVG</object>
          </a>
        </li>
        <li class="bold">

          <a href="../inicio" class="waves-effect waves-teal ">
          <!-- <i class="fa fa-home fa-2x"></i> -->
          <!-- <i class="material-icons">close</i> -->
          <!-- <i class="material-icons left">store</i> --> Home</a>
        </li>
        <!-- <li class="collection-item bold"><div>Home<a href="#!" class="secondary-content"><i class="material-icons">store</i></a></div></li> -->

        <li class="bold">
          <a href="getting-started.html" class="waves-effect waves-teal">About</a>
        </li>
        <!-- <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Projects</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#">All</a></li>
                  <li><a href="#">Web</a></li>
                  <li><a href="#">Mobile</a></li>
                  <li><a href="#">Drawing</a></li>
                  <li><a href="#">Printing</a></li>
                
                </ul>
              </div>
            </li>
           
          </ul>
        </li> 
        <li class="bold">
          <a href="#" class="waves-effect waves-teal">Mobile</a>
        </li>-->
        <li class="bold">
          <a href="../portfolio" class="waves-effect waves-teal">Portfolio</a>
        </li>
      </ul>
    </header>