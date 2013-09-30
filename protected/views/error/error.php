<!doctype html>
<html>
    <head>

        <script src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/js/jquery.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/dtech.js" ></script>
        <meta charset="utf-8">

        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/style.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/customStyle.css" type="text/css" rel="stylesheet" />


        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/packages/jui/colorbox/colorbox.css">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/packages/jui/carousal/coin-slider-styles.css">

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/colorbox/jquery.colorbox.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/carousal/coin-slider.min.js"></script>


        <title>D-Tech Systems</title>

        <script type="text/javascript">
            jQuery(document).ready(function() {



                if (window.location.hash != "" && window.location.hash != "#") {
                    dtech.scrolltoSection(window.location.hash.substring(1, window.location.hash.length));
                }
                $(".inline").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".pad").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".design").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".brand").colorbox({inline: true, width: "55%", scrolling: true, height: "500px"});

                $(".social_media_images div a img").hover(function() {
                    $(this).attr("src", $(this).attr("hover"));
                }, function() {
                    $(this).attr("src", $(this).attr("un-hover"));
                });
            })
        </script>
        <!-- bxSlider Javascript file -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/responsive/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?php echo Yii::app()->baseUrl; ?>/packages/jui/css/jquery.bxslider.css" rel="stylesheet" />

        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.bxslider').bxSlider({auto: true});
            });

        </script>
        <!-- Gumby -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="humans.txt" >
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
        <!-- Facebook Metadata /-->
        <meta property="fb:page_id" content="" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
        <meta property="og:title" content="" />
        <!-- Google+ Metadata /-->
        <meta itemprop="name" content="" >
        <meta itemprop="description" content="" >
        <meta itemprop="image" content="" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/gumby.css">
        <!-- <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/gumby_style.css"> -->
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/responsive/libs/modernizr-2.6.2.min.js"></script>
        <!-- Gumby -->
    </head>

    <body>
        <div class="navbar" id="nav1">
            <div id="header">
                <div class="banner_part">
                    <div class="row">
                        <div class="three columns">
                            <div class="logo">
                                <?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . "/frontend/images/logo_img_02.png"), Yii::app()->createUrl('site/index')); ?> 
                            </div>
                        </div>
                        <div class="mainnavbar" id="nav1">
                            <a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
                            <div class = "row">
                                <ul class = "six columns">
                                    <li><?php echo CHtml::link('About Us', Yii::app()->createUrl('site/index')); ?>
                                    </li>
                                    <li><?php echo CHtml::link('How do we Work', Yii::app()->createUrl('site/index')); ?></li>
                                    <li><?php echo CHtml::link('Services', Yii::app()->createUrl('site/index')); ?></li>
                                    <li><?php echo CHtml::link('Contact us', Yii::app()->createUrl('site/index')); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main_about_us">
            <div class="row">
                <div class="back_to_up">
                    <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
                </div>
                <div id="about_us">
                    <div class="twelve columns">
                        <div class="about_us_content">

                            <div class="error">
                                <?php
                                echo '.';
                                ?>
                                <div class="error_code">
                                    <?php
                                    echo 'Ooops ! Error : ' . $error['code'];
                                    echo '<br>';
                                    echo '<br>';
                                    ?>
                                </div>
                                <?php
                                echo CHtml::encode($error['message']);
                                ?>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/responsive/libs/gumby.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/responsive/plugins.js"></script>
    </body>
</html>