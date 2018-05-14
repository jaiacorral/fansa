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
            <div class="login">WHY IS THIS NOT SHOWING</div>
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
    </nav>