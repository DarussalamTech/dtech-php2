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


        <title>D-Tech</title>

        <script type="text/javascript">
            jQuery(document).ready(function() {

                jQuery("#coin").coinslider(
                        {
                            width: 470, delay: 5000, height: 215,
                            effect: 'rain'
                        }
                );

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
    </head>

    <body>
        <div id="banner">
            <div class="banner_part">
                <div class="logo">
                    <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/logo_02.jpg" /></a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="#main_about_us" onclick="dtech.scrolltoSection('main_about_us')">About Us</a></li>
                        <li><a href="javascript:void(0)">-</a></li>
                        <li><a href="#our_work" onclick="dtech.scrolltoSection('our_work')">How do we Work</a></li>
                        <li><a href="javascript:void(0)">-</a></li>
                        <li><a href="#services" onclick="dtech.scrolltoSection('services')">Services</a></li>
                        <li><a href="javascript:void(0)" onclick="">-</a></li>
                        <li><a href="#contact_us" onclick="dtech.scrolltoSection('contact_us')">Contact us</a></li>
                    </ul>
                </div>
                <div class="main_banner">

                    <div class="middle_banner" id="coin">


                        <a href="<?php echo Yii::app()->baseUrl; ?>/frontend/images/high_values_img_03_url" target="_blank">
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/high_values_img_03.jpg" />
                     
                        </a>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/frontend/images/team2_url" target="_blank">
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/team2.jpg" />
                     
                        </a>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/frontend/images/team1_url" target="_blank">
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/team1.jpg" />
                     
                        </a>
                    
              

      
                    </div>

                    <div class="social_media">
                        <a href="javascript:void(0)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_tweeter_03.png" /></a>
                        <a href="http://facebook.com/dtech.co" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_facebook_03.png" /></a>
                        <a href="javascript:void(0)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_linkedin_03.png" /></a>
                    </div>
                </div>

            </div>
        </div>

        <div id="main_about_us">
            <div id="about_us">
                <div class="back_to_up">
                    <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
                </div>
                <div class="about_us_content">
                    <h1>About<span>Us</span></h1>
                    <p>
                        The twenty-first century is a century of technical advancements. D-tech uses cutting edge technology and ongoing training and development to stay up to date with the latest advancements in technology and market trends. We believe in novelty and innovation. Our approach is unorthodox and that is what gives us our competitive edge. Providing a free consultation and one-week trial are some of the options that we offer to our worthy clients to ensure that they are fully satisfied. It’s a “been there, done that” scenario. We know how it works. Let us take care of all your worries while you sit back and relax. More significantly, we say we are done only when we are satisfied with our work. We guarantee quality results every time.
                    </p>
                    <p>
                        With dynamic leadership skills, a novel approach and an inexhaustible drive to deliver the best, our management makes a strong team that can be relied upon. We take pride in our highly competent, well qualified personnel who have a history of success in their respective fields of expertise.
                    </p>
                    <p>
                        We have vast experience in reference to business development, market research, project management, brand management, marketing management, strategic marketing, product development, financial research, financial analysis, and much more.
                        The D-tech team comprises of professionals who are highly skilled in a wide variety of fields. Our software development wing holds expertise in:
                        PHP (Yii, zend, codeigniter, cake php, core php, Wordpress, Joomla, sugar crm), Javascript (Jquery, protype js, angular js), Python (django), JAVA, .NET (asp.net, c#, vb.net). 
                        Our mobile application and game development wing comprises of both iOS and Android development teams. The iOS application and game development team specializes in: Cocoa Touch, Cocos2d-x, Unity 3d and Engine.
                    </p>
                </div>
            </div>
        </div>
        <div id="our_work">
            <div class="main_work">
                <div class="back_to_up">
                    <a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
                </div>
                <div class="left_work">
                    <h1>Our</h1>
                    <h2>Work</h2>
                    <h3>Methodology</h3>
                    <p>
                        Using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. We report to our clients on a daily basis, thus ensuring that our clients are always up to date on the progress of their project. Detailed conversations with our clients helps us to develop a functionality plan and Acceptance Test Criteria (ATC) at the start of any project. Once the initial requirements are set and we are good to go, clients can choose to assign a project manager from their company to liaise with us or they can deal with us directly themselves.    
                    </p>
                    <p>
                        Once the requirements are completed a sprint document is shared with the client. The sprint document shows how many hours each resource will work on the project and the project delivery date. 
                    </p>
                    <p>
                        The project manager liaising with us will receive daily updates via email or on the phone about their project. 
                    </p>
                    <p>
                        Requirements – design – development – release – feedback review – yes (deploy) no (redefine requirement).
                    </p>
                </div>
                <div class="right_work">
                    <div class="big_circle">
                        <div class="cirlce_upper_part">
                            <a href="javascript:void()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/tab_like_img_03.png" /></a>
                            <p>Requirements</p>
                        </div>
                        <div class="cirlce_left_part">
                            <a href="javascript:void()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/releasing_img_03.png" /></a>
                            <p>Release</p>
                        </div>
                        <div class="cirlce_right_part">
                            <a href="javascript:void()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_big_img_03.png" /></a>
                            <p>Design</p>
                        </div>
                        <div class="cirlce_bottom_part">
                            <p>Development</p>
                            <a href="javascript:void()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/keyboard_img_03.png" /></a>
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
                        <h1>Our</h1>
                        <h2>Services</h2>
                        <p>using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work. we report on daily basis so taht our client knows what has been the progress of the project.</p>
                        <p>
                            We are result-oriented. We know how it works. Let us help deal with your worries while you sit back and relax. More significantly, we say we are done, only when you are satisfied with our work. We guarantee quality results every time.
                        </p>
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



            <section>Web Bases Social Networking Setups</section>
            <p>
                We provide open source and custom based social networking setups like Facebook and other social apps. We have expertise in also handling open source plugins for social networks under Wordpress or developing apps according to our own custom platform.
            </p>
            <section>Web Based CRM's</section>
            <p>
                Our CRM team has complete command over the Sugar framework and SOAP architecture; allowing us to build extensive custom products on top of SugarCRM, along with confidently mapping their unique business process requirements onto SugarCRM via customizations and integrations.
            </p>
            <section>Web Based CMS</section>
            <p>
                We simplify website management in order to allow business owners and non-technical personnel to update their web content on the fly with multilingual support. Our customized Content Management System (CMS) puts messaging in the hands of the people who know it best in regards to workflows, approvals, and permissions. In addition to maintaining a complete history of any changes made. Editing content is as easy as editing a document with our CMS integration. Wordpress and Joomla are our expertise.
            </p>
            <section>Web Based Business Applications</section>
            <p>
                We simplify the management of developing business applications according to the requirements of our clientele, for example in regards to: sales, orders, purchases and project management systems. Our system will provide all the features such as data storing, reporting, emailing and access control security.
            </p>
            <section>Web Based Business Accounting</section>
            <p>
                We also provide business accounting web development solutions and provide services to synchronize a company’s software with other accounting systems using web services like xero integration.
            </p>
            <section>Ecommerce Development</section>
            <p>We provide the simplest ecommerce solutions; we have the expertise of custom based ecommerce development as well as providing other open source platforms like Wordpress ecommerce plugins, Open Cart and Magento.</p>

            <section>Facebook applications</section>
            <p>We are able to convert any application into a Facebook application. We have expertise in handling small or larger (business) apps on Facebook, with features such as automatically posting on walls, sharing options and in following the Facebook Application Program Interface (API).</p>
        </div>

        <div id='pad_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.jpg" />
            </div>
            <section style="text-align:center;">
                iOS &AMP; Android Applications and Game Development
            </section>

            <p>
                The spiking prevalence of smartphones and tablets usage has led to a new marketing tool within the sphere of the digital world: mobile applications. D-tech has extensive experience in mobile applications and games development for both iOS and Android.
            </p>
        </div>
        <div id='design_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.jpg" />
            </div>

            <section>Website Designing</section>
            <p>Your website is your presence on the web and your online presence is often your first interaction with potential customers. We at D-tech thoroughly plan and implement tailored designs to meet your particular needs and depict your brand identity in the perfect fashion. We take the utmost care in web designing for you. We bring innovation, originality and creativity at your doorstep within the purview of your organizational goals and brand strategy.</p>
            <section> Slicing services</section>
            <p> Our html CSS coders have awesome expertise in handling browser compatibility and responsive design. We work with html 5, CSS 3.0, web 2.0 standards to handle all html requirements.</p>
            <section>Digitization of Books</section>
            <p>
                We provide superior quality digitization of books on all major platforms such as iBooks, Amazon Kindle Store, Nooks etc. 

            </p>
        </div>
        <div id='brand_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03.jpg" />
            </div>

            <section>
                Brand Identity
            </section>
            <p>
                The brand is the personality of your product as perceived by your consumer. Therefore, brand identity comprises the elements that speaks for the ‘personality’ and ‘expresses’ it for the consumer. Brand identity services are crucial for any business to build the right kind of perception in the consumers’ mind. It is one of the focal points of positioning in the overall product strategy planning.
            </p>
            <p>Our Brand Identity services include:</p>
            <section>Strategic planning</section>
            <p>
                Strategy gives you direction and strategic planning; answering these questions requires expertise, professional experience and foresight. D-tech provides a platform more like a one stop shop, where we take care of all your worries and handle everything related to your brand identity needs with the utmost care.
            </p>
            <article>Internet Marketing, Website Marketing, SEO & Social Media Marketing</article>
            <p>
                We provide a free consultation to all our clients to help build a better working relationship. It also gives clients an opportunity to see the work being done here at D-tech.
            </p>
            <p>
                We provide full-fledged services for web marketing, search engine optimization (SEO) and Social Media Marketing (SMM).
            </p>
            <p>
                Advertising and marketing efforts using web and email require the right kind of expertise to correctly target the potential customer base. These efforts must be customized to address the marketing strategy and goals set for the world wide web.
            </p>
            <article class="noline">Logo design</article>
            <article class="noline">Banner design</article>
            <article class="noline">Business card design</article>
            <article class="noline">Stationery design</article>
            <article>Interfaces</article>
            <p>
                The logo, banner, business cards, stationery and interfaces are all outward expressions of your brand. You have to brand these to get noticed by the customer, and to effectively communicate and relate with the customer.
                Brand identity is crucial at any setup, be it commercial or non-commercial. Therefore, you need to have it all planned so that the direction of the advertising and marketing efforts can be truly and accurately defined for all the stakeholders. Moreover, a well-planned strategy will precisely define the brand identity of the brand (and company) in the customer’s mind.
            </p>


        </div>
    </div>

</body>
</body>
</html>