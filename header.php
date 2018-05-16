<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>


<?php $refresh = r( $site->user(), '?refresh=' . time() ); ?>
<?php echo css(array(
   'assets/css/bootstrap.css', 
  'assets/vendor/font-awesome/css/font-awesome.min.css'
)) ?>


    
    <!--Slick -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FANSA</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

</head>

<body id="page-top">
    
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="login">
                <div class="col-lg-2"></div>
                    <div class="col-lg-4"> 
                            <div class="search-container">
                                    <form action="/action_page.php">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      <input type="text" placeholder="Search.." name="search">
                                    </form>
                                  </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2">
                        <a class="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</a>
                        &nbsp;
                        |
                        &nbsp;
                        <a class="login" href="register">Register</a>
                    </div>
            </div>

            

            <div class="container">
            
                    
            
        <div class="container-fluid d-block col-lg-10 col-lg-offset-1-5" >
            <div class="navbar-header">
                <button type=   "button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav navbar-right">

                    

<?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>


                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
        <div id="id01" class="modal">
                <div class="col-lg-3"></div>
                <form class="modal-content animate col-lg-6" action="/action_page.php">
                  <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    
                  </div>
              
                  <div class="container">
                        <div class="ml-auto d-block"> 
                                <h2 class="section-heading" style="color:#FDAE84; text-align:left;">LOG IN</h2>
                    
                    <input type="text" placeholder="Enter Username" name="uname" class="modalinput col-lg-6" required><div class="col-lg-7"></div>
              
                    
                    <input type="password" placeholder="Enter Password" name="psw" class="modalinput col-lg-6" required><div class="col-lg-7"></div>
                      
                    <div class="col-lg-6"><button type="submit" class="loginmodal col-lg-4">Log in</button></div><div class="col-lg-7"></div>
                    <div class="col-lg-6" style="margin-left: 17%;"><a href="#" class="loginmodal col-lg-4">Forgot Password</a></div><div class="col-lg-7"></div>
                  </div></div>
                </form>
              </div>
    </nav>

    