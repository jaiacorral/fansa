<!DOCTYPE html>
<html lang="en">

<?php snippet('header') ?>
    <?php echo css(array(
   'assets/css/home.css'
)) ?>

    <div class="your-class" style="margin-top: -10%;">
    <?php $banners = $page->banners()->yaml(); ?>
  <div class="banner" style="background-image: url(<?php echo $banners[0]["image"];?>);"><a href="<?php echo $banners[0]["link"]?>"></a></div>
  <div class="banner" style="background-image: url(<?php echo $banners[1]["image"];?>);"><a href="<?php echo $banners[1]["link"]?>"></a></div>
  <div class="banner" style="background-image: url(<?php echo $banners[2]["image"];?>);"><a href="<?php echo $banners[2]["link"]?>"></a></div>

</div>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.js"></script>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


  <script type="text/javascript">
   $('.your-class').slick({
       dots: true,
       slidesToScroll: 1,
    //    autoplay: true,
    //    autoplaySpeed: 5000,
});
  </script>


    <section class="bg-primary translateY" id="about">
<header>
        <div class="header-content" style="margin-top: 20%;">

              <div class="header-content-inner">
                <br>
                <!-- <img class="rounded-circle img-fluid" src="http://placehold.it/125x125" alt="" style ="width= 30%; "> -->
                <h1 class="banner-title" id="homeHeading" ><?php echo $banners[0]["title"];?>
                <p>by <a href="<?php echo $banners[0]["artist"];?>"><?php echo $banners[0]["artist"];?></a> from <?php echo $banners[0]["country"];?></p></h1>

              </div>
       </div>

    </header>
    <hr>
        <br>
        <div class="container">



            <div class="row">
                <div class="col-lg-10 col-sm-12 col-lg-offset-1 text-center">
                    <section class="no-padding">
        <div class="container-fluid">
        <div class="container-fluid white-bg">
                <div class="ml-auto d-block center">
                        <br><h1 class="section-heading blacktext categories">Categories</h1><br>
                </div>

            <div class="row popup-gallery">
            <?php $articles = $page->articles()->yaml(); ?>




                        <div class="row popup-gallery">
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo $articles[0]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[0]["image"];?>')">
                        <div class="article-box-caption">
                            <div class="article-box-caption-content">
                                <div class="article-category text-faded">
                                    <?php echo $articles[0]["title"];?>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo $articles[1]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[1]["image"];?>')">
                        <div class="article-box-caption">
                            <div class="article-box-caption-content">
                                <div class="article-category text-faded">
                                    <?php echo $articles[1]["title"];?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo $articles[2]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[2]["image"];?>')">
                        <div class="article-box-caption">
                            <div class="article-box-caption-content">
                                <div class="article-category text-faded">
                                    <?php echo $articles[2]["title"];?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo $articles[3]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[3]["image"];?>')">
                        <div class="article-box-caption">
                            <div class="article-box-caption-content">
                                <div class="article-category text-faded">
                                    <?php echo $articles[3]["title"];?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
<br>
                        <div class="row popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo $articles[4]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[4]["image"];?>')">
                        <div class="article-box-caption">
                            <div class="article-box-caption-content">
                                <div class="article-category text-faded">
                                    <?php echo $articles[4]["title"];?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo $articles[5]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[5]["image"];?>')">
                        <div class="article-box-caption">
                            <div class="article-box-caption-content">
                                <div class="article-category text-faded">
                                    <?php echo $articles[5]["title"];?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                        <a href="<?php echo $articles[6]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[6]["image"];?>')">
                            <div class="article-box-caption">
                                <div class="article-box-caption-content">
                                    <div class="article-category text-faded">
                                        <?php echo $articles[6]["title"];?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </section>
    <br><br>

                </div>
            </div>
            <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <section class="no-padding">
            <div class="container-fluid">
            <div class="container-fluid white-bg">
                    <div class="ml-auto d-block center col-lg-12">
                            <h1 class="section-heading blacktext featured col-lg-6">Featured Artists</h1>
                            <h1 class="section-heading blacktext date col-lg-6 ">January 2018</h1>
                    </div>

                <div class="row popup-gallery">
                <?php $articles = $page->articles()->yaml(); ?>




                            <div class="col-lg-6 row no-gutter popup-gallery">

                    <div class="col-lg-6 col-sm-6">
                        <a href="<?php echo $articles[0]["link"];?>" class="article-box" style="background-size: cover; height: 24em; background-image: url('<?php echo $articles[0]["image"];?>')">

                        </a>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <a href="<?php echo $articles[1]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[1]["image"];?>')">

                        </a>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <a href="<?php echo $articles[2]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[2]["image"];?>')">

                        </a>
                    </div>
                </div>
    <br>
                            <div class=" col-lg-6 row no-gutter popup-gallery">
                    <div class="col-lg-12 col-sm-6">
                        <a href="<?php echo $articles[4]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[4]["image"];?>')">

                        </a>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <a href="<?php echo $articles[5]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[5]["image"];?>')">

                        </a>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                            <a href="<?php echo $articles[6]["link"];?>" class="article-box" style="background-size: cover; height: 12em; background-image: url('<?php echo $articles[6]["image"];?>')">

                            </a>
                        </div>
                </div>
            </div>
        </section>
        <br>

                    </div>
                </div>

        </div>


    <?php snippet('footer') ?>
</section>

</html>
