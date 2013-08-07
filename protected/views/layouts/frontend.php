<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/style.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/customStyle.css" type="text/css" rel="stylesheet" />
        <title>D-Tech</title>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/js/jquery.js" ></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/dtech.js" ></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                if (window.location.hash != "" && window.location.hash != "#") {
                    dtech.scrolltoSection(window.location.hash.substring(1, window.location.hash.length));
                }
            })
        </script>
    </head>

    <body>
        <div id="banner">
            <div class="banner_part">
                <div class="logo">
                    <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/logo_02.jpg" /></a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="javascript:void(0)" onclick="">about us</a></li>
                        <li><a href="javascript:void(0)">-</a></li>
                        <li><a href="#our_work" onclick="dtech.scrolltoSection('our_work')">how do we work</a></li>
                        <li><a href="javascript:void(0)">-</a></li>
                        <li><a href="#services" onclick="dtech.scrolltoSection('services')">services</a></li>
                        <li><a href="javascript:void(0)" onclick="">-</a></li>
                        <li><a href="#contact_us" onclick="dtech.scrolltoSection('contact_us')">contact us</a></li>
                    </ul>
                </div>
                <div class="main_banner">
                    <div class="left_banner">
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/left_arrow_03.png" /></a>
                    </div>
                    <div class="middle_banner">
                        <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/high_values_img_03.png" />
                        <p>our success is not only due to the quality of our work; it’s down to attitude, 
                            our approach and the way we treat our clients.</p>
                    </div>
                    <div class="right_banner">
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/right_arrow_03.png" /></a>
                    </div>
                    <div class="social_media">
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_tweeter_03.jpg" /></a>
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_facebook_03.jpg" /></a>
                        <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_linkedin_03.jpg" /></a>
                    </div>
                </div>
                <div class="dots">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_dots_03.jpg" />
                </div>
            </div>
        </div>
        <div id="our_work">
            <div class="main_work">
                <div class="back_to_up">
                    <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
                </div>
                <div class="left_work">
                    <h1>our</h1>
                    <h2>work</h2>
                    <h3>methodology</h3>
                    <p>
                        Using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. We report on daily basis so that our client knows what has been the progress of the project. Detailed voice conversations with our worthy client leads to develop functionality plan and Acceptance Test Criteria at the start of the project. Once the requirements are set and we are good to go, the client can assign a project manager from his/her company or instead let us assign a project manager.  
                    </p>
                </div>
                <div class="right_work">
                    <div class="big_circle">
                        <div class="cirlce_upper_part">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/tab_like_img_03.png" /></a>
                            <p>Requirements</p>
                        </div>
                        <div class="cirlce_left_part">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/releasing_img_03.png" /></a>
                            <p>Release</p>
                        </div>
                        <div class="cirlce_right_part">
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_big_img_03.png" /></a>
                            <p>Design</p>
                        </div>
                        <div class="cirlce_bottom_part">
                            <p>Development</p>
                            <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/keyboard_img_03.png" /></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="services">
            <div class="main_services">
                <div class="back_to_up_services">
                    <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
                </div>
                <div class="our_services">

                    <div class="services_text">
                        <h1>our</h1>
                        <h2>services</h2>
                        <p>using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. we report on daily basis so taht our client knows what has been the progress of the project...</p>
                    </div>
                </div>
                <div class="services_img">
                    <div class="cirlce">
                        <a href="javascript:void(0)" onclick="dtech.showCirclePart(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/lcd_03.png" /></a>
                        <div class="cirlce_part cirlce_data">
                            <div class="cross_img">
                                <a href="javascript:void(0)" onclick="dtech.hideCircle(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/cross.png" /></a>
                            </div>
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/lcd_03.png" />
                          
                            <section>Website designing</section>
                            <p>
                                Your website is your presence on the Web and your online presence is often your first interaction with potential customers. We, at D-tech, thoroughly plan and implement tailored designs to meet your particular needs and depict your brand identity in the perfect fashion. We take utmost care in web designing for you. We bring innovation, novelty and creativity at your doorstep within the purview of your organizational goals and brand strategy.
                            </p>
                        </div>
                    </div>
                    <div class="cirlce" id="app-cirle">
                        <a href="javascript:void(0)" onclick="dtech.showCirclePart(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.jpg" /></a>
                        <div class="pad_cirlce_part cirlce_data">
                            <div class="cross_img">
                                <a href="javascript:void(0)" onclick="dtech.hideCircle(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/cross.png" /></a>
                            </div>
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.jpg" />
                       
                            <section>games - social apps - islamic apps</section>
                            <p>using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. we report on daily basis so taht our client knows what has been the progress of the project...</p>
                        </div>
                    </div>
                    <div class="cirlce" id="brush-cirle cirlce_data">
                        <a href="javascript:void(0)" onclick="dtech.showCirclePart(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.jpg" /></a>
                        <div class="brush_cirlce_part">
                            <div class="cross_img">
                                <a href="javascript:void(0)" onclick="dtech.hideCircle(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/cross.png" /></a>
                            </div>
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.jpg" />
                            
                           <section>games - social apps - islamic apps</section>
                            <p>using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. we report on daily basis so taht our client knows what has been the progress of the project...</p>
                        </div>
                    </div>
                    <div class="cirlce" id="back-cirle">
                        <a href="javascript:void(0)" onclick="dtech.showCirclePart(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03.jpg" /></a>
                        <div class="comments_cirlce_part  cirlce_data">
                            <div class="cross_img">
                                <a href="javascript:void(0)" onclick="dtech.hideCircle(this)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/cross.png" /></a>
                            </div>
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03.jpg" />
                            
                            <section>games - social apps - islamic apps</section>
                            <p>using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. we report on daily basis so taht our client knows what has been the progress of the project...</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="contact_us">

            <?php echo $content; ?>
        </div>
    </body>
</html>