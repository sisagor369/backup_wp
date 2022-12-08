<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Multipurpose Bridge Project</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- header part start  -->
    <header class="container-fluid slider">
                <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $x=0;
            while(have_posts()){ the_post();
            $x++;
             ?>
            <div class="carousel-item <?= ($x==1)? 'active' : '' ?>">
                <?php the_post_thumbnail(); ?>
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
                </div>
    </header>
     <!-- header part start  -->
    <!-- logo part start  -->
    <section class="logo container-fluid pt-2">
        <div class="row">
            <div class="col-sm-6 logo_left">
                <?php the_custom_logo(); ?>
            </div>
            <div class="col-sm-6 logo_right text-end">
                <?php dynamic_sidebar('bdlogo'); ?>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- menu part start   -->
    <section class="container-fluid border_menu">
        <div class="container navbar-expand menu_1">
            <?php 
            wp_nav_menu(array(
                'theme_location'       => 'TM',
                'menu_class'           => 'menu navbar-nav'
            ) )
            ?>
        </div>
    </section>
    <!-- menu part end-->
    <!-- Hero part start-->
    <section class="container hero">
        <div class="row hero_top text-center">
            <?php dynamic_sidebar('herotop'); ?>
        </div>
        <div class="row hero_bottom mt-5">
            <div class="col-sm-4 mt-5 text-center">
            <div class="card" style="width: 18rem;">
                    <?php 
                    dynamic_sidebar('hbimg2')
                    ?>
                    <!-- <img src="" class="card-img-top dashicons-desktop dadi" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody2') ?>
                    </div>
                    </div>
            </div>
            <div class="col-sm-4 mt-5 text-center">
            <div class="card" style="width: 18rem;">
                    <?php 
                    dynamic_sidebar('hbimg3')
                    ?>
                    <!-- <img src="" class="card-img-top dashicons-desktop dadi" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody3') ?>
                    </div>
                    </div>
            </div>
            <div class="col-sm-4 mt-5 text-center">
            <div class="card" style="width: 18rem;">
                    <?php 
                    dynamic_sidebar('hbimg')
                    ?>
                    <!-- <img src="" class="card-img-top dashicons-desktop dadi" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody') ?>
                    </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Hero part end-->
    <!-- Photo part start  -->
    <section class="container photo mt-5 text-center">
        <div class="row photo_top">
            <div class="col-sm-5">
                -------------------------------------------------------------->>>
            </div>
            <div class="col-sm-2"><h4 style='color:green;'>Recent Photos</h4>
            <p>Some latest project pictures</p>
            <br><br>
        </div>
            <div class="col-sm-5">
               <<<--------------------------------------------------------------
               
            </div>
        </div>
        <div class="row photo_bottom">
            <div class="col-sm-3">
                    <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg-1');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody-1');?>
                        </div>
                    </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg-2');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody-2');?>
                        </div>
                    </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg-3');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody-3');?>
                        </div>
                    </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg-4');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody-4');?>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Photo part end -->
    <!-- News part start  -->
    <section class="container news  mt-5 mb-5">
        <div class="row news_top">
        <div class="row photo_top text-center">
            <div class="col-sm-4">
                ----------------------------------------------->>>
            </div>
            <div class="col-sm-3"><h4 style='color:green;'>NEWS & EVENTS</h4>
            <p>CLICK HERE TO VIEW ALL</p>
            <br><br>
        </div>
            <div class="col-sm-5">
               <<<------------------------------------------------
               
            </div>
        </div>
        </div>
        <div class="row news_bottom">
            <!--nb start  -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $x=0;
            while(have_posts()){ the_post();
            $x++;
             ?>
            <div class="carousel-item <?= ($x==1)? 'active' : '' ?>">
                <?php the_title(); ?>
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
            <?php } ?>
        </div>
        </div>    
        <!--nb end  -->
        </div>
    </section>
    <!-- News part end -->
   




<?php wp_footer(); ?>
</body>
</html>