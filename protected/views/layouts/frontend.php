<!doctype html>
<html>
    <head>
        <script src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/js/jquery.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/dtech.js" ></script>
        <meta charset="utf-8">

        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/style.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/customStyle.css" type="text/css" rel="stylesheet" />


        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/packages/jui/colorbox/colorbox.css">

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/colorbox/jquery.colorbox.js"></script>


        <title>D-Tech</title>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                if (window.location.hash != "" && window.location.hash != "#") {
                    dtech.scrolltoSection(window.location.hash.substring(1, window.location.hash.length));
                }
                $(".inline").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".pad").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".design").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".brand").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});

                $(".social_media_images div a img").hover(function() {
                    $(this).attr("src", $(this).attr("hover"));
                }, function() {
                    $(this).attr("src", $(this).attr("un-hover"));
                });

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
                        <li><a href="#main_about_us" onclick="dtech.scrolltoSection('main_about_us')">about us</a></li>
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
                        <a href="javascript:void(0)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_tweeter_03.png" /></a>
                        <a href="http://facebook.com/dtech.co" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_facebook_03.png" /></a>
                        <a href="javascript:void(0)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_linkedin_03.png" /></a>
                    </div>
                </div>
                <div class="dots">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_dots_03.jpg" />
                </div>
            </div>
        </div>
        <div id="main_about_us">
            <div id="about_us">
                <div class="back_to_up">
                    <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
                </div>
                <div class="about_us_content">
                    <h1>about<span>us</span></h1>
                    <p>Twenty-first century is a century of technical advancements. D-tech uses cutting edge technology and ongoing training and development to stay up to date with technology and the market trends. We believe in novelty, and innovation. Our approach is unorthodox and that is what gives us our competitive edge. Providing free consultation and one-week trial are some of the options that we offer to our worthy clients so that they are fully satisfied. It’s a “been there, done that” scenario. We know how it works. Let us take all your worries. You sit back and relax. More significantly, we say we are done only when we are satisfied with our work. We guarantee quality results.</p>
                    <p>With dynamic leadership skills, novel approach and an inexhaustible drive to deliver the best, our management makes a strong team that can be relied upon. We take pride in our highly competent, well qualified personnel with a history of success in their respective fields.</p>
                    <p>The D-tech team comprises of professionals who are highly skilled in wide array of fields: the software development wing holds expertise in: PHP(Yii ,zend , codeigniter , cake php , core php ,wordpress , Joomla ,sugar crm), Javascript (Jquery ,protype js , angular js), Python (django), JAVA, .NET (asp.net, c#, vb.net); the mobile application &amp; game development wing comprises iOS and Android team. The iOS application &amp; game development team specialized in: Cocoa Touch, Cocos2d, Unity 3d; the Android application &amp; game development team specializes in: Java, Cocos2d – x, Unity 3d, and Engine.</p>
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
                        <a class ="inline" href="#inline_content" ><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/lcd_03.png" /></a>

                    </div>
                </div>
                <div class="cirlce" id="app-cirle">
                    <a class="pad" href="#pad_content" ><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.jpg" /></a>

                </div>
                <div class="cirlce" id="brush-cirle cirlce_data">
                    <a class="design" href="#design_content" ><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.jpg" /></a>

                </div>
                <div class="cirlce" id="back-cirle">
                    <a class="brand" href="#brand_content" ><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03.jpg" /></a>

                </div>
            </div>

        </div>
    </div>
    <div id="contact_us">

        <?php echo $content; ?>
    </div>
    <div style='display:none'>
        <div id='inline_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/lcd_03.png" /> 
            </div>



            <section>Web Bases Social Networking setups</section>
            <p>
                We are providing custom made social networking setup, like facebook and other social application. We have expertise to handle custom plugins of social network and developing customized platform.
            </p>
            <section>Web based CRM's</section>
            <p>
                Our CRM team has complete command over the custom designed and built CRM apps and SOAP architecture allowing us to build extensive custom products along with confidently mapping their unique business process requirements onto CRM via Customizations and Integrations.
            </p>
            <section>Web Based CMS</section>
            <p>
                We simplify website management in order to allow business owners and non-technical personnel to add, author, and update web content on the fly with multilingual support. Our customized CMS puts messaging in the hands of the people who know it best, as it applies workflows, approvals, and permissions, as well as maintains a complete history of the changes. Editing content is as easy as editing a document with our CMS integration. Wordpress and Joomla are our expertise
            </p>
            <section>Web Based Business Applications</section>
            <p>
                We simplify the management of development of business applications according client requirement, e.g. sale, order, purchase, business, project management systems.
                System will provide the entire all the features like data storing, reporting, emailing, access control security.
            </p>
            <section>Web Based Accounting Applications</section>
            <p>
                We are providing business accounting web development solutions also providing the services to sync their software’s with other accounting systems using web services like zero integration.
            </p>
            <section>Ecommerce Development</section>
            <p>We are providing simplest ecommerce solutions; we have the expertise of custom based ecommerce development also providing other open source platforms like wordpress ecommerce plug-in, open cart, magento.</p>

            <section>Facebook applications</section>
            <p>|We are dealing with platform conversion for your every app to face book application, we have expertise to handle small and larger (business) apps on face book, automatic sharing, posting on walls, following face book API.</p>
        </div>

        <div id='pad_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.jpg" />
            </div>
            <section style="text-align:center;">
                IOS &AMP; Android application &AMP; game development
            </section>

            <p>
                Spiking prevalence of smartphones and tablets usage has led to a new marketing tool within the sphere of the digital world: mobile applications. D-tech has extensive experience in mobile application and games development for both iOS and Android.
            </p>
        </div>
        <div id='design_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.jpg" />
            </div>

            <section>Website designing</section>
            <p>Your website is your presence on the Web and your online presence is often your first interaction with potential customers. We, at D-tech, thoroughly plan and implement tailored designs to meet your particular needs and depict your brand identity in the perfect fashion. We take utmost care in web designing for you. We bring innovation, novelty and creativity at your doorstep within the purview of your organizational goals and brand strategy.</p>
            <section> Slicing services</section>
            <p> Our HTML and CSS coders have professional expertise to handle the browser compatibility and responsive design, we are dealing with html 5, css 3.0, web 2.0 standards to handle all html stuff
            </p>

        </div>
        <div id='brand_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03.jpg" />
            </div>
            <section>
                Brand identity
            </section>


            <p>
                Brand is the personality of your 
                product as perceived by your consumer. 
                Ergo, brand identity comprises the elements 
                that speaks for the ‘personality’ and ‘express’ it 
                for the consumer. Brand identity services are crucial 
                for any business to build the right kind of
                perceptions in the consumers’ mind.
                It is one of the focal points of positioning 
                in the overall product strategy planning.
                Our Brand Identity services include:
            </p>
            <section>Strategic planning</section>
            <p>
                Strategy gives you direction and for strategic planning, answering these questions requires expertise, professional experience and foresight. D-tech provides a platform more like a one stop shop, where we take care of all your worries and handle everything related to your brand identity needs with utmost care.
            </p>
            <article>Logo design</article>
            <article>Banner design</article>
            <article>Business card design</article>
            <article>Stationery design</article>
            <article>Interfaces</article>


        </div>
    </div>

</body>
</body>
</html>